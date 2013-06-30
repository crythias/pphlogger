<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: edit_user.php,v 1.12 2003/08/18 19:15:45 cvs_iezzi Exp $

    edit_user.php - store edited user data into mysql
    --------------------------------------------------------- */


define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
if (isset($usr))   { $id = $usr; $username = $usr; }
if (isset($admpw)) { $password = $admpw; }
include INC_GETUSERDATA;

$N_visible = (isset($N_visible)) ? 1 : 0;
$N_demo    = (isset($N_demo))    ? 1 : 0;
$N_timeout *= 60;
$N_timeout_onl *= 60;
$N_bg_trans = (isset($N_bg_trans)) ? 1 : 0;

if(!isset($N_limh)) $N_limh = $limh;
if(!isset($N_limd)) $N_limd = $limd;
if(!isset($N_limh_p)) $N_limh_p = $limh_p;
if(!isset($N_limd_p)) $N_limd_p = $limd_p;

// remove whitespace and add the missing 'http://' in your_url
$N_your_url = addHTTP_all(trim($N_your_url));

// reload the keyword-list if user has changed mode
if ($N_kwspl != $kwspl) {
	$kwspl = $N_kwspl;
	//load the search-engines query strings
	$arr_engines = load_engines();
	//scan through the log-table and extract keywords
	$sql_del = "DELETE FROM ".$tbl_mpdl." WHERE type = 'kw'";
	$res_del = mysql_query($sql_del);
	$sql_keyw = "SELECT referer FROM ".$tbl_logs." WHERE referer LIKE '%?%'";
	$res_keyw = mysql_query($sql_keyw);
	while ($row_keyw = mysql_fetch_array($res_keyw)) {
		$keywrd = show_keywords($row_keyw['referer'], $arr_engines);
		if ($keywrd[3]) insert_keyw($keywrd[3]);
	}
}

$sql = "UPDATE ".PPHL_TBL_USERS." SET email = '".$N_email."', visible = ".$N_visible.", "
     . "timeout = '".$N_timeout."', timeout_onl = '".$N_timeout_onl."', "
     . "hit_mail = '".$N_hit_mail."', loglim = '".$N_loglim."', stats_cache = ".$N_stats_cache.", your_url = '".$N_your_url."', "
	 . "demo = ".$N_demo.", ttf_file = '".$N_ttf_file."', gd_font = '".$N_gd_font."', ttf_size = '".$N_ttf_size."', "
	 . "bg_c = '".$N_bg_c."', fg_c = '".$N_fg_c."', bg_trans = ".$N_bg_trans.", cssid = ".$N_css.", gmt = '".$N_gmt."', "
	 . "lang = '".$N_lang."', limh = '".$N_limh."', limh_p = '".$N_limh_p."', limd = '".$N_limd."', limd_p = '".$N_limd_p."', hits = '".$N_hits."', kwspl = ".$N_kwspl." "
     . "WHERE id = ".$id;
$res = mysql_query($sql);

Header("Location: $adm_view[2]");
exit;
?>