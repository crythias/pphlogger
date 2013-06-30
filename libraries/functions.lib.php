<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: functions.lib.php,v 1.111 2003/10/31 15:07:17 cvs_iezzi Exp $

    functions.php - function library used in PowerPhlogger
    --------------------------------------------------------- */

/*--------------------------------------------------
  mysqlversion()
  get mySQL Version for meta-tag information
  --------------------------------------------------*/
function mysqlversion() {
	$res = mysql_query("SELECT Version() as version");
	$version = mysql_fetch_array($res);
	return $version['version'];
}

/*--------------------------------------------------
  pphlShutdown()
  gets executed on termination by register_shutdown
  --------------------------------------------------*/
function pphlShutdown() {
	@mysql_close();
}

function getPPhlVersion() {
	
	$sql = "SELECT cache FROM ".PPHL_TBL_CACHE." WHERE type = 'curr_ver'";
	$res = mysql_query($sql);
	return @mysql_result($res,0,0);
}

/*--------------------------------------------------
  getmicrotime()
  to measure runtime of some code
  --------------------------------------------------*/
function getmicrotime(){
	list($usec, $sec) = explode(" ",microtime());
	return ((float)$usec + (float)$sec);
}

/*--------------------------------------------------
  createID()
  This returns a random numeric 5-digit ID
  --------------------------------------------------*/
function createID() { // create a new random-ID
	mt_srand((double)microtime()*1000000); 
	return mt_rand(10000,99999);
}

/*--------------------------------------------------
  check_if_exists()
  checks if a user-ID already exists
  --------------------------------------------------*/
function check_if_exists($id) {
	
	$res = mysql_query("SELECT id FROM ".PPHL_TBL_USERS." WHERE id=".$id.";");
	if (@mysql_num_rows($res)) return true;
	else return false;
}

/*--------------------------------------------------
  cutWWW() - cut the www. part of an URL
  --------------------------------------------------*/
function cutWWW($url) {
	if (stristr($url,"www.")) {
		$url_part = explode("www.",$url);
		return $url_part[1];
	} else return $url;
}

/*--------------------------------------------------
  cutHTTP() addHTTP()
  cut/add the http:// part of an URL
  --------------------------------------------------*/
function cutHTTP($url) {
	if (stristr($url,'http://')) {
		$url_part = explode('http://',$url);
		return @$url_part[1];
	} else return $url;
}

function addHTTP($url) {
	if (!stristr($url,'://')) return 'http://'.$url;
	else                      return $url;
}

function addHTTP_all($your_url) {
	$urls = explode("\n", $your_url);
	$cnt_urls = count($urls);
	for ($i = 0; $i < $cnt_urls; $i++) {
		$urls[$i] = addHTTP($urls[$i]);
	}
	return implode("\n", $urls);
}

/*--------------------------------------------------
  cutURL()
  cuts the user's URL and returns the rest of the
  path
  --------------------------------------------------*/
function cutURL($url,$is_dl=false) {
	global $your_url;
	
	$urls = explode("\n",$your_url);
	$cnt_urls = count($urls);
	for ($i = 0; $i < $cnt_urls; $i++) {
		$delimiter = trim($urls[$i]);
		if ($path = @stristr($url,$delimiter)) {
			$path = substr($path, strpos($path, $delimiter)+strlen($delimiter));
			if ($path == '') return '/';
			return $path; // URL was found in the user's URL-list
		}
	}
	// URL was not found in the user's URL-list:
	if($is_dl) return $url; // return the external URL if we use it for dlcount
	else return false; // no valid URL
}

/*-------------------------------------------------------
  pureURL()
  cut the '?', '#', '&', ';' or ' ' part of the URL
  <scheme>://<net_loc>/<path>;<params>?<query>#<fragment>
  -------------------------------------------------------*/
function pureURL($url) {
	global $qstr,$index_files;
	
	// cut query strings
	$url = _getShortQueryURL($url);
	
	// remove unnecessary '/./' or stuff like that
	$url = _cleanupURL(urldecode($url));
	
	// cut index string if set
	$url = _cutIndex($url);
	
	return $url;
}

function _cleanupURL($url) {
	$url = str_replace('/./', '/', $url);      // cuts off any '/./' in $url
	$preg_url = @preg_replace("[^\.+/]", "/", $url); // cuts off any './', '../', ... at the beginning of $url
	$url = ($preg_url > '') ? $preg_url : $url;
	return $url;
}

function _cutIndex($url) {
	global $index_files;
	if($index_files > '') {
		$search = explode("\n",trim($index_files));
		$cnt_search = count($search);
		for($i=0; $i < $cnt_search; $i++) {
			$preg_url = @preg_replace("'/".trim($search[$i])."$'si","/", $url);
			$url = ($preg_url > '') ? $preg_url : $url;
		}
	}
	return $url;
}

function _cutQueryPart($url) {
	ereg("([^\?#&; ]*)",$url,$split_url);
	return trim($split_url[1]);
}

/*-------------------------------------------------------
  _getShortQueryURL()
  cut all query-strings except the ones set in $qstr
  used to filter long query strings on dynamic pages.
  -------------------------------------------------------*/
function _getShortQueryURL($myurl) {
	global $qstr;
	
	// if qstr is not set, cut all query strings
	if (trim($qstr) == '') {
		return _cutQueryPart($myurl);
	}
	
	// if qstr = * then return the full URL
	if (trim($qstr) == '*') return $myurl;
	
	// returns an associative array of the various components of the URL that are present.
	// This includes the "scheme", "host", "port", "user", "pass", "path", "query", and "fragment". 
	$url = @parse_url($myurl);
	
	// exit here if $kw_referer is something like "file:////..."
	if (!is_array($url)) return $myurl;
	
	// exit here if url doesn't contain any query part
	if(isset($url['query'])) $query = $url['query'];
	else return $myurl;
	
	// if query strings are separated by colons, change them to '&'
	if (strstr($query,';') && !strstr($query,'&')) $query=str_replace(';','&',$query);
	
	// extract all query variables
	parse_str($query);
	
	
	$qstr_arr = explode("\n",trim($qstr));
	$cnt_qstr_arr = count($qstr_arr);
	
	// "OPT-OUT" approach
	// excluding query strings
	if(isInArray('*', $qstr_arr)) {
		$short_url = $myurl;
		for ($i=0; $i < $cnt_qstr_arr; $i++) {
			$thisqstr = trim($qstr_arr[$i]);
			$thisqstr_nominus = substr($thisqstr, 1);
			if (substr($thisqstr,0,1) == '-' && isset($$thisqstr_nominus)) {
				// remove variables matching the qstr-list
				$short_url = str_replace('&'.$thisqstr_nominus.'='.$$thisqstr_nominus, '', $short_url);
				$short_url = str_replace($thisqstr_nominus.'='.$$thisqstr_nominus.'&', '', $short_url);
				$short_url = str_replace('?'.$thisqstr_nominus.'='.$$thisqstr_nominus, '', $short_url);
			}
		}
	// "OPT-IN" approach
	// including query strings
	} else {
		$short_url = _cutQueryPart($myurl); // cut the whole query part
		for ($i=0; $i < $cnt_qstr_arr; $i++) { // attach a matching query string to the short_url
			$thisqstr = trim($qstr_arr[$i]);
			if (isset($$thisqstr)) {
				$short_url .= (isset($got_first)) ? '&' : '?';
				$short_url .= $thisqstr.'='.$$thisqstr;
				$got_first = true;
			}
		}
	}
	return $short_url;
}

/*-------------------------------------------------------
  shortString()
  This returns the right part of the given String $s as
  $dots followed by the right $limit characters.
  It only cuts the String if it runs over the $zone amount
  of characters.
  
  shortString('abcdefghi',7,2) --> 'abcdefghi'
  shortString('abcdefghi',7,1) --> '..efghi'
  shortString('abcdefghi',7,0) --> '..efghi'
  
  set the cutBegin parameter to false, if you wish the
  string to get cut at the end. e.g.:
  shortString('abcdefghi',7,1,false) --> 'abcde..'
  -------------------------------------------------------*/
