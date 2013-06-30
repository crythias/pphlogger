<?php
// $Id: load_css.php,v 1.4 2003/08/18 19:15:45 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET value = $N_css WHERE setting = 'cssid'";
$res = mysql_query($sql);
Header("Location: $HTTP_REFERER");
?>