<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dspStats.php,v 1.55 2003/10/31 17:35:46 cvs_iezzi Exp $

    shows users statistics
    --------------------------------------------------------- */

include "main_location.inc";
include INC_GETUSERDATA;
$view = 'stats';
include INC_HEAD;
include CFG_LANG_PATH.$lang.'_tld.inc.'.CFG_PHPEXT;

// fixing XSS problem
if (isset($edit)){
	$edit = htmlspecialchars ($edit);
}

/* edit mpdl section
   ************************************************************************************/
if (isset($edit) && !$guest) {
	$option_list = '';
	$sql = "SELECT id,url FROM $tbl_mpdl WHERE type='".$edit."' AND enabled ORDER BY hits";
	$res = mysqli_query($connected,$sql);
	while ($row = @mysqli_fetch_array($res)) {
		$option_list .= "<option value=\"$row[0]\">".shortString($row[1],60,3,false)."</option>\n";
	}
?>
<p>&nbsp;</p>
<div align="center">
<form action="<?php echo ACT_MPDLEDIT; ?>" method="post">
<?php
$ArrMpdlEd = Array();
$ArrMpdlEd[0] = Array($strMove.' '.$edit.':','','');
$ArrMpdlEd[1] = Array(' align="left"', ' align="left"',' align="left" valign="bottom"');
$ArrMpdlEd[2] = $ArrMpdlEd[1];

$ArrMpdlEd[3][0] = $strFrom.':<br /><select class="myInput" name="edit_from">'.$option_list.'</select>';
$ArrMpdlEd[3][1] = $strTo2.':<br /><select class="myInput" name="edit_to">'.$option_list.'</select>';
$ArrMpdlEd[3][2] = '<input type="hidden" name="edit_type" value="'.$edit.'" /><input class="myInput" type="submit" value="  OK  " name="search_logs" />';

echo htmlStatTable($ArrMpdlEd,4);
?>
</form>
</div>
<p align="center">
[ <a class="invertLink" href="<?php echo $PHP_SELF; ?>"><?php echo $strUsrPage[2]; ?></a> | 
  <a class="invertLink" href="<?php echo $PHP_SELF; ?>?edit=mp"><?php echo $strEdit; ?> mp</a> | 
  <a class="invertLink" href="<?php echo $PHP_SELF; ?>?edit=dl"><?php echo $strEdit; ?> dl</a> |
  <a class="invertLink" href="<?php echo $PHP_SELF; ?>?edit=kw"><?php echo $strEdit; ?> kw</a> ]
</p>
<p>&nbsp;</p>
<div align="center">
<form method="post" action="<?php echo ACT_MPDLEDIT; ?>" name="tablesForm">
<?php
$ArrMpdlDel = Array();
$ArrMpdlDel[0] = Array('&nbsp;',$edit,$strHits,$strSince);
$ArrMpdlDel[1] = Array('', ' align="left"',' align="left"', ' align="left"');
$ArrMpdlDel[2] = Array('', ' align="left"',' align="right"', ' align="right" nowrap="nowrap"');
$mpdl_sql = "SELECT id,url,hits,since FROM $tbl_mpdl WHERE type='".$edit."' AND enabled ORDER BY hits DESC";
$mpdl_res = mysqli_query($connected,$mpdl_sql);
$i = 3;
while ($row = @mysqli_fetch_array($mpdl_res)) {
	$checked = !empty($checkall) ? ' checked="checked"' : '';
	$ArrMpdlDel[$i][0] = "<input type=\"checkbox\" name=\"selected_tbl[]\" value=\"".$row['id']."\"$checked />";
	$ArrMpdlDel[$i][1] = mpdl_ATag($row['url'], $edit, shortString($row['url'],90,3,false));
	$ArrMpdlDel[$i][2] = $row['hits'];
	$ArrMpdlDel[$i][3] = date($strDate2,GMTtoUser($row['since']));
	$i++;
}
$lastline = "[&nbsp;<a href=\"".$PHP_SELF."?edit=".$edit."&checkall=1\" onclick=\"setCheckboxes('tablesForm', true); return false;\">$strSelect $strAll</a>"
          . "&nbsp;|&nbsp;"
          . "<a href=\"".$PHP_SELF."?edit=".$edit."\" onclick=\"setCheckboxes('tablesForm', false); return false;\">$strUnselect $strAll</a>"
          . "&nbsp;|&nbsp;"
          . "<input type=\"submit\" class=\"myInput\" value=\"$strDelete\" />"
          . "&nbsp;]";
echo htmlStatTable($ArrMpdlDel, 2, '', $lastline);
?>
</form>
</div>


<?php
/* regular stat section
   ************************************************************************************/
} else {

/* get the multi-page arrays */
$mpArr = getMpArr();
?>
<a name="nowonline"></a> 
<table align="center" cellpadding="2" cellspacing="0" class="color2" border="0">
  <tr> 
    <td colspan=5><b><?php echo $strCurrOnlUsers; ?></b><br />
      <?php echo $strIPkept.' '.($timeout/60).' '.$strIPkept2; ?><br />
    </td>
	<td align="right">
	  <a href="dspOnline.<?php echo CFG_PHPEXT; ?>">&gt;&gt;&gt;</a>
	</td>
  </tr>
  <tr> 
    <td><b><?php echo $strHostIP; ?></b></td>
    <td><b><?php echo $strOnline; ?></b></td>
    <td><b><?php echo $strEntryTime; ?></b></td>
    <td><b><?php echo $strLastReload; ?></b></td>
    <td align="center"><b><?php echo $strLastUrl; ?></b></td>
    <td><b><?php echo $strSince; ?></b></td>
  </tr>
<?php
// show online user table
$onlineonly = true;
include INC_ONLINELIST;
?>
</table>
<p align="center"><a class="invertLink2">[ <?php echo $strCache.' '.sec2HMS($stats_cache); ?> ]</a></p>
<table align="center" cellpadding="3" cellspacing="0">
  <tr> 
    <td valign="top">
<a name="mpdltopref"></a>
<?php
/* -------------------------------- MP-hits statistics -------------------------------- */
$CacheMp = getSerializedCache('mp', $stats_cache);
if (!$CacheMp) {
	$ArrMp = Array();
	$ArrMp[0] = Array($strMultipage, $strHits, $strSince);
	$ArrMp[1] = Array(' align="left" nowrap="nowrap"', ' align="right"', ' nowrap="nowrap"');
	$ArrMp[2] = $ArrMp[1];
	$sql = "SELECT url,hits,since,title FROM $tbl_mpdl WHERE type='mp' AND enabled ORDER BY hits DESC";
	$res = mysqli_query($connected,$sql);
	$i = 3; $m = 1;
	while ($row = @mysqli_fetch_array($res)) {
		$gif_no = ($m > 40) ? "other" :  $m;
		if (isset($mplist_titles_on)) {
			$alt    = '#'.$m.' '.$row[0];
			$mp_str = (@$row[3]) ? shortString(@$row[3],25,5,false) : shortString($row[0],25,5);
		} else {
			$alt    = '#'.$m.' '.@$row[3];
			$mp_str = shortString($row[0],25,5);
		}
		$ArrMp[$i][0] = '<a href="'.htmlspecialchars($primary_url.$row[0]).'"><img src="'.CFG_PAGESIMG_PATH.$gif_no.'.gif" alt="'.$alt.'" border="0" width="12" height="16" /> '.$mp_str.'</a>';
		$ArrMp[$i][1] = $row[1];
		$ArrMp[$i][2] = date($strDate2,GMTtoUser($row[2]));
		// $ArrMp[$i][2] = strftime("%b %d, %Y",GMTtoUser($row[2]));
		$i++; $m++;
	}
	putSerializedCache('mp', $ArrMp, $id);
} else {
	$ArrMp = $CacheMp[1];
}
$titles_txt = (isset($mplist_titles_on)) ? 'mp titles &nbsp;'.$strOff : 'mp titles &nbsp;'.$strOn;
$lastline = '<a class="invertLink2" href="'.INC_COOKIES.'?mplist_titles_onoff=1">[&nbsp;'.$titles_txt.'&nbsp;]</a>';
if (!$guest) {
	$lastline .= '&nbsp;<a class="invertLink2" href="'.$PHP_SELF.'?edit=mp">[ '.$strEdit.' ]</a>';
}
echo htmlStatTable($ArrMp,2,'',$lastline);
?>
    </td>
    <td valign="top">
	  <table width="100%" cellpadding="0" cellspacing="0"><tr><td valign="top" align="center">
<?php
/* -------------------------------- Top Referrers statistics -------------------------------- */
$CacheRef = getSerializedCache('ref', $stats_cache);
if (!$CacheRef) {
	$ArrRef = Array();
	$ArrRef[0] = Array('Top '.$topref_lim.' '.$strReferrers, $strUniq);
	$ArrRef[1] = Array(' align="left"', ' align="right"');
	$ArrRef[2] = $ArrRef[1];
	$sql = "SELECT SUBSTRING_INDEX(TRIM('http://' FROM referer),'/',1) AS ref, "
	     . "COUNT(SUBSTRING_INDEX(TRIM('http://' FROM referer),'/',1)) AS hits "
	     . "FROM ".$tbl_logs." WHERE referer<>'' GROUP by ref ORDER by hits DESC LIMIT ".$topref_lim;
	$res = mysqli_query($connected,$sql);
	$i = 3;
	while ($row = @mysqli_fetch_array($res)) {
		$ArrRef[$i][0] = '<a href="http://'.$row[0].'">'.$row[0].'</a>';
		$ArrRef[$i][1] = $row[1];
		$i++;
	}
	putSerializedCache('ref', $ArrRef, $id);
} else {
	$ArrRef = $CacheRef[1];
}
echo htmlStatTable($ArrRef);
?>
	</td>
	<td valign="top" align="center">&nbsp;&nbsp;</td>
	<td valign="top" align="center">
<?php
/* -------------------------------- Top domains statistics -------------------------------- */
$CacheDom = getSerializedCache('dom', $stats_cache);
if (!$CacheDom) {
	$ArrDom = Array();
	$ArrDom[0] = Array('Top '.$topdomain_lim.' '.$strDomains, $strUniq);
	$ArrDom[1] = Array(' align="left" colspan="2"', ' align="right"');
	$ArrDom[2] = Array(' align="left"', ' align="left"', ' align="right"');
	
	$sql  = "SELECT tld AS D, COUNT(*) AS C FROM ".$tbl_logs." "
	      . "WHERE tld>'' GROUP BY D ORDER BY C DESC LIMIT 0, $topdomain_lim";
	$res = mysqli_query($connected,$sql);
	$nb_enr = @mysqli_num_rows($res);
	
	
	if ($nb_enr != 0) {
		$i = 3;
		while ($dom = mysqli_fetch_array($res)) {
			$ArrDom[$i][0] = "&nbsp;<a>".$dom[0]."</a>&nbsp;";
			$descr = @$loca['tld'][strtolower($dom[0])];
			// country flags
			if($flags) {
				if (!@file_exists($flag = CFG_FLAGS_PATH.strtolower($dom[0]).'.png')) $flag = CFG_IMG_PATH.'clear.gif';
				$flag_stuff = "<img src=\"".$flag."\" ALT=\"".$descr."\"  width=\"16\" height=\"12\" />&nbsp;";
			}
			$ArrDom[$i][1] = @$flag_stuff."&nbsp;".$descr."&nbsp;";
			$ArrDom[$i][2] = "&nbsp;".$dom[1]."&nbsp;";
			$i++;
		}
	}
	
	
	putSerializedCache('dom', $ArrDom, $id);
} else {
	$ArrDom = $CacheDom[1];
}
$lastline = (!$guest) ? '<a class="invertLink2" href="'.USR_EDUSER.'?settings_flags=1">[ flags '.$strOn.'/'.$strOff.' ]</a>' : '';
echo htmlStatTable($ArrDom, 2, '', $lastline);
?>

      </td></tr></table>
<br />
      <table width="100%"><tr><td valign="top" align="center">
<?php
/* -------------------------------- Top Resolution statistics -------------------------------- */
$CacheRes = getSerializedCache('res', $stats_cache);
if (!$CacheRes) {
	$ArrRes = Array();
	$ArrRes[0] = Array('Top '.$topres_lim.' Res', $strUniq);
	$ArrRes[1] = Array(' align="left"', ' align="right"');
	$ArrRes[2] = $ArrRes[1];
	$sql = "SELECT res_w,res_h,count(res_w) AS C FROM ".$tbl_logs." "
	     . "WHERE res_w > 0 GROUP BY res_w,res_h ORDER BY C DESC LIMIT ".$topres_lim;
	$res = mysqli_query($connected,$sql);
	$i = 3;
	while ($row = @mysqli_fetch_array($res)) {
		$ArrRes[$i][0] = '<a>'.$row[0].'x'.$row[1].'</a>';
		$ArrRes[$i][1] = $row[2];
		$i++;
	}
	putSerializedCache('res', $ArrRes, $id);
} else {
	$ArrRes = $CacheRes[1];
}
echo htmlStatTable($ArrRes);
?>
          </td>
          <td valign="top" align="center">
<?php
/* -------------------------------- Top Color statistics -------------------------------- */
$CacheColor = getSerializedCache('color', $stats_cache);
if (!$CacheColor) {
	$ArrColor = Array();
	$ArrColor[0] = Array('Top Color', $strUniq);
	$ArrColor[1] = Array(' align="left"', ' align="right"');
	$ArrColor[2] = $ArrColor[1];
	$sql = "SELECT color,count(color) AS C FROM ".$tbl_logs." "
	     . "WHERE color > 0 GROUP BY color ORDER BY C DESC LIMIT ".$topcolor_lim;
	$res = mysqli_query($connected,$sql);
	$i = 3;
	while ($row = @mysqli_fetch_array($res)) {
		$ArrColor[$i][0] = '<a>'.$row[0].'</a>';
		$ArrColor[$i][1] = $row[1];
		$i++;
	}
	putSerializedCache('color', $ArrColor, $id);
} else {
	$ArrColor = $CacheColor[1];
}
echo htmlStatTable($ArrColor);
?>
          </td>
          <td valign="top" align="center">
<?php
/* -------------------------------- Top Territories statistics -------------------------------- */
$CacheTerr = getSerializedCache('terr', $stats_cache);
if (!$CacheTerr) {
	$ArrTerr = Array();
	$ArrTerr[0] = Array($strTerritories, $strUniq);
	$ArrTerr[1] = Array(' align="left" colspan="2"', ' align="right"');
	$ArrTerr[2] = Array(' align="left"', ' align="right"', ' align="right"');
	
	$sql = "SELECT count(*) AS total FROM ".$tbl_logs." WHERE tld > ''";
	$res = mysqli_query($connected,$sql);
	$total_tld = mysqli_result($res,0,'total');
	
	$sql = "SELECT area,COUNT(*) AS C FROM ".$tbl_logs." AS T1, ".PPHL_TBL_DOMAINS." AS T2 "
	     . "WHERE T1.tld=T2.tld GROUP BY area ORDER BY C DESC";
	$res = mysqli_query($connected,$sql);
	$i = 3;
	while ($row = @mysqli_fetch_array($res)) {
		$thisarea = (@$str_area[$row[0]]) ? $str_area[$row[0]] : $strUndefined;
		$ArrTerr[$i][0] = "&nbsp;<a>".$thisarea."</a>&nbsp";
		$ArrTerr[$i][1] = round(100*$row[1]/$total_tld).' %';
		$ArrTerr[$i][2] = $row[1];
		$i++;
	}
	putSerializedCache('terr', $ArrTerr, $id);
} else {
	$ArrTerr = $CacheTerr[1];
}
echo htmlStatTable($ArrTerr);
?>
	</td></tr></table>
	  <p>&nbsp;</p>
<?php
/* -------------------------------- Last referers statistics -------------------------------- */
// We don't want to get this cached:
//$CacheLastRef = getSerializedCache('lastref', $stats_cache);
//if (!$CacheLastRef) {
	$ArrLastRef = Array();
	$ArrLastRef[0] = Array($strLast.' '.$lastref_lim.' '.$strReferrers, $strUniq);
	$ArrLastRef[1] = Array('', ' align="right"');
	$ArrLastRef[2] = $ArrLastRef[1];
	$sql = "SELECT time FROM ".$tbl_logs." WHERE referer > '' ORDER BY time DESC LIMIT $lastref_lim,1";
	$res = mysqli_query($connected,$sql);
	$ref_sql_limit = @mysqli_result($res,0,'time');
	$sql_reftime = ($ref_sql_limit) ? " time > $ref_sql_limit AND" : '';
	$sql = "SELECT referer,count(referer) AS hits FROM ".$tbl_logs." WHERE".$sql_reftime." referer > '' GROUP BY referer ORDER BY hits DESC,time DESC";
	$res = mysqli_query($connected,$sql);
	$i = 3;
	while ($row = @mysqli_fetch_array($res)) {
		$ArrLastRef[$i][0] = '<a href="'.htmlspecialchars($row[0]).'">'.htmlspecialchars(shortString(urldecode($row[0]),51,3)).'</a>';
		$ArrLastRef[$i][1] = $row[1];
		$i++;
	}
//	putSerializedCache('lastref', $ArrLastRef, $id);
//} else {
//	$ArrLastRef = $CacheLastRef[1];
//}
echo htmlStatTable($ArrLastRef,2,'100%');
?>
	  <p>&nbsp;</p>
<?php
/* -------------------------------- Top keywords statistics -------------------------------- */
$CacheKeyw = getSerializedCache('keyw', $stats_cache);
if (!$CacheKeyw) {
	$ArrKeyw = Array();
	$ArrKeyw[0] = Array('Top '.$topkeywords_lim.' '.$strKeywords, $strUniq);
	$ArrKeyw[1] = Array('', ' align="right"');
	$ArrKeyw[2] = $ArrKeyw[1];
	$sql = "SELECT url,hits FROM $tbl_mpdl WHERE type = 'kw' AND enabled ORDER BY hits DESC LIMIT $topkeywords_lim";
	$res = mysqli_query($connected,$sql);
	$i = 3;
	while ($row = @mysqli_fetch_array($res)) {
		$ArrKeyw[$i][0] = shortString($row[0],54,3);
		$ArrKeyw[$i][1] = $row[1];
		$i++;
	}
	putSerializedCache('keyw', $ArrKeyw, $id);
} else {
	$ArrKeyw = $CacheKeyw[1];
}
$lastline = (!$guest) ? '<a class="invertLink2" href="'.$PHP_SELF.'?edit=kw">[ '.$strEdit.' ]</a>' : '';
echo htmlStatTable($ArrKeyw,2,'100%',$lastline);
?>
	</td>
    <td valign="top">
<?php
/* -------------------------------- Top downloads statistics -------------------------------- */
$CacheDl = getSerializedCache('dl', $stats_cache);
if (!$CacheDl) {
	$ArrDl = Array();
	$ArrDl[0] = Array($strDownloads, $strHits, $strSince);
	$ArrDl[1] = Array(' align="left" nowrap="nowrap"', ' align="right"', ' nowrap="nowrap"');
	$ArrDl[2] = $ArrDl[1];
	if ($dlunite) {
		$sql = "SELECT SUBSTRING_INDEX(url, '/', -1) AS surl,SUM(hits) AS shits,MIN(since), url " // "random" URL for A-tag
		     . "FROM $tbl_mpdl WHERE type='dl' AND enabled GROUP BY surl ORDER BY shits DESC"; // hehe, ORDER BY shits!
	} else {
		$sql = "SELECT url,hits,since FROM $tbl_mpdl WHERE type='dl' AND enabled ORDER BY hits DESC";
	}
	$res = mysqli_query($connected,$sql);
	$i = 3;
	while ($row = @mysqli_fetch_array($res)) {
		$this_dl_url = (isset($row[3])) ? $row[3] : $row[0];
		$dl_url = shortString(stripslashes($row[0]),33,4);
		if (!strstr($row[0],"://")) $dl_full_url = $primary_url.$this_dl_url;
		else                        $dl_full_url = $this_dl_url;
		
		$ArrDl[$i][0] = '<a href="'.htmlspecialchars($dl_full_url).'">'.htmlspecialchars($dl_url).'</a>';
		$ArrDl[$i][1] = $row[1];
		$ArrDl[$i][2] = date($strDate2,GMTtoUser($row[2]));
		//$ArrDl[$i][2] = strftime("%b %d, %Y",GMTtoUser($row[2]));
		$i++;
	}
	putSerializedCache('dl', $ArrDl, $id);
} else {
	$ArrDl = $CacheDl[1];
}
$lastline = (!$guest) ? '<a class="invertLink2" href="'.USR_EDUSER.'?settings_dlunite=1">[ unite '.$strOn.'/'.$strOff.' ]</a>&nbsp;<a class="invertLink2" href="'.$PHP_SELF.'?edit=dl">[ '.$strEdit.' ]</a>' : '';
echo htmlStatTable($ArrDl,2,'',$lastline);
?>
    </td>
  </tr>
</table>
<?php
} //if (isset($edit))
?>
<p>&nbsp;</p>
<?php
include INC_FOOT;
?>