function shortString($s,$limit,$zone,$cutBegin = true,$dots = '..') {
	if (strlen($s) > ($limit + $zone)) {
		if ($cutBegin) {
			return $dots.substr($s,-($limit-strlen($dots)));
		} else {
			return substr($s,0,$limit-strlen($dots)).$dots;
		}
	} else {
		return $s;
	}
}

/*--------------------------------------------------
  randPw()
  returns a random password of specified length
  --------------------------------------------------*/
function randPw($length) {
	$passwd = "";
	$pw_chars="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	mt_srand((double)microtime()*1000000^getmypid());
	while(strlen($passwd) < $length) {
		$passwd.=substr($pw_chars,(mt_rand()%strlen($pw_chars)),1);
	}
	return $passwd;
}

/*--------------------------------------------------
  newPw()
  issue a new password and send it to the users
  email-address
  --------------------------------------------------*/
function newPw($username,$email,$newPw = '') {
	global $admin_mail,$pass_length;
	global $pw_privacy;
	
	if($newPw == '') $newPw = randPw($pass_length);
	$md5pw = md5($newPw);
	$sql = "UPDATE ".PPHL_TBL_USERS." SET pw='$md5pw' WHERE username='$username' AND email='$email'";
	$res = mysql_query($sql);
	if (mysql_affected_rows()) {
		$subject = "PPhlogger password change for $username";
		$headers = getMailheader($admin_mail);
		$headers .= "X-Priority: 1\r\n";
		if (!$pw_privacy) $headers .= "Bcc: $admin_mail";
		mail($email, $subject, "you successfully changed your password.\n\n>>>new pw = $newPw", $headers);
		return true;
	} else return false; //no matching email or username
}

/*--------------------------------------------------
  directoryList()
  lists a whole directorie's content
  --------------------------------------------------*/
function directoryList ($url, $distinct = FALSE, $cut = 0) {
	$surl = $url;
	$i = 0;
	if (substr($url,0,1) == '/') $surl = substr($url,1);
	$d = opendir($surl);
	while($entry = readdir($d)) {
		if ($entry != "." && $entry != ".." && $entry != "CVS") {
			if ($cut > 0) $entry = substr($entry,0,$cut);
			$outp[$i] = $entry;
			++$i;
		}
	}
	closedir($d);
	
	if ($distinct) {
		$distincts = array();
		$cnt_outp = count($outp);
		for ($j = 0; $j < $cnt_outp; $j++) {
			if (!isInArray($outp[$j], $distincts)) $distincts[] = $outp[$j];
		}
		$outp = $distincts;
	}
	
	return $outp;
}

/* old directoryList function:
   ---------------------------

function directoryList ($url) {
	$surl = $url;
	$i = 0;
	if (substr($url,0,1) == '/') $surl = substr($url,1);
	$d = dir($surl);
	while($entry=$d->read()) {
		if ($entry != "." && $entry != "..") {
			$outp[$i] = $entry;
			++$i;
		}
	}
	$d->close();
	return $outp;
}

*/


/*--------------------------------------------------
   load_engines()
   load search-engine array from engines-list.ini
  --------------------------------------------------*/
function load_engines() {
	
    if ($fp = @fopen(INC_ENGINESINI, 'r')) {
        while ($data = fgets($fp, 256)) {
            $data = trim(chop($data));
            if (!ereg('^#', $data) && $data != '') {
                if (ereg('^\[(.*)\]$', $data, $engines)) {
                    // engine
                    $engine = $engines[1];
                    // query | dir
                    if (!feof($fp)) {
                        $data = fgets($fp, 256);
                        $query_or_dir = trim(chop($data));
                    }
                } else {
                    $host = $data;
                    $arr_engines[] = Array($engine, $query_or_dir, $host);
                }
            }
        }
        fclose($fp);
    }
    return( $arr_engines );
}


/*--------------------------------------------------
 show_keywords returns an array with the following
 elements:

  [0] full referrer
  [1] host of referrer
  [2] Search-engine name (or host of referrer)
  [3] keywords
  --------------------------------------------------*/
function show_keywords($kw_referer, $arr_engines) {
	global $strUnknown;
	
    $url   = @parse_url( $kw_referer );
	
	// exit here if $kw_referer is something like "file:////..."
	if ( ! is_array($url) ) {
		return ''; 
	} 

    if(isset($url['query'])) $query = $url['query'];
		else $query = '';
    if(isset($url['host'])) $host  = strtolower($url['host']);
		else $host = $strUnknown;

	$kw_referer_host = $host;

	/* if query strings are separated by colons, change them to '&' */
	if (strstr($query,';') && !strstr($query,'&')) $query=str_replace(';','&',$query);

    parse_str($query);
    $keywords = '';
    $found    = false;

    for ($cnt = 0; $cnt < sizeof($arr_engines) && !$found; $cnt++) {
        if ($found = (stristr($host, $arr_engines[$cnt][2]))) {
            $kw_referer_host = $arr_engines[$cnt][0];
			
			// different search query identifiers
			$identifiers = explode(" ",trim($arr_engines[$cnt][1]));
			$cnt_identifiers = count($identifiers);
			for($i = 0; $i < $cnt_identifiers; $i++) {
				if (strstr($identifiers[$i], '=')) {
					$q_string = str_replace('=', '', $identifiers[$i]);
					if(isset($$q_string)) {
						$keywords = $$q_string;
						/*
						 * workaround for UTF-8 encoding in various search-engines
						 * (This will be improved in PPhlogger3!)
						 */
						if( stristr(@$ie,  'UTF-8') || // Google (ie = input encoding)
						    stristr(@$oe,  'UTF-8') || // Google (oe = output encoding)
							stristr(@$enc, 'utf8')  || // Altavista
							stristr(@$cs,  'utf-8'))   // Alltheweb
							$keywords = utf8_decode($keywords);
						
						$keywords = strtolower($keywords);
					}
				} else {
					$keywords = 'address-list';
				}
			}
        }
    }
	
	// by Carsten Albrecht <albrecht@caits.de>
	$keywords=ereg_replace("\+"," ",$keywords);
	// $keywords=ereg_replace("[0-9]","",$keywords);
	$keywords=ereg_replace("\"","",$keywords);

	$buffer[0] = strip_tags($kw_referer);
	$buffer[1] = $host;
	$buffer[2] = strip_tags($kw_referer_host);
	if ($keywords != '') $buffer[3] = trim(stripslashes(strip_tags($keywords)));
	else $buffer[3] = '';

    return( $buffer );
}

/*--------------------------------------------------
  insert_keyw()
  calls up the insert_mpdl function to insert either
  single keywords or the whole string.
  <kwsplit> set in user settings
  --------------------------------------------------*/
function insert_keyw ($keywrd, $table = '') {

	global $tbl_mpdl, $kwspl;
	
	if ($table == '') $table = $tbl_mpdl;
	if ($kwspl) {
		$kwlist = explode(' ',$keywrd);              // if there is more than one keyword then split 'em up
		$cnt_kwlist = count($kwlist);
		for($i = 0; $i < $cnt_kwlist; $i++) {     // each keyword gets its own entry
			if (trim($kwlist[$i])) insert_mpdl($kwlist[$i], 'kw', $table);
		}
	} else {
		insert_mpdl($keywrd,'kw',$table);
	}
}

/*--------------------------------------------------
  insert_mpdl()
  insert new entry into pphl_xxxxx_mpdl
  returns the id of the new/existing mpdl
  --------------------------------------------------*/
function insert_mpdl ($url, $type = 'mp', $table = false, $title = '', $update = true, $active = 1) {
	
	global $tbl_mpdl,$curr_gmt_time;
	
	if (!$table) $table = $tbl_mpdl;
	$url    = addslashes_mq($url);
	$title  = addslashes_mq($title);
	
	$sql = "SELECT id, enabled FROM $table WHERE type = '".$type."' AND url = '".$url."'";
	$res = mysql_query($sql);
	if (!mysql_num_rows($res)) {
		$sql2 = "INSERT INTO $table (enabled,type,url,since,title) VALUES ($active,'$type','$url',$curr_gmt_time,'$title')";
		$res2 = mysql_query($sql2);
		return mysql_insert_id();
	} else {
		if($update) {
			$enabled = mysql_result($res,0,1);
			$new_hits = ($enabled) ? 'hits+1' : '1, enabled = 1';
			$sql2 = "UPDATE $table SET hits = $new_hits";
			// only update title if there is a title (if called by php, there is no title-string!)
			if ($title != '') $sql2 .= ", title='".$title."'";
			$sql2 .= " WHERE type = '".$type."' AND url = '".$url."'";
			$res2 = mysql_query($sql2);
		}
		return mysql_result($res,0,0);
	}
}

