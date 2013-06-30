<?php
/*  --------------------------------------------------
    upd_2.1.0b-2.1.0c.php3
    $Id: upd_2.1.0b-2.1.0c.php,v 1.8 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.1.0b to 2.1.0c
    This is just updating your mySQL table-structure
    prior to run this script, please update all
    files in your /pphlogger directory!!
    --------------------------------------------------
*/

define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD lang char(2) DEFAULT 'en' NOT NULL;"; //change the DEFAULT value to your default language
mysql_qry($sql);

echo $br."<b>Your upgrade to v.2.1.0c was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href=\"upd_2.1.0c-2.1.1.".CFG_PHPEXT."\"'>upd_2.1.0c-2.1.1.".CFG_PHPEXT."</a>";
?>