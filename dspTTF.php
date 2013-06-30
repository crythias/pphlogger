<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dspTTF.php,v 1.10 2003/06/19 20:47:57 cvs_iezzi Exp $

    shows all available TTF fonts
    --------------------------------------------------------- */

include "main_location.inc";
include INC_GETUSERDATA;
$view = 'userprofile';
include INC_HEAD;

?>

<table cellpadding="10" cellspacing="0" border="0" align="center">
<tr><td nowrap="nowrap" valign="top">
<?php 
if (!isset($show_txt)) $show_txt = '1234567890';
else $show_txt = $hits;

$ttf_array = directoryList(CFG_TTF_PATH);
$num = count($ttf_array);
if (!is_int($num/3)) $num_per_col = ceil($num/3);
else $num_per_col = $num/3;
for($i=0; $i < $num; $i++) {
	if (($i == $num_per_col) || ($i == 2*$num_per_col)) echo "</td><td nowrap=\"nowrap\" valign=\"top\">\n";
	echo "<a class='invertLink'>".strtolower(eregi_replace('.ttf','',$ttf_array[$i])).":</a><br />";
	echo "<a href='".$usr_view[6]."?font=".$ttf_array[$i]."'>";
	echo "<img border=\"0\" src=\"".MOD_IMAGETXT."?ttf_demo=".$ttf_array[$i]."&id=$username&show_txt=$show_txt\" alt=\"choose this font\" /></a><br /><br />\n";
}
?>
</td></tr>
</table>

<?php
include INC_FOOT;
?>