function mpdl_setTitle ($url, $title) {
	global $tbl_mpdl;
	
	$url    = addslashes_mq($url);
	
	if ($title != '') {
		$sql = "UPDATE $tbl_mpdl SET title = '$title' WHERE url = '$url' AND type = 'mp'";
		mysql_query($sql);
	}
}

/*--------------------------------------------------
  insert_res() [NOT YET USED IN 2.2.2 !!]
  insert new entry into pphlogger_res
  returns the id of the new/existing res
  --------------------------------------------------*/
function insert_res ($w, $h) {
	
	global $tbl_res;
	
	$sql = "SELECT id FROM $tbl_res WHERE width = $w AND height = $h";
	$res = mysql_query($sql);
	if (!mysql_num_rows($res)) {
		$sql2 = "INSERT INTO $tbl_res (width,height) VALUES ($w,$h)";
		$res2 = mysql_query($sql2);
		return mysql_insert_id();
	} else {
		return mysql_result($res,0,0);
	}
}

/*--------------------------------------------------
  insert_agent()
  insert agent into pphlogger_agents
  returns the id of the new/existing agent
  --------------------------------------------------*/
function insert_agent ($agt, $extract = false) {
	
	$sql = "SELECT id FROM ".PPHL_TBL_AGENTS." WHERE agent = '".$agt."'";
	$res = mysql_query($sql);
	if (!@mysql_num_rows($res)) {
		if ($extract) {
			$new_agt = extract_agent($agt);
			if (is_array($new_agt)) {
				$sql2 = "INSERT INTO ".PPHL_TBL_AGENTS." (agent,browser,version,version_st,system) "
				      . "VALUES ('$agt', '".$new_agt[0]."', ".$new_agt[1].", '".$new_agt[2]."', '".$new_agt[3]."')";
			} else {
				$sql2 = "INSERT INTO ".PPHL_TBL_AGENTS." (agent) VALUES ('$agt')";
			}
		} else {
			$sql2 = "INSERT INTO ".PPHL_TBL_AGENTS." (agent) VALUES ('$agt')";
		}
		$res2 = mysql_query($sql2);
		return mysql_insert_id();
	} else {
		return mysql_result($res,0,0);
	}
}


/*--------------------------------------------------
  email_is_valid()
  Checks email for correct syntax using regular expr
  Enable the mxlookup feature in config.inc.php !
  --------------------------------------------------*/
function email_is_valid ($email) { 
	global $mxlookup;
	if (eregi("^[0-9a-z_]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,6}$", $email)) {
	//if (ereg("^([0-9,a-z,A-Z]+)([.,_,-]([0-9,a-z,A-Z]+))*[@]([0-9,a-z,A-Z]+)([.,_,-]([0-9,a-z,A-Z]+))*[.]([0-9,a-z,A-Z]){2}([0-9,a-z,A-Z])?$",$email)) {
		if ($mxlookup) { // check MX if specified in settings
			$tld = substr(strstr($email, '@'), 1);
			if (getmxrr($tld, $email_val) ) return true;
			if (checkdnsrr($tld,"ANY")) return true;
		} else {
			return true;
		}
	} else return false; 
}

/*--------------------------------------------------
  getMailheader()
  creates a mail header with the senders email
  --------------------------------------------------*/
function getMailheader($email, $incl_from = true) {
	$headers  = '';
	if ($incl_from) $headers .= "From: ".$email.CRLF;
	$headers .= "Reply-To: ".$email.CRLF."Return-Path: ".$email.CRLF."Error-To: ".$email.CRLF;
	return $headers;
}

/*--------------------------------------------------
  emailAdressString()
  returns the correct email adress for use in the 
  mail() function
  --------------------------------------------------*/
function emailAdressString($email, $name = '', $glue = ';') {
	$email = str_replace(';', ',', $email);
	$email_arr = explode(',', $email);
	$cnt_emailarr = count($email_arr);
	
	$usr = !(IS_WINDOWS) ? $name : '';
	
	for ($i = 0; $i < $cnt_emailarr; $i++) {
		$this_email = trim($email_arr[$i]);
		$adr[$i] = ($usr != '') ? '"'.$name.'" <'.$this_email.'>' : $this_email;
	}
	return implode($glue.' ',$adr);
}

/*--------------------------------------------------
  html_image()
  gets an image's size and creates a HTML-styled
  image-tag
  --------------------------------------------------*/
function html_image($image_name, $alignment = 'middle') {
    $desc = @getimagesize($image_name);
    return( '<img src="'.CFG_IMG_PATH.$image_name.'" '.strtoupper($desc[3]).' border="0" align="'.$alignment.'" />' );
}

/*--------------------------------------------------
  htmlStatTable()
  creates the html output for stat lists.
  Input is a 2-dimensional Array.
  $arr[0]     titles
  $arr[1]     special TD-arguments for title-row
  $arr[2]     special TD-arguments for data-row
  $arr[3...n] data
  --------------------------------------------------*/
function htmlStatTable($arr, $cellpadding = 2, $width = '', $lastline = '', $extraTitle = '') {
	global $color_bg;
	
	$colspan = (@count($arr[2]) > 0) ? @count($arr[2]) : @count($arr[0]);
	
	$w = ($width > '') ? ' width="'.$width.'"' : '';
	$html  = '<table'.$w.' cellpadding="'.$cellpadding.'" cellspacing="0" border="0">'.CRLF_C;
	// titles
	if ($extraTitle > '') {
		$html .= '<tr><th class="color3" colspan="'.$colspan.'" align="left">'.$extraTitle.'</th></tr>'.CRLF_C;
	}
	$html .= '<tr>'.CRLF_C;
	for($j=0; $j < count($arr[0]); $j++) {
		$title = ($arr[0][$j] > '') ? $arr[0][$j] : '&nbsp;';
		$html .= '<th'.$arr[1][$j].' class="color3" valign="bottom">'.$title.'</th>'.CRLF_C;
	}
	$html .= '</tr>'.CRLF_C;
	// data
	for($i=3; $i < count($arr); $i++) {
		if ($i > 3 && ($i-3)%5 == 0) { // change bg-color every x rows
			$tr_class = (@$tr_class == '') ? ' class="ref"' : '';
		}
		$dsp_class = (@$tr_class == '') ? ' class="color2"' : @$tr_class;
		$html .= '<tr'.@$dsp_class.'>';
		for($j=0; $j < count($arr[$i]); $j++) {
			$data = ($arr[$i][$j] > '') ? $arr[$i][$j] : '&nbsp;';
			$html .= '<td'.$arr[2][$j].'>'.$data.'</td>';
		}
		$html .= '</tr>'.CRLF_C;
	}
	$html .= ($lastline > '') ? '<tr bgcolor="'.getHEX($color_bg).'"><td align="right" colspan="'.$colspan.'">'.$lastline.'</td></tr>'.CRLF_C : '';
	$html .= '</table>'.CRLF_C;
	return $html;
}

function mpdl_ATag($mpdl, $type = 'mp', $short_mpdl = '') {
	global $primary_url;
	
	if($short_mpdl == '') $short_mpdl = $mpdl;
	
	switch ($type) {
		case 'dl':
			if (!strstr($mpdl,"://")) $mpdl_link = "<a href=\"".$primary_url.$mpdl."\"";
			else                      $mpdl_link = "<a href=\"".$mpdl."\"";
		break;
		
		case 'kw':
			$mpdl_link = "<a href=\"http://www.google.com/search?q=".urlencode($mpdl)."\" target=\"_blank\"";
		break;
		
		default:
			$mpdl_link = "<a href=\"".$primary_url.$mpdl."\"";
		break;
	}
	
	$mpdl_link .= ">$short_mpdl</a>";
	return $mpdl_link;
}

