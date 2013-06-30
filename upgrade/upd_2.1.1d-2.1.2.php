<?php
/*  --------------------------------------------------
    upd_2.1.1d-2.1.2.php
    $Id: upd_2.1.1d-2.1.2.php,v 1.8 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.1.1d to 2.1.2
    This is just updating your mySQL table-structure.
    Run this script AFTER having updated all the
    files in your /pphlogger directory!!
    --------------------------------------------------
*/


define('NO_SESS', 1);
define('PPHL_DB_LOCK', FALSE);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

// user-defined dellog limit value:
$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
	 . "ADD last_access timestamp(14) AFTER date_start, "
	 . "ADD del_usr enum('Y','N') DEFAULT 'N' NOT NULL AFTER conf, "
     . "ADD kwspl enum('Y','N') DEFAULT 'N' NOT NULL, "
	 . "CHANGE your_url your_url blob";
mysql_qry($sql);

$sql = "UPDATE ".PPHL_TBL_USERS." SET your_url = TRIM('\n' FROM CONCAT(your_url, '\n', your_url2))";
// that would make life a lot easier, but some versions of mySQL don't support CONCAT_WS():
// $sql = "UPDATE ".PPHL_TBL_USERS." SET your_url = CONCAT_WS('\n', your_url, your_url2);";
mysql_qry($sql);

$sql = "ALTER TABLE ".PPHL_TBL_USERS." DROP your_url2, DROP max_file_size_kb";
mysql_qry($sql);

echo $br.$br."<b>Your upgrade to v.2.1.2 was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href=\"upd_2.1.2-2.1.3.".CFG_PHPEXT."\">upd_2.1.2-2.1.3.".CFG_PHPEXT."</a>";
?>