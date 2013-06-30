<?php
// $Id: main_location.inc,v 1.9 2003/08/18 20:02:52 cvs_iezzi Exp $

if(!defined('PPHL_SCRIPT_PATH')) define('PPHL_SCRIPT_PATH', './');

/*
* WARNING - PowerPhlogger file extensions:
* You need to rename all your files manually or run 
* /upgrade/extchange.php in order to get this to work.
* For further information please check the FAQ section in doc.html
*/
if(!defined('CFG_PHPEXT'))       define('CFG_PHPEXT'      , 'php');
/*
* If you need to change the location of your config file (config.inc.php),
* change it here. Replace PPHL_SCRIPT_PATH with your own path (quoted).
* Instead of using a relative path you could also use a server path like
* 'c:/apache/htdocs/includes/' or '/home/powerphlogger/includes/'
*/
if(!defined('PPHL_CFG_PATH'))    define('PPHL_CFG_PATH'   , PPHL_SCRIPT_PATH);
/*
* While upgrading your MySQL database structure with an upgrade script
* it is often recommended to completely lock access to your database
* during this time. Set this to TRUE during the upgrade process.
* WARNING: Don't forget to switch this back to FALSE afterwards!!!
*/
if(!defined('PPHL_DB_LOCK'))     define('PPHL_DB_LOCK'    , FALSE);


// include the main PPhlogger configuration file
if(!defined('NO_MAIN')) {
	$dummy = (PPHL_DB_LOCK) ? '-dummy' : '';
	include PPHL_SCRIPT_PATH.'main'.$dummy.'.'.CFG_PHPEXT;
}
?>