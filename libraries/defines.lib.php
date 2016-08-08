<?php
// $Id: defines.lib.php,v 1.10 2002/06/28 18:56:52 cvs_iezzi Exp $

/**
 * DEFINES VARIABLES & CONSTANTS
 * Overview:
 *    PPHLOGGER_VERSION    (string) - PowerPhlogger version string
 *    PPHLOGGER_BUILDDATE  (string) - PowerPhlogger build date
 *    PHP_INT_VERSION      (int)    - eg: 30017 instead of 3.0.17 or
 *                                        40006 instead of 4.0.6RC3
 *    IS_WINDOWS           (bool)   - mark if PowerPhlogger running on windows
 *                                    server
 *    MYSQL_INT_VERSION    (int)    - eg: 32339 instead of 3.23.39
 *    USR_OS               (string) - the plateform (os) of the user
 *    USR_BROWSER_AGENT    (string) - the browser of the user
 *    USR_BROWSER_VER      (double) - the version of this browser
 */

// PowerPhlogger release
if (!defined('PPHLOGGER_VERSION')) {
    define('PPHLOGGER_VERSION', $curr_ver);
}
if (!defined('PPHLOGGER_BUILDDATE')) {
    define('PPHLOGGER_BUILDDATE', $build_date);
}

// php version
if (!defined('PHP_INT_VERSION')) {
    if (!preg_match('/([0-9]{1,2}).([0-9]{1,2}).([0-9]{1,2})/', phpversion(), $match)) {
        $result = preg_match('/([0-9]{1,2}).([0-9]{1,2})/', phpversion(), $match);
    }
    if (isset($match) && !empty($match[1])) {
        if (!isset($match[2])) {
            $match[2] = 0;
        }
        if (!isset($match[3])) {
            $match[3] = 0;
        }
        define('PHP_INT_VERSION', (int)sprintf('%d%02d%02d', $match[1], $match[2], $match[3]));
        unset($match);
    } else {
        define('PHP_INT_VERSION', 0);
    }
}

// use sessions in PHP4
if (!defined('PHP_SESS')) {
	if (PHP_INT_VERSION > 40000) define('PHP_SESS', 1);
}

// Whether the os php is running on is windows or not
if (!defined('IS_WINDOWS')) {
    if (defined('PHP_OS') &&  preg_match('/win/i', PHP_OS)) {
        define('IS_WINDOWS', 1);
    } else {
        define('IS_WINDOWS', 0);
    }
}

// MySQL Version
if (!defined('MYSQL_MAJOR_VERSION')) {
	
	$result = mysqli_query($connected,'SELECT VERSION() AS version');
	if ($result != FALSE && @mysqli_num_rows($result) > 0) {
		$row   = mysqli_fetch_array($result);
		$match = explode('.', $row['version']);
	} else {
		$result = @mysqli_query($connected,'SHOW VARIABLES LIKE \'version\'');
		if ($result != FALSE && @mysqli_num_rows($result) > 0){
			$row   = mysqli_fetch_row($result);
			$match = explode('.', $row[1]);
		}
	}
	
	if (!isset($match) || !isset($match[0])) {
		$match[0] = 3;
	}
	if (!isset($match[1])) {
		$match[1] = 21;
	}
	if (!isset($match[2])) {
		$match[2] = 0;
	}

    define('MYSQL_INT_VERSION', (int)sprintf('%d%02d%02d', $match[0], $match[1], intval($match[2])));
    unset($match);
}


// Determines platform (OS), browser and version of the user
// Based on a phpBuilder article:
//   see http://www.phpbuilder.net/columns/tim20000821.php
if (!defined('USR_OS') && !defined('UPD_CGI')) {
    if (!empty($_SERVER['HTTP_USER_AGENT'])) {
        $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
    }
    // 1. Platform
    if (strstr($HTTP_USER_AGENT, 'Win')) {
        define('USR_OS', 'Win');
    } else if (strstr($HTTP_USER_AGENT, 'Mac')) {
        define('USR_OS', 'Mac');
    } else if (strstr($HTTP_USER_AGENT, 'Linux')) {
        define('USR_OS', 'Linux');
    } else if (strstr($HTTP_USER_AGENT, 'Unix')) {
        define('USR_OS', 'Unix');
    } else {
        define('USR_OS', 'Other');
    }
    // 2. browser and version
    if (preg_match('/MSIE ([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) {
        define('USR_BROWSER_VER', $log_version[1]);
        define('USR_BROWSER_AGENT', 'IE');
    } else if (preg_match('/Opera(\/| )([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) {
        define('USR_BROWSER_VER', $log_version[2]);
        define('USR_BROWSER_AGENT', 'OPERA');
    } else if (preg_match('/Mozilla\/([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) {
        define('USR_BROWSER_VER', $log_version[1]);
        define('USR_BROWSER_AGENT', 'MOZILLA');
    } else if (preg_match('/Konqueror\/([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) {
        define('USR_BROWSER_VER', $log_version[1]);
        define('USR_BROWSER_AGENT', 'KONQUEROR');
    } else {
        define('USR_BROWSER_VER', 0);
        define('USR_BROWSER_AGENT', 'OTHER');
    }
}

// SERVER line-breaks
if(defined('PHP_OS') && stristr(PHP_OS,'win')) {
	define('CRLF',"\r\n");
} else if(defined('PHP_OS') && stristr(PHP_OS,'mac')) {
	define('CRLF',"\r");
} else {
	define('CRLF',"\n");
}

// CLIENT line-breaks
if(defined('USR_OS') && USR_OS == 'Win') {
	define('CRLF_C',"\r\n");
} else if(defined('USR_OS') && USR_OS == 'Mac') {
	define('CRLF_C',"\r");
} else {
	define('CRLF_C',"\n");
}

// Server software, version
if (!empty($_SERVER))
	$SERVER_SOFTWARE = @$_SERVER['SERVER_SOFTWARE'];
else if (!empty($HTTP_SERVER_VARS))
	$SERVER_SOFTWARE = @$HTTP_SERVER_VARS['SERVER_SOFTWARE'];

if (preg_match("/(Microsoft-IIS)\/([0-9]{1,2}.[0-9]{1,3})/i",$SERVER_SOFTWARE,$http_srv)) {
	define('HTTP_SRV'   , 'IIS');
	define('HTTP_SRV_V' , $http_srv[2]);
} else if (preg_match("/(Apache)\/([0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2})/i",$SERVER_SOFTWARE,$http_srv)) {
	define('HTTP_SRV'   , 'APACHE');
	define('HTTP_SRV_V' , $http_srv[2]);
} else {
	define('HTTP_SRV'   , '');
	define('HTTP_SRV_V' , '');
}

define('HTTP_STR', 'http://');

define('MAGIC_QUOTES_GPC',get_magic_quotes_gpc());
?>

