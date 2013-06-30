<?php
// $Id: cookie.php,v 1.20 2003/08/18 19:10:02 cvs_iezzi Exp $

include "main_location.inc";
include INC_GETUSERDATA;

if(!isset($action)) $action = '';

if ($password == $pw || $guest) {
	
	if (isset($cookie_switch) && !$guest) { //turn off own hits
		if ($cookie_switch == "off") {
			setcookie($cookie_phloff, "1", $lifetime);
		} else {
			setcookie($cookie_phloff, "", time() - 3600);
			setcookie($cookie_same, "", time() - 3600);
		}
	}
	
	if (isset($enabdel)) { //enable delete-logs
		if ($enabdel == "on") setcookie("enable_del","on");
		else setcookie("enable_del", "", time() - 3600);
	}
	
	if (isset($showref_onoff)) { //turn showref on/off
		if (isset($showref)) setcookie("showref", "", time() - 3600);
		else setcookie("showref", "1");
	}
	
	if (isset($fullagt_onoff)) { //full agent on/off
		if (isset($full_agt)) setcookie("full_agt", "", time() - 3600);
		else setcookie("full_agt", "1");
	}
	
	if (isset($path_onoff)) { //visitor path on/off
		if (isset($hide_path)) setcookie("hide_path", "", time() - 3600);
		else setcookie("hide_path", "1", $lifetime);
	}
	
	if (isset($titles_onoff)) { //mp titles on/off
		if (isset($titles_on)) setcookie("titles_on", "", time() - 3600);
		else setcookie("titles_on", "1", $lifetime);
	}
	
	if (isset($mplist_titles_onoff)) { //mp-list titles on/off
		$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE type = 'mp' AND id = $id";
		mysql_query($sql);
		if (isset($mplist_titles_on)) setcookie("mplist_titles_on", "", time() - 3600);
		else setcookie("mplist_titles_on", "1", $lifetime);
	}
	
	if (isset($allips_onoff)) { //show all IP's on/off
		if (isset($allips)) setcookie("allips", "", time() - 3600);
		else setcookie("allips", "1", $lifetime);
	}
	
	if (isset($new_loglim)) { //change the log-limit
		setcookie("myloglim", $new_loglim, $lifetime);
		$loglim = $new_loglim;
		setcookie("logs_from", "", time() - 3600);
		setcookie("logs_to", "", time() - 3600);
	}
	
	if ($action == 'datevisits' || $action == 'browsos_timespan') { //show logs by date
		setcookie("logs_from", mktime(0,0,0,$from_m,$from_d,$from_y));
		setcookie("logs_to",   mktime(0,0,0,$to_m,$to_d,$to_y));
		if ($action == 'datevisits') {
			Header("Location: $usr_view[1]");
			exit;
		}
	}
	
	if (isset($uniqimpr)) {
		if (isset($show_impr)) setcookie('show_impr', "", time() - 3600);
		else setcookie('show_impr','1');
	}
	
	if (isset($visperhour)) {
		if ($visperhour == 'log_hour_month') setcookie('hour_mode', '', time()-3600);
		else setcookie('hour_mode', $visperhour, $lifetime);
		$redir_URL = $HTTP_REFERER;
	}
}

if (!isset($redir_URL)) $redir_URL = _cutQueryPart($HTTP_REFERER);

/*
 * Workaround for MS-Bug in IIS
 * see: http://support.microsoft.com/default.aspx?scid=kb;en-us;Q176113
 * problem occurs in Microsoft Internet Information Server versions 3.0 , 4.0 , 5.0
 */
if (HTTP_SRV == 'IIS' && HTTP_SRV_V < 5.1) {
	$view = 'changing settings...';
	include INC_HEAD;
	echo '<meta http-equiv="refresh" content="1; URL=' . $redir_URL . '">';
	echo '<p>&nbsp;</p>';
	echo '<div align="center">';
	$ArrRef = Array();
	$ArrRef[0] = Array('For your Information');
	$ArrRef[1] = Array(' align="left"');
	$ArrRef[2] = $ArrRef[1];
	$ArrRef[3][0] = 'Your settings will be refreshed. Please wait!<br /><br />'
	              . 'If you aren\'t redirected automatically, please click <a href="' . $redir_URL . '">here</a>.';
	echo htmlStatTable($ArrRef);
	echo '</div>';
	include INC_FOOT;
} else { // no IIS, no MS, no bug...
	Header("Location: ".$redir_URL); 
	exit; 
} 
?>