<?php
// $Id: online.inc.php,v 1.7 2002/07/28 12:43:40 cvs_iezzi Exp $

	$ip_onl_sql = (isset($onlineonly) || !isset($allips)) ? "WHERE t_reload > ".($curr_gmt_time-$timeout_onl) : 'WHERE t_reload > '.($curr_gmt_time-$timeout);
    $ip_sql = "SELECT ip,hostname,TIME_FORMAT(SEC_TO_TIME(online),'%k:%i:%s') AS otime,time,t_reload,path,mp,($curr_gmt_time-t_reload) as diff "
			. "FROM ".$tbl_logs." "
			. $ip_onl_sql." "
			. "ORDER BY t_reload DESC";
	$ip_res = mysql_query($ip_sql);
	while ($row = @mysql_fetch_array($ip_res)) {
			$hostname = $row['hostname'];
			if ($hostname == '') $hostname = $row['ip'];
			if ($row['diff'] < $timeout_onl) echo "<tr class=\"ref\">";
			else echo "<tr>";
			echo "<td><a href=\"$usr_view[1]?byip=".$row['ip']."\">".$hostname."</a>&nbsp;</td>";
			echo "<td>".$row['otime']."</td>";
			echo "<td>".date("H:i:s",GMTtoUser($row['time']))."</td>";
			echo "<td>".date("H:i:s",GMTtoUser($row['t_reload']))."</td>";
			echo "<td>&nbsp;[<a>".$row['mp']."</a>]&nbsp;".get_mp_last($row['path'])."&nbsp;</td>";
			if ($row['diff'] < 86400) $difftime = gmdate("H:i:s", $row['diff']);
			else $difftime = '> 24h';
			echo "<td>".$difftime."</td></tr>";
	}
?>