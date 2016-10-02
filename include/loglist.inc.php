<?php
// $Id: loglist.inc.php,v 1.31 2002/08/20 15:13:03 cvs_iezzi Exp $

/* get the array of current online users */
$onlUsers = get_online_users();


/* calculate the colspan size */
$log_colspan = 6;
if ($extended)          $log_colspan += 2;
if (isset($enable_del) && !$guest) $log_colspan += 1;



if (!isset($xsear)) $xsear = false;


if (isset($enable_del) && !$guest) {
	echo "<form method=\"post\" action=\"".$usr_view[1]."\" name=\"tablesForm\">";
}
?>

<table cellpadding="2" cellspacing="0" border="0" align="center">
   <tr>
    <td class="color3"><b><?php echo $strHostIP; ?></b></td>
    <td class="color3" nowrap="nowrap"><b><?php echo $strReferrer; ?></b></td>
    <td class="color3"><b><?php echo $strAgent; ?></b></td>
    <?php if ($extended) echo "<td class=\"color3\"><b>".$strRes." </b></td>\n<td class=\"color3\"><b>".$strColor."</b></td>\n"; ?>
	<td class="color3" nowrap="nowrap"><b><?php echo $strTimestamp; ?></b></td>
	<td class="color3"><b><?php echo $strOnline; ?></b></td>
	<td class="color3" align="center"><b>mp</b></td>
	<?php if (isset($enable_del) && !$guest) echo "<td class=\"color3\">del</td>"; ?>
   </tr>
