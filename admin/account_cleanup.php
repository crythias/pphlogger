<?php
// $Id: account_cleanup.php,v 1.9 2003/08/18 19:15:45 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "SELECT id FROM ".PPHL_TBL_USERS." WHERE del_usr = 1";
$res = mysqli_query($connected,$sql);
while ($row = mysqli_fetch_array($res)) {
	$id = $row['id'];
	$sql = "DELETE FROM ".PPHL_TBL_USERS." WHERE id = ".$id;
	mysqli_query($connected,$sql);
	if (mysqli_affected_rows()) {
		$sql = "DROP TABLE IF EXISTS ".PPHL_DB_PREFIX.$id.$tbl_logs.", ".PPHL_DB_PREFIX.$id.$tbl_mpdl;
		mysqli_query($connected,$sql);
		$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id = ".$id;
		mysqli_query($connected,$sql);
	}
}

Header("Location: $adm_view[2]");
exit;
?>