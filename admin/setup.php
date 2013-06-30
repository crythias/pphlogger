<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: setup.php,v 1.22 2003/08/18 19:15:45 cvs_iezzi Exp $
	
    setup.php PowerPhlogger setup
    --------------------------------------------------------- */

/* Edit this, if you changed the default extension */
$phpExt = 'php';

define('PPHL_SCRIPT_PATH' , '../');

/* ------------- create base tables if they don't exist yet ----------- */
include PPHL_SCRIPT_PATH."config.inc.".$phpExt;
include PPHL_SCRIPT_PATH."libraries/load_sql.lib.".$phpExt;

// WARNING
$sql = "SELECT COUNT(*) FROM ".PPHL_DB_PREFIX_OLD."pphlogger_settings";
$res = mysql_query($sql);
if ($res) {
	echo '<b>WARNING</b>: Please first read the upgrade instructions on ';
	echo '<a href="http://www.phpee.com/upgrade.php">http://www.phpee.com/upgrade.php</a>';
	echo ' and then run the upgrade script!!';
	exit;
}

$sql = "SELECT COUNT(*) FROM ".PPHL_DB_PREFIX."settings";
$res = mysql_query($sql);
if (!$res) exec_sql_lines(PPHL_SCRIPT_PATH."mysql/pphl_settings.sql", 'pphl_settings', PPHL_DB_PREFIX.'settings');
$sql = "SELECT COUNT(*) FROM ".PPHL_DB_PREFIX."css";
$res = mysql_query($sql);
if (!$res) exec_sql_lines(PPHL_SCRIPT_PATH."mysql/pphl_css.sql", 'pphl_css', PPHL_DB_PREFIX.'css');
/* --------------------------------------------------------------------- */

include PPHL_SCRIPT_PATH."main_location.inc";

$view = 'setup';
define('NO_HEADFOOT',1);
include INC_HEAD;

/* used in /include/setupSettings.inc.php */
$rowcnt = 0;

/* store changed values */
if (isset($fields_no)) {
	$cnt_fields_no = count($fields_no);
	for ($i = 0; $i < $cnt_fields_no; $i++) {
		if ($fields[$fields_no[$i]] != $fields_prev[$fields_no[$i]]) {
			$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET value = '".$fields[$fields_no[$i]]."' WHERE setting = '".$fields_no[$i]."'";
			mysql_query($sql);
		}
	}
}

