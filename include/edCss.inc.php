<?php
// $Id: edCss.inc.php,v 1.14 2003/08/18 19:12:27 cvs_iezzi Exp $

include INC_COLORARRAY; // fill the color-array

include INC_HEADSTUFF;
if (@$action != 'delete' && @$action != $strSave && @$action != $strCreateNew) {
	include INC_HEAD;
}

$rowcnt = 0;
$css_fields = getTableFields(PPHL_TBL_CSS);

switch (@$action) {

	case 'edit':
		
		/* edit a stylesheet */
		$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $css_str";
		$res = mysql_query($sql);
		
		echo "<table border=\"0\" align=\"center\" cellpadding=\"3\"><tr>\n";
		echo "<th class=\"invertLink\">color</th>\n";
		echo "<th class=\"invertLink\">&nbsp;</th>\n";
		echo "<th class=\"invertLink\">value</th>\n";
		
		echo "<form method=\"post\" action=\"$PHP_SELF\">\n";
		if (defined('__GOT_USERDATA__')) {
			echo "<input type=\"hidden\" name=\"fields_prev[userid]\" value=\"$id\" />\n";
			echo "<input type=\"hidden\" name=\"fields[userid]\" value=\"$id\" />\n";
		}
		echo "<input type=\"hidden\" name=\"fields_prev[id]\" value=\"$css_str\" />\n";
		echo "<input type=\"hidden\" name=\"fields[id]\" value=\"$css_str\" />\n";
		echo "</tr>";
		while ($row = @mysql_fetch_array($res)) {
			$css_uid = $row['userid'];
			$cnt_css_fields = count($css_fields);
			for ($i = 0; $i < $cnt_css_fields; $i++) {
				if ($rowcnt%2) $bgcolor = 'ref';
				else $bgcolor = 'color2';
				
				if (!(($css_fields[$rowcnt] == 'userid' && defined('__GOT_USERDATA__')) || $css_fields[$rowcnt] == 'id')) {
					echo "<tr>";
					echo "<td class=\"$bgcolor\">".$css_fields[$rowcnt]."</td>";
					$tdbg = ($css_fields[$rowcnt] == 'id' || $css_fields[$rowcnt] == 'css') ? " class=\"$bgcolor\"" : " bgcolor=\"".getHEX($row[$css_fields[$rowcnt]])."\"";
					echo "<td".$tdbg." width=\"30\">&nbsp;</td>";
					echo "<td class=\"$bgcolor\">\n";
					echo "<input class=\"myInput\" type=\"hidden\" name=\"fields_prev[".$css_fields[$rowcnt]."]\" value=\"".$row[$css_fields[$rowcnt]]."\" />\n";
					echo "<input class=\"myInput\" type=\"text\" name=\"fields[".$css_fields[$rowcnt]."]\" value=\"".$row[$css_fields[$rowcnt]]."\" size=\"40\" maxlength=\"60\" />\n";
					echo "</td></tr>\n";
				}
				$rowcnt++;
			}
		}
		echo "<tr><td colspan=\"3\" align=\"right\">";
		$safe_button = "<input class=\"myInput\" type=\"submit\" name=\"action\" value=\"".$strSave."\" />\n";
		if (defined('__GOT_USERDATA__')) {
			if ($css_uid == $id) echo $safe_button;
		} else {
			echo $safe_button;
		}
		echo "<input class=\"myInput\" type=\"submit\" name=\"action\" value=\"".$strCreateNew."\" />\n";
		echo "</td></tr>";

		echo "</table>";
		
	break;

	case 'delete':
		$sql = "DELETE FROM ".PPHL_TBL_CSS." WHERE id = $css_str";
		if (defined('__GOT_USERDATA__')) $sql .= " AND userid = $id";
		$res = @mysql_query($sql);
		if (@mysql_num_rows($res)) {
			$sql = "UPDATE ".PPHL_TBL_USERS." SET cssid = 7 WHERE cssid = $css_str";
			mysql_query($sql);
		}
		Header("Location: $PHP_SELF");
		exit;
	break;

	case $strSave:
		$sql_values = '';
		$cnt_css_fields = count($css_fields);
		for ($i = 0; $i < $cnt_css_fields; $i++) {
			if ($fields[$css_fields[$i]] != $fields_prev[$css_fields[$i]]) {
				if (@$updval) $sql_values .= ",";
				$sql_values .= $css_fields[$i]."='".$fields[$css_fields[$i]]."'";
				$updval = true;
			}
		}
		if (@$updval) {
			$sql = "UPDATE ".PPHL_TBL_CSS." SET ".$sql_values." WHERE id = ".$fields_prev['id'];
			if (defined('__GOT_USERDATA__')) $sql .= " AND userid = ".$id;
			$res = mysql_query($sql);
		}
		Header("Location: $PHP_SELF");
		exit;
	break;

	case $strCreateNew:
		$sql_values = ''; $sql_fields = '';
		$cnt_css_fields = count($css_fields);
		for ($i = 1; $i < $cnt_css_fields; $i++) {
			$comma = ($i > 1) ? ',' : '';
			$sql_fields .= $comma.$css_fields[$i];
			$sql_values .= $comma."'".$fields[$css_fields[$i]]."'";
		}
		$sql = "INSERT INTO ".PPHL_TBL_CSS." (".$sql_fields.") VALUES (".$sql_values.")";
		$res = mysql_query($sql);
		Header("Location: $PHP_SELF");
		exit;
	break;

	default:
		
		/* show the whole css table */
		$sql = "SELECT id,css,userid,".$css_show." FROM ".PPHL_TBL_CSS;
		if (defined('__GOT_USERDATA__')) $sql .= " WHERE userid = $id OR userid = 0";
		$sql .= " ORDER BY userid ASC, css ASC";
		$res = mysql_query($sql);
		
		echo "<p>&nbsp;</p>";
		echo "<table class=\"box-table\" border=\"0\" align=\"center\" cellpadding=\"3\"><tr>\n";
		echo "<th class=\"color3\">css</th>\n";
		echo "<th class=\"color3\">id</th>\n";
		$tablerows = explode(',',$css_show);
		$cnt_tablerows = count($tablerows);
		for ($i=0; $i < $cnt_tablerows; $i++) {
			echo "<th class=\"color3\">".$tablerows[$i]."</th>\n";
		}
		echo "<th class=\"color3\">&nbsp;</th>\n";
		echo "<th class=\"color3\">&nbsp;</th>\n";
		echo "<th class=\"color3\">&nbsp;</th>\n";
		echo "</tr>";
		while ($row = @mysql_fetch_array($res)) {
			if ($rowcnt%2) $bgcolor = "ref";
			else $bgcolor = "color2";
			echo "<tr>";
			echo "<td class=\"$bgcolor\">".$row['css']."</td>";
			echo ($row['userid'] > 0) ? "<td class=\"$bgcolor\">".$row['userid']."</td>" : "<td class=\"$bgcolor\">[".$strDefault."]</td>";
			for ($i=0; $i < $cnt_tablerows; $i++) {
				echo "<td bgcolor=\"".getHEX($row["$tablerows[$i]"])."\" width=\"30\">&nbsp;</td>";
			}
			$N_css = $row['id'];
			echo "<td class=\"$bgcolor\"><a href=\"$PHP_SELF?css_str=$N_css&action=edit\">".$strEdit."</a></td>";
			if (!defined('__GOT_USERDATA__') && $row['userid'] > 0) {
				echo "<td class=\"$bgcolor\">&nbsp;</td>";
			} else {
				$adm_usr_loadcss = (defined('__GOT_USERDATA__')) ? DO_LOADCSS : ADM_LOADCSS;
				echo "<td class=\"$bgcolor\"><a href=\"$adm_usr_loadcss?N_css=$N_css\">".$strSet."</a></td>";
			}
			if (defined('__GOT_USERDATA__')) {
				echo ($row['userid'] > 0 && $row['id'] != $cssid) ? "<td class=\"$bgcolor\"><a href=\"$PHP_SELF?css_str=$N_css&action=delete\">".$strDelete."</a></td>" : "<td class=\"$bgcolor\">&nbsp;</td>";
			} else {
				echo "<td class=\"$bgcolor\"><a href=\"$PHP_SELF?css_str=$N_css&action=delete\">".$strDelete."</a></td>";
			}
			echo "</tr>\n";
			$rowcnt++;
		}
		echo "</table>";
		
	break;
}
?>