<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: new_pw_create.php,v 1.6 2003/06/19 20:46:40 cvs_iezzi Exp $

    new_pw_create.php - issues a new password
    --------------------------------------------------------- */

$newpw=false;
define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";

if (isset($your_email)) {
	
	$newpw = newPw($your_username,$your_email);
	if ($newpw) {
		Header("Location: $usr_view[0]?newpw=1");
		exit;
	} else {
		Header("Location: ".DSP_NEWPW."?wrongpw=1");
		exit;
	}
	
} else if (isset($change_pw)) {

	if (isset($username)) $id = $username;
	include INC_GETUSERDATA;
	if(isset($check_pw)) $check_pw = md5($check_pw);
	if (($pw == $check_pw) && ($change_pw == $change_pw2)) {
		$newpw = newPw($username,$email,$change_pw);
	}
	if ($newpw) {
		Header("Location: $usr_view[0]?newpw=1");
		exit;
	} else {
		Header("Location: $usr_view[6]?wrongpw=1");
	}
	
}
?>