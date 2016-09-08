<?php
/*  ---------------------------------------------------------------------
    $Id: upd_2.2.2b-2.2.3.php,v 1.8 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.2.2a/2.2.2b to 2.2.3 !!
    ---------------------------------------------------------------------
*/

/******************** CONFIGURATION **********************/
// Uncomment the following line if you would like to run 
// this script from the shell (php-cgi):
//   define('UPD_CGI', 1);

// Uncomment the following line if you wish to get the 
// upgrade output in your /logs-directory instead of the 
// standard browser output:
//   $logs_outp = 1;

// Set this to FALSE if you wish to hide most SQL-output:
   $mysql_outp = TRUE;
/*********************************************************/

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
define('PPHL_SCRIPT_PATH', '../');
define('NO_SESS', 1);
define('NO_SETUP_REDIR', 1); // avoid redirection to /admin/setup.php
include PPHL_SCRIPT_PATH."main_location.inc";



/*
 * running from shell (php-cgi)
 * Set default values:
 */
if (defined('UPD_CGI')) {
	if (isWritableDir(CFG_LOG_PATH)) $logs_outp = 1;
	$mysql_outp   = TRUE;
}

/*
 * create logfile
 */
if (isset($logs_outp)) {
	$outp_file = CFG_LOG_PATH.'223_'.(date('YmdHis')).'.html';
	$outp_fp = fopen($outp_file, 'w');
}

/*
 * calculating total execution time
 */
$upd223_start = getmicrotime();


/*
 * update user tables
 * (pphl_xxxxx_ipcheck is deprecated and no longer used in 2.2.3)
 */
$sql = "SELECT id,username FROM ".PPHL_TBL_USERS." ORDER BY id ASC";
$res = mysqli_query($connected,$sql);
while ($row = mysqli_fetch_array($res)) {
	$id = $row['id'];
	$this_tbl_logs    = PPHL_DB_PREFIX.$id.$tbl_logs;
	$this_tbl_ipcheck = PPHL_DB_PREFIX.$id.'_ipcheck';
	
	$sql = "ALTER TABLE $this_tbl_logs "
	     . "ADD t_reload int(10) UNSIGNED NOT NULL DEFAULT '0' AFTER time";
	$res2 = mysql_qry($sql);
	if ($res2) { // only execute this if above statement was correct to avoid double-execution
		$sql = "UPDATE $this_tbl_logs SET t_reload = time + online";
		mysql_qry($sql);
	}
	$sql = "ALTER TABLE $this_tbl_logs ADD INDEX trel_ind(t_reload)";
	mysql_qry($sql);
	$sql = "ALTER TABLE $this_tbl_logs ADD INDEX time_ind(time)";
	mysql_qry($sql);
	$sql = "DROP TABLE $this_tbl_ipcheck";
	mysql_qry($sql);
}

/*
 * change traceroute URL to getnet.com
 */
$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET value = 'http://www.getnet.com/cgi-bin/trace?' "
     . "WHERE setting = 'traceroute' AND value = 'http://www.above.net/cgi-bin/trace?'";
mysql_qry($sql);

/*
 * add new settings
 */
$sql = "INSERT INTO ".PPHL_TBL_SETTINGS." (setting, value, type) VALUES ('dellog_lim_prob', '30', 'int')";
mysql_qry($sql);
$sql = "INSERT INTO ".PPHL_TBL_SETTINGS." (setting, value, type) VALUES ('delpath_lim_prob', '20', 'int')";
mysql_qry($sql);

// fixed type of mail_mod
$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET type = 'mta' WHERE setting = 'mail_mod'";
mysql_qry($sql);

/*
 * set current version string
 * e.g.:
 * 2.2.2  --> 2220
 * 2.2.2a --> 2221
 * 2.2.3  --> 2230
 */
$sql = "UPDATE ".PPHL_TBL_CACHE." SET cache = '2230' WHERE type = 'curr_ver'";
mysql_qry($sql, FALSE);


pphl_outp('[ total execution time: '.(getmicrotime()-$upd223_start).' seconds]', TRUE);
pphl_outp($br.$br."<b>Your upgrade to v.2.2.3 was successful!</b>", TRUE);
?>