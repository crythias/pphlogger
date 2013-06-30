<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: phpixel.php,v 1.7 2003/06/19 20:46:40 cvs_iezzi Exp $

    phpixel.php - output of 1 pixel transparent/color gif
    credits to: Ulrich Babiak, Koeln 1999/11/30
    syntax: <img src="phpixel.php"> for a transparent pixel
        or: <img src="phpixel.php?c=FFFF00"> yellow
    --------------------------------------------------------- */

if(!defined('NO_MAIN')) define('NO_MAIN', 1);
define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH.'main_location.inc';
include PPHL_SCRIPT_PATH.'libraries/grab_globals.lib.'.CFG_PHPEXT;

// some Headers to prevent caching
Header("Content-type: image/gif");
Header("Expires: Wed, 11 Nov 1998 11:11:11 GMT");
Header("Cache-Control: no-cache");
Header("Cache-Control: must-revalidate");

if (!isset($c)) $c='';

// if # is in front of the hex-string
$rgb = str_replace("#", "", $c);

$r = hexdec (substr ($rgb, 0,2));
$g = hexdec (substr ($rgb, 2,2));
$b = hexdec (substr ($rgb, 4,2));

if($c){
	printf ("%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c",
	71,73,70,56,57,97,1,0,1,0,128,0,0,$r,$g,$b,0,0,0,44,0,0,0,0,1,0,1,0,0,2,2,68,1,0,59);
}
else{
	printf ("%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%",
	71,73,70,56,57,97,1,0,1,0,128,255,0,192,192,192,0,0,0,33,249,4,1,0,0,0,0,44,0,0,0,0,1,0,1,0,0,2,2,68,1,0,59);
}
?> 
