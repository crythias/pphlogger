<?php
 /* ---------------------------------------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dlcount.php,v 1.15 2003/10/31 14:26:31 cvs_iezzi Exp $
    
    use this syntax, if yourfile.zip is located relative to your primary URL
    (the first URL you set in your userprofile):
    <a href="[path_to_pphlogger]/dlcount.php?id=[username]&url=/yourfile.zip">yourfile.zip</a>
    
    If the file is located anywhere else, use an absolute path: 
    <a href="[path_to_pphlogger]/dlcount.php?id=[username]&url=http://www.somewhereelse.com/yourfile.zip">yourfile.zip</a>
    
    Make sure you enter your correct username (without brakets '[]')!
    [path_to_pphlogger] must be the correct path to your pphlogger-directory,
	e.g. http://www.abc.com/pphlogger/ 
    --------------------------------------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
include "main_location.inc";
$redir_url = $url;
$dlurl = $url;
include INC_GETUSERDATA;

$dlurl = cutURL($dlurl,true);

if (!strstr($redir_url,"://")) {
	$redir_url = $primary_url.$redir_url;
}

if (!@fopen($redir_url,"r")) {
	header("Location: $redir_url");	//file does not exist !!
	exit;
}

if (!isset($pphloggdl)) $pphloggdl = '';

function sameDL() { //checks if file has been already downloaded before
	global $pphloggdl,$dlurl;
	$dls = explode("|",$pphloggdl);
	$cnt_dls = count($dls);
	for($i = 0; $i < $cnt_dls; $i++) {
		if(!strcmp($dls[$i],$dlurl)) return true;
	}
	$newdls = implode($dls,"|");
	$newdls = $newdls."$dlurl"."|";
	setcookie("pphloggdl", "$newdls");
	return false;
}

if (!sameDL()) {
	if (!isset($$cookie_phloff)) { //Check if Phlogger is switched off through cookie
		$sql = "UPDATE $tbl_mpdl SET hits = hits+1 WHERE type = 'dl' AND enabled AND url = '".addslashes(stripInput($dlurl))."'";
		$res = mysql_query($sql);
		if (!mysql_affected_rows()) {
			// delete old disabled entry, in case there is one
			@mysql_query("DELETE FROM $tbl_mpdl WHERE type = 'dl' AND url = '".addslashes(stripInput($dlurl))."'");
			// insert a new dl entry
			$sql = "INSERT INTO $tbl_mpdl (type,url,since) VALUES ('dl','".addslashes(stripInput($dlurl))."',$curr_gmt_time)";
			$res = mysql_query($sql);
		}
	}
}

header("Location: $redir_url");
exit;
?>