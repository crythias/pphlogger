<?php
 /* ---------------------------------------------------------------
    EXTchange 0.01 - File extension changer
    (c)2001 Philip Iezzi <philippo@iezzi.ch>, http://www.iezzi.ch
    
	$Id: extchange.php,v 1.5 2002/01/27 10:57:10 cvs_iezzi Exp $
	
    This script recursively scans through your directories
    and changes file extensions.
	If you run this script from this place (/upgrade/extchange.php)
	please do NOT change the $start_dir = '..' setting!
    --------------------------------------------------------------- */

    /*-----------------------------------------*/
      $old_ext = 'php';  // your old extension
      $new_ext = 'php3'; // your new extension
      $start_dir = '..';   // directory to start
    /*-----------------------------------------*/


function directoryList ($url) {
	$surl = $url;
	$i = 0;
	if (substr($url,0,1) == '/') $surl = substr($url,1);
	$d = opendir($surl);
	while($entry=readdir($d)) {
		if ($entry != "." && $entry != "..") {
			$outp[$i] = $entry;
			++$i;
		}
	}
	closedir($d);
	return $outp;
}

function list_files($path) {
	global $old_ext, $new_ext;
	$path_array = directoryList($path);
	$cnt_path_array = count($path_array);
	for($i=0; $i < $cnt_path_array; $i++) {
		if ($path > '') $p = '/';
		else $p = '';
		$fd = $path.$p.$path_array[$i];
		if (@is_dir($fd)) list_files($fd);
		else if (preg_match('/\.'.$old_ext.'$/i', $fd)) {
			$fd_new = substr($fd, 0, strlen($fd)-strlen($old_ext)).$new_ext;
			rename ($fd, $fd_new); 
			echo $fd.' >>> '.$fd_new.'<br />';
		}
	}
}

list_files($start_dir);
?>