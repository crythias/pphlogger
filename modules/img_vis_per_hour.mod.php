<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: img_vis_per_hour.mod.php,v 1.5 2003/06/19 20:43:17 cvs_iezzi Exp $
    
    credits to: Jean-Pierre DEZELUS <jpdezelus@phpinfo.net>
                LES VISITEURS from www.phpinfo.net
     & Carsten who helped me implementing this module
    --------------------------------------------------------- */

include MOD_CALENDAR;

function module_img_visitors_per_hour($hour_mode = 'log_hour_month', $yyyymm = 0) {
	global $tbl_logs, $id, $gmt, $curr_usr_time, $stats_cache;
	global $str_arrMonth, $str_arrMonthsAbbr, $strVisPerHour;
	global $strToday, $strAll;
	global $color_1, $color_2, $color_3, $color_3t, $color_3a, $color_bg, $color_a, $color_inv;
	
	// get data out of the calendar's cache
	$cache = getSerializedCache($hour_mode, $stats_cache, $yyyymm);
	if(!$cache) {
		reload_visperhour($hour_mode, $yyyymm);
		$cache = getSerializedCache($hour_mode, $stats_cache, $yyyymm);
	}
	$year  = substr($cache[2],0,4);
	$month = substr($cache[2],4,2);
	$data  = $cache[1];
	
	$img_format = get_gd_type();
	$lvc_base_img_per_day      = 10;
	$lvc_display_cache_delay   =  1;  // 0 | 1
	
	// hexa colors
	$lvc_color_maxvalue = '1A28DF';
	$lvc_color_minvalue = 'FB0006';
	$lvc_color_red      = 'FF0000';
	
	// IMG size
	$width  = 399;
	$height = 288;
	
	// image creation
	$image  = imagecreate($width, $height);
	
	// colors
	$color_white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
	$color_black    = imagecolorallocate($image, 0x00, 0x00, 0x00);
	
	$color_maxvalue = create_new_color($image, $lvc_color_maxvalue);
	$color_minvalue = create_new_color($image, $lvc_color_minvalue);
	$color_bar      = create_new_color($image, $color_1);
	$color_bg_in    = create_new_color($image, $color_bg);
	$color_bg_out   = create_new_color($image, $color_3);
	$color_title    = create_new_color($image, $color_3t);
	$color_cache    = create_new_color($image, $color_3t);
	
	$color2         = create_new_color($image, $color_2);
	$color1         = create_new_color($image, $color_1);
	$color_txt      = create_new_color($image, $color_inv);
	
	imagefill($image, 0, 0, $color_bg_out);
	imagerectangle($image, 0, 0, $width-1, $height-1, $color2);
	imagefilledrectangle($image, 28, 21, 374, 267, $color2);
	imagerectangle($image, 27, 20, 374, 267, $color_black);
	imagefilledrectangle($image, 31, 24, 370, 263, $color_bg_in);
	
	// title
	$title = $strVisPerHour;
	if ($hour_mode == 'log_hour_month')     $title .= ' - '.$str_arrMonthsAbbr[(int)$month] . ' ' . $year;
	else if($hour_mode == 'log_hour_today') $title .= ' - '.$strToday;
	else if($hour_mode == 'log_hour_all')   $title .= ' - '.$strAll;
	
	$start = (int)(($width - (imagefontwidth(3) *strlen($title))) / 2);
	if ($start < 0) $start = 2;
	imagestring($image, 3, $start, 5, $title , $color_title);
	
	for ($cnt = 0; $cnt < 24; $cnt++)  {
		
		$gmt_hour = $cnt-$gmt;
		$gmt_hour = ($gmt_hour < 0) ? 24 + $gmt_hour : $gmt_hour;
		$gmt_hour = sprintf('%02d', $gmt_hour);
		$hour = sprintf('%02d', $cnt);
		
		// 01 ... 23
		imagestring($image, 1, 20 + (($cnt+1)*14), $height-18, $hour, $color_title);
		
		$val              = (isset($data[$cnt])) ? $data[$cnt] : 0;
		$arr_values[$cnt] = $val;
		
		if ($cnt == 0) {
			$max = $arr_values[$cnt];
			$min = $arr_values[$cnt];
		}
		
		if ($val > $max) $max = $val;
		if (($val != 0) && ($val < $min)) $min = $val;
	}
	
	// horizontal bars
	$level = $lvc_base_img_per_day;
	while ($max > (3.50 * $level))
		$level += $lvc_base_img_per_day;
	
	for ($cnt = 0; $cnt <= 4; $cnt++) {
		$start = (int)( (30 - (imagefontwidth(1) * strlen($cnt * $level))) / 2);
		imagestring($image, 1, $start, $height - 28 - ($cnt*60), $cnt * $level, $color_title);
		$y = ($cnt == 0) ? $height - 25 - ($cnt*60) : $height - 24 - ($cnt*60);
		imageline($image, 32, $y, $width-30, $y, $color1);
	}
	
	// histograms
	for ($cnt = 0; $cnt < 24; $cnt++) {
		if (($val = $arr_values[$cnt]) != 0) {
			// histograms
			$y = ($height - 24) - (($val*60)/$level);
			// width= 8, height= ($val*60)/$level-1
			
			imagefilledrectangle($image, 21+(($cnt+1)*14), $y+1, 21+(($cnt+1)*14)+11, $y+1+($val*60)/$level-1, $color_bar);
			imagerectangle($image, 20+(($cnt+1)*14), $y, 32+(($cnt+1)*14), $height-25, $color_black);
			
			// value
			$color = ($val == $min) ? $color_minvalue : $color_txt;
			if ($val == $max) $color = $color_maxvalue;
			imagestringup($image, 1, 21+(($cnt+1) * 14), $y-5, $val, $color);
		}
	}
	
	imageinterlace($image, false);
	$fct_image = 'image'.$img_format;
	
	// sending image
	header('Content-type: image/'.$img_format);
	$fct_image($image);
}
?>