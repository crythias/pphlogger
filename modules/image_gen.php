<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: image_gen.php,v 1.12 2003/06/21 19:54:30 cvs_iezzi Exp $

    image_gen.php generates the image output
    --------------------------------------------------------- */

if (!$visible || $showme == 'n') {
	Header("Content-type: image/gif");
	readfile(CFG_IMG_PATH.'clear.gif');
} else {
	$img_format = get_gd_type();
	
	if (!isset($show_txt)) $show_txt = $hits;
	
	// include the color array
	include INC_COLORARRAY;
	
	//default values:
	if(!isset($bg_c))     $bg_c      = "black";
	if(!isset($bg_trans)) $bg_trans  = 0;
	if(!isset($fg_c))     $fg_c      = "#C9C1FF";
	if(!isset($ttf_file)) $ttf_file  = "arialbd.ttf";
	if(!isset($show_txt)) $show_txt  = "undefined";
	if(!isset($ttf_size)) $ttf_size  = 14;
	$txt_length = strlen($show_txt);
	
	/*
	* This workaround should fix the famous Freetype bug in any 
	* GD2.x versions and buggy GD in PHP 4.0.6.
	*
	* http://bugs.php.net/bug.php?id=17261
	* --> http://bugs.php.net/bug.php?id=17192
	* --> http://bugs.php.net/bug.php?id=18879
	*/
	
	// make sure we got an absolute path - this is required in GD2!
	if (@$ttf_location == 'relative' || @$ttf_location == '') {
		$ttf_realdir = (function_exists('realpath')) ? realpath(CFG_TTF_PATH).'/' : CFG_TTF_PATH;
	} else {
		$ttf_realdir = @$ttf_location;
	}
	// Set the path to you fonts dir
	$putenv_gdfontpath = @putenv('GDFONTPATH='.$ttf_realdir);
	if(CFG_OLDGD || !$putenv_gdfontpath) {
		// In some ancient GD1 versions (mainly in PHP3), ImageTTFBBox only accepts
		// filenames including their path.
		$ttf_file = $ttf_realdir.$ttf_file;
	} else {
		// Make sure there is no .ttf extension, GD2 doesn't like this!
		$ttf_file = preg_replace('/.ttf/','',$ttf_file);
	}
	
	
	if ($Freetype_enabled) {
		$size=ImageTTFBBox($ttf_size,0,$ttf_file,$show_txt);
		$SizeX = $size[2]-$size[0] + 6;
		$SizeY = $size[1]-$size[5] + 4;
	} else {
		$SizeX = strlen($show_txt)*($gd_font + 5);
		$SizeY = ($gd_font == 1) ? 15 : 20;
	}
	
	$im = imagecreate($SizeX, $SizeY);
	
	$c = getRGB($bg_c);
	$bgcolor = ImageColorAllocate($im, $c["red"], $c["green"], $c["blue"]);
	if ($bg_trans) $bgcolortrans = ImageColorTransparent($im, $bgcolor);
	$c = getRGB($fg_c);
	$fgcolor = ImageColorAllocate($im, $c["red"], $c["green"], $c["blue"]);
	
	if ($Freetype_enabled) {
		ImageTTFText($im,$ttf_size,0,2,-$size[5],$fgcolor,$ttf_file,$show_txt);
	} else {
		ImageString($im, $gd_font, 3, 3, $show_txt, $fgcolor);
	}
	
	if ($img_format != 'auto') { // GIF support was removed in GDlib v.1.6
		$fct_image = 'image'.$img_format;
		Header('Content-type: image/'.$img_format);
		$fct_image($im);
	} else {
		Header("Content-type: image/gif");
		readfile(CFG_IMG_PATH."clear.gif");
	}
	ImageDestroy($im);
}
?>