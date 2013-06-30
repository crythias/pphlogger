<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: admin_cookie.php,v 1.6 2003/06/19 20:46:11 cvs_iezzi Exp $

    admin_cookie.php - set the admin cookie
    --------------------------------------------------------- */

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$cookie_adm = "admin_rulez";

if (isset($cookie_switch)) {
	if ($cookie_switch == "off")
		setcookie($cookie_adm, "1", $lifetime, "/");
	else 
		setcookie($cookie_adm, "", time(), "/");
}

if (isset($hideusers_onoff)) { //turn showref on/off
	if (isset($hideusers)) setcookie("hideusers", "", time() - 3600);
	else setcookie("hideusers", "1", $lifetime);
}

Header("Location: $HTTP_REFERER");
exit;
?>