<?php
/*  --------------------------------------------------
    $Id: mpdl_cleanup.php,v 1.9 2003/08/18 19:15:10 cvs_iezzi Exp $
	
	in case you got some entries in your pphl_xxxxx_mpdl
	tables that contain '#', '?', ';' or ' ' and you 
	want them to get fixed, run this script!
    --------------------------------------------------
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
	echo '<b>'.$usr_mpdl.'</b>'.$br;

	$sql2 = "SELECT url,hits FROM ".$usr_mpdl." "
	      . "WHERE type='mp' AND (url LIKE '%?%' OR url LIKE '%\#%' OR url LIKE '%&%' OR url LIKE '% %')";
	$res2 = mysqli_query($connected,$sql2);
	if ($res2) {
		while ($row2 = mysqli_fetch_array($res2)) {
			$orig_mp = $row2['url'];
			$fixed_mp = pureURL($orig_mp);
			$hits = $row2['hits'];
			
			$fix_sql = "UPDATE $usr_mpdl SET hits = hits+".$hits.") "
			         . "WHERE url='".$fixed_mp."'";
			$fix_res = mysqli_query($connected,$fix_sql);
			if (!$fix_res) {
				$new_sql = "INSERT INTO ".$usr_mpdl." (type,url,hits) VALUES ('mp','$fixed_mp','$hits')";
				$new_res = mysqli_query($connected,$new_sql);
				echo '<b>added: </b>';
			}
			
			$del_sql = "DELETE FROM ".$usr_mpdl." WHERE url = '".$orig_mp."' AND type='mp'";
			mysqli_query($connected,$del_sql);
			
			echo $orig_mp.' >>> '.$fixed_mp.$br;
		}
	}
}

echo "<br />All your MP-listings have been fixed!";
?>