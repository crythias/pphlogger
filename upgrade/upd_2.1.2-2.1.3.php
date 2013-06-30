<?php
/*  --------------------------------------------------
    upd_2.1.2-2.1.3.php
    $Id: upd_2.1.2-2.1.3.php,v 1.10 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.1.2 to 2.1.3
    This is just updating your mySQL table-structure.
    Run this script AFTER having updated all the
    files in your /pphlogger directory!!
    This script may take quite a while if you got a 
    huge amount of logs in your tables. Don't worry if
    it gets cut by PHP's max_execution_time limit -
    just run it again and again till you see the 
    confirmation message: 
    "Your upgrade to v.2.1.3 was successful!"
    --------------------------------------------------
*/

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "SELECT id FROM ".PPHL_TBL_USERS;
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	$sql = "ALTER TABLE ".PPHL_DB_PREFIX.$id.$tbl_logs." "
		 . "ADD browser varchar(8) NOT NULL AFTER agent, "
		 . "ADD version varchar(8) NOT NULL AFTER browser, "
		 . "ADD system varchar(15) NOT NULL AFTER version, "
		 . "CHANGE res res VARCHAR(9)";
	mysql_qry($sql);
	$sql = "SELECT logid,agent FROM ".PPHL_DB_PREFIX.$id.$tbl_logs." "
	     . "WHERE browser IS NULL";
	echo $sql.$br; flush();
	$res2 = mysql_query($sql);
	while ($row2 = mysql_fetch_array($res2)) {
		$new_agt = extract_agent($row2['agent']);
		if (is_array($new_agt)) {
			$agt_sql = "UPDATE ".PPHL_DB_PREFIX.$id.$tbl_logs." "
			         . "SET time=time, "
					 . "browser = '".$new_agt[0]."', "
					 . "version = '".$new_agt[1]."', "
					 . "system = '".$new_agt[3]."' "
					 . "WHERE logid = '".$row2['logid']."'";
			mysql_query($agt_sql);
			if (mysql_error()) echo "<b>error: ".mysql_error()."</b>".$br;
		}
	}
	$sql = "CREATE INDEX ind_brows ON ".PPHL_DB_PREFIX.$id.$tbl_logs." (browser,version,system)";
	mysql_qry($sql);
	$sql = "CREATE INDEX ind_res ON ".PPHL_DB_PREFIX.$id.$tbl_logs." (res)";
	mysql_qry($sql);
	$sql = "UPDATE ".PPHL_DB_PREFIX.$id.$tbl_logs." SET time = time, hostname = NULL WHERE ip=hostname";
	mysql_qry($sql);
}

// add the timeout_onl to your user table
$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD timeout_onl int(5) DEFAULT '300' NOT NULL AFTER timeout";
mysql_qry($sql);

echo $br.$br."<b>Your upgrade to v.2.1.3 was successful!</b>";
echo $br."Now, you should run <a href=\"screenres_refresh.".CFG_PHPEXT."\" target=\"_blank\">screenres_refresh.".CFG_PHPEXT."</a> to update your screen resolution data to the new format.";
echo $br."Then, please run the next upgrade script: <a href=\"upd_2.1.3-2.1.4.".CFG_PHPEXT."\">upd_2.1.3-2.1.4.".CFG_PHPEXT."</a>";
?>