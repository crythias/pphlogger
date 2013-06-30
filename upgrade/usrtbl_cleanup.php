<?php
 /* ---------------------------------------------------------------
    Remove orphaned PPhlogger user-tables
    
    $Id: usrtbl_cleanup.php,v 1.4 2003/08/18 19:15:10 cvs_iezzi Exp $
    
	WARNING: This script will remove all usertables that don't 
	refer to an existing useraccount!
	DO NOT USE THIS SCRIPT FOR VERSIONS < 2.2.2 !!!
    --------------------------------------------------------------- */

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('NO_SETUP_REDIR', 1); // avoid redirection to /admin/setup.php
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";


$usrIDs = getUseridArr();
$cnt_orphans = 0;

if ($usrIDs) {
	$sql = "SHOW TABLES LIKE '%_____\_logs'";
	$res = mysql_query($sql);
	while ($row = @mysql_fetch_array($res)) {
		if(eregi("([0-9]{5})",$row[0],$id_arr)) {
			$id = $id_arr[0];
			if (!isInArray($id,$usrIDs)) {
				$sql = "DROP TABLE IF EXISTS ".PPHL_DB_PREFIX.$id.$tbl_logs.", ".PPHL_DB_PREFIX.$id.$tbl_mpdl.", ".PPHL_DB_PREFIX.$id.$tbl_ipcheck;
				mysql_qry($sql);
				$sql = "DROP TABLE IF EXISTS ".PPHL_DB_PREFIX_OLD.$id.$tbl_logs.", ".PPHL_DB_PREFIX_OLD.$id.$tbl_mpdl.", ".PPHL_DB_PREFIX_OLD.$id.$tbl_ipcheck;
				mysql_qry($sql);
				$cnt_orphans++;
			}
		}
	}
}

echo $br."<b>All orphaned tables have been removed!</b> (total $cnt_orphans user-accounts)";
?>