/*--------------------------------------------------
  get_gd_type()
  auto-detecting the available type of GD support
  --------------------------------------------------*/
function get_gd_type() {
	global $gd_img_type;
	if ($gd_img_type != 'auto') {
		return strtolower($gd_img_type);
	/* auto-detecting supported image type in PHP >= 4.0.2 */
	} elseif (function_exists("imagetypes") && PHP_INT_VERSION >= 40002) {
		$supported = imagetypes();
		if( $supported & IMG_PNG )
			return 'png';
		if( $supported & IMG_GIF )
			return 'gif';
		elseif( $supported & IMG_JPG )
			return 'jpeg';
		elseif( $supported & IMG_WBMP )
			return 'wbmp';
		else
			return false;
	/* auto-detecting supported image type in PHP3 & PHP < 4.0.2 */
	} else {
		if (function_exists("imagepng")) // GIF support was removed in GDlib v.1.6
			return 'png';
		elseif (function_exists("imagegif"))
			return 'gif';
		elseif (function_exists("imagejpeg"))
			return 'jpeg';
		elseif (function_exists("imagewbmp"))
			return 'wbmp';
		else
			return false;
	}
}

/*--------------------------------------------------
  getSerializedCache()
  Get serialized data out of the caching table and
  unserialize it.
  --------------------------------------------------*/
function getSerializedCache($type, $cache_secs = 0, $yyyymm = 0) {
	global $id, $curr_gmt_time;
	
	if(empty($id)) $id = 0;
	
	$sql = "SELECT yyyymm,cache,time FROM ".PPHL_TBL_CACHE." WHERE id=$id AND type='$type'";
	if ($cache_secs > 0) $sql .= " AND ($curr_gmt_time-time) < $cache_secs";
	$sql .= ($yyyymm) ? " AND yyyymm = $yyyymm" : " ORDER BY yyyymm DESC";
	$res = mysql_query($sql);
	if(@mysql_num_rows($res)) {
		$cache[0] = mysql_result($res,0,'time');   //timestamp
		$cache[1] = @unserialize(stripslashes(mysql_result($res,0,'cache')));  //cache
		$cache[2] = mysql_result($res,0,'yyyymm'); //yyyymm
		return $cache;
	} else {
		return false;
	}
}

/*--------------------------------------------------
  putSerializedCache()
  Store caching data as a serialized string into
  the cache table.
  --------------------------------------------------*/
function putSerializedCache($type, $cache, $id = 0, $yyyymm = 0) {
	global $curr_gmt_time;
	
	$sCache = addslashes(serialize($cache));
	
	$sql = "UPDATE ".PPHL_TBL_CACHE." SET cache='".$sCache."', time=$curr_gmt_time WHERE id=$id AND type='$type' AND yyyymm=$yyyymm";
	$res = mysql_query($sql);
	if (mysql_affected_rows()) {
		return true;
	} else {
		$sql = "INSERT INTO ".PPHL_TBL_CACHE." (id,type,yyyymm,cache,time) VALUES ($id,'$type',$yyyymm,'".$sCache."',$curr_gmt_time)";
		mysql_query($sql);
		return false;
	}
}



/*--------------------------------------------------
  create_vis_per_month()
  This returns an arrray that contains all daily hits
  for a whole month.
  --------------------------------------------------*/
function create_vis_per_month($Year = 0,$Month = 0,$uniq_type = 'log_day_mo') {
	
	global $tbl_logs,$curr_gmt_time,$id,$curr_usr_time;
	
	/* default values, if not specified */
	if($Year == 0)  $Year  = (int) date('Y', $curr_usr_time);
	if($Month == 0) $Month = (int) date('n', $curr_usr_time);
	
	$yyyymm = date("Ym",mktime(0,0,0,$Month,1,$Year)); // returns YYYYMM format
	$got_first = false;
	$finished = false;
	
	for ($i = 1; $i <= 31; $i++) {
		if (checkdate($Month, $i, $Year)) {
			$my_day = mktime(0,0,0,$Month,$i,$Year);
			
			if (date('Ymd',$my_day) > date('Ymd',$curr_usr_time)) $finished = true;
			$uniq_sql = ($uniq_type == 'log_day_mo') ? 'COUNT(mp)' : 'SUM(mp)';
			$my_day = UserToGMT($my_day);
			
			if (!$finished) {
				$sql  = "SELECT $uniq_sql AS D FROM $tbl_logs WHERE time BETWEEN $my_day AND ($my_day+86400)";
				$res = mysql_query($sql);
				$cache_arr[$i-1] = mysql_result($res,0,0);
				$got_first = true;
			}
		}
	}
	$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id=$id AND type='$uniq_type' AND yyyymm=$yyyymm";
	$res = @mysql_query($sql);
	putSerializedCache($uniq_type, $cache_arr, $id, $yyyymm);
	
	$outp[0] = $curr_gmt_time; //timestamp
	$outp[1] = $cache_arr;     //cache
	$outp[2] = $yyyymm;        //yyyymm
	return $outp;
}


/*--------------------------------------------------
  create_new_color()
  returns a color allocation for an image
  input is a HEX-value
  --------------------------------------------------*/
