<?php
 /* -------------------------------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: show_vis_per_day.php,v 1.7 2003/06/19 20:43:17 cvs_iezzi Exp $
	
    show_vis_per_day.php Shows the monthly access graphic
    
    If you wish to show the image on your own page, please 
    call it like this:
    <img src="show_vis_per_day.php?id=[username]&uniq_type=log_day_mo&current=1">
    
    where [username] is your username
    and [uniq_type] could be log_impr_day_mo instead of log_day_mo
    ------------------------------------------------------------------------------ */

define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_GETUSERDATA;

/* if show_vis_per_day got called directly in an IMG-tag
   and if current=1 is set, always update monthly data   */
if(isset($current)) {
	include MOD_CALENDAR;
	if (isset($show_impr)) {
		$showtxt = 'show unique hits';
		$uniq_type = 'log_impr_day_mo';
	} else {
		$showtxt = 'show all pageimpressions';
		$uniq_type = 'log_day_mo';
	}
	update_calendar($uniq_type);
}

include MOD_IMGVISPERDAY;
if (isset($yyyymm)) module_img_visitors_per_day($uniq_type,$yyyymm);
else module_img_visitors_per_day($uniq_type);
?>