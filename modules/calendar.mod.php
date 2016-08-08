<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: calendar.mod.php,v 1.27 2003/08/18 19:14:47 cvs_iezzi Exp $

    calendar.mod.php
	credits to: Jean-Pierre DEZELUS <jpdezelus@phpinfo.net>
                LES VISITEURS from www.phpinfo.net
    --------------------------------------------------------- */

/*
 * This function will be called, if there are no calendar rows around
 * for the current user. (e.g. after calling 'clean-up calendar')
 */
function reload_calendar($uniq_type = 'log_day_mo') {
	
	global $date_start;
	global $curr_gmt_time,$curr_usr_time;
	
	$Year  = (int) date("Y",GMTtoUser($date_start));
	$Month = (int) date("n",GMTtoUser($date_start));
	
	while (mktime(0,0,0,$Month,1,$Year) < $curr_usr_time) {
		create_vis_per_month($Year,$Month,$uniq_type);
		$Month = ($Month == 12) ? 1         : $Month + 1;
		$Year  = ($Month ==  1) ? $Year + 1 : $Year;
	}
}

/*
 * reloads the vis-per-hour cache
 */
function reload_visperhour($hour_mode = 'log_hour_month', $yyyymm = 0) {
	global $connected;
	global $tbl_logs,$curr_gmt_time,$curr_usr_time,$gmt, $id;
	
	if ($hour_mode == 'log_hour_month') {
		$sql2 = "WHERE time ".sql_UserMonthToGMT($yyyymm);
	} else if ($hour_mode == 'log_hour_today') {
		$today = UserToGMT(mktime(0,0,0,date('m',$curr_usr_time),date('d',$curr_usr_time),date('Y',$curr_usr_time)));
		$sql2 = "WHERE time > $today ";
	} else {
		$sql2 = '';
	}
	
	$arrHour = Array();
	$sql = "SELECT FROM_UNIXTIME(time+(3600*$gmt), '%H') AS hour, "
	     . "COUNT(*) AS hits "
		 . "FROM $tbl_logs "
		 . $sql2
		 . "GROUP BY hour";
	$res = mysqli_query($connected,$sql);
	while ($row = mysqli_fetch_array($res)) {
		$hour_index = (int) $row['hour'];
		$arrHour[$hour_index] = $row['hits'];
	}
	if ($hour_mode == 'log_hour_month')
		if($yyyymm == 0) $yyyymm = date('Y',$curr_usr_time).date('m',$curr_usr_time);
	putSerializedCache($hour_mode, $arrHour, $id, $yyyymm);
}

/*
 * in case we got already a couple of calculated months, just calculate
 * the most recent ones. If a month is half-calculated we're going to calculate
 * all days till today. The current day will always get updated.
 */