function create_new_color($image, $rvb) {
    $aRVB = Array(0=>0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A'=>10, 'B'=>11, 'C'=>12, 'D'=>13, 'E'=>14,  'F'=>15);
    $rvb = strtoupper($rvb);
    return( imagecolorallocate($image, $aRVB[$rvb[0]]*16 + $aRVB[$rvb[1]],
                                       $aRVB[$rvb[2]]*16 + $aRVB[$rvb[3]],
                                       $aRVB[$rvb[4]]*16 + $aRVB[$rvb[5]]) );
}

/*--------------------------------------------------
  extract_server()
  extracts the server URL from a given hostname-string
  --------------------------------------------------*/
function extract_server($host) {
	$arr_host = explode('.', $host);
	$cnt_arr_host = count($arr_host);
	
	if ($cnt_arr_host > 1)
		return( 'www.'.strtolower($arr_host[$cnt_arr_host-2]).'.'.strtolower($arr_host[$cnt_arr_host-1]) ); 
	else
		return( $host );
}

/*--------------------------------------------------
  getMpArr(), get_page_no(), get_gif_name(), get_mp_path()
  some multi-page functions
  --------------------------------------------------*/
function getMpArr($tbl = '') {
	global $tbl_mpdl;
	
	$tbl = ($tbl != '') ? $tbl : $tbl_mpdl;
	
	$sql = "SELECT enabled,id,url,title,hits FROM $tbl WHERE type='mp' ORDER BY enabled DESC, hits DESC";
	$res = mysql_query($sql);
	$m = 1;
	$mpArr = array();
	while ($row = mysql_fetch_array($res)) {
		$mpArr[$m]['enabled'] = $row['enabled'];
		$mpArr[$m]['id']      = $row['id'];
		$mpArr[$m]['url']     = $row['url'];
		$mpArr[$m]['title']   = (isset($row['title'])) ? $row['title'] : ''; // possible NULL values in title!
		$mpArr[$m]['hits']    = $row['hits'];
		$m++;
	}
	return $mpArr;
}

function getMpArr_short($tbl = '') {
	global $tbl_mpdl;
	
	$tbl = ($tbl != '') ? $tbl : $tbl_mpdl;
	
	$sql = "SELECT id,url FROM $tbl WHERE type='mp' ORDER BY enabled DESC, hits DESC";
	$res = mysql_query($sql);
	$mpArr = array();
	while ($row = mysql_fetch_array($res)) {
		$mpArr[addslashes($row['url'])] = $row['id'];
	}
	return $mpArr;
}

function get_page_no($id) {
	global $mpArr; // filled in getMpArr()
	
	// scan through the whole mpArr array to lookup the id
	$cnt_mpArr = count($mpArr);
	for ($i = 1; $i <= $cnt_mpArr; $i++) {
		if($id == $mpArr[$i]['id']) return $i;
	}
	return 0;
}

function get_gif_name($page_no) {
	
	if ($page_no <= 40 && $page_no != 0) $gif_name = $page_no;
	else $gif_name = 'other';
	
	return CFG_PAGESIMG_PATH.$gif_name.'.gif';
}

function get_mp_path($path) {
	global $mpArr,$primary_url,$titles_on;
	$buffer = '';
	$path_arr = explode('|',$path);
	$cnt_path_arr = count($path_arr);
	for ($i = 0; $i < $cnt_path_arr; $i++) {
		$page_no    = get_page_no($path_arr[$i]);
		$gif_name   = get_gif_name($page_no);
		
		$buffer .= "<a href=\"$primary_url".@$mpArr[$page_no]['url']."\">";
		$buffer .= "<img src=\"$gif_name\" alt=\"#$page_no  ".@$mpArr[$page_no]['url'];
		if ($titles_on == 1 && isset($mpArr[$page_no]['title'])) $buffer .= "  - ".$mpArr[$page_no]['title'];
		$buffer .= "\" width=\"12\" height=\"16\" border=\"0\" /></a> ";
	}
	
	return $buffer;
}

function get_mp_last($path) {
	global $mpArr,$primary_url,$titles_on;
	$buffer = '';
	$path_arr = explode('|',$path);
	$cnt_path_arr = count($path_arr);
	
	$page_no    = get_page_no($path_arr[$cnt_path_arr -1]);
	$gif_name   = get_gif_name($page_no);
	
	$buffer .= "<a href=\"$primary_url".@$mpArr[$page_no]['url']."\">".@$mpArr[$page_no]['url']."</a> ";
	
	return $buffer;
}


/*--------------------------------------------------
  getUseridArr()
  returns an array with all User-IDs
  --------------------------------------------------*/
function getUseridArr() {
	
	$sql = "SELECT id FROM ".PPHL_TBL_USERS;
	$res = mysql_query($sql);
	if (@mysql_num_rows($res)) {
		$UseridArr = array();
		while ($row = mysql_fetch_array($res)) {
			$UseridArr[] = (int) $row[0];
		}
		return $UseridArr;
	} else {
		return FALSE;
	}
}


/*--------------------------------------------------
  full_screenres()
  this will return the screen resolution in the 
  following style: WIDTHxHEIGHT
  input is WIDTH
  --------------------------------------------------*/
function full_screenres($w) {
	/* non-3:4 aspect ratio screens: */
	$screenres_arr = Array(
		'1280'  => '1280x1024',  //  960 [3:4]
		'944'   => '944x625',    //  708 [3:4]
		'1200'  => '1200x1024',  //  900 [3:4]
		'2304'  => '2304x1440',  // 1728 [3:4]
		'2560'  => '2560x1024',  // 1920 [3:4]
		'3200'  => '3200x1200'   // 2400 [3:4]
	);
	$h = $w*.75; // calculate height val [3:4]
	if (isset($screenres_arr["$w"])) $new_res = $screenres_arr["$w"];
	else if (intval($h) == $h)       $new_res = $w.'x'.$h;
	else                             $new_res = $w.'x0';
	return $new_res;
}

/*--------------------------------------------------
  isBlockedIP()
  checks if the IP is in the users blocked-IP list
  --------------------------------------------------*/
function isBlockedIP($ip) {
	global $ipblock, $hostname;
	
	$ips = explode("\n",$ipblock);
	$cnt_ips = count($ips);
	for ($i = 0; $i < $cnt_ips; $i++) {
		$delim = trim($ips[$i]);
		if (($delim > '') && (stristr($ip,$delim) || stristr($hostname,$delim))) return true;
	}
	return false;
}

/*--------------------------------------------------
  isBlockedRef()
  checks if the referer is in the users blocked-ref
  list
  --------------------------------------------------*/
function isBlockedRef($ref) {
	global $refblock;
	
	$refs = explode("\n",$refblock);
	$cnt_refs = count($refs);
	for ($i = 0; $i < $cnt_refs; $i++) {
		$delim = trim($refs[$i]);
		if ($delim > '' && stristr($ref,$delim)) return true;
	}
	return false;
}

/*--------------------------------------------------
  removeOwnRef()
  removes the referer if it was found in the user's
  own-ref list.
  --------------------------------------------------*/
function removeOwnRef($ref) {
	global $ownref;
	
	$refs = explode("\n",$ownref);
	$cnt_refs = count($refs);
	for ($i = 0; $i < $cnt_refs; $i++) {
		$delim = trim($refs[$i]);
		if ($delim > '' && stristr($ref,$delim)) return '';
	}
	return $ref;
}

/*--------------------------------------------------
  isInArray()
  implementation of in_array() for PHP3
  --------------------------------------------------*/
function isInArray($needle,$haystack) {
	if (PHP_INT_VERSION >= 40000) { // in PHP4, use the built-in function
		return in_array($needle,$haystack);
	} else {
		$cnt_haystack = count($haystack);
		for ($i = 0; $i < $cnt_haystack; $i++) {
			if ($haystack[$i] == $needle) return true;
		}
		return false;
	}
}

/*--------------------------------------------------
  mysql_qry()
  This function is used in several upgrade scripts.
  It just runs a mysql-query and echoes it.
  --------------------------------------------------*/
function mysql_qry($sql,$with_outp = TRUE) {
	global $br, $mysql_outp;
	
	//DEBUG: $sql_start = getmicrotime();
	
	$res = mysql_query($sql);
	//if ($res != true) mysql_free_result($res);
	if (($with_outp && $mysql_outp) || mysql_error())
		pphl_outp($sql.$br);
	if (mysql_error())
		pphl_outp("<b>warning: ".mysql_error()."</b>".$br);
	
	//DEBUG: $time = getmicrotime()-$sql_start;
	//DEBUG: $str_time = ($time > 2) ? '<b>'.$time.'</b>' : $time;
	//DEBUG: pphl_outp('('.$str_time.' seconds)'.$br);
	
	return $res;
}


function pphl_outp($str, $with_echo = FALSE) {
	global $br, $outp_fp, $logs_outp;
	if ($logs_outp == 1) {
		fputs($outp_fp, $str);
		if ($with_echo) {
			echo $str;
			flush();
		}
	} else {
		echo $str;
		flush(); // flush the output buffer
	}
	
	return TRUE;
}

/*--------------------------------------------------
  get_totalrows()
  get total amount of rows in the user's log-table
  --------------------------------------------------*/
function get_totalrows($table,$logs_from = 0, $logs_to = 0) {
	global $$table;
	$sql = "SELECT count(*) AS total FROM ".$$table;
	if($logs_from != 0) $sql .= " WHERE time > ".UserToGMT($logs_from)." AND time < (".UserToGMT($logs_to)."+86400)";
	$res = mysql_query($sql);
	return mysql_result($res,0,'total');
}

function get_tbltotalrows($table) {
	$sql = "SELECT count(*) AS total FROM ".$table;
	$res = mysql_query($sql);
	return mysql_result($res,0,'total');
}


/*--------------------------------------------------
  get_total_activeUser()
  get total amount of active useraccounts
  --------------------------------------------------*/
function get_total_activeUser() {
	$sql = "SELECT count(*) AS total FROM ".PPHL_TBL_USERS." WHERE conf = 1 AND del_usr = 0";
	$res = mysql_query($sql);
	return mysql_result($res,0,'total');
}


/*--------------------------------------------------
  PrevNext()
  outputs previous-next links
  --------------------------------------------------*/
function PrevNext($lim,$total) {
	global $PHP_SELF,$offset,$strPrev,$strNext;
	
	if($lim >= $total || $lim == 0) return false;
	
	$html = "[ ";
	
	if (!$offset) {
		$offset = 0;
	} else {
		$html .= "<a class=\"invertLink\" href=\"$PHP_SELF?offset=".($offset-$lim)."\">&lt;&lt; ".$strPrev."</a>&nbsp;&nbsp;";
	}
		if ($offset/$lim > 7) {
			$html .= "&nbsp;<a class=\"invertLink\" href=\"$PHP_SELF\">0</a>&nbsp;";
			$html .= "&nbsp;<a class=\"invertLink\" href=\"$PHP_SELF?offset=".($offset-(5*$lim))."\">...</a>&nbsp;";
			for ($i = $offset-(4*$lim), $p = ($offset/$lim)-4; $i < $total, $p < ($offset/$lim)+4 && ($p*$lim) < $total ; $i += $lim, $p++) {
				$invertclass = ($offset == $i) ? 'invertUsc' : 'invertLink';
				$html .= "&nbsp;<a class=\"$invertclass\" href=\"$PHP_SELF?offset=$i\">$p</a>&nbsp;";
			}
		} else {
			for ($i = 0, $p = 0; $i < $total && $p < 10; $i += $lim, $p++) {
				$invertclass = ($offset == $i) ? 'invertUsc' : 'invertLink';
				$html .= "&nbsp;<a class=\"$invertclass\" href=\"$PHP_SELF?offset=$i\">$p</a>&nbsp;";
			}
		}
		if (($offset+$lim) < $total) $html .= "&nbsp;&nbsp;<a class=\"invertLink\" href=\"$PHP_SELF?offset=".($offset+$lim)."\">".$strNext." &gt;&gt;</a>";
	
	$html .= " ]";
	return $html;
}


/*--------------------------------------------------------
  GetColor()
  returns an associative array with the red, green and blue
  values of the desired color.
  For this function you need the color-array:
   include INC_COLORARRAY;
  --------------------------------------------------------*/
function GetColor($Colorname) {
	global $Colors;
	$Colorname = strtolower($Colorname);
	if (isset($Colors[$Colorname])) return $Colors[$Colorname];
	else return $Colors['black'];
}

/*--------------------------------------------------------
  getRGB()
  gets the RGB value of a HEX-type string, e.g. '#0000FF'
  or from a text string, e.g. 'blue'
  --------------------------------------------------------*/
function getRGB($mycolor) {
	if($mycolor[0]=="#") {
		ereg("#([0-9A-Fa-f][0-9A-Fa-f])([0-9A-Fa-f][0-9A-Fa-f])([0-9A-Fa-f][0-9A-Fa-f])", $mycolor, $tmp);
		$c["red"]   = hexdec($tmp[1]);
		$c["green"] = hexdec($tmp[2]);
		$c["blue"]  = hexdec($tmp[3]);
	} else if (ereg("([0-9]*) ([0-9]*) ([0-9]*)", str_replace("+"," ",$mycolor), $tmp)) {
		$c["red"]   = $tmp[1];
		$c["green"] = $tmp[2];
		$c["blue"]  = $tmp[3];
	} else {
		$c = GetColor($mycolor);
	}
	return $c;
}

/*--------------------------------------------------------
  getHEX()
  gets the HEX value of a RGB string, e.g. '0+0+255'
  or from a text string, e.g. 'blue'
  --------------------------------------------------------*/
function getHEX($mycolor) {
	$mycolor = str_replace('#','',$mycolor);
	if(ereg("[0-9A-Fa-f][0-9A-Fa-f][0-9A-Fa-f][0-9A-Fa-f][0-9A-Fa-f][0-9A-Fa-f]", $mycolor)) {
		$c = $mycolor;
	} else if (ereg("([0-9]*) ([0-9]*) ([0-9]*)", str_replace("+"," ",$mycolor), $tmp)) {
		$c['red']   = sprintf("%02s", dechex($tmp[1]));
		$c['green'] = sprintf("%02s", dechex($tmp[2]));
		$c['blue']  = sprintf("%02s", dechex($tmp[3]));
		$c = $c['red'].$c['green'].$c['blue'];
	} else {
		$tmp = GetColor($mycolor);
		$c['red']   = sprintf("%02s", dechex($tmp['red']));
		$c['green'] = sprintf("%02s", dechex($tmp['green']));
		$c['blue']  = sprintf("%02s", dechex($tmp['blue']));
		$c = $c['red'].$c['green'].$c['blue'];
	}
	return '#'.$c;
}

/*--------------------------------------------------------
  getTableFields()
  gets the fields of a table in the given database and 
  returns them as an array
  --------------------------------------------------------*/
function getTableFields($tbl) {
	$res = mysql_list_fields(PPHL_DB_NAME, $tbl);
	$cnt_fields = mysql_num_fields($res);
	for($i = 0; $i < $cnt_fields; $i++)
		$fields[$i] = mysql_field_name($res, $i);
	return $fields;
}

/*--------------------------------------------------------
  get_logid()
  gets the current logid by IP from the logs table
  --------------------------------------------------------*/
function get_logid($ip) {
	global $tbl_logs,$curr_gmt_time,$timeout;

	$sql = "SELECT logid FROM $tbl_logs "
	     . "WHERE ip='".$ip."' "
		 . "AND t_reload > ".($curr_gmt_time-$timeout)." "
		 . "ORDER BY t_reload DESC LIMIT 1";
	$res = mysql_query($sql);
	$logid = @mysql_result($res,0,'logid');
	
	return $logid;
}

/*--------------------------------------------------
  get_online_users()
  get the array of current online users
  --------------------------------------------------*/
function get_online_users() {
	global $tbl_logs,$timeout_onl,$curr_gmt_time;
	$onlUsers = array(); $o = 0;
	$sql = "SELECT logid FROM ".$tbl_logs." "
	     . "WHERE t_reload > ".($curr_gmt_time-$timeout_onl);
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res)) {
		$onlUsers[$o] = $row['logid'];
		$o++;
	}
	return $onlUsers;
}

