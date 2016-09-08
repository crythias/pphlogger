<?php
/*  ----------------------------------------------------------------------
    $Id: mp_duplicates_cleanup.php,v 1.3 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    For people who got multiple duplicates in their mp-list, this script 
    will delete them all except the oldest entry.
    ----------------------------------------------------------------------
*/
define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

$sql = "SELECT id FROM ".PPHL_TBL_USERS;
$res = mysqli_query($connected,$sql);
while ($row = mysqli_fetch_array($res)) {
	$id = $row['id'];
	$usr_mpdl = PPHL_DB_PREFIX.$id.$tbl_mpdl;
	echo '<b>'.$usr_mpdl.'</b>';

	$sql2 = "SELECT url,MIN(id) AS min,COUNT(id) as num FROM ".$usr_mpdl." "
	      . "WHERE type='mp' GROUP BY url";
	$res2 = mysqli_query($connected,$sql2);
	if ($res2) {
		while ($row2 = mysqli_fetch_array($res2)) {
			if($row2['num'] > 1) {
				$fix_sql = "DELETE FROM $usr_mpdl WHERE url='".$row2['url']."' AND type='mp' AND id > ".$row2['min'];
				$fix_res = mysqli_query($connected,$fix_sql);
				if($delno = mysqli_affected_rows()) echo $br.$row2['url'].': '.$delno.' bogus entries deleted!';
			}
		}
	}
	echo ' ...done!'.$br;
}

echo "<br />All your MP-listings have been fixed!";
?>