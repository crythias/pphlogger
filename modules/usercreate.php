<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: usercreate.php,v 1.17 2003/08/18 19:14:47 cvs_iezzi Exp $
	
    usercreate.php - module to create a new useraccount
    --------------------------------------------------------- */

include LIB_LOADSQL;
$username = $N_username;

/* the refering URL */
$returnURL = _cutQueryPart($HTTP_REFERER);

/* removes spaces in username */
$username = str_replace (" ", "_", trim($username));

/* Username-syntax:
 * - characters: Aa-Zz
 * - digits: 0-9
 * - special characters: _ . -
 * - length must be 30 characters or less
 * - username has to contain at least one character Aa-Zz
 */
if (!preg_match("/^[A-Za-z0-9_.-]{1,30}$/",$username) || !preg_match("/[A-Za-z]/",$username)) {
	Header("Location: $returnURL?msg=badusername");
	exit;
}

/* check if username doesn't exist yet */
$res = mysqli_query($connected,"SELECT username FROM ".PPHL_TBL_USERS." WHERE username = '".$username."'");
if (!@mysqli_num_rows($res)) {
	
	if (!email_is_valid($email)) {
		Header("Location: $returnURL?msg=novalidemail");
		exit;
	}
	
	$id = createID();
	while (check_if_exists($id)) $id = createID();
	
	$pw=md5($pw_plain);
	
	/* remove whitespace and add the missing 'http://' in your_url */
	$N_your_url = addHTTP_all(trim($N_your_url));
	
	/* this will insert a new user into your user-table, setting the starting date to the admin's timezone */
	$sql = "INSERT INTO ".PPHL_TBL_USERS." (id,username,pw,admin,demo,email,date_start,last_access,your_url,gmt,lang,conf) "
	     . "VALUES ($id,'$username','$pw',$admin,$demo,'$email',$curr_gmt_time,$curr_gmt_time,'$N_your_url','$N_gmt','$N_lang',$conf)";
	$res = mysqli_query($connected,$sql);
	
	
	if (!$res) {
		Header("Location: $returnURL?msg=notcreated"); //break here if it was not successful
		exit;
	}
	
	/* create all user-tables */
	exec_sql_lines(SQL_LOGS,    "pphl_xxxxx_logs",    PPHL_DB_PREFIX.$id.$tbl_logs);
	exec_sql_lines(SQL_MPDL,    "pphl_xxxxx_mpdl",    PPHL_DB_PREFIX.$id.$tbl_mpdl);
	
	include INC_PPHLOGGERSEND;
	Header("Location: $returnURL?usr=$N_username");
	exit;
} else {
	Header("Location: $returnURL?msg=sameuser");
	exit;
}
?>