/*--------------------------------------------------
  getNewPath()
  returns the visitors browsing path
  --------------------------------------------------*/
function getNewPath($id,$logid) {
	global $tbl_logs;
	
	$sql = "SELECT path FROM $tbl_logs WHERE logid = $logid";
	$res = mysql_query($sql);
	$path = @mysql_result($res,0,'path');
	$path_arr = explode('|',$path);
	
	if($id != $path_arr[count($path_arr)-1]) {
		return $path.'|'.$id;
	} else {
		return FALSE;
	}
}

/*--------------------------------------------------
  extractIP()
  --------------------------------------------------*/
function extractIP($ip) {
	$b = ereg ("^([0-9]{1,3}\.){3,3}[0-9]{1,3}", $ip, $array);
	if ($b) return $array;
	else return false;
}


/*--------------------------------------------------
  get_IP()
  --------------------------------------------------*/
function get_IP() {
	global  $REMOTE_HOST, $REMOTE_ADDR ;
	
	if($REMOTE_HOST) {
		$array = extractIP($REMOTE_HOST);
		if ($array && count($array) >= 1) {
			return $array[0]; // first IP in the list
		}
	}
	
	return $REMOTE_ADDR;
}

/*--------------------------------------------------
  get_real_IP()
  get the real IP if hidden by proxy
  --------------------------------------------------*/
