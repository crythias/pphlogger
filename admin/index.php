<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: index.php,v 1.17 2003/08/18 19:15:45 cvs_iezzi Exp $

    admin/index.php
    --------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include LIB_LOADSQL;

$view = 'admin';
include INC_HEAD;

/*
 * actions
 */
switch(@$action) {
	case 'version':
		define('DSP_VERSION',1);
		break;
	case 'force_delete':
		include INC_DELLOGS;
		$LOGSCLEANUP = new LogsCleanUp();
		@set_time_limit(0);
		$sql = "SELECT id,limh,limd,limh_p,limd_p FROM ".PPHL_TBL_USERS;
		$res = mysql_query($sql);
		while ($row = mysql_fetch_array($res)) {
			$LOGSCLEANUP->execute($row['id'], array($row['limh'], $row['limd'], $row['limh_p'], $row['limd_p']));
		}
		break;
	case 'optimize_usr':
		@set_time_limit(0);
		$sql = "SELECT id FROM ".PPHL_TBL_USERS;
		$res = mysql_query($sql);
		while ($row = mysql_fetch_array($res)) {
			optimizeUsrTables($row['id']);
		}
		break;
	case 'optimize_adm':
		@set_time_limit(0);
		optimizeAdmTables();
		break;
	case 'calctblsize': // refresh the table's sizes
		calcTableSize();
		break;
	default:
		break;
}



if (defined('DSP_VERSION')) {
	$data="";
	flush();
	$fp=@fopen("http://www.phpee.com/pphlogger_version.php", "r");
	if($fp){
		$data=fgets($fp, 1024);
		fclose($fp);
	}
	if(!strstr($data, "|")){
		echo "Could not contact phpee.com.  To use this feature, you must have compiled in fopen wrappers when setting up PHP.";
	}
	else{
		$ver_arr=explode("|", $data);
?>
<table align="center" border="0" cellspacing="0" cellpadding="3" class="box-table"><br/>
<tr>
  <td colspan="2" align="center" valign="middle" class="color3"><?php echo $strLatestPphlVers; ?></td>
</tr>
<tr>
  <td valign="middle"><a><?php echo $strLatestVersion; ?>:</a></th>
  <td valign="middle"><?php echo $ver_arr[0]; ?></td>
</tr>
<tr>
  <td valign="middle"><a><?php echo $strReleaseDate; ?>:</a></th>
  <td valign="middle"><?php echo $ver_arr[1]; ?></td>
</tr>
<tr>
  <td valign="middle"><a><?php echo $strDownloadLoc; ?>:</a></th>
  <td valign="middle"><?php
$cnt=count($ver_arr);
for($x=2;$x<$cnt;$x++){
  $url = explode(",",$ver_arr[$x]);
  echo "<a href=\"$url[1]\">$url[0]</a>\n<br />";
}
?></td>
</tr>
</table>
<?php
	}
} else { // MAIN ADMIN PAGE...
?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<table align="center" border="0" cellspacing="15" cellpadding="0">
<tr>
  <td valign="top">
    <table border="0" cellspacing="0" cellpadding="5" class="box-table">
    <tr>
    <td align="center" valign="middle" class="color3">PowerPhlogger <?php echo $strAdmin; ?></td>
    </tr>
    <tr>
    <td align="left" valign="middle"><br />
	<a href="admin1.<?php echo CFG_PHPEXT; ?>">[1] <?php echo $strAdminPage[1]; ?></a><br /><br />
	<a href="admin2.<?php echo CFG_PHPEXT; ?>">[2] <?php echo $strAdminPage[2]; ?></a><br /><br />
	<a href="admin3.<?php echo CFG_PHPEXT; ?>">[3] <?php echo $strAdminPage[3]; ?></a><br /><br />
	<a href="admin4.<?php echo CFG_PHPEXT; ?>">[4] <?php echo $strAdminPage[4]; ?></a><br /><br />
	<a href="admin5.<?php echo CFG_PHPEXT; ?>">[5] <?php echo $strAdminPage[5]; ?></a><br /><br />
	<a href="admin6.<?php echo CFG_PHPEXT; ?>">[6] <?php echo $strAdminPage[6]; ?></a><br /><br />
    </td>
    </tr>
    </table>
  </td>
  <td valign="top">
    <table border="0" cellspacing="0" cellpadding="5" class="box-table">
    <tr>
    <td align="center" valign="middle" class="color3">PowerPhlogger <?php echo $strMaintenance; ?></td>
    </tr>
    <tr>
    <td align="left" valign="middle">
	<a href="admin_cookie.<?php echo CFG_PHPEXT; ?>?cookie_switch=off"><?php echo $strAdminCookie; ?></a>&nbsp;&nbsp;[
		<a href="admin_cookie.<?php echo CFG_PHPEXT; ?>?cookie_switch=on"><?php echo $strDelete; ?></a> ]<br />
		<?php echo $strCurrConfig; ?> 
		<?php if (isset($admin_rulez)) echo "<a>$strEnabled</a>";
		else echo "<a>$strDisabled</a>"; ?></p>

		<p><a href="reload_keywords.<?php echo CFG_PHPEXT; ?>"><?php echo $strReloadKeywords; ?></a>
		<?php if (isset($keyw_reloaded)) echo "<a class=\"invertLink\">: OK !!!</a>"; ?>
		<br />
		[<?php echo $strReloadKeyw1; ?><br />
		&nbsp;<?php echo $strReloadKeyw2; ?>]</p>
		<p>
		<a href="<?php echo $PHP_SELF; ?>?action=force_delete">Force deletion</a><br />
		[This will force the deletion of old logs/visitor paths<br />
		&nbsp;according to your settings]</p>
		<p>
		<a href="<?php echo $PHP_SELF; ?>?action=optimize_usr">OPTIMIZE <?php echo $strUser; ?></a><br />
		<a href="<?php echo $PHP_SELF; ?>?action=optimize_adm">OPTIMIZE <?php echo $strAdmin; ?></a>
		</p>
    </td>
    </tr>
    </table>
  </td>
  <td valign="top">
    <table border="0" cellspacing="0" cellpadding="5" class="box-table">
    <tr>
    <td align="center" valign="middle" class="color3"><?php echo $strSystem.' '.$strMaintenance; ?></td>
    </tr>
    <tr>
    <td align="left" valign="middle">
    <a href="<?php echo $PHP_SELF; ?>?action=version"><?php echo $strCheckNewVer; ?></a><br />
    <a href="setup.<?php echo CFG_PHPEXT; ?>"><?php echo $strSetup; ?></a><br /><br />
    <a href="<?php echo PPHL_SCRIPT_PATH; ?>">[ <?php echo $strUsrPage[0]; ?> ]</a><br />
    </td>
    </tr>
    </table>
  </td>
</tr>
</table>
<?php
}
include INC_FOOT;
?>