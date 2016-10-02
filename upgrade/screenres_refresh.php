<?php
/*  ----------------------------------------------------------
    Power Phlogger  (c)2000-2002 Philip Iezzi
    $Id: screenres_refresh.php,v 1.8 2003/08/18 19:15:10 cvs_iezzi Exp $

    WARNING: DEPRECATED IN 2.2.2 !!!
	DO NOT USE THIS SCRIPT IN PPHLOGGER >= 2.2.2

    This will just update your existing screen 
    resolutions in your logs to the new "...x..."
    format. Please make sure that you got the most current 
    functions.php before running this script! (2.1.4+)
    If the script breaks because of the max_execution_time
    just run it again and again till you get the confirmation-
    message.
    -----------------------------------------------------------
*/

@set_time_limit(0);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$new_res = '';

$sql = "SELECT id FROM ".PPHL_TBL_USERS;
$res = mysqli_query($connected,$sql);
while ($row = mysqli_fetch_array($res)) {
	$id = $row['id'];
	$sql = "ALTER TABLE ".PPHL_DB_PREFIX.$id.$tbl_logs." "
		 . "CHANGE res res VARCHAR(9)";
	mysql_qry($sql);
	$sql = "SELECT logid,res FROM ".PPHL_DB_PREFIX.$id.$tbl_logs." "
	     . "WHERE LOCATE('x',res) = 0 AND res > '0'";
	$res2 = mysql_qry($sql);
	flush();
	while ($row2 = mysqli_fetch_array($res2)) {
		$new_res = full_screenres($row2['res']);
		if ($new_res != '') {
			$agt_sql = "UPDATE ".PPHL_DB_PREFIX.$id.$tbl_logs." "
			         . "SET time=time, "
					 . "res = '".$new_res."' "
					 . "WHERE logid = ".$row2['logid'];
			mysql_qry($agt_sql,false);
			$new_res = '';
		}
	}
}

echo $br.$br."<b>All screen resolutions have been successfully upgraded!</b>";
?>