function get_real_IP() {
	global  $HTTP_VIA 
	      , $HTTP_X_COMING_FROM 
	      , $HTTP_CLIENT_IP
	      , $HTTP_X_FORWARDED_FOR 
	      , $HTTP_X_FORWARDED
	      , $HTTP_COMING_FROM 
	      , $HTTP_FORWARDED_FOR 
	      , $HTTP_FORWARDED
		  , $REMOTE_HOST
	      , $REMOTE_ADDR ;
	
	if($HTTP_X_FORWARDED_FOR) { // case 1.A: proxy && HTTP_X_FORWARDED_FOR is defined
		$array = extractIP($HTTP_X_FORWARDED_FOR);
		if ($array && count($array) >= 1) {
			return $array[0]; // first IP in the list
		}
	}
	if($HTTP_X_FORWARDED) { // case 1.B: proxy && HTTP_X_FORWARDED is defined
		$array = extractIP($HTTP_X_FORWARDED);
		if ($array && count($array) >= 1) {
			return $array[0]; // first IP in the list
		}
	}
	if($HTTP_FORWARDED_FOR) { // case 1.C: proxy && HTTP_FORWARDED_FOR is defined
		$array = extractIP($HTTP_FORWARDED_FOR);
		if ($array && count($array) >= 1) {
			return $array[0]; // first IP in the list
		}
	}
	if($HTTP_FORWARDED) { // case 1.D: proxy && HTTP_FORWARDED is defined
		$array = extractIP($HTTP_FORWARDED);
		if ($array && count($array) >= 1) {
			return $array[0]; // first IP in the list
		}
	}
	if($HTTP_CLIENT_IP) { // case 1.E: proxy && HTTP_CLIENT_IP is defined
		$array = extractIP($HTTP_CLIENT_IP);
		if ($array && count($array) >= 1) {
			return $array[0]; // first IP in the list
		}
	}
	/*
	if($HTTP_VIA) {
	// case 2: 
	// proxy && HTTP_(X_) FORWARDED (_FOR) not defined && HTTP_VIA defined
	// other exotic variables may be defined 
	return ( $HTTP_VIA . 
            '_' . $HTTP_X_COMING_FROM .
            '_' . $HTTP_COMING_FROM    
          ) ;
	}
	if( $HTTP_X_COMING_FROM || $HTTP_COMING_FROM ) {
	// case 3: proxy && only exotic variables defined
	// the exotic variables are not enough, we add the REMOTE_ADDR of the proxy
	return ( $REMOTE_ADDR . 
            '_' . $HTTP_X_COMING_FROM .
            '_' . $HTTP_COMING_FROM    
          ) ;
	}
	*/
	
	// case 4: no proxy (or tricky case: proxy+refresh)
	if($REMOTE_HOST) {
		$array = extractIP($REMOTE_HOST);
		if ($array && count($array) >= 1) {
			return $array[0]; // first IP in the list
		}
	}
	
	return $REMOTE_ADDR;
}

/*--------------------------------------------------
  GMTtoUser(), UserToGMT()
  some cheap time conversion functions
  --------------------------------------------------*/
function GMTtoUser($time,$is_a_user = true) {
	global $gmt,$admin_GMT;
	
	if(!$is_a_user) $gmt = $admin_GMT;
	return $time+$gmt*3600;
}
function UserToGMT($time,$is_a_user = true) {
	global $gmt,$admin_GMT;

	if(!$is_a_user) $gmt = $admin_GMT;
	return $time-$gmt*3600;
}


function sql_UserMonthToGMT($yyyymm = 0) {
	global $curr_usr_time;
	
	if($yyyymm == 0) {
		$this_month = UserToGMT(mktime(0,0,0,date('m',$curr_usr_time),1,date('Y',$curr_usr_time)));
		$sql = "> $this_month ";
	} else {
		$year  = substr($yyyymm,0,4);
		$month = substr($yyyymm,4,2);
		$begin_month = UserToGMT(mktime(0,0,0,$month,1,$year));
		$end_month   = UserToGMT(mktime(0,0,0,$month+1,1,$year)) - 1;
		$sql = "BETWEEN $begin_month AND $end_month ";
	}
	return $sql;
}

/*--------------------------------------------------
  addslashes_mq()
  This adds slashes to the string only if
  MAGIC_QUOTES_GPC is turned off.
  --------------------------------------------------*/
function addslashes_mq($s) {
	if(!MAGIC_QUOTES_GPC) return addslashes($s);
	else return $s;
}



/*--------------------------------------------------
  sec2HMS()
  Convert $num_secs to Hours:Minutes:Seconds
  ported from Scott Sinclair:
  http://www.zend.com/codex.php?id=137&single=1
  --------------------------------------------------*/
function sec2HMS($num_secs) {
	
	$outp = '';
	
	$hours = intval(intval($num_secs) / 3600);
	$outp .= $hours.':';
	
	$minutes = (intval($num_secs) / 60)%60;
		if ($minutes < 10) $outp .= '0';
		$outp .= $minutes.':';
	
	$seconds = (intval($num_secs))%60;
		if ($seconds < 10) $outp .= '0';
		$outp .= $seconds;
	
	return $outp;
}

/*
 * formatBrowsver()
 * Formats the browser version float value
 */
function formatBrowsver($float) {
	$float = (float) $float;
	return ($float == floor($float)) ? $float.".0" : $float;
}

/**
 * Formats $value to byte view
 *
 * @param    double   the value to format
 * @param    integer  the sensitiveness
 * @param    integer  the number of decimals to retain
 *
 * @return   array    the formatted value and its unit
 *
 * @access  public
 *
 * @author   staybyte
 * @version  1.1 - 07 July 2001
 */
function formatByteDown($value, $limes = 6, $comma = 0) {
	$dh           = pow(10, $comma);
	$li           = pow(10, $limes);
	$return_value = $value;
	$unit         = $GLOBALS['strByteUnits'][0];
	
	if ($value >= $li*1000000) {
		$value = round($value/(1073741824/$dh))/$dh;
		$unit  = $GLOBALS['strByteUnits'][3]; // GB
	}
	else if ($value >= $li*1000) {
		$value = round($value/(1048576/$dh))/$dh;
		$unit  = $GLOBALS['strByteUnits'][2]; // MB
	}
	else if ($value >= $li) {
		$value = round($value/(1024/$dh))/$dh;
		$unit  = $GLOBALS['strByteUnits'][1]; // KB
	}
	if ($unit != $GLOBALS['strByteUnits'][0]) { // Bytes
		$return_value = number_format($value, $comma, $GLOBALS['strNumDecimalSep'], $GLOBALS['strNumThousandsSep']);
	} else {
		$return_value = number_format($value, 0, $GLOBALS['strNumDecimalSep'], $GLOBALS['strNumThousandsSep']);
	}
	
	return array($return_value, $unit);
}

/*--------------------------------------------------
  formatPrettyByte()
  This will return a pretty formated string with 1
  decimal and the correct unit.
  Input should be in Bytes.
  --------------------------------------------------*/
function formatPrettyByte($size) {
	if ($size > 0) {
		list($formated_size, $unit) =  formatByteDown($size, 3, 1);
	} else {
		list($formated_size, $unit) =  formatByteDown($size, 3, 0);
	}
	return $formated_size.' '.$unit;
}


/*--------------------------------------------------
  calcTableSize()
  Calculate all PowerPhlogger tables' size and store
  the byte values in the pphlogger_user table, resp.
  caching table.
  If $id is specified also store the user's detailed
  table sizes in the caching table.
  
  Only works with mySQL > 3.23
  ported from phpMyAdmin 2.2.2
  --------------------------------------------------*/
function calcTableSize($id = 0) {
	
	global $arr_admintables;
	
	// SHOW TABLE STATUS is new in 3.23
	if (MYSQL_INT_VERSION >= 32303) {
		$qry = 'SHOW TABLE STATUS FROM `'.PPHL_DB_NAME.'`';
		if ($id != 0) $qry .= " LIKE '".PPHL_DB_PREFIX.$id."%'";
		$res = @mysql_query($qry);
		// set all tablsize to 0. We're going to calculate everything new
		if (@mysql_num_rows($res) && $id == 0) {
			$sql = "UPDATE ".PPHL_TBL_USERS." SET tblsize = 0";
			$res2 = mysql_query($sql);
		}
		
		// total Bytes used for admin-tables
		$admin_tblsize = 0;
		
		
		// get the tblsize in bytes from every table.
		while ($row = mysql_fetch_array($res)) {
			$table     = $row['Name'];
			
			$mergetable         = FALSE;
			$nonisam            = FALSE;
			if (isset($row['Type'])) {
				if ($row['Type'] == 'MRG_MyISAM') {
					$mergetable = TRUE;
				} else if (!eregi('ISAM|HEAP|InnoDB', $row['Type'])) {
					$nonisam    = TRUE;
				}
			}
			
			if (isset($row['Rows'])) {
				if ($mergetable == FALSE) {
					if ($nonisam == FALSE) {
						$this_tblsize = $row['Data_length'] + $row['Index_length'];
						// user tables
						if (eregi('_logs|_mpdl', $table)) {
							$this_id = (int)(substr($table,strlen(PPHL_DB_PREFIX),5));
							if ($id == 0) { // only update all user table sizes if id is not set (performance!)
								$sql = "UPDATE ".PPHL_TBL_USERS." SET tblsize = tblsize+$this_tblsize WHERE id = $this_id";
								mysql_query($sql);
							} else if ($this_id == $id) { // if id is set, get the user's detailed tbl sizes
								$usr_tblsize[] = Array($table, $this_tblsize);
							}
						// admin tables
						} else if (isInArray($table, $arr_admintables) && $id == 0) {
							$admin_tblsize += $this_tblsize;
						}
					}
				}
			}
		}
		@mysql_free_result($res);
		
		// store the total admin tblsize in the caching table
		if ($id == 0)             putSerializedCache('admin_tblsize', $admin_tblsize    );
		if (!empty($usr_tblsize)) putSerializedCache('usr_tblsize',   $usr_tblsize,  $id);
		return TRUE;
	} // if (MYSQL_INT_VERSION >= 32303)
	return FALSE;
}

