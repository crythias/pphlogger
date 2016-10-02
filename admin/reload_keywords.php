<?php
// $Id: reload_keywords.php,v 1.6 2003/08/18 19:15:45 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

//load the search-engines query strings
$arr_engines = load_engines();

//scan through all your user's log-tables and extract keywords
$sql = "SELECT id,kwspl FROM ".PPHL_TBL_USERS;
$res = mysqli_query($connected,$sql);
while ($row = mysqli_fetch_array($res)) {
	$id    = $row['id'];
	$kwspl = $row['kwspl'];
	// echo "<b>$id</b><br />";
	$sql_del = "DELETE FROM ".PPHL_DB_PREFIX.$id.$tbl_mpdl." WHERE type = 'kw'";
	$res_del = mysqli_query($connected,$sql_del);
	mysqli_query("FLUSH TABLES");
	$sql_keyw = "SELECT logid,referer FROM ".PPHL_DB_PREFIX.$id.$tbl_logs." WHERE referer LIKE '%?%'";
	$res_keyw = mysqli_query($connected,$sql_keyw);
	while ($row_keyw = mysqli_fetch_array($res_keyw)) {
		$keywrd = show_keywords($row_keyw['referer'], $arr_engines);
		if ($keywrd[3]) {
			/* insert the keyword into the users mpdl table */
			insert_keyw($keywrd[3], PPHL_DB_PREFIX.$id.$tbl_mpdl);
			/* update the current log entry and enter the search engine's name */
			$sql_seareng = "UPDATE ".PPHL_DB_PREFIX.$id.$tbl_logs." "
			             . "SET time=time, seareng = '".$keywrd[2]."' "
			             . "WHERE logid = ".$row_keyw['logid'];
			mysqli_query($connected,$sql_seareng);
		}
	}
}

Header("Location: $HTTP_REFERER?keyw_reloaded=1");
exit;
?>
