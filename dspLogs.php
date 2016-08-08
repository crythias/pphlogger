<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dspLogs.php,v 1.29 2003/08/18 19:10:02 cvs_iezzi Exp $

    dspLogs.php VIEW1 - shows users logs
    --------------------------------------------------------- */
include "main_location.inc";
include INC_GETUSERDATA;

/* deleting multiple log-entries */
if (isset($enable_del) && !$guest) {
	if (!empty($selected_tbl)) {
		$selected_cnt = count($selected_tbl);
		// builds the query
		$qry_in = '(';
		for ($i = 0; $i < $selected_cnt; $i++) {
			$qry_in .= ($i == 0) ? '' : ',';
			$qry_in .= $selected_tbl[$i];
			// removes the user's own cookie if he's deleting his own log-entry
			if (isset($$cookie_same) && ($selected_tbl[$i] == $$cookie_same)) setcookie($cookie_same, "", time() - 3600);
		}
		$qry_in .= ')';
		$sql = "DELETE FROM ".$tbl_logs." WHERE logid IN $qry_in";
		$res = mysqli_query($connected,$sql);
		$affected_rows = mysql_affected_rows();
		if ($affected_rows) {
			$sql = "UPDATE ".PPHL_TBL_USERS." SET hits = hits-$affected_rows WHERE id = $id";
			$res = mysqli_query($connected,$sql);
			$hits = $hits-$affected_rows;
		}
	}
}


$view = 'logs';
include INC_HEAD;

/* confirm account when user logs in the first time: */
if (!$conf && !isset($admin_rulez)) {
	$sql = "UPDATE ".PPHL_TBL_USERS." SET conf = 1 WHERE id = $id";
	$res = mysqli_query($connected,$sql);
}

/* update last_access: */
if (!isset($admin_rulez) || $admin) {
	$sql = "UPDATE ".PPHL_TBL_USERS." SET last_access = $curr_gmt_time WHERE id = $id";
	$res = mysqli_query($connected,$sql);
}

/* total amount of logs in users table */
$logtotal = get_totalrows('tbl_logs');

if (isset($myloglim)) $loglim = $myloglim;
if (isset($logs_from)) $loglim = '';

/* get the multi-page arrays */
$mpArr = getMpArr();

/* delete old logs */
include INC_DELLOGS;
$LOGSCLEANUP = new LogsCleanUp();
$LOGSCLEANUP->execute();
?>

<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr><td>
	[&nbsp;<?php echo $strShowLogs; ?> 
	<a <?php echo ($loglim == "20") ? "class=\"invertUsc\" " : "class=\"invertLink\" "; ?>href="<?php echo INC_COOKIES; ?>?new_loglim=20">20</a>&nbsp;|&nbsp;
	<a <?php echo ($loglim == "50") ? "class=\"invertUsc\" " : "class=\"invertLink\" "; ?>href="<?php echo INC_COOKIES; ?>?new_loglim=50">50</a>&nbsp;|&nbsp;
	<a <?php echo ($loglim == "100") ? "class=\"invertUsc\" " : "class=\"invertLink\" "; ?>href="<?php echo INC_COOKIES; ?>?new_loglim=100">100</a>&nbsp;|&nbsp;
	<a <?php echo ($loglim == "200") ? "class=\"invertUsc\" " : "class=\"invertLink\" "; ?>href="<?php echo INC_COOKIES; ?>?new_loglim=200">200</a>&nbsp;|&nbsp;
	<a <?php echo ($loglim == "500") ? "class=\"invertUsc\" " : "class=\"invertLink\" "; ?>href="<?php echo INC_COOKIES; ?>?new_loglim=500">500</a>&nbsp;|&nbsp;
	<a <?php echo ($loglim == "1000") ? "class=\"invertUsc\" " : "class=\"invertLink\" "; ?>href="<?php echo INC_COOKIES; ?>?new_loglim=1000">1000</a>&nbsp;]
	<?php if ($loglim == '') echo "&nbsp;&nbsp;<a class=\"invertLink\">&lt;&lt;&lt;&lt;&lt;</a>"; ?>
	<br /><br />
	[&nbsp;
<?php
	$showref_txt = (isset($showref)) ? $strTurnShowref.'&nbsp;'.$strOff : $strTurnShowref.'&nbsp;'.$strOn; ?>
	<a class="invertLink" href="<?php echo INC_COOKIES; ?>?showref_onoff=1"><?php echo $showref_txt;?></a>&nbsp;]&nbsp;
	[&nbsp;
<?php
	$fullagt_txt = (isset($full_agt)) ? $strFullAgt.'&nbsp;'.$strOff : $strFullAgt.'&nbsp;'.$strOn; ?>
	<a class="invertLink" href="<?php echo INC_COOKIES; ?>?fullagt_onoff=1"><?php echo $fullagt_txt;?></a>&nbsp;]&nbsp;
	[&nbsp;
<?php
	$path_txt = (isset($hide_path)) ? 'visitor paths &nbsp;'.$strOn : 'visitor paths &nbsp;'.$strOff; ?>
	<a class="invertLink" href="<?php echo INC_COOKIES; ?>?path_onoff=1"><?php echo $path_txt;?></a>&nbsp;]&nbsp;
	[&nbsp;
<?php
	$titles_txt = (isset($titles_on)) ? 'mp titles &nbsp;'.$strOff : 'mp titles &nbsp;'.$strOn; ?>
	<a class="invertLink" href="<?php echo INC_COOKIES; ?>?titles_onoff=1"><?php echo $titles_txt;?></a>&nbsp;]