/*--------------------------------------------------
  optimizeUsrTables()
  Optimizes user tables (xxxxx_*)
  --------------------------------------------------*/
function optimizeUsrTables($id) {
	global $tbl_logs, $tbl_mpdl;
	
	$sql = 'OPTIMIZE TABLE '.PPHL_DB_PREFIX.$id.$tbl_logs;
	mysql_query($sql);
	$sql = 'OPTIMIZE TABLE '.PPHL_DB_PREFIX.$id.$tbl_mpdl;
	mysql_query($sql);
	
	return TRUE;
}

/*--------------------------------------------------
  optimizeAdmTables()
  Optimizes all admin tables
  --------------------------------------------------*/
function optimizeAdmTables() {
	
	$sql = 'OPTIMIZE TABLE '.PPHL_TBL_CACHE;
	mysql_query($sql);
	$sql = 'OPTIMIZE TABLE '.PPHL_TBL_USERS;
	mysql_query($sql);
	$sql = 'OPTIMIZE TABLE '.PPHL_TBL_USERLOG;
	mysql_query($sql);
	$sql = 'OPTIMIZE TABLE '.PPHL_TBL_CSS;
	mysql_query($sql);
	
	return TRUE;
}


/*--------------------------------------------------
  tz_select()
  creates the GMT timezone select box
  --------------------------------------------------*/
function tz_select($default, $select_name = 'timezone') {
	global $gmt, $loca;
	
	if ( !isset($default) )	$default = $gmt;
	
	$tz_select = '<select class="myInput" name="' . $select_name . '">'."\n";
	while( list($offset, $zone) = @each($loca['tz']) ) {
		$selected = ( $offset == $default ) ? ' selected="selected"' : '';
		$tz_select .= '<option value="' . $offset . '"' . $selected . '>' . $zone . '</option>'."\n";
	}
	$tz_select .= "</select>\n";
	
	reset($loca['tz']);
	return $tz_select;
}


/*--------------------------------------------------
  resetCssIDs()
  UGLY (!!!!!) function to restore broken CSS-IDs
  --------------------------------------------------*/
function resetCssIDs() {
	
	// restore cssid in pphl_settings
	$sql = "SELECT value FROM ".PPHL_TBL_SETTINGS." WHERE setting = 'cssid'";
	$res = mysql_query($sql);
	$cssid_setting = mysql_result($res, 0, 0);
	$sql = "SELECT * FROM ".PPHL_TBL_CSS." WHERE id = $cssid_setting AND userid = 0";
	$res = mysql_query($sql);
	if (!@mysql_num_rows($res)) { // if cssid in pphl is not valid, choose first id in pphl_css
		$sql = "SELECT id FROM ".PPHL_TBL_CSS." WHERE userid = 0";
		$res2 = mysql_query($sql);
		$cssid_setting = mysql_result($res2, 0, 0);
		$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET value = '$cssid_setting' WHERE setting = 'cssid'";
		$res2 = mysql_query($sql);
	}
	
	// restore cssid in pphl_users
	$sql = "SELECT DISTINCT cssid FROM ".PPHL_TBL_USERS.", ".PPHL_TBL_CSS." C WHERE cssid = C.id";
	$res = mysql_query($sql);
	$i = 0; $in = '';
	while ($row = @mysql_fetch_array($res)) {
		if ($i > 0) $in .= ',';
		$in .= $row[0];
		$i++;
	}
	if ($in) {
		$sql = "SELECT DISTINCT cssid FROM ".PPHL_TBL_USERS." WHERE cssid NOT IN ($in)";
	} else {
		$sql = "SELECT DISTINCT cssid FROM ".PPHL_TBL_USERS;
	}
	$res = mysql_query($sql);
	$i = 0; $in = '';
	while ($row = @mysql_fetch_array($res)) {
		if ($i > 0) $in .= ',';
		$in .= $row[0];
		$i++;
	}
	if ($in) {
		$sql = "UPDATE ".PPHL_TBL_USERS." SET cssid = $cssid_setting WHERE cssid IN ($in)";
		$res = mysql_query($sql);
	}
	
	return $cssid_setting;
}


/*--------------------------------------------------
  isWritableDir(), _unlink()
  Filesystem functions
  --------------------------------------------------*/
function isWritableDir($dir = '') {
	$file = $dir.'TEST';
	$fp = @fopen($file, 'w');
	if ($fp) {
		@fclose($fp);
		_unlink($file);
		return TRUE;
	} else {
		return FALSE;
	}
}

function _unlink($file) {
	$delete = @unlink($file);
	if (@file_exists($file)) {
		$filesys = eregi_replace("/","\\",$file);
		$delete = @system("del $filesys");
		if (@file_exists($file)) {
			$delete = @chmod ($file, 0775);
			$delete = @unlink($file);
			$delete = @system("del $filesys");
		}
	}
}

/*--------------------------------------------------
  tableExists()
  Check for existence of a table
  --------------------------------------------------*/
function tableExists($tbl) {
	$res = @mysql_query("SELECT COUNT(*) FROM $tbl");
	if (!$res) return FALSE;
	else       return TRUE;
}


/*--------------------------------------------------
  validIP()
  checks the syntax of an IP.

  1st number MUST be > 0, < 223 and != 127
  2nd number MUST be < 255
  3rd number MUST be < 255
  4th number MUST be < 254 and != 0
  --------------------------------------------------*/
function validIP($ip) {
	if( ereg("^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})$", $ip,$regs_array) ) {
		if( ($regs_array[1] == 127 or $regs_array[1] > 223 or $regs_array[1] <= 0)
		    or $regs_array[2] > 255
			or $regs_array[3] > 255
			or ($regs_array[4] > 254 or $regs_array[4] <= 0)) {
			return FALSE;
		} else {
			return TRUE;
		}
	} else {
		return FALSE;
	}
}


/**
* Encode string by replacing random characters with their ASCII value entity
* This may help you preventing spammers read your email.
*
* @access   public
* @param    string      $str            string to encode
* @param    integer     $probability    probability of each character to get encoded
* @return   string      encoded string
*/
function emailEncode($str, $probability) {
	$strlen = strlen($str);
	$arrStr = array();
	for($i = 0; $i < $strlen; $i++) {
		$arrStr[$i] = ((rand()%100) < $probability) ? '&#'.ord(substr($str, $i, 1)).';' : substr($str, $i, 1);
	}
	$str = implode('', $arrStr);
	$str = str_replace(':', '&#'.ord(':').';', $str);
	$str = str_replace('@', '&#'.ord('@').';', $str);
	$str = str_replace('.', '&#'.ord('.').';', $str);
	return $str;
}

/**
* Check language code format
*
* Workaround for security exploit, reported by Dmytro Bogatskyy, 2003/08/17
*
* @access   public
* @param    string      $lang           language code
* @return   boolean                     TRUE if valid format
*/
function checkLangFormat($lang) {
	if(preg_match("/^([a-z]{2,3})$/", $lang)) {
		return TRUE;
	} else {
		die("Hacking attempt!!");
	}
}

/**
* Strip user-supplied text
*
* @access   public
* @param    string      $str            input string
* @return   string                      stripped string
*/
function stripInput($str) {
	return htmlspecialchars(strip_tags(trim($str)), ENT_QUOTES);
}
?>