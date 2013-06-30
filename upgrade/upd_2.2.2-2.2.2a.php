<?php
/*  ---------------------------------------------------------------------
    $Id: upd_2.2.2-2.2.2a.php,v 1.12 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.2.2 to 2.2.2a !!
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
	$outp_file = CFG_LOG_PATH.'222a_'.(date('YmdHis')).'.html';
	$outp_fp = fopen($outp_file, 'w');
}



/*
 * calculating total execution time
 */
$upd222a_start = getmicrotime();

/*
 * remove DEFAULT NULL in indexed columns for compatibility with ISAM (mySQL 3.22.xx)
 */
$sql = "ALTER TABLE ".PPHL_TBL_AGENTS." "
     . "MODIFY browser varchar(8) NOT NULL DEFAULT '', "
     . "MODIFY version FLOAT NOT NULL DEFAULT '0', "
     . "MODIFY system varchar(15) NOT NULL DEFAULT ''";
mysql_qry($sql);

/*
 * ISAM tables only support index < 256 bytes !!
 * This forces us to shorten css down to VARCHAR(200)
 */
$sql = "ALTER TABLE ".PPHL_TBL_CSS." "
     . "MODIFY css varchar(200) NOT NULL default ''";
mysql_qry($sql);


/*
 * new CSS
 */
$sql = "INSERT INTO ".PPHL_TBL_CSS." VALUES (NULL, 0, 'tierwaisen', '800000', 'ffcf0f', '800000', 'navy', 'ffff99', '800000', '000000', '800000', 'ffffff', 'ffffff', '9e9e9e', 'navy', 'navy', '800000', '000000', 'E3E3D7', '800000', '800000', '800000', 'E3E3D7', '800000', '800000', 'CCCCCC', 'navy')";
mysql_qry($sql);


/*
 * get the agentid from the empty agent
 */
$agtid_empty = insert_agent('');


/*
 * update user tables
 */
$sql = "SELECT id,username FROM ".PPHL_TBL_USERS." ORDER BY id ASC";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	$this_tbl_logs    = PPHL_DB_PREFIX.$id.$tbl_logs;
	$sql = "UPDATE $this_tbl_logs SET agentid = $agtid_empty WHERE agentid IS NULL";
	mysql_qry($sql);
	$sql = "ALTER TABLE $this_tbl_logs MODIFY agentid INT UNSIGNED NOT NULL DEFAULT '0'";
	mysql_qry($sql);
	
	/* this INDEX was missing in a couple of previous versions... */
	$sql = "CREATE INDEX tld_ind ON $this_tbl_logs (tld)";
	mysql_query($sql);
}

// fixed type of mail_mod
$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET type = 'mta' WHERE setting = 'mail_mod'";
mysql_qry($sql);

/*
 * set current version string
 * e.g.:
 * 2.2.1  --> 2210
 * 2.2.2  --> 2220
 * 2.2.2a --> 2221
 */
$sql = "UPDATE ".PPHL_TBL_CACHE." SET cache = '2221' WHERE type = 'curr_ver'";
mysql_qry($sql, FALSE);


pphl_outp('[ total execution time: '.(getmicrotime()-$upd222a_start).' seconds]', TRUE);
pphl_outp($br.$br."<b>Your upgrade to v.2.2.2a was successful!</b>", TRUE);
?>