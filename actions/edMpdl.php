<?php
// $Id: edMpdl.php,v 1.9 2002/05/04 14:46:04 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_GETUSERDATA;

/*
 * deleting mpdl's
 */
if (!empty($selected_tbl) && !$guest) {
	$selected_cnt = count($selected_tbl);
	// builds the query
	$qry_in = '(';
	for ($i = 0; $i < $selected_cnt; $i++) {
		$qry_in .= ($i == 0) ? '' : ',';
		$qry_in .= $selected_tbl[$i];
	}
	$qry_in .= ')';
	$sql = "UPDATE $tbl_mpdl SET enabled = 0 WHERE id IN $qry_in";
	$res = mysqli_query($connected,$sql);
/*
 * moving mpdl's
 */
} else if (($edit_from != $edit_to)  && !$guest) {
	
	/* move the hits from 'edit_from' to 'edit_to' */
	if ($edit_to != 'delete') {
		$sql = "SELECT min(since),sum(hits) FROM $tbl_mpdl "
		     . "WHERE (id = $edit_from OR id = $edit_to) AND type = '$edit_type'";
		$res = mysqli_query($connected,$sql);
		$min_since = mysqli_result($res, 0, 0);
		$sum_hits  = mysqli_result($res, 0, 1);
		
		/* update the 'to' row */
		$sql = "UPDATE $tbl_mpdl SET hits = $sum_hits, since = $min_since "
		     . "WHERE id = $edit_to AND type = '$edit_type'";
		mysqli_query($connected,$sql);
	}
	
	/* disable (not delete!) the 'from' row */
	$sql = "UPDATE $tbl_mpdl SET enabled = 0 WHERE id = $edit_from AND type = '$edit_type'";
	mysqli_query($connected,$sql);
	
	/* change all entrypoint id's to the new mpdl */
	$sql = "UPDATE $tbl_logs SET entryid = $edit_to WHERE entryid = $edit_from";
	mysqli_query($connected,$sql);
}

Header("Location: $HTTP_REFERER");
exit;
?>