switch (@$action) {
	
	case '1':
		
		$SetupSettings[0] = Array(
			$loca['setup']['header1'],
			'pphlogger_location',
			'admin_mail',
			'admin_name',
			'admin_pw',
			'server_GMT',
			'admin_GMT'
		);
		
		$SetupSettings[1] = Array(
			$loca['setup']['header2'],
			'default_lang',
			'cssid',
			'signup_ok'
		);
		
		echo "<h3>PowerPhlogger $strSetup - $strStep 1</h3>\n";
		echo $loca['setup']['step1_txt'];
		
		include INC_SETUPSETTINGS;
	break;
	
	case '2':
		
		$SetupSettings[0] = Array(
			$loca['setup']['header3'],
			'master_timeout',
			'traceroute',
			'pass_length',
			'pw_privacy',
			'cache_calendar',
			'mxlookup',
			'loopback_bug',
			'mysqldump_on',
			'md5form',
			'mail_mod'
		);
		
		$SetupSettings[1] = Array(
			$loca['setup']['header4'],
			'GD_enabled',
			'gd_img_type',
			'Freetype_enabled',
			'ttf_location'
		);
		
		$SetupSettings[2] = Array(
			$loca['setup']['header5'],
			'cleanup_lim',
			'cleanup_old',
			'dellog_global',
			'dellog_lim',
			'dellog_lim_d',
			'dellog_lim_prob',
			'delpath_global',
			'delpath_lim',
			'delpath_lim_d',
			'delpath_lim_prob'
		);
		
		$SetupSettings[3] = Array(
			$loca['setup']['header6'],
			'show_cust',
			'calendar_months',
			'topref_lim',
			'topdomain_lim',
			'topres_lim',
			'topcolor_lim',
			'topkeywords_lim',
			'topbrowseros_lim',
			'topsearcheng_lim',
			'lastref_lim',
			'mpfront_lim',
			'useraccount_lim'
		);
		
		$SetupSettings[4] = Array(
			$loca['setup']['header7'],
			'width_max',
			'width_factor',
			'browseros_barsize',
			'extended',
			'ttf_demo_size',
			'css_show'
		);
		
		echo "<h3>PowerPhlogger $strSetup - $strStep 2</h3>\n";
		echo $loca['setup']['step2_txt'];
		
		include INC_SETUPSETTINGS;
	break;
	
	case '3':
		
		echo "<h3>PowerPhlogger $strSetup</h3>\n";
		echo $loca['setup']['step3_txt_a'].": <a class=\"color1\" target=\"_blank\" href=\"".PPHL_SCRIPT_PATH."doc/doc.html\">doc.html</a><br /><br />";
		echo $loca['setup']['step3_txt_b'].": <a class=\"color1\" href=\"$adm_view[0]\">$strAdmin</a>";
		
	break;
	
	default:
	
		/* ------------- create the missing admin tables ------------------------ */
		if (!tableExists(PPHL_TBL_USERS))   exec_sql_lines(SQL_USERS, "pphl_users", PPHL_TBL_USERS);
		if (!tableExists(PPHL_TBL_USERLOG)) exec_sql_lines(SQL_USERLOG, "pphl_userlog", PPHL_TBL_USERLOG);
		if (!tableExists(PPHL_TBL_DOMAINS)) exec_sql_lines(SQL_DOMAINS, "pphl_domains", PPHL_TBL_DOMAINS);
		if (!tableExists(PPHL_TBL_CACHE))   exec_sql_lines(SQL_CACHE, "pphl_cache", PPHL_TBL_CACHE);
		if (!tableExists(PPHL_TBL_AGENTS))  exec_sql_lines(SQL_AGENTS, 'pphl_agents', PPHL_TBL_AGENTS);
		/* ---------------------------------------------------------------------- */
		
		echo "<h3>PowerPhlogger $strSetup</h3>\n";
		echo $loca['setup']['intro_txt']."<br /><br />\n";
		echo $loca['setup']['step0_txt'];
		
		echo "<div align=\"center\">\n";
		
		echo "<form action=\"$PHP_SELF\" method=\"post\">\n";
		echo "<textarea class=\"myInput\" name=\"license\" readonly cols=\"90\" rows=\"20\">\n";
		readfile(PPHL_SCRIPT_PATH."doc/LICENSE");
		echo "</textarea><br /><br />\n";
		echo "<input type=\"hidden\" name=\"action\" value=\"1\" />\n";
		
		/*
		 * special handling for default_lang selection
		 */
		echo "<input type=\"hidden\" name=\"fields_no[0]\" value=\"default_lang\" />\n";
		echo "<input type=\"hidden\" name=\"fields_prev[default_lang]\" value=\"".$default_lang."\" />\n";
		echo $loca['setup']['default_lang']['title'].': ';
		$select_array = directoryList(CFG_LANG_PATH, TRUE, 2);
		echo "<select class=\"myInput\" name=\"fields[default_lang]\">";
		$cnt_select_array = count($select_array);
		for($l = 0; $l < $cnt_select_array; $l++) {
			$lang = substr($select_array[$l],0,2);
			echo "<option ";
			if ($default_lang == $lang) echo "selected=\"selected\" ";
			echo "value=\"$lang\">".$loca['lang'][$lang]."</option>\n";
		}
		print "</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n";
		echo "<input class=\"myInput\" type=\"submit\" name=\"op\" value=\"$strNext\" />\n";
		
		

		echo "</form>\n";
		echo "</div>\n";
	break;
}

include INC_FOOT;
?>