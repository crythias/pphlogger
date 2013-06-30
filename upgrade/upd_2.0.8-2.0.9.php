<?php
/*  --------------------------------------------------
    upd_2.0.8-2.0.9.php
    $Id: upd_2.0.8-2.0.9.php,v 1.8 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.0.8 to 2.0.9
    This is just updating your mySQL table-structure
    you still need to update all new files
    --------------------------------------------------
*/

define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "ALTER TABLE ".PPHL_TBL_USERS." ADD demo enum('Y','N') DEFAULT 'N' NOT NULL;";
mysql_qry($sql);

echo $br.$br."<b>your update to v.2.0.9 was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href=\"upd_2.0.9-2.1.0.".CFG_PHPEXT."\">upd_2.0.9-2.1.0.".CFG_PHPEXT."</a>";
?>