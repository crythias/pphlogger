<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: admin3.php,v 1.16 2003/08/18 19:15:45 cvs_iezzi Exp $

    admin3.php show last customers
    --------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
$view = 'admin3';
include INC_HEAD;
?>

<div align="center">
<br />
<?php
/* -------------------------------- online customers -------------------------------- */
$ArrCust = Array();
$ArrCust[0] = Array('[id] - '.$strUsername, $strOnline, $strEntryTime, $strLastReload, $strHostIP, $strSince);
$ArrCust[1] = Array(' align="left"', ' align="center"', ' align="center"', ' align="center"', ' align="center"', ' align="center"');
$ArrCust[2] = Array(' align="left"', ' align="right"', ' align="right"', ' align="center"', ' align="left"', ' align="right"');
$ip_sql = "SELECT P.id,"
        . "TIME_FORMAT(SEC_TO_TIME(P.online),'%k:%i:%s') AS otime,"
		. "t_since,"
		. "t_reload,"
		. "P.ip,"
		. "P.hostname,"
		. "TIME_FORMAT(SEC_TO_TIME($curr_gmt_time-P.t_reload),'%k:%i:%s') as diff,"
		. "PU.username,"
		. "PU.pw,"
		. "PU.email "
		. "FROM ".PPHL_TBL_USERLOG." AS P, ".PPHL_TBL_USERS." AS PU "
		. "WHERE P.id = PU.id "
		. "ORDER BY P.t_reload DESC";
$ip_sql .= (isset($offset)) ? " LIMIT ".$offset.",".$show_cust : " LIMIT ".$show_cust;
$res = mysqli_query($connected,$ip_sql);
$i = 3; $m = 1;
while ($row = @mysqli_fetch_array($res)) {
	$hostname = ($row[5] == '') ? $row[4] : $row[5];
	$ArrCust[$i][0] = '[<a id="blacklink" target="_blank" href="'.USR_LOGIN.'?usr='.$row[0].'&admpw='.$row[8].'">'.$row[0].'</a>]'
	                . ' - <a id="blacklink" href="mailto:'.$row[9].'">'.$row[7].'</a>&nbsp;';
	$ArrCust[$i][1] = '&nbsp;<a>'.$row[1].'</a>&nbsp;';
	$ArrCust[$i][2] = '&nbsp;'.date('M d Y, H:i:s',GMTtoUser($row[2],$is_a_user)).'&nbsp;';
	$ArrCust[$i][3] = '&nbsp;'.date('H:i:s',GMTtoUser($row[3],$is_a_user)).'&nbsp;';
	$ArrCust[$i][4] = '&nbsp;<a href="'.$traceroute.$row[4].'">'.$hostname.'</a>&nbsp;';
	$ArrCust[$i][5] = '&nbsp;'.$row[6].'&nbsp;';
	$i++; $m++;
}

$custtotal = get_totalrows('tbl_userlog');
$lastline = PrevNext($show_cust,$custtotal);
echo htmlStatTable($ArrCust,2,'',$lastline,$strYourLast.' '.$show_cust.' '.$strCustomers);
?>
</div>

<?php
include INC_FOOT;
?>