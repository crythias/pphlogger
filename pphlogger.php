<?php
///////////////////////////////////////////////////////////////////////////////
//                                                                           //
//   Copyright (c) 2000-2003  Philip Iezzi [pipo@iezzi.ch]                   //
//   http://www.phpee.com                                                    //
//                                                                           //
//   This file is part of PowerPhlogger.                                     //
//                                                                           //
//   PowerPhlogger is free software; you can redistribute it and/or modify   //
//   it under the terms of the GNU General Public License as published by    //
//   the Free Software Foundation; either version 2 of the License, or       //
//   (at your option) any later version.                                     //
//                                                                           //
//   PowerPhlogger is distributed in the hope that it will be useful,        //
//   but WITHOUT ANY WARRANTY; without even the implied warranty of          //
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           //
//   GNU General Public License for more details.                            //
//                                                                           //
//   You should have received a copy of the GNU General Public License       //
//   along with PowerPhlogger; if not, write to the Free Software            //
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA //
///////////////////////////////////////////////////////////////////////////////

// $Id: pphlogger.php,v 1.47 2003/10/31 17:35:46 cvs_iezzi Exp $

if(!defined('NO_SESS')) define('NO_SESS', 1);
if (!defined('PPHL_SCRIPT_PATH')) define('PPHL_SCRIPT_PATH', '');
include PPHL_SCRIPT_PATH."main_location.inc";
if(!defined('__MAIN_DUMMY__')) {
include INC_GETUSERDATA;

/*
 * get the visitor's IP/hostname
 */
$ip       = '';
$proxy    = '';
$proxy_ip = '';

/*
 * get the correct IP
 */
if($loopback_bug) { // using dumb hosting provider like f2s
	
	$ip       = get_real_IP();
	
} else if(isset($HTTP_VIA) && $HTTP_VIA) { // Using proxy!
	
	$ip       = get_real_IP();
	$proxy    = trim(addslashes(urldecode(strstr($HTTP_VIA,' '))));
	$proxy_ip = (get_IP()) ? get_IP() : $ip;
	
} else { // Not using proxy...
	
	$ip       = (get_IP()) ? get_IP() : get_real_IP();
	
}

$hostname       = ($ip)       ? @getHostByAddr($ip)       : '';
$proxy_hostname = ($proxy_ip) ? @getHostByAddr($proxy_ip) : '';


/*
 * cut the URL if this hasn't be done already by PHP
 */
if (!(defined('WIN32_PHPEXE') && ($st == 'php' || $st == 'phpjs'))) $url = cutURL($url);

/*
 * workaround for dumb users who use their redir-URL (e.g. http://kickme.to/bla...)
 * instead of the correct URL.
 */
if (!$url) { // "real" URL was not found in the URL-list
    $url = cutURL($referer); // use the referrer (redir-URL) and check if it's in the list
    $referer = ''; // referrer is no longer good as a referrer as now we use it as the "real" URL
    $url_error = (!$url) ? true : false; // no error if the redir-URL was found in the list
} else {
    $url_error = false; // no dumb user, everything correct! :)
}

/*
 * Make sure we need to log the visitor...
 */
if ( !isset($$cookie_phloff) &&  // cookie-switch off?
     !isBlockedIP($ip)       &&  // is the visitor's IP blocked?
	 !isBlockedRef($referer) &&  // is the visitor's referrer blocked?
	 !$url_error             &&  // was there an error found in the URL-list?
	 $conf == 1                  // has the useraccount been confirmed?
	) {
	
	/*
	 * if screenheight is not set, generate it
	 */
	if (!stristr($r,'x')) $r = full_screenres($r);
	$res_arr = explode('x',$r);
	$res_w = (isset($res_arr[0])) ? (int) $res_arr[0] : 0;
	$res_h = (isset($res_arr[1])) ? (int) $res_arr[1] : 0;
	
	/*  ---------------------------------------------
	    MULTI-PAGE TRACKING
	    ---------------------------------------------
	    this will track all of your page-views
	    It doesn't check for IP, so, if each time the page reloads,
	    there will be an increment.
	*/
	
	/*
	 * URL clean-up:
	 * 1) cut the '?', '#', '&', or ';' part of the URL
	 *    <scheme>://<user>@<host>:<port>/<path>?<query>#<fragment>
	 *    If query string is set, cut all other query-strings. (user settings)
	 * 2) removes unnecessary '/./',...
	 * 3) changes /index.* to / (user settings)
	 */
	$url = pureURL($url);
	
	/*
	 * NEW visitor tracking through PHP in combination with JS
	 * If we get the logid handed over by JS (jslogid), just update
	 * the resolution/color and mp-title information of the current log.
	 */
	if (isset($jslogid) && $st == 'js') {
		$sql = "UPDATE $tbl_logs SET res_w = $res_w, res_h = $res_h, color = $c WHERE logid = $jslogid";
		$res = mysql_query($sql);
		mpdl_setTitle ($url, $title);
		setcookie($cookie_same, $jslogid, time()+$timeout);
		// nothing else needs to be done here
		echo "document.open()\ndocument.write(' ')\ndocument.close()\n";
		exit;
	}
	
	/* insert URL into pphl_xxxxx_mpdl table */
	$entryid = insert_mpdl($url, 'mp', $tbl_mpdl, $title);
	
	/*  ---------------------------------------------
	    BROWSER-TRACKER - the heart of Power-Phlogger
	    ---------------------------------------------
	*/
	
	if (isset($$cookie_same)) $logid = $$cookie_same;  // case 1: cookie is around, IP may have changed
	else                      $logid = get_logid($ip); // case 2: cookie is gone, same IP
	
	/*
	 * If it's an existing visitor who accesses the site during the $timeout,
	 * this we're updating the logs table and are not going to log the visitor
	 * as another unique hit.
	 */
	if ($logid) {
		$newpath = getNewPath($entryid,$logid); // get the current visitor path
		$sql = "UPDATE $tbl_logs SET t_reload = $curr_gmt_time, online = $curr_gmt_time - time, mp = mp+1";
		if($newpath) $sql .= ", path='$newpath'"; // only update the path if it has changed
		$sql .= " WHERE logid = $logid";
		$res = mysqli_query($connected,$sql);
		// DO NOT SET COOKIE if called by st='phpjs' - cookie will be set in following st='js'
		if($st != 'phpjs') setcookie($cookie_same, $logid, time()+$timeout);
		
	/*
	 * If it's a new visitor, log him...
	 */
	} else {
		/*
		 * increase the user's counter
		 */
		$sql = "UPDATE ".PPHL_TBL_USERS." SET hits = hits+1,"
		     . "last_access = $curr_gmt_time "
		     . "WHERE id = $id";
		$res = mysqli_query($connected,$sql);
		$hits += 1;
		
		/*
		 * get the top-level-domain
		 */
		if (($hostname > '') && ($hostname!=$ip)) {
			$tld = strtolower(substr(strrchr($hostname, '.'), 1));
		} else {
			$tld = '';
		}
		
		/*
		 * get agent information
		 */
		if(isset($HTTP_USER_AGENT)) $agent = addslashes(urldecode($HTTP_USER_AGENT));
		else $agent = '';
		
		/*
		 * extract keywords from referrer
		 */
		if (strstr($referer,'?')) {
			$arr_engines = load_engines();
			$keywrd = show_keywords($referer, $arr_engines);
			if (is_array($keywrd) && $keywrd[3]) {
				insert_keyw($keywrd[3]);
				$seareng = $keywrd[2];
			} else {
				$seareng = '';
			}
		} else {
			$seareng = '';
		}
		
		/*
		 * get rid of own referrers
		 */
		$referer = removeOwnRef($referer);
		
		/*
		 * extract agent information
		 * If agent already exists in pphlogger_agents, just get it's ID
		 */
		$agentid = insert_agent($agent, TRUE);
		
		/* insert all log-data into the user's loglist */
		$sql = "INSERT INTO $tbl_logs "
		     . "(hostname,tld,ip,entryid,path,referer,seareng,agentid,res_w,res_h,color,time,t_reload,proxy,proxy_ip,proxy_hostname) "
		     . "VALUES ('$hostname','$tld','$ip',$entryid,$entryid,'$referer','$seareng',$agentid,$res_w,$res_h,$c,$curr_gmt_time,$curr_gmt_time,"
		     . "'$proxy','$proxy_ip','$proxy_hostname')";
		$res = mysqli_query($connected,$sql);
		$logid = mysqli_insert_id($connected);
		
		/* DEBUG !!! - send email to administrator*/
		if(mysqli_error($connected)) { // if there was an error in the above mysql-statement, mail it to the admin
			$err_msg = mysqli_errno($connected).": ".mysqli_error($connected);
			$err_time = date("M d, h:i:s A");
			mail($admin_mail, "mysql error - ".$username, $sql.CRLF.CRLF.CRLF.$err_msg.CRLF.CRLF.$err_time, getMailheader($admin_mail));
		}
		
		// DO NOT SET COOKIE if called by st='phpjs' - cookie will be set in following st='js'
		if($st != 'phpjs') setcookie($cookie_same, $logid, time()+$timeout);
		
		
		/*  ---------------------------------------------
		    MAIL-NOTIFICATION
		    ---------------------------------------------
		*/
		if ($hit_mail > 0 && ($hits % $hit_mail) == 0) {
			$subject  = "Log hits from ".$primary_url;
			$file_body_txt = CFG_MSG_PATH.'email_notif_'.$lang.'.txt';
			$body_txt = fread($fp = fopen($file_body_txt, 'r'), filesize($file_body_txt));
			fclose($fp);
			$body_txt = str_replace('{CFG_PHPEXT}',CFG_PHPEXT,$body_txt); // ugly work-around
			while(preg_match('/(%.+%)/U',$body_txt, $matches) == TRUE){
				$matchvar = str_replace('%','',$matches[1]);
				$body_txt = str_replace($matches[1], $$matchvar, $body_txt);
			}
			// mail() requires a comma-separated list for multiple email
			$email_to = emailAdressString($email, $username, ',');
			mail($email_to, $subject, $body_txt, getMailheader($admin_mail));
		} 
	}
} // cookie is not set | IP is blocked | Ref is blocked

register_shutdown_function("pphlShutdown");

/*  ---------------------------------------------
    VISIBILITY
    ---------------------------------------------
*/
if ($url_error || !$conf) $visible = 0;
$show_txt = $hits;
include INC_VISIBILITY;
} // if(!defined('__MAIN_DUMMY__'))
?>