<?php
// $Id: get_csscolors.inc.php,v 1.8 2003/08/18 19:12:27 cvs_iezzi Exp $

/* get the columns names and fill them into an array */
$res = mysql_list_fields(PPHL_DB_NAME, PPHL_TBL_CSS);
for($i = 0; $i < mysql_num_fields($res); $i++) $csscolors[$i] = mysql_field_name($res, $i);

/* fill the css color array */
$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $cssid";
$res = mysql_query($sql);
$cnt_csscolors = count($csscolors);
if (!@mysql_num_rows($res)) {
	$cssid = resetCssIDs();
	$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $cssid";
	$res2 = mysql_query($sql);
	
	for($i = 3; $i < $cnt_csscolors; $i++) {
		${$csscolors[$i]} = mysql_result($res2, 0, $i); //get all colors
	}
} else {
	for($i = 3; $i < $cnt_csscolors; $i++) {
		${$csscolors[$i]} = mysql_result($res, 0, $i); //get all colors
	}
}
?>