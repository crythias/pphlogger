<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: admin4.php,v 1.6 2003/06/19 20:46:11 cvs_iezzi Exp $

    admin4.php CSS editor
    --------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
$view = 'admin4';

include INC_EDITCSS;

include INC_FOOT;
?>