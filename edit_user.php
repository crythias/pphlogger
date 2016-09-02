<?php
// $Id: edit_user.php,v 1.18 2003/08/18 19:10:02 cvs_iezzi Exp $

include "main_location.inc";
include INC_GETUSERDATA;

if ($password == $pw) {
	
	/*
	 * Settings update
	 */
	if (isset($settings_update)) {
		$sql = "UPDATE ".PPHL_TBL_USERS." SET ipblock = '".trim($N_ipblock)."',refblock = '".trim($N_refblock)."', "
		     . "ownref = '".trim($N_ownref)."', index_files = '".trim($N_index_files)."', qstr = '".trim($N_qstr)."' WHERE id = ".$id;
		$res = mysqli_query($connected, $sql);
		Header("Location: $usr_view[5]?ipblockupd=$res");
		exit;
	/*
	 * dl-unite on/off
	 */
	} else if(isset($settings_dlunite)) {
		$N_dlunite = ($dlunite) ? 0 : 1;
		$sql = "UPDATE ".PPHL_TBL_USERS." SET dlunite = $N_dlunite WHERE id = $id";
		$res = mysqli_query($connected, $sql);
		$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE type = 'dl' AND id = $id";
		mysqli_query($connected, $sql);
		Header("Location: $usr_view[2]");
		exit;
	/*
	 * country flags on/off
	 */
	} else if(isset($settings_flags)) {
		$N_flags = ($flags) ? 0 : 1;
		$sql = "UPDATE ".PPHL_TBL_USERS." SET flags = $N_flags WHERE id = $id";
		$res = mysqli_query($connected,$sql);
		$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE type = 'dom' AND id = $id";
		mysqli_query($connected,$sql);
		Header("Location: $usr_view[2]");
		exit;
	/*
	 * Userprofile changes
	 */
	} else {
		$N_visible = (isset($N_visible)) ? 1 : 0;
		$N_demo = (isset($N_demo)) ? 1 : 0;
		$N_timeout *= 60;
		$N_timeout_onl *= 60;
		$N_bg_trans = (isset($N_bg_trans) && $N_bg_trans) ? 1 : 0;
		
		// remove whitespace and add the missing 'http://' in your_url
		$N_your_url = addHTTP_all(trim($N_your_url));
		
		// reload the keyword-list if user has changed mode
		if ($N_kwspl != $kwspl) {
			$kwspl = $N_kwspl;
			//load the search-engines query strings
			$arr_engines = load_engines();
			//scan through the log-table and extract keywords
			$sql_del = "DELETE FROM ".$tbl_mpdl." WHERE type = 'kw'";
			$res_del = mysqli_query($connected,$sql_del);
			$sql_keyw = "SELECT referer FROM ".$tbl_logs." WHERE referer LIKE '%?%'";
			$res_keyw = mysqli_query($connected,$sql_keyw);
			while ($row_keyw = @mysqli_fetch_array($res_keyw)) {
				$keywrd = show_keywords($row_keyw['referer'], $arr_engines);
				if ($keywrd[3]) insert_keyw($keywrd[3]);
			}
		}
		
		// update user settings
		$sql = "UPDATE ".PPHL_TBL_USERS." SET email = '".$N_email."', visible = ".$N_visible.", "
		     . "timeout = '".$N_timeout."', timeout_onl = '".$N_timeout_onl."', "
		     . "hit_mail = '".$N_hit_mail."', loglim = '".$N_loglim."', stats_cache = ".$N_stats_cache.", your_url = '".$N_your_url."', "
			 . "demo = ".$N_demo.", ttf_file = '".$N_ttf_file."', gd_font = '".$N_gd_font."', ttf_size = '".$N_ttf_size."', "
			 . "bg_c = '".$N_bg_c."', fg_c = '".$N_fg_c."', bg_trans = ".$N_bg_trans.", gmt = '".$N_gmt."', "
			 . "lang = '".$N_lang."', kwspl = ".$N_kwspl." "
		     . "WHERE id = ".$id;
		$res = mysqli_query($connected,$sql);
		
		Header("Location: $usr_view[6]?edited_ok=$res");
	}
} else if ($guest) {
	if (!isset($N_ipblock)) {
		setcookie("lang_demo", $N_lang);
		Header("Location: $usr_view[6]?guestuser=1");
		exit;
	} else {
		Header("Location: $usr_view[5]?guestuser=1");
		exit;
	}
} else { //wrong password
	Header("Location: $usr_view[0]?wrongpw=1");
	exit;
}
?>
