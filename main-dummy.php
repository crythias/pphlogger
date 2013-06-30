<?php
 /* ------------------------------------------------------------------
    Power Phlogger  (c)2000-2001 Philip Iezzi
    $Id: main-dummy.php,v 1.4 2003/06/19 06:36:50 cvs_iezzi Exp $

    main.php.dummy - dummy main.php for use during system maintenance
	This file will prevent all PPhlogger-files to access the DB 
	without returning any errors.
	IT IS STRONGLY RECOMMENDED TO USE THIS FILE FOR UPGRADES TO 
	PPHLOGGER 2.2.2 AND UP!
	
	Use this file while upgrading PPhlogger:
	- upload all new pphlogger-files to a NEW directory
	- replace your main.php in your OLD directory with this file
	  (rename main.php.dummy --> main.php)
	- run the PPhlogger upgrade script in your NEW directory
	  e.g. /upgrade/upd_2.2.1-2.2.2.php
	- test the new version from the NEW directory
	- remove the OLD directory and move the NEW one to its place
	- DONE !
    ------------------------------------------------------------------ */

define('LIB_GRABGLOBALS', PPHL_SCRIPT_PATH.'libraries/grab_globals.lib.'.CFG_PHPEXT);
$img_dir         = PPHL_SCRIPT_PATH.'img/';

if (!defined('__MAIN_DUMMY__')){
	include LIB_GRABGLOBALS;
	define('__MAIN_DUMMY__', 1);
}

if (isset($st)) {
	switch(@$st) {
		
		/* script was called through IMG-Tag */
		case 'img':
			Header("Content-type: image/gif");
			readfile($img_dir.'clear.gif');
		break;
		
		/* script was called through JavaScript */
		case 'js':
			echo "document.open()\ndocument.write(' ')\ndocument.close()\n";
		break;
		
		/* script was called directly in PHP */
		case 'php':
			echo '';
		break;
		
		/* script was called directly in PHP using JS for extended information */
		case 'phpjs':
			echo '';
		break;
		
		default:
			echo "document.open()\ndocument.write(' ')\ndocument.close()\n";
		break;
	}
} else {
	if (defined('__PPHLOGGERJS_PHP__')) {
		echo "document.open()\ndocument.write(' ')\ndocument.close()\n";
	} else {
		echo 'Sorry, PowerPhlogger services currently are not available due to maintenance!';
	}
	exit;
}
?>