<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: newaccount_admin.php,v 1.8 2003/06/19 20:46:11 cvs_iezzi Exp $

    create_user.php - create a new useraccount
    --------------------------------------------------------- */

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_HEADSTUFF;

	/* settings for admin user creation */
	$admin    = (isset($admin)) ? 1 : 0;
	$demo     = (isset($demo))  ? 1 : 0;
	$conf     = 1;
	$pw_plain = $pw;
	
	include MOD_USERCREATE;
?>