<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: admin5.php,v 1.18 2003/08/18 19:15:45 cvs_iezzi Exp $

    admin4.php disk space & file upload
    --------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

/*
 * actions
 */
switch(@$action) {
	case 'calctblsize': // refresh the table's sizes
		calcTableSize();
	break;
}

$view = 'admin5';
include INC_HEAD;


/* number of useraccounts */
$sql = "SELECT count(*) FROM ".PPHL_TBL_USERS;
$res = mysql_query($sql);
$useraccounts = @mysql_result($res,0,0);



/* Traffic summary
 * This feature has been disabled again in 2.2.0-final
 * If you know a way to check traffic (e.g. requests/sec), let me know.
 * The code below is not efficient at all:
 */

/*
$traffic_minutes = 10;
$traffic = 0;
$sql = "SELECT id FROM ".PPHL_TBL_USERS;
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	$sql2 = "SELECT sum(mp) as traffic FROM ".PPHL_DB_PREFIX.$id.$tbl_logs." "
	      . "WHERE time > SUBDATE(NOW(), INTERVAL $traffic_minutes MINUTE)";
	$res2 = mysql_query($sql2);
	$traffic += @mysql_result($res2,0,'traffic');
	$sql2 = "SELECT sum(mp) as traffic FROM ".PPHL_DB_PREFIX.$id.$tbl_ipcheck;
	$res2 = mysql_query($sql2);
//	echo "traffic2=".@mysql_result($res2,0,'traffic').'<br />';
	$traffic += @mysql_result($res2,0,'traffic');
}
*/


?>
<br />
<table align="center" border="0" cellspacing="0" cellpadding="3" class="box-table">
<tr>
  <td colspan="2" align="center" valign="middle" class="color3">PowerPhlogger Statistics</td>
</tr>
<tr>
  <td valign="middle"><a><?php echo $strUseraccounts; ?>:</a></td>
  <td valign="middle"><b><?php echo $useraccounts; ?></b></td>
</tr>
<?php 
/*

<tr>
  <td valign="middle"><a>Traffic:</a></td>
  <td valign="middle">

echo $traffic." in last $traffic_minutes minutes<br />"; 
echo round($traffic/$traffic_minutes)." in last minute<br />";
echo round($traffic/$traffic_minutes/60)." in last second";

  </td>
</tr>

*/

if (MYSQL_INT_VERSION >= 32303) {
?>
<tr>
  <td valign="top"><a><?php echo $strDbSpace; ?>:</a></td>
  <td valign="top">
<?php
// get total used DB-space
$total_adm_tblsize = getSerializedCache('admin_tblsize');
$total_adm_tblsize = @$total_adm_tblsize[1];

$sql = "SELECT sum(tblsize) FROM ".PPHL_TBL_USERS;
$res = mysql_query($sql);
$total_usr_tblsize = mysql_result($res,0,0);
echo $strUser.' '.$strDatabase.' '.$strSize.': <b>'.formatPrettyByte($total_usr_tblsize).'</b><br />';
echo $strAdmin.' '.$strDatabase.' '.$strSize.': <b>'.formatPrettyByte($total_adm_tblsize).'</b>';
?>
<br />[&nbsp;<a class="invertLink" href="<?php echo $PHP_SELF; ?>?action=calctblsize"><?php echo $strReload; ?></a>&nbsp;]
  </td>
</tr>
<?php
} // if (MYSQL_INT_VERSION >= 32303)
?>
</table>

<?php
include INC_FOOT;
?>