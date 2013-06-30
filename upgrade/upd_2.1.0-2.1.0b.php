<?php
/*  --------------------------------------------------
    upd_2.1.0-2.1.0b.php
    $Id: upd_2.1.0-2.1.0b.php,v 1.11 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.1.0 to 2.1.0b
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

$ok = true;

//Load the new pphl_domains table
$sql = "DROP TABLE IF EXISTS ".PPHL_TBL_DOMAINS;
mysql_qry($sql);
exec_sql_lines(SQL_DOMAINS, 'pphl_domains', PPHL_TBL_DOMAINS);

//minor changes in pphlogger_userlog and pphlogger_users
$sql = "ALTER TABLE ".PPHL_TBL_USERLOG." "
     . "ADD ok enum('Y','N') DEFAULT 'N' NOT NULL;";
mysql_qry($sql);
$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD gmt int(2) DEFAULT '1' NOT NULL, " //change the DEFAULT value to your GMT
	 . "ALTER visible SET DEFAULT 'N';"; 
mysql_qry($sql);

//scan through all your user's log-tables and extract TLD-names into a new column
$sql = "SELECT id FROM ".PPHL_TBL_USERS;
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	$sql = "ALTER TABLE ".PPHL_DB_PREFIX.$id.$tbl_logs." ADD tld varchar(8) NOT NULL AFTER hostname;";
	mysql_qry($sql);
	$sql = "UPDATE ".PPHL_DB_PREFIX.$id.$tbl_logs." SET tld=LCASE(SUBSTRING_INDEX(hostname, '.', -1)),time=time WHERE (hostname<>ip);";
	mysql_qry($sql);
	$sql = "CREATE INDEX tld_ind ON ".$id."_logs (tld);";
	mysql_qry($sql);
}

echo $br.$br."<b>Your upgrade to v.2.1.0b was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href=\"upd_2.1.0b-2.1.0c.".CFG_PHPEXT."\">upd_2.1.0b-2.1.0c.".CFG_PHPEXT."</a>";
?>