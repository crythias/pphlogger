<?php
// $Id: changehits.php,v 1.6 2003/08/18 19:15:45 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_GETUSERDATA;

if ($password == $pw) {
	$count = abs(chop($new_hits));
	$sql= "UPDATE ".PPHL_TBL_USERS." SET hits='".$count."' where id='".$id."'";
	$res = mysql_query($sql);
	echo mysql_error();
}

Header("Location: $HTTP_REFERER");
exit;
?>