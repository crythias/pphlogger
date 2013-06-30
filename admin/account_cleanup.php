<?php
// $Id: account_cleanup.php,v 1.9 2003/08/18 19:15:45 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "SELECT id FROM ".PPHL_TBL_USERS." WHERE del_usr = 1";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	$sql = "DELETE FROM ".PPHL_TBL_USERS." WHERE id = ".$id;
	mysql_query($sql);
	if (mysql_affected_rows()) {
		$sql = "DROP TABLE IF EXISTS ".PPHL_DB_PREFIX.$id.$tbl_logs.", ".PPHL_DB_PREFIX.$id.$tbl_mpdl;
		mysql_query($sql);
		$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id = ".$id;
		mysql_query($sql);
	}
}

Header("Location: $adm_view[2]");
exit;
?>