<?php
if ($guest) {
	echo "&nbsp;&nbsp;&nbsp;<a class=\"invertLink\">".$strDemoMode."</a>";
}
if (isset($enable_del) && isset($del_log) && $guest) {
	echo "<br /><br /><a class=\"invertLink\">".$strGuestMsg1."</a>";
}
if (!isset($enable_del) && isset($del_log)) {
	echo "<br /><br /><a class=\"invertLink\">".$strGuestMsg2."</a>";
}


if (isset($logs_from)) $from_date = $logs_from;
else $from_date = $curr_usr_time;
$from_y = date('Y',$from_date);
$from_m = date('m',$from_date);
$from_d = date('d',$from_date);

if (isset($logs_to)) $to_date = $logs_to;
else $to_date = $curr_usr_time;
$to_y = date('Y',$to_date);
$to_m = date('m',$to_date);
$to_d = date('d',$to_date);

?>
</td>
<td align="right" valign="top">
<p>
<form action="<?php echo INC_COOKIES; ?>" method="post">
<input type="hidden" name="action" value="datevisits" />
<?php echo $strFrom; ?>: 
<input type="text" class="myInput" name="from_y" value="<?php echo $from_y; ?>" size="4" maxlength="4" />
<input type="text" class="myInput" name="from_m" value="<?php echo $from_m; ?>" size="2" maxlength="2" />
<input type="text" class="myInput" name="from_d" value="<?php echo $from_d; ?>" size="2" maxlength="2" />
<br /><?php echo $strTo; ?>: 
<input type="text" class="myInput" name="to_y" value="<?php echo $to_y; ?>" size="4" maxlength="4" />
<input type="text" class="myInput" name="to_m" value="<?php echo $to_m; ?>" size="2" maxlength="2" />
<input type="text" class="myInput" name="to_d" value="<?php echo $to_d; ?>" size="2" maxlength="2" />
<br />
<input type="submit" class="myInput" value=" <?php echo $strViewLogs; ?> " />
</form>
</p>
</td></tr></table>
<?php
	if (!isset($sql_sear)) $sql_sear = '';

	$sql = "SELECT *,"  // ,DATE_FORMAT(time,'%b %d, %T') AS newdate,
	     . "TIME_FORMAT(SEC_TO_TIME(online),'%k:%i:%s') AS otime, "
	     . "CONCAT(res_w,'x',res_h) AS res "
	     . "FROM $tbl_logs AS L, ".PPHL_TBL_AGENTS." AS A "
	     . "WHERE agentid = A.id ";

	if (isset($logs_from)) {
		$loglim = '';
		$sql.= "AND time > ".UserToGMT($logs_from)." AND time < (".UserToGMT($logs_to)."+86400) ";
	}
	else if (isset($byip)) {
		$loglim = '';
		$sql.= "AND ip = '".$byip."' ";
	}
	else if (isset($search_logs)) {
		include LIB_SEARFUNC;
		$sql_sear = logSearch();
		$sql.= $sql_sear;
	}
	$sql.= "ORDER BY logid DESC ";
	if ($sql_sear == '' && $loglim) {
		$sql .= (isset($offset)) ? "LIMIT ".$offset.",".$loglim : "LIMIT ".$loglim;
	}
	
	$res = mysqli_query($connected,$sql);
	// show the whole log-list:
	include INC_LOGLIST;


?>

