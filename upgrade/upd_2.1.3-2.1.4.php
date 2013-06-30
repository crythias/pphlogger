<?php
/*  ---------------------------------------------------
    upd_2.1.3-2.1.4.php
    $Id: upd_2.1.3-2.1.4.php,v 1.9 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.1.3(b) to 2.1.4(b|c)
    This is just updating your mySQL table-structure.
    Run this script AFTER having updated all the
    files in your /pphlogger directory!!
    
    IMPORTANT!:
    After running this upgrade you need to enter
    admin/admin1.php and click on the 'reload keywords'
    link to update your users search engine keywords.
    This will fill the new column 'seareng' that is
    used for search-engine stats.
    ---------------------------------------------------
*/


define('NO_SESS', 1);
define('PPHL_DB_LOCK', FALSE);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD ipblock text AFTER your_url";
mysql_qry($sql);

$sql = "UPDATE ".PPHL_TBL_USERS." SET last_access=last_access, ipblock = '127.0.0.1'";
mysql_qry($sql);

$sql = "SELECT id FROM ".PPHL_TBL_USERS;
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	$sql = "ALTER TABLE ".PPHL_DB_PREFIX.$id.$tbl_logs." "
		 . "ADD seareng varchar(60) NOT NULL AFTER referer";
	mysql_qry($sql);
	
	/* fixes bug in 2.1.3 that occured in mySQL 3.22 */
	$sql = "ALTER TABLE ".PPHL_DB_PREFIX.$id.$tbl_logs." "
	     . "CHANGE browser browser varchar(8) NOT NULL, "
		 . "CHANGE version version varchar(8) NOT NULL, "
		 . "CHANGE system system varchar(15) NOT NULL";
	mysql_qry($sql);
	
	$sql = "CREATE INDEX ind_seng ON ".PPHL_DB_PREFIX.$id.$tbl_logs." (seareng)";
	mysql_qry($sql);
}

echo $br.$br."<b>Your upgrade to v.2.1.4 was successful!</b>";
echo $br."Now please run <a href='".$adm_view[0]."' target='_blank'>/admin/index.".CFG_PHPEXT."</a> and click on the 'reload keywords' button.";
echo $br."Then you should run <a href='agent_refresh.".CFG_PHPEXT."' target='_blank'>/upgrade/agent_refresh.".CFG_PHPEXT."</a> to update your browser strings.";
echo $br."(if agent_refresh.".CFG_PHPEXT." breaks due to max_execution_time, just run it again and again)";
echo $br."After all this, please run the next upgrade script: <a href='upd_2.1.4c-2.1.4d.".CFG_PHPEXT."'>upd_2.1.4c-2.1.4d.".CFG_PHPEXT."</a>";
?>