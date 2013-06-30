<?php
 /* --------------------------------------------------------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: pphlogger.js.php,v 1.9 2003/06/19 20:47:57 cvs_iezzi Exp $

    pphlogger.js.php - outputs the pphlogger.js file

    Instead of storing the pphlogger.js file on your own server you could call this script on the server 
    where PowerPhlogger is located. Like this you would always get the most current pphlogger.js and you 
	would never need to think about upgrading that file anymore.
    The drawback of this way of course is speed - each time a visitor enters your page the site needs to 
    make 2 connections to PowerPhlogger instead of one.
    
    Call this script like this:
    ------------------------------------------------------------------------------------------------------
      <script language="JavaScript" src="http://[url]/pphlogger/pphlogger.js.php?id=[username]"></script>
    ------------------------------------------------------------------------------------------------------
    
    pphlogger.js.php is also used in edSettings.php where the user is able to download the current file.
   -------------------------------------------------------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('__PPHLOGGERJS_PHP__', 1);
include "main_location.inc";
include INC_GETUSERDATA;

header("Content-disposition: filename=pphlogger.js");
header("Content-type: application/octetstream");
header("Pragma: no-cache");
header("Expires: 0");

/* load the pphlogger.js-template and customize it: */
$fp = fopen(INC_PPHLOGGERJS, 'r');
$pphloggerjs_file = fread($fp, filesize(INC_PPHLOGGERJS));
fclose($fp);
$pphloggerjs_file = str_replace('{CFG_PHPEXT}',CFG_PHPEXT,$pphloggerjs_file); // ugly work-around
while(preg_match('/(%.+%)/U',$pphloggerjs_file, $matches) == TRUE){
	$matchvar = str_replace('%','',$matches[1]);
	if (isset($$matchvar)) {
		$pphloggerjs_file = str_replace($matches[1], $$matchvar, $pphloggerjs_file);
	}
}
print $pphloggerjs_file;
?>
