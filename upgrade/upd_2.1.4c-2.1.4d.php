<?php
/*  ---------------------------------------------------
    upd_2.1.4c-2.1.4d.php
    $Id: upd_2.1.4c-2.1.4d.php,v 1.9 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.1.4c to 2.1.4d
    running this script is completely optional. It just
    changes your_url, ipblock, cache from BLOB to TEXT
    datatype.
    ---------------------------------------------------
*/

define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "CHANGE ipblock ipblock text, "
	 . "CHANGE your_url your_url text";
mysql_qry($sql);

$sql = "ALTER TABLE ".PPHL_TBL_CACHE." "
	 . "CHANGE cache cache text";
mysql_qry($sql);

echo $br.$br."<b>Your upgrade to v.2.1.4d was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href='upd_2.1.4d-2.2.0.".CFG_PHPEXT."'>upd_2.1.4d-2.2.0.".CFG_PHPEXT."</a>";
?>