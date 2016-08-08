<?php
///////////////////////////////////////////////////////////////////////////////
//                                                                           //
//   Copyright (c) 2000-2003  Philip Iezzi [pipo@iezzi.ch]                   //
//   http://www.phpee.com                                                    //
//                                                                           //
//   This file is part of PowerPhlogger.                                     //
//                                                                           //
//   PowerPhlogger is free software; you can redistribute it and/or modify   //
//   it under the terms of the GNU General Public License as published by    //
//   the Free Software Foundation; either version 2 of the License, or       //
//   (at your option) any later version.                                     //
//                                                                           //
//   PowerPhlogger is distributed in the hope that it will be useful,        //
//   but WITHOUT ANY WARRANTY; without even the implied warranty of          //
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           //
//   GNU General Public License for more details.                            //
//                                                                           //
//   You should have received a copy of the GNU General Public License       //
//   along with PowerPhlogger; if not, write to the Free Software            //
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA //
///////////////////////////////////////////////////////////////////////////////

// $Id: main.php,v 1.79 2003/10/31 17:58:37 cvs_iezzi Exp $

if (!defined('__GOT_CONFIG__')){
	
	/* show debug timer */
	//define('DEBUG_MODE', 1);
	
	/* include MySQL database configuration file */
	include PPHL_CFG_PATH.'config.inc.'.CFG_PHPEXT;
	
	/* current version of PowerPhlogger */
	$curr_ver = '2.2.5'; $build_date = '2003/10/31';
	
	/* lateron, this option will move to the administration settings... */
	define('CFG_OLDGD', FALSE);
	
	/* directories */
	define('CFG_INC_PATH',       PPHL_SCRIPT_PATH.'include/');
	define('CFG_ACT_PATH',       PPHL_SCRIPT_PATH.'actions/');
	define('CFG_MOD_PATH',       PPHL_SCRIPT_PATH.'modules/');
	define('CFG_LIB_PATH',       PPHL_SCRIPT_PATH.'libraries/');
	define('CFG_IMG_PATH',       PPHL_SCRIPT_PATH.'img/');
	define('CFG_PAGESIMG_PATH',  CFG_IMG_PATH.'colorpages/');
	define('CFG_FLAGS_PATH',     CFG_IMG_PATH.'flags/');
	define('CFG_SQL_PATH',       PPHL_SCRIPT_PATH.'mysql/');
	define('CFG_TTF_PATH',       PPHL_SCRIPT_PATH.'ttf_fonts/');
	define('CFG_MSG_PATH',       PPHL_SCRIPT_PATH.'messages/');
	define('CFG_LANG_PATH',      PPHL_SCRIPT_PATH.'lang/');
	define('CFG_CSS_PATH',       PPHL_SCRIPT_PATH.'css/');
	define('CFG_ADM_PATH',       PPHL_SCRIPT_PATH.'admin/');
	define('CFG_LOG_PATH',       PPHL_SCRIPT_PATH.'logs/');
	
	/* file locations */
	define('INC_GETUSERDATA',    CFG_INC_PATH.'get_userdata.'.CFG_PHPEXT);
	define('INC_HEADFOOT',       CFG_INC_PATH.'headfoot.inc.'.CFG_PHPEXT);
	define('INC_LOGLIST',        CFG_INC_PATH.'loglist.inc.'.CFG_PHPEXT);
	define('INC_ONLINELIST',     CFG_INC_PATH.'online.inc.'.CFG_PHPEXT);
	define('INC_VISIBILITY',     CFG_INC_PATH.'visibility.'.CFG_PHPEXT);
	define('INC_PPHLOGGERSEND',  CFG_INC_PATH.'pphlogger_send.inc.'.CFG_PHPEXT);
	define('INC_GETCSSCOLORS',   CFG_INC_PATH.'get_csscolors.inc.'.CFG_PHPEXT);
	define('INC_HEADFOOTMENU',   CFG_INC_PATH.'headfoot_menu.inc.'.CFG_PHPEXT);
	define('INC_HEADSTUFF',      CFG_INC_PATH.'head_stuff.inc.'.CFG_PHPEXT);
	define('INC_HEAD',           CFG_INC_PATH.'head.inc.'.CFG_PHPEXT);
	define('INC_FOOT',           CFG_INC_PATH.'foot.inc.'.CFG_PHPEXT);
	define('INC_COLORARRAY',     CFG_INC_PATH.'colors.inc.'.CFG_PHPEXT);
	define('INC_DELLOGS',        CFG_INC_PATH.'delLogs.inc.'.CFG_PHPEXT);
	define('INC_EDITCSS',        CFG_INC_PATH.'edCss.inc.'.CFG_PHPEXT);
	define('INC_SETUPSETTINGS',  CFG_INC_PATH.'setupSettings.inc.'.CFG_PHPEXT);
	define('INC_COOKIES',        PPHL_SCRIPT_PATH.'cookie.'.CFG_PHPEXT);
	define('INC_COPYRIGHT',      CFG_INC_PATH.'copyright.txt');
	define('INC_HTMLCODE',       CFG_INC_PATH.'html_code.txt');
	define('INC_PPHLOGGERJS',    CFG_INC_PATH.'pphlogger.js');
	define('INC_MD5JS',          CFG_INC_PATH.'md5.js');
	define('INC_ENGINESINI',     PPHL_SCRIPT_PATH.'engines-list.ini');
	
	define('ACT_PHPIXEL',        CFG_ACT_PATH.'phpixel.'.CFG_PHPEXT);
	define('ACT_CHANGEHITS',     CFG_ACT_PATH.'changehits.'.CFG_PHPEXT);
	define('ACT_MPDLEDIT',       CFG_ACT_PATH.'edMpdl.'.CFG_PHPEXT);
	define('ACT_CREATENEWPW',    CFG_ACT_PATH.'new_pw_create.'.CFG_PHPEXT);
	define('ACT_TRACEROUTE',     CFG_ACT_PATH.'trace.'.CFG_PHPEXT);
	
	define('MOD_DBDUMP',         CFG_MOD_PATH.'db_dump.'.CFG_PHPEXT);
	define('MOD_DBDUMPLIB',      CFG_MOD_PATH.'db_dump_lib.'.CFG_PHPEXT);
	define('MOD_IMAGEGEN',       CFG_MOD_PATH.'image_gen.'.CFG_PHPEXT);
	define('MOD_IMAGETXT',       CFG_MOD_PATH.'image_txt.'.CFG_PHPEXT);
	define('MOD_HTMLMIMEMAIL',   CFG_MOD_PATH.'htmlMimeMail.'.CFG_PHPEXT);
	define('MOD_MIMEPART',       CFG_MOD_PATH.'mimePart.'.CFG_PHPEXT);
	define('MOD_LIBMAIL',        CFG_MOD_PATH.'libmail.mod.'.CFG_PHPEXT);
	define('MOD_SMTP',           CFG_MOD_PATH.'class.smtp.inc');
	define('MOD_SHOWVISPERDAY',  CFG_MOD_PATH.'show_vis_per_day.'.CFG_PHPEXT);
	define('MOD_IMGVISPERDAY',   CFG_MOD_PATH.'img_vis_per_day.mod.'.CFG_PHPEXT);
	define('MOD_SHOWVISPERHOUR', CFG_MOD_PATH.'show_vis_per_hour.'.CFG_PHPEXT);
	define('MOD_IMGVISPERHOUR',  CFG_MOD_PATH.'img_vis_per_hour.mod.'.CFG_PHPEXT);
	define('MOD_CALENDAR',       CFG_MOD_PATH.'calendar.mod.'.CFG_PHPEXT);
	define('MOD_USERCREATE',     CFG_MOD_PATH.'usercreate.'.CFG_PHPEXT);
	
	define('LIB_FUNCTIONS',      CFG_LIB_PATH.'functions.lib.'.CFG_PHPEXT);
	define('LIB_GRABGLOBALS',    CFG_LIB_PATH.'grab_globals.lib.'.CFG_PHPEXT);
	define('LIB_DEFINES',        CFG_LIB_PATH.'defines.lib.'.CFG_PHPEXT);
	define('LIB_LOADSQL',        CFG_LIB_PATH.'load_sql.lib.'.CFG_PHPEXT);
	define('LIB_SEARFUNC',       CFG_LIB_PATH.'search_func.lib.'.CFG_PHPEXT);
	define('LIB_YABD',           CFG_LIB_PATH.'yabd.lib.'.CFG_PHPEXT);
	define('LIB_FUNCTIONSJS',    CFG_LIB_PATH.'functions.js');
	
	define('CSS_GETCSS',         CFG_CSS_PATH.'get_css.'.CFG_PHPEXT);
	
	define('SQL_SETTINGS',       CFG_SQL_PATH.'pphl_settings.sql');
	define('SQL_USERS',          CFG_SQL_PATH.'pphl_users.sql');
	define('SQL_CACHE',          CFG_SQL_PATH.'pphl_cache.sql');
	define('SQL_CSS',            CFG_SQL_PATH.'pphl_css.sql');
	define('SQL_DOMAINS',        CFG_SQL_PATH.'pphl_domains.sql');
	define('SQL_USERLOG',        CFG_SQL_PATH.'pphl_userlog.sql');
	define('SQL_AGENTS',         CFG_SQL_PATH.'pphl_agents.sql');
	//define('SQL_RES',            CFG_SQL_PATH.'pphl_res.sql');
	define('SQL_LOGS',           CFG_SQL_PATH.'pphl_xxxxx_logs.sql');
	define('SQL_MPDL',           CFG_SQL_PATH.'pphl_xxxxx_mpdl.sql');
	
	define('DSP_NEWPW',          PPHL_SCRIPT_PATH.'dspNewPw.'.CFG_PHPEXT);
	define('PPHLOGGER_DYNJS',    PPHL_SCRIPT_PATH.'pphlogger.js.'.CFG_PHPEXT);
	define('DO_LOADCSS',         PPHL_SCRIPT_PATH.'load_css.'.CFG_PHPEXT);
	
	$adm_view[0]               = CFG_ADM_PATH.'index.'.CFG_PHPEXT;
	$adm_view[1]               = CFG_ADM_PATH.'admin1.'.CFG_PHPEXT;
	$adm_view[2]               = CFG_ADM_PATH.'admin2.'.CFG_PHPEXT;
	$adm_view[3]               = CFG_ADM_PATH.'admin3.'.CFG_PHPEXT;
	$adm_view[4]               = CFG_ADM_PATH.'admin4.'.CFG_PHPEXT;
	$adm_view[5]               = CFG_ADM_PATH.'admin5.'.CFG_PHPEXT;
	$adm_view[6]               = CFG_ADM_PATH.'admin6.'.CFG_PHPEXT;
	define('ADM_MLISTSEND',      CFG_ADM_PATH.'mlistSend.'.CFG_PHPEXT);
	define('ADM_LOADCSS',        CFG_ADM_PATH.'load_css.'.CFG_PHPEXT);
	define('ADM_NEWACCOUNT',     CFG_ADM_PATH.'newaccount_admin.'.CFG_PHPEXT);
	define('ADM_SETUP',          CFG_ADM_PATH.'setup.'.CFG_PHPEXT);
	
	$usr_view[0]               = PPHL_SCRIPT_PATH.'index.'.CFG_PHPEXT;
	$usr_view[1]               = PPHL_SCRIPT_PATH.'dspLogs.'.CFG_PHPEXT;
	$usr_view[2]               = PPHL_SCRIPT_PATH.'dspStats.'.CFG_PHPEXT;
	$usr_view[3]               = PPHL_SCRIPT_PATH.'dspCalendar.'.CFG_PHPEXT;
	$usr_view[4]               = PPHL_SCRIPT_PATH.'dspBrowserOs.'.CFG_PHPEXT;
	$usr_view[5]               = PPHL_SCRIPT_PATH.'edSettings.'.CFG_PHPEXT;
	$usr_view[6]               = PPHL_SCRIPT_PATH.'edUserprofile.'.CFG_PHPEXT;
	define('USR_LOGIN',          PPHL_SCRIPT_PATH.'login.'.CFG_PHPEXT);
	define('USR_EDCSS',          PPHL_SCRIPT_PATH.'edCss.'.CFG_PHPEXT);
	define('USR_EDUSER',         PPHL_SCRIPT_PATH.'edit_user.'.CFG_PHPEXT);
	
	
	/* include the defines library before the function library
	 *
	 * Major difference between PHP3 and PHP4: 
	 * If you define a function that uses some constant C before you 
	 * define() C, C will be undefined in the function in PHP3 but not 
	 * in PHP4. Thus constants are more pre-processor-ish in PHP3, 
	 * but probably more useful in PHP4.
	 */
	include LIB_DEFINES;
	
	/* start session */
	if (!defined('NO_SESS') && defined('PHP_SESS')) session_start();
	
	/*
	 * No matter if register_globals is turned Off or on, always get
	 * the global variables from the $HTTP_*_VARS arrays. (security)
	 * In PHP 4.1 we're getting the variables from the global $_GET,
	 * $_POST, $_COOKIE ... arrays.
	 */
	include LIB_GRABGLOBALS;
	
	/* table-names */
	define('PPHL_TBL_SETTINGS'   , PPHL_DB_PREFIX.'settings');
	define('PPHL_TBL_DOMAINS'    , PPHL_DB_PREFIX.'domains');
	define('PPHL_TBL_USERLOG'    , PPHL_DB_PREFIX.'userlog');
	define('PPHL_TBL_USERS'      , PPHL_DB_PREFIX.'users');
	define('PPHL_TBL_CACHE'      , PPHL_DB_PREFIX.'cache');
	define('PPHL_TBL_CSS'        , PPHL_DB_PREFIX.'css');
	define('PPHL_TBL_AGENTS'     , PPHL_DB_PREFIX.'agents');
	
	$arr_admintables   = Array(PPHL_TBL_SETTINGS,PPHL_TBL_DOMAINS,PPHL_TBL_USERLOG,
	                           PPHL_TBL_USERS,PPHL_TBL_CACHE,PPHL_TBL_CSS,PPHL_TBL_AGENTS);
	
	$tbl_logs          = '_logs';
	$tbl_ipcheck       = '_ipcheck';
	$tbl_mpdl          = '_mpdl';
	
	/* assign the settings */
	$sql = "SELECT setting,value,type FROM ".PPHL_TBL_SETTINGS;
	$res = mysqli_query($connected,$sql);
	while ($row = @mysqli_fetch_array($res)) {
		
		${$row['setting'].'_type'} = $row['type'];
		
		switch ($row['type']) {
			case 'bool':
				${$row['setting']} = ($row['value'] == "true") ? true : false;
			break;
			
			case 'int':
				${$row['setting']} = (int) $row['value'];
			break;
			
			case 'gmt':
				${$row['setting']} = (float) $row['value'];
			break;
			
			default:
				${$row['setting']} = $row['value'];
			break;
		}
	}
	
	/* if user didn't run setup-script yet */
	if(!isset($pphlogger_location) && !defined('NO_SETUP_REDIR')) {
		Header('Location: '.ADM_SETUP);
		exit;
	}
	
	/* force language setting in setup.php */
	if (isset($fields['default_lang'])) $default_lang = $fields['default_lang'];
	define('PPHL_LANG_DEFAULT', CFG_LANG_PATH.@$default_lang.'.inc.'.CFG_PHPEXT);
	
	/*
	 * include the main function libraries
	 */
	include LIB_FUNCTIONS;
	include LIB_YABD;
	
	
	if(defined('DEBUG_MODE')) define('T1',getmicrotime());
	
	/* cut the www from $server_name */
	$server_parsed = @parse_url($pphlogger_location);
	$server_name   = @$server_parsed['host'];
	$server_dom    = cutWWW($server_name);
	
	/*
	 * PHP_WIN32 fixes
	 * 
	 * a hack for apache nt because it sets script filename to php.exe thus 
	 * makes us parse php.exe instead of file.php requires we get the info 
	 * from path translated.
	 * This can be removed at such a time that apache nt is fixed
	 */
	if (stristr($PHP_SELF,'php.exe')) {
		define('WIN32_PHPEXE', 1);
		$PHP_SELF = str_replace ($SCRIPT_NAME, '', $PHP_SELF);
	}
	if (isset($SCRIPT_FILENAME) && stristr($SCRIPT_FILENAME,'php.exe')) {
		$SCRIPT_FILENAME = getenv("PATH_TRANSLATED");
	}
	
	
	/* If showme is not set or set to 1 */
	if (!isset($showme)) $showme = 'n';
	if ($showme == '0')  $showme = 'n';  // deprecated - just for compatibility to 2.1.3
	if ($showme == '1')  $showme = 'y';
	
	/* set title if not set */
	if (!isset($title))  $title = ''; // for compatibility to 2.2.0-rc2 and prior versions
	
	/* default show-type is 'js' */
	if (!isset($st))     $st = 'js';
	if (isset($b))       $st = 'img';    // deprecated - just for compatibility to 2.1.3
	
	/* resolution/color depth is not available */
	if (!isset($r) || $r == 'na') $r = 0;
	if (!isset($c) || $c == 'na') $c = 0;
	$c = (int) $c;
	
	/* time difference between server and admin location */
	$curr_gmt_time = time()-(@$server_GMT*3600);
	
	/* look for default style-sheets if no id is specified */
	if (!isset($css_id)) $css_id = 0;
	
	/* 30min default timeout */
	if (!isset($timeout)) $timeout=30*60;
	
	/* lifetime cookie */
	$lifetime = time() + (5*31536000); // 365*24*3600 = 31536000 = 1 year
	
	/* used for html linebreaks */
	$br = "<br />".CRLF;
	define('BR',"<br />".CRLF);
	
	/* get_userdata.php is not yet loaded, so set $is_a_user = false */
	$is_a_user = false;
	
define('__GOT_CONFIG__', 1);
}
?>
