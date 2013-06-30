<?php
// $Id: grab_globals.lib.php,v 1.4 2002/01/03 17:24:55 cvs_iezzi Exp $

/**
 * This library grabs the names and values of the variables sent or posted to a
 * script in the '$HTTP_*_VARS' arrays and sets simple globals variables from
 * them
 */
if (!defined('__LIB_GRAB_GLOBALS__')) {
	
	if (!empty($_GET))                   { extract($_GET); }
	else if (!empty($HTTP_GET_VARS))     { extract($HTTP_GET_VARS); }
	
	if (!empty($_POST))                  { extract($_POST); }
	else if (!empty($HTTP_POST_VARS))    { extract($HTTP_POST_VARS); }
	
	if (!empty($_COOKIE))                { extract($_COOKIE); }
	else if (!empty($HTTP_COOKIE_VARS))  { extract($HTTP_COOKIE_VARS); }
	
	if (!empty($_ENV))                   { extract($_ENV); }
	else if (!empty($HTTP_ENV_VARS))     { extract($HTTP_ENV_VARS); }
	
	if (!empty($_SERVER))                { extract($_SERVER); }
	else if (!empty($HTTP_SERVER_VARS))  { extract($HTTP_SERVER_VARS); }
	
	if (!empty($_SESSION))               { extract($_SESSION); }
	else if (!empty($HTTP_SESSION_VARS)) { extract($HTTP_SESSION_VARS); }
	
	if (!empty($_FILES)) {
		while (list($name, $value) = each($_FILES)) {
			$$name = $value['tmp_name'];
		}
	} else if (!empty($HTTP_POST_FILES)) {
		while (list($name, $value) = each($HTTP_POST_FILES)) {
			$$name = $value['tmp_name'];
		}
	} // end if
	
define('__LIB_GRAB_GLOBALS__', 1);
}
?>