<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: newaccount_self.php,v 1.8 2003/06/19 20:47:57 cvs_iezzi Exp $

    newaccount.php - user self sign-up
    --------------------------------------------------------- */


include "main_location.inc";
include INC_HEADSTUFF;

if ($signup_ok) {
	/* defaults for user self sign-up */
	$admin    = 0; // default: admin-user = false
	$demo     = 0; // default: demo-mode = Off
	$conf     = 0; // default: confirmed = false
	$pw_plain = randPw($pass_length); // default: generated pw
	include MOD_USERCREATE;
} else { // signup_ok=false
	Header("Location: $usr_view[0]");
	exit;
}
?>