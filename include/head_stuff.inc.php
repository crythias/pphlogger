<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: head_stuff.inc.php,v 1.17 2003/08/18 19:12:27 cvs_iezzi Exp $

    head_stuff.inc.php stuff required for head.inc.php
    --------------------------------------------------------- */

if (!defined('__GOT_HEADSTUFF__')){
	
	if (defined('__GOT_USERDATA__')){
		/* PW-CHECK - if wrong pw, redirect to login-page */
		if (($password != $pw) && (!$guest)) {
			Header("Location: $usr_view[0]?wrongpw=1");
			exit;
		}
		
		/*
		 * logging your customers for the "last xx customers" view in admin3
		 */
		if (!$admin && !isset($admin_rulez)) {
			$userlog_ip = ($loopback_bug || (!get_IP())) ? get_real_IP() : get_IP();
			$userlog_hostname = ($userlog_ip != '') ? getHostByAddr($userlog_ip) : '';
			
			$sql = "SELECT id,t_reload-t_since AS diff "
				 . "FROM ".PPHL_TBL_USERLOG." "
				 . "WHERE ok = 'N' "
				 . "AND ($curr_gmt_time-t_reload) > $master_timeout";
			$res = mysql_query($sql);
			echo mysql_error();
			while ($row = mysql_fetch_array($res)) {
				$onl_sql = "UPDATE ".PPHL_TBL_USERLOG." SET online='".$row[1]."',ok='Y' "
				         . "WHERE id='".$row[0]."' AND ok = 'N'";
				$onl_res = mysql_query($onl_sql);
			}
			$sql = "UPDATE ".PPHL_TBL_USERLOG." SET t_reload = $curr_gmt_time, "
			     . "ip = '".$userlog_ip."', hostname = '".$userlog_hostname."' "
			     . "WHERE id=".$id." "
				 . "AND ok='N'";
			$res = mysql_query($sql);
			if (!mysql_affected_rows()) {
				$sql = "INSERT INTO ".PPHL_TBL_USERLOG." (id,ip,hostname,t_since,t_reload) "
				     . "VALUES (".$id.",'".$userlog_ip."','".$userlog_hostname."',$curr_gmt_time,$curr_gmt_time)";
				$res = mysql_query($sql);
			}
		}
	} else {
		$your_url = '';
		$hits     = '';
		/* include the language localization file */
		include PPHL_LANG_DEFAULT;
		/* include color variables */
		include INC_GETCSSCOLORS;
	}
	
	/* check browser for special CSS settings */
	$usragent = extract_agent($HTTP_USER_AGENT);
	if (is_array($usragent)) {
		if ($usragent[0] == 'NS' && $usragent[1] < 5)
			define('SOLID_BORDER_CSS', FALSE);
		else define('SOLID_BORDER_CSS', TRUE);
	} else {
		define('SOLID_BORDER_CSS', TRUE);
	}
	
	if ($usragent[0] == 'IE' || $usragent[0] == 'OP')
		$IE4 = TRUE;
	else
		$IE4 = FALSE;
	
	/* date format */
	if (!isset($strHeadDateFormat)) $strHeadDateFormat = "M d, <b>h:iA</b>";
	/* date to display in the top-right corner */
	$date_current = date($strHeadDateFormat, GMTtoUser($curr_gmt_time,$is_a_user));
	
define('__GOT_HEADSTUFF__', 1);
}