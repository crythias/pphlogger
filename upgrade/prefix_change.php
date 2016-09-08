<?php
 /* ---------------------------------------------------------------
    prefix changer for PowerPhlogger tables
    
    $Id: prefix_change.php,v 1.8 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Before running this script, please make sure you have set the
    correct PPHL_DB_PREFIX and PPHL_DB_PREFIX_OLD in config.inc.php !!!
    --------------------------------------------------------------- */

define('NO_MAIN', 1);
define('PPHL_DB_LOCK', FALSE);
define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH.'main_location.inc';
include PPHL_SCRIPT_PATH.'config.inc.'.CFG_PHPEXT;

/* check if 'pphlogger_' was used in old admin table names */
$sql = "SELECT COUNT(*) FROM ".PPHL_DB_PREFIX_OLD."pphlogger_users";
$res = mysqli_query($connected,$sql);
$adm_special_prefix = ($res) ? 'pphlogger_' : ''; // 'pphlogger_' deprecated in 2.2.2

/* old table-names */
define('PPHL_TBL_SETTINGS_OLD', PPHL_DB_PREFIX_OLD.$adm_special_prefix.'settings');
define('PPHL_TBL_DOMAINS_OLD' , PPHL_DB_PREFIX_OLD.$adm_special_prefix.'domains');
define('PPHL_TBL_USERLOG_OLD' , PPHL_DB_PREFIX_OLD.$adm_special_prefix.'userlog');
define('PPHL_TBL_USERS_OLD'   , PPHL_DB_PREFIX_OLD.$adm_special_prefix.'users');
define('PPHL_TBL_CACHE_OLD'   , PPHL_DB_PREFIX_OLD.$adm_special_prefix.'cache');
define('PPHL_TBL_CSS_OLD'     , PPHL_DB_PREFIX_OLD.$adm_special_prefix.'css');
define('PPHL_TBL_AGENTS_OLD'  , PPHL_DB_PREFIX_OLD.$adm_special_prefix.'agents');

$sql = "LOCK TABLES ".PPHL_TBL_SETTINGS_OLD.", ".
                     .PPHL_TBL_DOMAINS_OLD.",".
                     .PPHL_TBL_USERLOG_OLD.",".
                     .PPHL_TBL_USERS_OLD.",".
                     .PPHL_TBL_CACHE_OLD.",".
                     .PPHL_TBL_CSS_OLD.",".
                     .PPHL_TBL_AGENTS_OLD;
mysqli_query($connected,$sql);

function TblNameChange($from, $to) {
	$sql = "ALTER TABLE $from RENAME AS $to";
	$res = mysqli_query($connected,$sql);
	if ($res) echo "$from --> $to<br>\n";
}

TblNameChange(PPHL_TBL_SETTINGS_OLD, PPHL_TBL_SETTINGS);
TblNameChange(PPHL_TBL_DOMAINS_OLD,  PPHL_TBL_DOMAINS);
TblNameChange(PPHL_TBL_USERLOG_OLD,  PPHL_TBL_USERLOG);
TblNameChange(PPHL_TBL_USERS_OLD,    PPHL_TBL_USERS);
TblNameChange(PPHL_TBL_CACHE_OLD,    PPHL_TBL_CACHE);
TblNameChange(PPHL_TBL_CSS_OLD,      PPHL_TBL_CSS);
TblNameChange(PPHL_TBL_AGENTS_OLD,   PPHL_TBL_AGENTS);


$sql = "SELECT id FROM ".PPHL_TBL_USERS." ORDER BY id ASC";
$res = mysqli_query($connected,$sql);
while ($row = @mysqli_fetch_array($res)) {
	
	$id = $row['id'];
	
	/* old table-names */
	$tbl_logs_old      = PPHL_DB_PREFIX_OLD.$id.'_logs';
	$tbl_ipcheck_old   = PPHL_DB_PREFIX_OLD.$id.'_ipcheck';
	$tbl_mpdl_old      = PPHL_DB_PREFIX_OLD.$id.'_mpdl';
	/* new table-names */
	$tbl_logs          = PPHL_DB_PREFIX.$id.'_logs';
	$tbl_ipcheck       = PPHL_DB_PREFIX.$id.'_ipcheck';
	$tbl_mpdl          = PPHL_DB_PREFIX.$id.'_mpdl';
	
	TblNameChange($tbl_logs_old,    $tbl_logs);
	TblNameChange($tbl_ipcheck_old, $tbl_ipcheck);
	TblNameChange($tbl_mpdl_old,    $tbl_mpdl);
}

$sql = "UNLOCK TABLES";
mysqli_query($connected,$sql);

echo "<b>All table names changed successfully!</b><br>";
echo "You can now close this window.";
?>