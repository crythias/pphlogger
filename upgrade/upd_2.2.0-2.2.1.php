<?php
/*  ---------------------------------------------------
    $Id: upd_2.2.0-2.2.1.php,v 1.15 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.2.0 (final) to 2.2.1
    ---------------------------------------------------
*/

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD gd_font int(2) DEFAULT '3' NOT NULL AFTER ttf_file";
mysql_qry($sql);

echo $br."<b>Your upgrade to v.2.2.1 was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href=\"upd_2.2.1-2.2.2.".CFG_PHPEXT."\">upd_2.2.1-2.2.2.".CFG_PHPEXT."</a>";
?>