<p>&nbsp;</p>
<form action="<?php echo $PHP_SELF; ?>" method="post">
<input type="hidden" name="xsear" value="true" />
<table cellpadding="2" cellspacing="0" class="color2" border="0" align="center">
   <tr>
    <td><?php echo $strHostIP; ?></td>
    <td><?php echo $strReferrer; ?></td>
    <td><?php echo $strAgent; ?></td>
    <td align="center"><?php echo $strRes; ?></td>
	<td align="center"><?php echo $strColor; ?></td>
	<td><?php echo $strOnline; ?> [s]</td>
	<td>mp</td>
	<td>&nbsp;</td>
   </tr>
   <tr>
		<td><input class="myInput" type="text" name="S_hostname"<?php if (isset($S_hostname)) echo " value=\"$S_hostname\""; ?> /></td>
		<td><input class="myInput" type="text" name="S_referer"<?php if (isset($S_referer)) echo " value=\"$S_referer\""; ?> /></td>
		<td><input class="myInput" type="text" name="S_agent"<?php if (isset($S_agent)) echo " value=\"$S_agent\""; ?> /></td>
		<td><input class="myInput" type="text" name="S_res" size="4"<?php if (isset($S_res)) echo " value=\"$S_res\""; ?> /></td>
		<td><input class="myInput" type="text" name="S_color" size="4"<?php if (isset($S_color)) echo " value=\"$S_color\""; ?> /></td>
		<td>
			<select class="myInput" name="S_online_x">
				<option value="&lt;">&lt;</option>
				<option value="=">=</option>
				<option value="&gt;" selected="selected">&gt;</option>
			</select>
			<input class="myInput" type="text" name="S_online" size="4"<?php if (isset($S_online)) echo " value=\"$S_online\""; ?> />
		</td>
		<td>
			<select class="myInput" name="S_mp_x">
				<option value="&lt;">&lt;</option>
				<option value="=">=</option>
				<option value="&gt;" selected="selected">&gt;</option>
			</select>
			<input class="myInput" type="text" name="S_mp" size="4"<?php if (isset($S_mp)) echo " value=\"$S_mp\""; ?> />
		</td>
		<td><input class="myInput" type="submit" value="search" name="search_logs" /></td>
   </tr>
</table>
</form>

<p>&nbsp;</p>
  
<?php
	$sql = "SELECT TIME_FORMAT(SEC_TO_TIME(AVG(online)),'%k:%i:%s'), ROUND(AVG(mp),2) FROM ".$tbl_logs;
	$res = mysqli_query($connected,$sql);
	$online_avg = mysqli_result($res,0,0);
	$mp_avg = mysqli_result($res,0,1);
	
	$sql = "SELECT TIME_FORMAT(SEC_TO_TIME(AVG(online)),'%k:%i:%s'), ROUND(AVG(mp),2) FROM ".$tbl_logs." WHERE time > ($curr_gmt_time-(30*24*60*30))";
	$res = mysqli_query($connected,$sql);
	$online_mo = mysqli_result($res,0,0);
	$mp_mo = mysqli_result($res,0,1);
?>

  <table cellpadding="3" cellspacing="0" class="color2" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
	<td><?php echo $strTotal; ?></td>
	<td><?php echo $strLast.' 30 '.$strDays ?></td>
  </tr>
  <tr>
    <td><?php echo $strAverage.' '.$strOnline.': '; ?></td>
	<td align="right"><a><?php echo $online_avg; ?></a></td>
	<td align="right"><a><?php echo $online_mo; ?></a></td>
  </tr>
  <tr>
    <td><?php echo $strAverage.' mp: '; ?></td>
	<td align="right"><a><?php echo $mp_avg; ?></a></td>
	<td align="right"><a><?php echo $mp_mo; ?></a></td>
  </tr>
  </table>

  
<p align="right">
	[&nbsp;<a class="invertLink" href="#topofpage"><?php echo $strTopOfPage; ?></a>&nbsp;]
</p>

<table cellpadding="10" cellspacing="0" class="color2" border="0" align="center">
<tr>
<?php
	$sql = "SELECT count(*) FROM $tbl_mpdl WHERE type='mp' AND enabled";
	$res = mysqli_query($connected,$sql);
	$mp_cnt = mysqli_result($res,0,0);
	$num = ($mp_cnt > $mpfront_lim) ? $mpfront_lim : $mp_cnt;
	
	if (!is_int($num/3)) $num_per_col = ceil($num/3);
	else $num_per_col = $num/3;
	for ($m = 1; $mp_cnt >= $m && $mpfront_lim >= $m; $m++) {
		$gif_name = get_gif_name($m);
		$mp_url = shortString($mpArr[$m]['url'],37,3);
		if ($m == 1) echo "<td nowrap=\"nowrap\" valign=\"top\">\n";
		if (($m == $num_per_col+1) || ($m == 2*$num_per_col+1)) echo "</td>\n<td nowrap=\"nowrap\" valign=\"top\">\n";
		if ($m<10) echo "0";
		echo "$m. <a href=\"$primary_url$mp_url\">";
		echo "<img src=\"$gif_name\" alt=\"$m\" border=\"0\" width=\"12\" height=\"16\" />";
		echo " $mp_url</a> (".$mpArr[$m]['hits'].")<br />\n";
	}
?>
</td></tr>
</table>

<?php
include INC_FOOT;
?>