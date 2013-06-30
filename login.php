<?php
 /* ----------------------------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: login.php,v 1.9 2003/06/19 20:47:57 cvs_iezzi Exp $

    login.php - login script
    this sets a cookie with the md5'd password

    If you wish to directly login into your account over a string or form, 
    please call it with the following two variables: usr, pw

    >>> login.php?usr=[your_username]&pw=[your_password]

    If your password is already md5 encrypted, use admpw:

    >>> login.php?usr=[your_username]&admpw=084e0343a0486ff05530df6c705c8bb4


   ---------------------------------------------------------------------------- */
include "main_location.inc";

if (defined('PHP_SESS')) {
	session_unregister("password");
	session_unregister("username");
} else {
	setcookie("username", "", time() - 3600);
	setcookie("password", "", time() - 3600);
}

if (!isset($js_onoff)) $js_onoff = 'off';
if (isset($admpw)) {
	$password = $admpw;
} else {
	if (isset($pw) && $js_onoff == 'off') {
		$password = md5($pw);
	} else {
		$password = (!empty($_POST)) ? $_POST['md5_pw'] : $HTTP_POST_VARS['md5_pw'];
	}
}
if (isset($usr))       $username = $usr;
if (!isset($password)) $password = $pw;

if (defined('PHP_SESS')) {
	session_register("password");
	session_register("username");
//	$GLOBALS['HTTP_SESSION_VARS']['username'] = $username;
//	$GLOBALS['HTTP_SESSION_VARS']['password'] = $password;
	if (!@ini_get('register_globals')) {
		$HTTP_SESSION_VARS['username'] = $username;
		$HTTP_SESSION_VARS['password'] = $password;
	}
} else {
	setcookie("username", $username);
	setcookie("password", $password);
}

Header("Location: $usr_view[1]");
exit;
?>