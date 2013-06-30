<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: change_state.php,v 1.7 2003/08/18 19:15:45 cvs_iezzi Exp $

    change_state.php - change configuration state of user
    --------------------------------------------------------- */

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

if (isset($conf)) {
	$N_conf = ($conf == 1) ? 0 : 1;
	$set_mysql = "conf = $N_conf";
} else if (isset($adm)) {
	$N_adm = ($adm == 1) ? 0 : 1;
	$set_mysql = "admin = $N_adm";
} else if (isset($demo)) {
	$N_demo = ($demo == 1) ? 0 : 1;
	$set_mysql = "demo = $N_demo";
} else if (isset($vis)) {
	$N_vis = ($vis == 1) ? 0 : 1;
	$set_mysql = "visible = $N_vis";
} else {
	Header("Location: ".$adm_view[2]);
	exit;
}

$sql = "UPDATE ".PPHL_TBL_USERS." SET ".$set_mysql.", last_access = last_access WHERE id = ".$id;
$res = mysql_query($sql);

Header("Location: ".$adm_view[2]);
exit;
?>