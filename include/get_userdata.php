<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: get_userdata.php,v 1.28 2003/08/18 19:19:16 cvs_iezzi Exp $

    get_userdata.php - get the current user's data
    --------------------------------------------------------- */

if (!defined('__GOT_USERDATA__')){
	
	if (isset($username)) $id = $username;
	if (!isset($id)) {
		Header("Location: $usr_view[0]?wrongpw=1");
		exit;
	}
	
	/* get the columns names and fill them into an array */
	$user_fields = getTableFields(PPHL_TBL_USERS);
	
	/* assign the user's values */
	$id = mysql_escape_string($id);
	$sql = "SELECT * FROM ".PPHL_TBL_USERS." WHERE id='$id' OR username='$id'";
	$res = mysqli_query($connected, $sql);
	if (mysqli_num_rows($res)) {
		$cnt_user_fields = count($user_fields);
		for($i = 0; $i < $cnt_user_fields; $i++) {
			${$user_fields[$i]} = mysqli_result($res, 0, $i); //get all user vars
		}
	} else {
		if (isset($redir_view)) {
			Header("Location: $redir_view?wrongpw=1");
			exit;
		} else {
			Header("Location: $usr_view[0]?wrongpw=1");
			exit;
		}
	}
	
	/* avoid cssid = 0, replace with default css */
	if ($cssid == 0) $cssid = 7;
	
	/* some account specific cookie names */
	$cookie_phloff = "phloff".$id;
	$cookie_same   = "same".$id;
	
	/* guest-user (for demonstration purpose) */
	if (!isset($password)) $password = '';
	$guest_pw = md5('guest');
	if (($password == $guest_pw) && $demo) {
		$guest = true;
	} else {
		$guest = false;
	}
	
	/* demo-mode settings: */
	if (isset($css_style)) $cssid = $css_style;
	if (isset($lang_demo) && $guest) $lang = $lang_demo;
	
	/* include the language localization file */
	checkLangFormat($lang);
	include CFG_LANG_PATH.$lang.'.inc.'.CFG_PHPEXT;
	
	/* include color variables */
	include INC_GETCSSCOLORS;
	
	/* assign table-names */
	$tbl_logs     = PPHL_DB_PREFIX.$id.$tbl_logs;
	$tbl_mpdl     = PPHL_DB_PREFIX.$id.$tbl_mpdl;
	
	/* get the users primary URL */
	$urls = explode("\n",$your_url);
	$primary_url = addHTTP(trim($urls[0]));
	
	/* get the calling page's URL */
	if (($st == 'js') || ($st == 'img')) { // script called by IMG-tag or JavaScript
		if (isset($HTTP_REFERER)) $url = $HTTP_REFERER;
		if (!isset($url)) $url = $primary_url; // just in case $url is still not set...
		if (!isset($referer)) $referer = ''; // in case referrer was not set till now
		/* returns a string with backslashes before characters that need to be quoted in database queries */
		$referer = addslashes_mq($referer);
	} else { // script called by php
		$url = addHTTP($HTTP_HOST.$REQUEST_URI);
		if (isset($HTTP_REFERER)) $referer = $HTTP_REFERER;
		if (!isset($referer)) $referer = ''; // in case referrer was not set till now
	}
	$url     = addslashes(urldecode($url));   // decodes any %## encoding in the given string
	$referer = addslashes(urldecode($referer));
	if(isset($title)) $title = urldecode($title);
	
	/* if userdata is loaded, set $is_a_user = true */
	$is_a_user = true;
	
	/* format the timestring */
	$datestart_formated = date($strDate,GMTtoUser($date_start,$is_a_user));
	
	/* user's current timestamp */
	$curr_usr_time = GMTtoUser($curr_gmt_time);
	
	/* in future versions we might want to use locales */
	// setlocale(LC_ALL, $lang);
	
define('__GOT_USERDATA__', 1);
}
?>
