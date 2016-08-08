<?php
// $Id: get_csscolors.inc.php,v 1.8 2003/08/18 19:12:27 cvs_iezzi Exp $

/* get the columns names and fill them into an array */
//$res = mysql_list_fields(PPHL_DB_NAME, PPHL_TBL_CSS);

$fields = get_fields(PPHL_TBL_CSS);

for($i = 0; $i < count($fields); $i++) $csscolors[$i] = $fields[$i];

/* fill the css color array */
$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $cssid";
$res = mysqli_query($connected,$sql);
$cnt_csscolors = count($csscolors);
if (!@mysqli_num_rows($res)) {
	$cssid = resetCssIDs();
	$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $cssid";
	$res2 = mysqli_query($sql);
	
	for($i = 3; $i < $cnt_csscolors; $i++) {
		${$csscolors[$i]} = mysqli_result($res2, 0, $i); //get all colors
	}
} else {
	for($i = 3; $i < $cnt_csscolors; $i++) {
		${$csscolors[$i]} = mysqli_result($res, 0, $i); //get all colors
	}
}


// function for workaround mysql_list_fields
function get_fields($table) {
        global $connected;

        if (!empty($table)) {
            $fullname = $table;

            if ($result = mysqli_query($connected, 'SHOW COLUMNS FROM '.$table)) {
		while($row = mysqli_fetch_array($result)) {
		    $tablefields[] = $row[0];
		}
                return $tablefields;
            }
        }
        return false;
    }
?>
