<?php
// $Id: setupSettings.inc.php,v 1.17 2003/08/18 19:12:27 cvs_iezzi Exp $

		/* show the whole settings table */
		echo "\n<p><form method=\"post\" action=\"$PHP_SELF\">\n";
		echo "<table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n";
		
		$cnt_SetupSettings = count($SetupSettings);
		for ($i = 0; $i < $cnt_SetupSettings; $i++) {
			echo "<tr><th colspan=\"2\" align=\"center\" nowrap=\"nowrap\" class=\"color3\" valign=\"bottom\">".$SetupSettings[$i][0]."</th></tr>";
			$cnt_SetupSettings_val = count($SetupSettings[$i]);
			for ($j = 1; $j < $cnt_SetupSettings_val; $j++) {
				$bgcolor = ($rowcnt%2) ? 'ref' : 'color2';
				echo "<tr class=\"$bgcolor\">";
				echo "<td valign=\"top\" width=\"60%\" align=\"left\"><b>".$loca['setup'][$SetupSettings[$i][$j]]['title']."</b><br />".$loca['setup'][$SetupSettings[$i][$j]]['descr']."</td>";
				echo "<td valign=\"top\" width=\"40%\" align=\"left\">\n";
				echo "<input type=\"hidden\" name=\"fields_no[$rowcnt]\" value=\"".$SetupSettings[$i][$j]."\" />\n";
				echo "<input type=\"hidden\" name=\"fields_prev[".$SetupSettings[$i][$j]."]\" value=\"".${$SetupSettings[$i][$j]}."\" />\n";

				switch (${$SetupSettings[$i][$j].'_type'}) {
				
					case 'int':
					echo "<input class=\"myInput\" type=\"text\" name=\"fields[".$SetupSettings[$i][$j]."]\" value=\"".${$SetupSettings[$i][$j]}."\" size=\"10\" />\n";
					break;
					
					case 'pw':
						echo "<input class=\"myInput\" type=\"password\" name=\"fields[".$SetupSettings[$i][$j]."]\" value=\"".${$SetupSettings[$i][$j]}."\" />\n";
					break;
					
					case 'bool':
						$checked = (${$SetupSettings[$i][$j]}) ? ' checked="checked"' : '';
			            echo "<input type=\"radio\" name=\"fields[".$SetupSettings[$i][$j]."]\" value=\"true\"$checked /> true";
						$checked = (${$SetupSettings[$i][$j]}) ? '' : ' checked="checked"';
						echo "<input type=\"radio\" name=\"fields[".$SetupSettings[$i][$j]."]\" value=\"false\"$checked /> false";
					break;
					
					case 'gmt':
						echo tz_select(${$SetupSettings[$i][$j]}, 'fields['.$SetupSettings[$i][$j].']');
					break;
					
					case 'lang':
						$select_array = directoryList(CFG_LANG_PATH, TRUE, 2);
						echo "<select class=\"myInput\" name=\"fields[".$SetupSettings[$i][$j]."]\">";
						$cnt_select_array = count($select_array);
						for($l = 0; $l < $cnt_select_array; $l++) {
							$lang = substr($select_array[$l],0,2);
							echo "<option ";
							if (${$SetupSettings[$i][$j]} == $lang) echo "selected=\"selected\" ";
							echo "value=\"$lang\">".$loca['lang'][$lang]."</option>\n";
						}
						echo "</select>";
					break;
					
					case 'mta':
						echo "<select class=\"myInput\" name=\"fields[".$SetupSettings[$i][$j]."]\">";
						echo "<option ";
						if (${$SetupSettings[$i][$j]} == 'libmail') echo "selected=\"selected\" ";
						echo "value=\"libmail\">libmail</option>\n";
						echo "<option ";
						if (${$SetupSettings[$i][$j]} == 'htmlmime') echo "selected=\"selected\" ";
						echo "value=\"htmlmime\">htmlmime</option>\n";
						echo "<option ";
						if (${$SetupSettings[$i][$j]} == 'plain') echo "selected=\"selected\" ";
						echo "value=\"plain\">plain email (no attachment)</option>\n";
						echo "</select>";
					break;
					
					case 'css':
						$sql2 = "SELECT id,css,userid FROM ".PPHL_TBL_CSS." WHERE userid = 0 ORDER BY css ASC";
						$res2 = mysql_query($sql2);
						echo "<select class=\"myInput\" name=\"fields[".$SetupSettings[$i][$j]."]\">";
						while ($row2 = @mysql_fetch_array($res2)) {
							echo "<option ";
							if (${$SetupSettings[$i][$j]} == $row2['id']) echo "selected=\"selected\" ";
							echo "value=\"".$row2['id']."\">".$row2['css']."</option>\n";
						}
						echo "</select>"; 
					break;
					
					default:
					echo "<input class=\"myInput\" type=\"text\" name=\"fields[".$SetupSettings[$i][$j]."]\" value=\"".${$SetupSettings[$i][$j]}."\" size=\"60\" />\n";
					break;
				}
			echo "</tr>\n\n";
			$rowcnt++;
			}
		}
		echo "</table>";
		echo "<br />";
		echo "<input type=\"hidden\" name=\"action\" value=\"".($action+1)."\" />";
		echo "<input class=\"myInput\" type=\"submit\" name=\"op\" value=\"$strSave\" />";
		echo "</form></p>";
?>