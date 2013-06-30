<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: trace.php,v 1.6 2003/06/19 20:46:40 cvs_iezzi Exp $
    show traceroute
    
    based on php-trace <http://www.theworldsend.net>
    written by webmaster@theworldsend.net, Aug. 2001
    --------------------------------------------------------- */

if(!defined('NO_MAIN')) define('NO_MAIN', 1);
define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH.'main_location.inc';
include PPHL_SCRIPT_PATH.'libraries/grab_globals.lib.'.CFG_PHPEXT;


/*
 * validIP()
 * checks the syntax of an IP.
 */
function validIP($ip) {
	if( ereg("^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})$", $ip,$regs_array) ) {
		if( ($regs_array[1] == 127 or $regs_array[1] > 223 or $regs_array[1] <= 0)
		    or $regs_array[2] > 255
			or $regs_array[3] > 255
			or ($regs_array[4] > 254 or $regs_array[4] <= 0)) {
			return FALSE;
		} else {
			return TRUE;
		}
	} else {
		return FALSE;
	}
}

if (defined('PHP_OS') && eregi('win', PHP_OS)) define('IS_WINDOWS', 1);
else define('IS_WINDOWS', 0);

// check if request came from the same host
if(!eregi($HTTP_HOST,$HTTP_REFERER)) {
	echo 'Traceroute information is only allowed if referred from the following host: '.$HTTP_HOST;
	exit;
}

// check for malicious string
if (ereg(" ",@$host)) {
	echo 'No Space in Host field allowed !';
	exit;
}


if (@$host <> "" && validIP($host)) {
	echo("<strong>PowerPhlogger Traceroute Output:</strong><br>"); 
	echo '<pre>';
	// $host = escapeshellarg($host);
	if (IS_WINDOWS) system("tracert $host");
	else            system("traceroute $host");
	echo '</pre>';
} else {
	echo 'Please provide us with a valid IP! (e.g. trace.php?host=xxx.xxx.xxx.xxx)';
}
?>
