<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: search_func.lib.php,v 1.11 2003/06/19 20:42:39 cvs_iezzi Exp $

    search_functions.php - functions to create search SQL
    --------------------------------------------------------- */

function logSearch() {
	
	global $S_hostname, $S_referer, $S_agent, $S_res, $S_color;
	global $S_online, $S_online_x, $S_mp_x, $S_mp;
	
	$xsear = false;
	$sql = "AND ";

	if ($S_hostname != '') {
		$sql.= "(hostname LIKE '%".$S_hostname."%' OR ip LIKE '%".$S_hostname."%' "
		     . "OR proxy_hostname LIKE '%".$S_hostname."%' OR proxy_ip LIKE '%".$S_hostname."%') ";
		$xsear = true;
	}
	if ($S_referer != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(referer LIKE '%".$S_referer."%') ";
		$xsear = true;
	}
	if ($S_agent != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(agent LIKE '%".$S_agent."%' OR browser LIKE '%".$S_agent."%' OR system LIKE '%".$S_agent."%') ";
		$xsear = true;
	}
	if ($S_res != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(CONCAT(res_w,'x',res_h) LIKE '%".$S_res."%') ";
		$xsear = true;
	}
	if ($S_color != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(color = '".$S_color."') ";
		$xsear = true;
	}
	if ($S_online != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(online ".$S_online_x." '".$S_online."') ";
		$xsear = true;
	}
	if ($S_mp != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(mp ".$S_mp_x." '".$S_mp."') ";
		$xsear = true;
	}
	if (!$xsear) $sql = ''; // if an empty search has been submited
	return $sql;
}


function usrSearch() {
	
	global $S_usernameid, $S_hits, $S_hits_x, $S_access, $S_access_x;
	global $S_email, $S_timeout, $S_timeout_x, $S_gmt, $S_gmt_x;
	global $S_url, $S_style, $S_demo, $S_visible, $S_conf;
	global $mail_broke_at;
	
	$xsear = false;
	$sql = "WHERE ";

	if ($S_usernameid != '') {
		$sql.= "(username LIKE '%".$S_usernameid."%' OR id LIKE '%".$S_usernameid."%') ";
		$xsear = true;
	} else if ($mail_broke_at > 0) {
		$sql.= "(id > ".$mail_broke_at.") ";
		$xsear = true;
	}
	if ($S_email != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(email LIKE '%".$S_email."%') ";
		$xsear = true;
	}
	if ($S_url != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(your_url LIKE '%".$S_url."%') ";
		$xsear = true;
	}
	if ($S_demo != '-') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(demo = ".$S_demo.") ";
		$xsear = true;
	}
	if ($S_visible != '-') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(visible = ".$S_visible.") ";
		$xsear = true;
	}
	if ($S_conf != '-') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(conf = ".$S_conf.") ";
		$xsear = true;
	}
	if ($S_hits != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(hits ".$S_hits_x." '".$S_hits."') ";
		$xsear = true;
	}
	if ($S_timeout != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(timeout ".$S_timeout_x." '".$S_timeout."') ";
		$xsear = true;
	}
	if ($S_access != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(ROUND(access_diff/(24*60*60)) ".$S_access_x." ".($S_access).") ";
		$xsear = true;
	}
	if ($S_gmt != '') {
		if ($xsear) $sql.= "AND ";
		$sql.= "(gmt ".$S_gmt_x." ".$S_gmt.") ";
		$xsear = true;
	}
	if (!$xsear) $sql = ''; // if an empty search has been submited
	return $sql;
}