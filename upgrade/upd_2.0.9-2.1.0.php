<?php
/*  --------------------------------------------------
    upd_2.0.9-2.1.0.php
    $Id: upd_2.0.9-2.1.0.php,v 1.10 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.0.9 to 2.1.0
    This is just updating your mySQL table-structure
    prior to run this script, please update all
    files in your /pphlogger directory!!
    --------------------------------------------------
*/


define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include LIB_LOADSQL;

exec_sql_lines(SQL_DOMAINS, 'pphl_domains', PPHL_TBL_DOMAINS);

$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD ttf_file varchar(30) DEFAULT 'arialbd.ttf' NOT NULL, "
	 . "ADD ttf_size INT(2) DEFAULT '14' NOT NULL, "
	 . "ADD bg_c varchar(30) DEFAULT 'black', "
	 . "ADD fg_c varchar(30) DEFAULT '#C9C1FF', "
	 . "ADD bg_trans enum('Y','N') DEFAULT 'N' NOT NULL, "
	 . "ADD css varchar(30) DEFAULT 'phpeestyle.css' NOT NULL, "
	 . "ALTER timeout SET DEFAULT '1800', "
	 . "ALTER max_file_size_kb SET DEFAULT '300'";
mysql_qry($sql);

echo $br.$br."<b>your update to v.2.1.0 was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href=\"upd_2.1.0-2.1.0b.".CFG_PHPEXT."\">upd_2.1.0-2.1.0b.".CFG_PHPEXT."</a>";
?>