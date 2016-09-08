<?php
 /* ----------------------------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: showhits.php,v 1.24 2003/10/31 18:20:54 cvs_iezzi Exp $

    showhits.php - make hits visible


a)  Call this script by an IMG-Tag:
    ------------------------------------------------------------
      <img src="showhits.php?id=[username]&st=img">
      <img src="showhits.php?id=[username]&type=[type]&st=img">
    ------------------------------------------------------------

b)  or by PHP: (TXT ONLY !)
    ---------------------------------------------------------------------
      define('PPHL_SCRIPT_PATH' , '[path]');  // relative or absolute path to this script
      $id = '[username]'; $type = '[type]'; $st = 'php';
      include (PPHL_SCRIPT_PATH.'showhits.php');
    ---------------------------------------------------------------------

c)  or by JavaScript: (TXT ONLY !)
    --------------------------------------------------------------------------------------------
     <script language="JavaScript" src="showhits.php?id=[username]&type=[type]&st=js"></script>
    --------------------------------------------------------------------------------------------



    ATTRIBUTES:
    id:     username
    type:   hits | pageviews | today | todayviews | month | monthviews |
            onlineusr | customers | all
	[mpdl]: /your_url

            description:
            hits:           shows total hits (default)
            pageviews:      shows total pageimpressions
            today:          shows today's hits
            todayviews:     shows today's pageimpressions
            yesterday:      shows yesterday's hits
            yesterdayviews: shows yesterday's pageimpressions
            month:          shows current month's hits
            monthviews:     shows current month's pageimpressions
            onlineusr:      shows current online users
            customers:      shows amount of activated useraccounts
            totaldlfiles:   shows amount of download-files
            totaldlhits:    shows the sum of hits on all downloaded files
            all:            shows all types
   ---------------------------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
if (!defined('PPHL_SCRIPT_PATH')) define('PPHL_SCRIPT_PATH', '');
$showme = 'y';                 // always display output of this script!
if (!isset($st)) $st = 'js'; // if st is not set, use js-output as default

if ($st == 'img') {
	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");              // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");            // HTTP/1.1
	header ("Pragma: no-cache");                                    // HTTP/1.0
}

include PPHL_SCRIPT_PATH.'main_location.inc';
if(!defined('__MAIN_DUMMY__')) {
include INC_GETUSERDATA;

if(!isset($type)) $type = 'hits'; // default show total hits

/* timestamp from today's GMT Unix timestamp, 12:00 AM */
$today     = UserToGMT(mktime(0,0,0,date('m',$curr_usr_time),date('d',$curr_usr_time),date('Y',$curr_usr_time)));
/* timestamp from this month's GMT Unix timestamp, 1. of month, 12:00 AM */
$first_of_month = UserToGMT(mktime(0,0,0,date('m',$curr_usr_time),1,date('Y',$curr_usr_time)));

// Fix security exploit. If $show_sql is not unset, you're able to execute any MySQL query.
// submitted by Dmytro Bogatskyy, 2003/08/15
unset($show_sql);
unset($show_sql2);

switch ($type) {
	case 'hits':
		$show_txt = $hits;
		break;
	case 'pageviews':
		$show_sql = "SELECT sum(mp) FROM ".$tbl_logs;
		break;
	case 'today':
		$show_sql = "SELECT count(mp) FROM ".$tbl_logs." WHERE time BETWEEN $today AND ($today+86400)";
		break;
	case 'todayviews':
		$show_sql = "SELECT sum(mp) FROM ".$tbl_logs." WHERE time BETWEEN $today AND ($today+86400)";
		break;
	case 'yesterday':
		$show_sql = "SELECT count(mp) FROM ".$tbl_logs." WHERE time BETWEEN ($today-86400) AND $today";
		break;
	case 'yesterdayviews':
		$show_sql = "SELECT sum(mp) FROM ".$tbl_logs." WHERE time BETWEEN ($today-86400) AND $today";
		break;
	case 'month':
		$show_sql = "SELECT count(mp) FROM ".$tbl_logs." WHERE time > $first_of_month";
		break;
	case 'monthviews':
		$show_sql = "SELECT sum(mp) FROM ".$tbl_logs." WHERE time > $first_of_month";
		break;
	case 'onlineusr':
		$show_sql = "SELECT count(*) FROM ".$tbl_logs." WHERE t_reload > ".($curr_gmt_time-$timeout_onl);
		break;
	case 'customers':
		$show_sql = "SELECT count(*) FROM ".PPHL_TBL_USERS." WHERE conf";
		break;
	case 'totaldlfiles':
		$show_sql = "SELECT count(*) FROM ".$tbl_mpdl." WHERE type='dl' AND enabled";
		break;
	case 'totaldlhits':
		$show_sql = "SELECT sum(hits) FROM ".$tbl_mpdl." WHERE type='dl' AND enabled";
		break;
	// from here :: modified by NIKO
	case 'all':
		$show_sql2[0] = "SELECT count(mp),sum(mp) FROM ".$tbl_logs;
		$show_sql2[1] = "SELECT count(mp),sum(mp) FROM ".$tbl_logs." WHERE time BETWEEN $today AND ($today+86400)";
		$show_sql2[2] = "SELECT count(mp),sum(mp) FROM ".$tbl_logs." WHERE time BETWEEN ($today-86400) AND $today";
		$show_sql2[3] = "SELECT count(mp),sum(mp) FROM ".$tbl_logs." WHERE time > $first_of_month";
		$show_sql2[4] = "SELECT count(*) FROM ".$tbl_logs." WHERE t_reload > ".($curr_gmt_time-$timeout_onl);
		$show_sql2[5] = "SELECT count(*) FROM ".PPHL_TBL_USERS." WHERE conf";
		$show_sql2[6] = "SELECT count(*),sum(hits) FROM ".$tbl_mpdl." WHERE type='dl' AND enabled";
		break;
	// to here :: modified by NIKO
	default:
		$show_txt = $hits;
}

if (isset($mpdl)) {
	$show_sql = "SELECT hits FROM ".$tbl_mpdl." WHERE url = '".stripInput($mpdl)."'";
}

if (isset($show_sql)) {
	$res = mysqli_query($connected,$show_sql);
	$dayhits = @mysqli_fetch_array($res);
	if (isset($dayhits[0])) $show_txt = $dayhits[0];
	else                    $show_txt = 0;
}


// from here :: modified by NIKO <niko@uribou.net> 2003/08/20
if (isset($show_sql2[0])) {
	unset($out);
	for($i=0;$i<7;$i++){
		$res = mysqli_query($connected,$show_sql2[$i]);
		unset($array);
		$array = @mysqli_fetch_array($res);
		if($i==4||$i==5) $out[] = $array[0];
		else{
			for($j=0;$j<2;$j++){
				if(isset($array[$j])) $out[] = $array[$j];
				else $out[] = 0;
			}
		}
	}
	$show_txt = implode(",",$out);
}
// to here :: modified by NIKO


/*  ---------------------------------------------
    VISIBILITY
    ---------------------------------------------
*/
include INC_VISIBILITY;
} // if(!defined('__MAIN_DUMMY__'))
?>