<?php
$arr_engines = load_engines();

	while ($row = @mysqli_fetch_array($res)) {
		$ip = $row['ip'];
		$hostname = $row['hostname'];
		if ($hostname == '') $hostname = $ip;
		if ($hostname != $ip) $srv = "&nbsp;[<a href=\"http://".extract_server($hostname)."/\" class=\"ref\" target=\"_blank\">Srv</a>]&nbsp;";
		else $srv = '';
		$entryid = $row['entryid'];

		$page_no  = get_page_no($entryid);
		$gif_name = get_gif_name($page_no);

		if ($row['referer'] == '') $referer = '<i> '.$strUnknown.' </i>';
		else $referer = "<a href=\"".htmlspecialchars(stripslashes($row["referer"]))."\" target=\"_blank\"> REFERRED! </a>";
		if ($row['agent'] == '') $agent = '<i> agent </i>';
		else $agent = stripslashes(htmlentities($row['agent']));
		if (isset($row['browser']) && trim($row['browser']) > '' && !isset($full_agt)) {
			$browser_str = (@$arr_brows[$row['browser']]) ? $arr_brows[$row['browser']] : $row['browser'];
			$agent = $browser_str.' '.formatBrowsver($row['version']).'; '.$row['system'];
		}
		$logtime = date("M d, H:i:s",GMTtoUser($row['time']));
		$logid = $row['logid'];
		$resolution = $row['res'];
		$colors = $row['color'];
		$online = $row['otime'];
		$views = $row['mp'];
		
		if ($views*$width_factor > $width_max) $mp_width = $width_max;
		else $mp_width = $views*$width_factor;
		
		$alt  = "[entrypoint  #$page_no] ".@$mpArr[$page_no]['url'];
		$alt .= (isset($titles_on) && @$mpArr[$page_no]['title'] != '') ? '  - '.@$mpArr[$page_no]['title'] : '';
		
		/* highlight online users
		   in PHP4 use in_array() instead of isInArray() */
		$is_online = (isInArray($logid,$onlUsers)) ? true : false;
		echo ($is_online) ? "<tr class=\"ref\">" : "<tr class=\"color2\">";
		$traceroute = ($traceroute == '') ? ACT_TRACEROUTE.'?host=' : $traceroute;
		echo "<td><a href=\"$traceroute$ip\" target=\"_blank\">$hostname</a>$srv</td>";
		echo "<td nowrap=\"nowrap\"><a href=\"$primary_url".@$mpArr[$page_no]['url']."\">";
		echo "<img src=\"$gif_name\" alt=\"$alt\" width=\"12\" height=\"16\" border=\"0\" /></a> $referer</td>";
		echo "<td>$agent";
		if (!isset($full_agt)) echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "</td>";
		if ($extended) echo "<td>$resolution</td><td align=\"center\">$colors</td>";
		echo "<td nowrap=\"nowrap\"><b>$logtime</b></td><td>[<font color=\"".getHEX($color_a)."\">$online</font>]</td>";
		echo "<td>&nbsp;<img src=\"".ACT_PHPIXEL."?c=$color_a\" height=\"10\" width=\"$mp_width\" alt=\"views: $views\" title=\"views: $views\" /></td>";
		if (isset($enable_del) && !$guest) {
			$checked = !empty($checkall) ? ' checked="checked"' : '';
			echo "<td><input type=\"checkbox\" name=\"selected_tbl[]\" value=\"$logid\"$checked /></td>";
		}
		echo "</tr>\n";

		// show referrers and keywords
		if ($row["referer"] != "") {
			$keywrd = show_keywords($row['referer'], $arr_engines);
			$buffer = '';
			
			if (@$keywrd[3]) {
				$buffer = "(<a class=\"keywords\" href=\"".htmlspecialchars($keywrd[0])."\" target=\"_blank\">" .htmlspecialchars($keywrd[3])."</a>)";
			} elseif (isset($showref)) {
				$buffer = " - <a class=\"keywords\" href=\"".htmlspecialchars($keywrd[0])."\" target=\"_blank\">" .htmlspecialchars($keywrd[0])."</a>";
			}
			
			if ($buffer != '') {
				echo "<tr class=\"ref\"><td colspan=\"".$log_colspan."\">&nbsp;&nbsp;&nbsp;<a href=\"http://".$keywrd[1]."\" target=\"_blank\" class=\"ref\">".htmlspecialchars($keywrd[2])."</a>\n";
				echo $buffer;
				echo "</td></tr>\n";
			}
		}

		// show proxy information
		if (isset($row['proxy']) && $row['proxy'] > '') {
			$proxy_hostname = $row['proxy_hostname'];
			$proxy_ip = $row['proxy_ip'];
			if ($proxy_hostname == '') $proxy_hostname = $proxy_ip;
			
			echo ($is_online) ? "<tr class=\"ref\">" : "<tr class=\"color2\">";
			echo "<td colspan=\"".$log_colspan."\">&nbsp;&nbsp;&nbsp;";
			
			echo $strProxy.": <a href=\"$traceroute$proxy_ip\" target=\"_blank\">$proxy_hostname</a> - ".stripslashes($row['proxy']);
			echo "</td></tr>\n";
		}

		// show visitor's browsing-path
		if (!isset($hide_path) && isset($row['path']) && $row['path'] != @$mpArr[$page_no]['id'] && $row['path'] > '') {
			echo ($is_online) ? "<tr class='ref'>" : "<tr class=\"color2\">";
			echo "<td colspan=\"".$log_colspan."\">&nbsp;&nbsp;&nbsp;";
			echo get_mp_path($row['path']);
			echo "</td></tr>\n";
		}

	}


echo "<tr bgcolor=\"".getHEX($color_bg)."\"><td align=\"right\" colspan=\"$log_colspan\">";
if (isset($enable_del) && !$guest) {
	echo "[&nbsp;<a href=\"".$usr_view[1]."?checkall=1\" onclick=\"setCheckboxes('tablesForm', true); return false;\">$strSelect $strAll</a>";
	echo "&nbsp;|&nbsp;";
	echo "<a href=\"".$usr_view[1]."\" onclick=\"setCheckboxes('tablesForm', false); return false;\">$strUnselect $strAll</a>";
	echo "&nbsp;|&nbsp;";
	echo "<a href=\"".INC_COOKIES."?enabdel=off\">$strDisableDellog</a>";
	echo "&nbsp;|&nbsp;";
	echo "<input type=\"submit\" class=\"myInput\" value=\"$strDelete\" />";
	echo "&nbsp;]";
} else if (!$guest) {
	echo "[&nbsp;<a href=\"".INC_COOKIES."?enabdel=on\">$strEnableDellog</a>&nbsp;]";
}

if(!$xsear && isset($logtotal) && $loglim > 0) {
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo PrevNext($loglim,$logtotal);
}
echo "</td></tr>";

echo "</table>";
if (isset($enable_del) && !$guest) echo '</form>';
?>