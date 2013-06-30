<?php
// $Id: load_css.php,v 1.8 2003/08/18 19:10:02 cvs_iezzi Exp $

include "main_location.inc";
include INC_GETUSERDATA;

if ($password == $pw) {
	$sql = "UPDATE ".PPHL_TBL_USERS." SET cssid = $N_css WHERE id = $id";
	$res = mysql_query($sql);
	setcookie("css_style", "", time() - 3600);
	Header("Location: $HTTP_REFERER");
	exit;
} else if ($guest) {
	setcookie("css_style", $N_css, $lifetime);
	Header("Location: $HTTP_REFERER");
	exit;
} else { //wrong password
	Header('Location: '.$HTTP_REFERER.'?wrongpw=1');
	exit;
}
?>