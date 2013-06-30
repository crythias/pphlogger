<?php
 /* -------------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: visibility.php,v 1.10 2003/06/19 20:44:33 cvs_iezzi Exp $

    visibility.php
	this file is used in pphlogger.php and showhits.php
	an implementation of different visibility types
	for PowerPhlogger
    ------------------------------------------------------------- */

if ($visible) {
	switch(@$st) {
		
		/* script was called through IMG-Tag */
		case 'img':
			include MOD_IMAGEGEN;
		break;
		
		/* script was called through JavaScript */
		case 'js':
			if ($showme == 'n') echo "document.open()\ndocument.write(' ')\ndocument.close()\n";
			else                echo "document.open()\ndocument.write('".$show_txt."')\ndocument.close()\n";
		break;
		
		/* script was called directly in PHP */
		case 'php':
			if ($showme == 'n') echo '';
			else                echo $show_txt;
		break;
		
		/* script was called directly in PHP using JS for extended information */
		case 'phpjs':
			if ($showme == 'n') {
				echo "<script language=\"JavaScript\" type=\"text/javascript\">jslogid='$logid';</script>\n";
				echo "<script language=\"JavaScript\" type=\"text/javascript\" src=\"".$pphlogger_location."pphlogger.js.php?id=".$username."\"></script>\n";
			} else {
				echo "<script language=\"JavaScript\" type=\"text/javascript\">jslogid='$logid';</script>\n";
				echo $show_txt."<script language=\"JavaScript\" type=\"text/javascript\" src=\"".$pphlogger_location."pphlogger.js.php?id=".$username."\"></script>\n";
			}
		break;
		
		default:
			echo "document.open()\ndocument.write('".$show_txt."')\ndocument.close()\n";
		break;
	}
} else {
	switch(@$st) {
		
		/* script was called through IMG-Tag */
		case 'img':
			include MOD_IMAGEGEN;
		break;
		
		/* script was called through JavaScript */
		case 'js':
			echo "document.open()\ndocument.write(' ')\ndocument.close()\n";
		break;
		
		/* script was called directly in PHP */
		case 'php':
			echo '';
		break;
		
		/* script was called directly in PHP using JS for extended information */
		case 'phpjs':
			echo "<script language=\"JavaScript\" type=\"text/javascript\">jslogid='$logid';</script>\n";
			echo "<script language=\"JavaScript\" type=\"text/javascript\" src=\"".$pphlogger_location."pphlogger.js.php?id=".$username."\"></script>\n";
		break;
		
		default:
			echo "document.open()\ndocument.write(' ')\ndocument.close()\n";
		break;
	}
}
?>