function update_calendar($uniq_type = 'log_day_mo') {
	
	global $tbl_logs,$id,$connected;
	global $curr_gmt_time,$curr_usr_time;
	
	$finished = false;
	
	/* get the last calculated month from the cache table
	 * yyyymm is the month in the user's timezone
	 * time   is the GMT Unix-timestamp when the cache row was written
	 */
	$sql = "SELECT yyyymm,cache,time FROM ".PPHL_TBL_CACHE." WHERE id=$id AND type='$uniq_type' "
	     . "ORDER BY yyyymm DESC";
	$res       = mysqli_query($connected,$sql);
	$yyyymm    = mysqli_result($res,0,'yyyymm');
	$cache     = mysqli_result($res,0,'cache');
	$timestamp = mysqli_result($res,0,'time');
	
	$tstamp_usr   = GMTtoUser($timestamp);
	$timestamp_ym = (int) date('Ym',$tstamp_usr);
	$timestamp_y  = (int) date('Y', $tstamp_usr);
	$timestamp_m  = (int) date('n', $tstamp_usr);
	$timestamp_d  = (int) date('j', $tstamp_usr);
	
	$today   = date('Ymd', $curr_usr_time);
	$today_ym = date('Ym', $curr_usr_time);
	
	if ($timestamp_ym == $yyyymm) {
		$cache_arr = unserialize($cache);
		if(!$cache_arr) exit;
		for ($j = $timestamp_d; ($j <= 31) && !$finished; $j++) {
			if (checkdate($timestamp_m, $j, $timestamp_y)) {
				$gmt_day = UserToGMT(mktime(0,0,0,$timestamp_m,$j,$timestamp_y));
				
				if ($uniq_type == 'log_day_mo') $uniq_sql = 'COUNT(mp)';
				else                            $uniq_sql = 'SUM(mp)';
				$sql = "SELECT $uniq_sql AS D FROM $tbl_logs WHERE time BETWEEN $gmt_day AND ($gmt_day+86400)";
				$res = mysqli_query($connected,$sql);
				$cache_arr[$j-1] = mysqli_result($res,0,0);
				if (date('Ymd',GMTtoUser($gmt_day)) >= $today) $finished = true;
			}
		}
		putSerializedCache($uniq_type, $cache_arr, $id, $yyyymm);
	}
	/* in case the most recent calculated month was not stored during its year/month,
	 * - let's say, the script got broken by max_execution_time - 
	 * or in case of a change of month
	 * we calculate all following months till today!
	 */
	if ($timestamp_ym != $yyyymm || $timestamp_ym != $today_ym) {
		$yyyy = substr($yyyymm,0,4);
		$mm   = substr($yyyymm,4,2);
		
		// create all months up to the current
		while((($yyyy*100)+$mm) < $today_ym) {
			$mm   = ($mm == 12) ? 1         : $mm + 1;
			$yyyy = ($mm ==  1) ? $yyyy + 1 : $yyyy;
			create_vis_per_month($yyyy,$mm,$uniq_type);
		}
	}
}


/* displaying the calendar
 * this function will display the whole calendar.
 * If the limit of months to display was set in the user's settings, then
 * we're only going to display those last months.
 */
