<?php
// $Id: headfoot_menu.inc.php,v 1.4 2002/08/19 20:42:25 cvs_iezzi Exp $

	$usr_css[1] = ($view == 'logs') ? 'color3' : 'color2';
	$usr_css[2] = ($view == 'stats') ? 'color3' : 'color2';
	$usr_css[3] = ($view == 'stats2') ? 'color3' : 'color2';
	$usr_css[4] = ($view == 'stats3') ? 'color3' : 'color2';
	$usr_css[5] = ($view == 'settings') ? 'color3' : 'color2';
	$usr_css[6] = ($view == 'userprofile') ? 'color3' : 'color2';
	$usr_css[0] = ($view == 'loginout') ? 'color3' : 'color2';
	
	$adm_css[0] = ($view == 'admin') ? 'color3' : 'color2';
	$adm_css[1] = ($view == 'admin1') ? 'color3' : 'color2';
	$adm_css[2] = ($view == 'admin2') ? 'color3' : 'color2';
	$adm_css[3] = ($view == 'admin3') ? 'color3' : 'color2';
	$adm_css[4] = ($view == 'admin4') ? 'color3' : 'color2';
	$adm_css[5] = ($view == 'admin5') ? 'color3' : 'color2';
	$adm_css[6] = ($view == 'admin6') ? 'color3' : 'color2';


	if (strstr($view, 'admin')) {
		echo "<td class=\"$adm_css[0]\" width=\"14%\"><a class=\"$adm_css[0]\" href=\"$adm_view[0]\">$strAdminPage[0]</a></td>\n";
		echo "<td class=\"$adm_css[1]\" width=\"14%\"><a class=\"$adm_css[1]\" href=\"$adm_view[1]\">$strAdminPage[1]</a></td>\n";
		echo "<td class=\"$adm_css[2]\" width=\"14%\"><a class=\"$adm_css[2]\" href=\"$adm_view[2]\">$strAdminPage[2]</a></td>\n";
		echo "<td class=\"$adm_css[3]\" width=\"14%\"><a class=\"$adm_css[3]\" href=\"$adm_view[3]\">$strAdminPage[3]</a></td>\n";
		echo "<td class=\"$adm_css[4]\" width=\"14%\"><a class=\"$adm_css[4]\" href=\"$adm_view[4]\">$strAdminPage[4]</a></td>\n";
		echo "<td class=\"$adm_css[5]\" width=\"14%\"><a class=\"$adm_css[5]\" href=\"$adm_view[5]\">$strAdminPage[5]</a></td>\n";
		echo "<td class=\"$adm_css[6]\" width=\"14%\"><a class=\"$adm_css[6]\" href=\"$adm_view[6]\">$strAdminPage[6]</a></td>\n";
	} else {
		echo "<td class=\"$usr_css[1]\" width=\"14%\"><a class=\"$usr_css[1]\" href=\"$usr_view[1]\">$strUsrPage[1]</a></td>\n";
		echo "<td class=\"$usr_css[2]\" width=\"14%\"><a class=\"$usr_css[2]\" href=\"$usr_view[2]\">$strUsrPage[2]</a></td>\n";
		echo "<td class=\"$usr_css[3]\" width=\"14%\"><a class=\"$usr_css[3]\" href=\"$usr_view[3]\">$strUsrPage[3]</a></td>\n";
		echo "<td class=\"$usr_css[4]\" width=\"14%\"><a class=\"$usr_css[4]\" href=\"$usr_view[4]\">$strUsrPage[4]</a></td>\n";
		echo "<td class=\"$usr_css[5]\" width=\"14%\"><a class=\"$usr_css[5]\" href=\"$usr_view[5]\">$strUsrPage[5]</a></td>\n";
		echo "<td class=\"$usr_css[6]\" width=\"14%\"><a class=\"$usr_css[6]\" href=\"$usr_view[6]\">$strUsrPage[6]</a></td>\n";
		echo "<td class=\"$usr_css[0]\" width=\"14%\"><a class=\"$usr_css[0]\" href=\"$usr_view[0]\">$strUsrPage[0]</a></td>\n";
	}
?>