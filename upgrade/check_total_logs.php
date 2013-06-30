<?php
// $Id: check_total_logs.php,v 1.3 2003/08/18 19:15:10 cvs_iezzi Exp $

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
$mysql_outp   = TRUE;

define('PPHL_SCRIPT_PATH', '../');
define('NO_SESS', 1);
define('NO_SETUP_REDIR', 1); // avoid redirection to /admin/setup.php
include PPHL_SCRIPT_PATH."main_location.inc";
include LIB_LOADSQL;

/*
 * calculating total execution time
 */
$timer_start = getmicrotime();

$totalrows = 0;
$sql = "SELECT id,username FROM ".PPHL_TBL_USERS." ORDER BY id ASC";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	$this_tbl_logs    = PPHL_DB_PREFIX.$id.$tbl_logs;
	$totalrows = $totalrows + get_tbltotalrows($this_tbl_logs);
}

pphl_outp('totalrows='.$totalrows);
pphl_outp(' [total execution time: '.(getmicrotime()-$timer_start).' seconds]', TRUE);
?>