function show_calendar($uniq_type = 'log_day_mo') {
	global $tbl_logs,$id,$date_start,$calendar_months,$curr_gmt_time;
	global $strVisPerDay,$strLast,$strMonths,$strMonth,$strAverageAbbr,$strTotal;
	global $str_arrMonthsAbbr,$cache_calendar;
	global $inc_delcalendar,$guest,$strThousandSep;
	global $usr_view, $connected;
	
	/*
	 * calculate the first months from which the calendar should start to show up
	 */
	$show_start_yyyymm = date("Ym",strtotime("-$calendar_months month",$curr_gmt_time));
	
	$sql = "SELECT yyyymm,cache FROM ".PPHL_TBL_CACHE." WHERE id=$id AND type='$uniq_type'"
	     . " AND yyyymm > $show_start_yyyymm"
	     . " ORDER BY yyyymm";
	$res = mysqli_query($connected,$sql);
	
	// create header of calendar
	$buffer = "<div align=\"center\"><table cellspacing=\"1\" border=\"0\">\n";
	$buffer .= "<tr><td class=\"vis\" colspan=\"34\">";
	$buffer .= $strVisPerDay." - ".$strLast." ".mysqli_num_rows($res)." ".$strMonths;
	$buffer .= "</td></tr>\n";
	$buffer .= "<tr><th class=\"vis\">".$strMonth."</th>";
	for ($cpt = 1; $cpt <= 31; $cpt++)
		$buffer .= "<th class=\"vis\">" . (($cpt < 10) ? "0".$cpt : $cpt) . "</th>";
	$buffer .= "<th class=\"vis\">".$strAverageAbbr."</th>\n";
	$buffer .= "<th class=\"vis\">".$strTotal."</th></tr>\n";
	
	$big_cnt_values = 0;
	$big_total  = 0;
	
	while ($row = mysqli_fetch_array($res)) {
		$cache = unserialize($row['cache']);
		if(!$cache) exit;
		$Year  = substr($row['yyyymm'], 0, 4);
		$Month = substr($row['yyyymm'], 4, 2);
		
		// separation between 2 years
		if (isset($prev_year) && $Year != $prev_year) {
			$buffer .= "<tr><th class=\"color1\" colspan=\"34\" height=\"1\">";
			$buffer .= html_image("clear.gif");
			$buffer .= "</th></tr>\n";
		}
		$prev_year = $Year;
		
		// Jan, Feb, Mar, ...
		$buffer .= "<tr>\n";
		$buffer .= "<td class=\"color3\">&nbsp;<a class=\"color3\" href=\"$usr_view[3]?yyyymm=$Year$Month\">" . $str_arrMonthsAbbr[intval($Month)] . "</a>&nbsp;</td>\n";
		
		$total = 0;      // total logs
		$cnt_values = 0;
		$cnt_cache = count($cache);
		
		for ($j = 0; $j < 31; $j++) {
			if ($j < $cnt_cache) {
				$day = date("D", mktime(12,0,0,$Month, $j+1, $Year));
				$td_color = (($day == "Sat") || ($day == "Sun")) ? "ref" : "color2";
				$buffer .= "<td class=\"$td_color\" align=\"center\">";
				// values for logs-by-day in dspLogs.php	    
				$from_y = $Year; $from_m = $Month; $from_d = $j+1;
				$to_y = $from_y; $to_m = $from_m; $to_d = $from_d;
				$val = $cache[$j];
				$buffer .= ($val == 0) ? "&nbsp;" : "<a href=\"".INC_COOKIES."?action=datevisits&from_y=$from_y&from_m=$from_m&from_d=$from_d&to_y=$from_y&to_m=$from_m&to_d=$from_d\">$val</a>";
				
				if ($val > 0) $cnt_values++;
				$total += $val;
			} else { // non-existing days
				$buffer .= "<td class=\"noday\" align=\"right\">&nbsp;";
			}
			$buffer .= "</td>\n";
		}
		
		if ($cnt_values > 0) {
			$big_cnt_values += $cnt_values;
			$big_total      += $total;
		}
		
		$buffer .= "<td class=\"color3\" ALIGN=\"right\" nowrap=\"nowrap\">&nbsp;".($cnt_values == 0 ? '' : number_format(round($total/$cnt_values), 0, '', $strThousandSep))."&nbsp;</td>\n";
		$buffer .= "<td class=\"color3\" ALIGN=\"right\" nowrap=\"nowrap\">&nbsp;".(($total == 0) ? "&nbsp;" : number_format($total, 0, '',$strThousandSep))."&nbsp;</td></tr>\n";
	}
	
	$buffer .= "<tr><th colspan=\"32\">";
	$buffer .= html_image("clear.gif");
	$buffer .= "</th><th class=\"color1\" colspan=\"2\" height=\"1\">";
	$buffer .= html_image("clear.gif");
	$buffer .= "</th></tr>\n";
	
	$limittime = round($cache_calendar/3600);
	
	$buffer .= "<tr><td class=\"vislight\" colspan=\"32\" valign=\"bottom\" align=\"right\">";
//	if ($timestamp) {
//		$buffer .= "[cache: ".$limittime."h] [upd: ".$timestamp."]&nbsp;&nbsp;";
//	} else {
		$buffer .= ($guest) ? "&nbsp;" : "<a class=\"invertLink2\" href=\"$usr_view[3]?action=cleanup&id=$id&uniq_type=$uniq_type\">[ clean-up ]</a>&nbsp;";
//	}
	$buffer .= "</td>";
	$buffer .= "<td class=\"color3\" align=\"right\" nowrap=\"nowrap\">&nbsp;".($big_cnt_values == 0 ? '' : number_format(round($big_total/$big_cnt_values), 0, '', $strThousandSep))."&nbsp;</td>\n";
	$buffer .= "<td class=\"color3\" align=\"right\" nowrap=\"nowrap\">&nbsp;".($big_total      == 0 ? '' : number_format($big_total, 0, '', $strThousandSep))."&nbsp;</td></tr>\n";
	
	$buffer .= "</table></div>\n";
	
	return $buffer;
}
?>