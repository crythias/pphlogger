<?php
///////////////////////////////////////////////////////////////////////////////
//                                                                           //
//   Copyright (c) 2000-2003  Philip Iezzi [pipo@iezzi.ch]                   //
//   http://www.phpee.com                                                    //
//                                                                           //
//   This file is part of PowerPhlogger.                                     //
//                                                                           //
//   PowerPhlogger is free software; you can redistribute it and/or modify   //
//   it under the terms of the GNU General Public License as published by    //
//   the Free Software Foundation; either version 2 of the License, or       //
//   (at your option) any later version.                                     //
//                                                                           //
//   PowerPhlogger is distributed in the hope that it will be useful,        //
//   but WITHOUT ANY WARRANTY; without even the implied warranty of          //
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           //
//   GNU General Public License for more details.                            //
//                                                                           //
//   You should have received a copy of the GNU General Public License       //
//   along with PowerPhlogger; if not, write to the Free Software            //
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA //
///////////////////////////////////////////////////////////////////////////////

// $Id: config.inc.php,v 1.14 2003/08/18 19:10:02 cvs_iezzi Exp $

if (!defined('__GOT_MYSQL__')){
	
	################################################################################
	#           mySQL SETTINGS                                                     #
	################################################################################
		define('PPHL_DB_HOST'      , 'localhost');      // MySQL server hostname
		define('PPHL_DB_NAME'      , 'your_db');        // name of your database
		define('PPHL_DB_USER'      , 'your_username');  // username
		define('PPHL_DB_PWD'       , 'your_pw');        // password
		
	######## optional settings: ####################################################
		
		// Leaving this empty defaults to port 3306
		define('PPHL_DB_PORT'      , '');
		// To use persistent connections, change this to TRUE
		define('PPHL_DB_PERSISTENT', FALSE);
		
		//in case you need a prefix in front of your tables...
		define('PPHL_DB_PREFIX'    , 'pphl_');
		
		//please enter your old prefix here. The update-script
		//going to change all your tables automatically to the
		//new prefix set above.
		define('PPHL_DB_PREFIX_OLD', '');
	################################################################################
	
	//-------------------------------------------------------------------------------
	// nothing needs to be changed beyond this line.
	// All further settings can be configured in the setup script: /admin/setup.php
	//-------------------------------------------------------------------------------
	
	/* connect to mySQL database */
	$cfunction = (PPHL_DB_PERSISTENT) ? 'mysql_pconnect' : 'mysql_connect';
	if(!function_exists($cfunction)) die('MySQL support is not available in this PHP configuration!');
	function str_is_int($str) {
		$var = intval($str);
		return ("$str" == "$var");
	}
	$mysql_port = (str_is_int(PPHL_DB_PORT)) ? ':'.PPHL_DB_PORT : '';
	$connected = @$cfunction(PPHL_DB_HOST.$mysql_port, PPHL_DB_USER, PPHL_DB_PWD)
	 or die("unable to connect to database on '".PPHL_DB_HOST."' with user '".PPHL_DB_USER."'<br />".
	        '('.mysql_errno().') '.mysql_error().'<br />'.
			"Please check your settings in config.inc.php !<br />");
	mysql_select_db(PPHL_DB_NAME) or die("Please first create your database '".PPHL_DB_NAME."' and make sure your user got the correct access rights on it !"); ;
	
define('__GOT_MYSQL__', 1);
}
?>
