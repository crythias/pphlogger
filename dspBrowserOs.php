<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dspBrowserOs.php,v 1.21 2003/08/18 19:10:02 cvs_iezzi Exp $
    
    dspBrowserOs.php browser/OS statistics
    --------------------------------------------------------- */

include "main_location.inc";
include INC_GETUSERDATA;
$view = 'stats3';
include INC_HEAD;


/* total amount of logs that got a search-string */
$sql = "SELECT count(*) FROM ".$tbl_logs." WHERE seareng > ''";
$res = mysqli_query($connected,$sql);
$seartotal = @mysqli_result($res,0);



if (isset($logs_from)) $from_date = $logs_from;
else $from_date = $curr_usr_time;
$from_y = date('Y',$from_date);
$from_m = date('m',$from_date);
$from_d = date('d',$from_date);

if (isset($logs_to)) $to_date = $logs_to;
else $to_date = $curr_usr_time;
$to_y = date('Y',$to_date);
$to_m = date('m',$to_date);
$to_d = date('d',$to_date);

if (isset($logs_from)) {
	$sql_fromto = "time > ".UserToGMT($logs_from)." AND time < (".UserToGMT($logs_to)."+86400) ";
	/* total amount of logs in users table */
	$logtotal = get_totalrows('tbl_logs',$logs_from,$logs_to);
} else {
	$logtotal = get_totalrows('tbl_logs');
}
?>
<table width="100%" border="0" cellpadding="5">
  <tr valign="top"> 
    <td align="right" valign="top" width="50%"> 
<?php
/* -------------------------------- BROWSER-OS statistics -------------------------------- */
$ArrBrowsOs[0] = Array('Top '.$topbrowseros_lim, $strUniq,	'',	'', '');
$ArrBrowsOs[1] = Array(' align="left" nowrap="nowrap"', ' align="right"', '', ' nowrap="nowrap" align="right"', '');
$ArrBrowsOs[2] = Array(' align="left" nowrap="nowrap"', ' align="right"', '', ' nowrap="nowrap" align="right"', ' align="left"');
$sql = "SELECT browser,version,system,count(id) as hits FROM $tbl_logs AS L, ".PPHL_TBL_AGENTS." AS A "
     . "WHERE agentid = A.id ";
if(isset($sql_fromto)) $sql .= "AND ".$sql_fromto;
$sql .= "GROUP BY browser,version,system ORDER BY hits DESC LIMIT ".$topbrowseros_lim;
$res = mysqli_query($connected,$sql);
$i = 3;
while ($row = @mysqli_fetch_array($res)) {
	$browsstr = ($row[0] == '') ? '['.$strUndefined.']' : $row[0].' '.formatBrowsver($row[1]).'; '.$row[2];
	$ArrBrowsOs[$i][0] = '<a>'.$browsstr.'</a>';
	$ArrBrowsOs[$i][1] = $row[3];
	$ArrBrowsOs[$i][2] = '';
	$perc = round($row[3]/$logtotal*1000);
	if(!isset($first_perc)) {
		$perc_factor = $browseros_barsize/$perc;
		$first_perc = true;
	}
	$perc_bar = round($perc*$perc_factor);
	if($perc_bar == 0) $perc_bar = 1;
	$perc = $perc/10;
	$ArrBrowsOs[$i][3] = $perc.' %';
	$ArrBrowsOs[$i][4] = '<img src="'.ACT_PHPIXEL.'?c='.$color_a.'" height="10" width="'.$perc_bar.'" alt="'.$perc.' %" />';
	$i++;
}
echo htmlStatTable($ArrBrowsOs,4);
?>
    </td>
    <td valign="top" align="left">
<?php
/* -------------------------------- BROWSER statistics -------------------------------- */
$ArrBrows[0] = Array('browsers', $strUniq, '', '', '');
$ArrBrows[1] = Array(' nowrap="nowrap"', ' align="right"', '', ' nowrap="nowrap" align="right"',	'');
$ArrBrows[2] = $ArrBrows[1];
$sql = "SELECT browser, count(browser) as hits FROM $tbl_logs AS L, ".PPHL_TBL_AGENTS." AS A "
     . "WHERE agentid = A.id AND browser > '' ";
if(isset($sql_fromto)) $sql .= "AND ".$sql_fromto;
$sql .= "GROUP BY browser ORDER BY hits DESC";
$res = mysqli_query($connected,$sql);
$i = 3;
while ($row = @mysqli_fetch_array($res)) {
	$browser_full = (isset($arr_brows[$row[0]])) ? $arr_brows[$row[0]] : $row[0];
	$ArrBrows[$i][0] = '<a>'.$browser_full.'</a>';
	$ArrBrows[$i][1] = $row[1];
	$ArrBrows[$i][2] = '';
	$perc = round($row[1]/$logtotal*1000);
	if(!isset($first_perc2)) {
		$perc_factor = $browseros_barsize/$perc;
		$first_perc2 = true;
	}
	$perc_bar = round($perc*$perc_factor);
	if($perc_bar == 0) $perc_bar = 1;
	$perc = $perc/10;
	$ArrBrows[$i][3] = $perc.' %';
	$ArrBrows[$i][4] = '<img src="'.ACT_PHPIXEL.'?c='.$color_a.'" height="10" width="'.$perc_bar.'" alt="'.$perc.' %" />';
	$i++;
}
echo htmlStatTable($ArrBrows,4);
?>
<br />
<?php
/* -------------------------------- OS statistics -------------------------------- */
$ArrOs[0] = Array('OS', $strUniq, '', '', '');
$ArrOs[1] = Array(' nowrap="nowrap"', ' align="right"', '', ' nowrap="nowrap" align="right"',	'');
$ArrOs[2] = $ArrOs[1];
$sql = "SELECT system, count(system) as hits FROM $tbl_logs AS L, ".PPHL_TBL_AGENTS." AS A "
     . "WHERE agentid = A.id AND system > '' ";
if(isset($sql_fromto)) $sql .= "AND ".$sql_fromto;
$sql .= "GROUP BY system ORDER BY hits DESC";
$res = mysqli_query($connected,$sql);
$i = 3;
while ($row = @mysqli_fetch_array($res)) {
	$system_full = (isset($arr_sys[$row[0]])) ? $arr_sys[$row[0]] : $row[0];
	$ArrOs[$i][0] = '<a>'.$system_full.'</a>';
	$ArrOs[$i][1] = $row[1];
	$ArrOs[$i][2] = '';
	$perc = round($row[1]/$logtotal*1000);
	if(!isset($first_perc3)) {
		$perc_factor = $browseros_barsize/$perc;
		$first_perc3 = true;
	}
	$perc_bar = round($perc*$perc_factor);
	if($perc_bar == 0) $perc_bar = 1;
	$perc = $perc/10;
	$ArrOs[$i][3] = $perc.' %';
	$ArrOs[$i][4] = '<img src="'.ACT_PHPIXEL.'?c='.$color_a.'" height="10" width="'.$perc_bar.'" alt="'.$perc.' %" />';
	$i++;
}
echo htmlStatTable($ArrOs,4);
?>
<br />
<?php
/* -------------------------------- SEARCHENGINES statistics -------------------------------- */
$ArrSeareng[0] = Array('top '.$topsearcheng_lim.'<br />search engines', $strUniq, '', '', '');
$ArrSeareng[1] = Array('', ' align="right"', '', ' nowrap="nowrap" align="right"',	'');
$ArrSeareng[2] = $ArrSeareng[1];
$sql = "SELECT seareng,count(seareng) as hits FROM ".$tbl_logs." "
     . "WHERE seareng > '' ";
if(isset($sql_fromto)) $sql .= "AND ".$sql_fromto;
$sql .= "GROUP BY seareng ORDER BY hits DESC LIMIT ".$topsearcheng_lim;
$res = mysqli_query($connected,$sql);
$i = 3;
while ($row = @mysqli_fetch_array($res)) {
	$ArrSeareng[$i][0] = '<a>'.$row[0].'</a>';
	$ArrSeareng[$i][1] = $row[1];
	$ArrSeareng[$i][2] = '';
	$perc = round($row[1]/$seartotal*1000);
	if(!isset($first_perc4)) {
		$perc_factor = $browseros_barsize/$perc;
		$first_perc4 = true;
	}
	$perc_bar = round($perc*$perc_factor);
	if($perc_bar == 0) $perc_bar = 1;
	$perc = $perc/10;
	$ArrSeareng[$i][3] = $perc.' %';
	$ArrSeareng[$i][4] = '<img src="'.ACT_PHPIXEL.'?c='.$color_a.'" height="10" width="'.$perc_bar.'" alt="'.$perc.' %" />';
	$i++;
}
echo htmlStatTable($ArrSeareng,4);
?>
    </td>
    <td nowrap="nowrap" align="right"> 
<form action="<?php echo INC_COOKIES; ?>" method="post">
<input type="hidden" name="action" value="browsos_timespan" />
<?php echo $strFrom; ?>: 
<input type="text" class="myInput" name="from_y" value="<?php echo $from_y; ?>" size="4" maxlength="4" />
<input type="text" class="myInput" name="from_m" value="<?php echo $from_m; ?>" size="2" maxlength="2" />
<input type="text" class="myInput" name="from_d" value="<?php echo $from_d; ?>" size="2" maxlength="2" />
<br /><?php echo $strTo; ?>: 
<input type="text" class="myInput" name="to_y" value="<?php echo $to_y; ?>" size="4" maxlength="4" />
<input type="text" class="myInput" name="to_m" value="<?php echo $to_m; ?>" size="2" maxlength="2" />
<input type="text" class="myInput" name="to_d" value="<?php echo $to_d; ?>" size="2" maxlength="2" />
<br />
<input type="submit" class="myInput" value=" <?php echo $strUsrPage[4]; ?> " />
</form>
	</td>
  </tr>
</table>
<?php
include INC_FOOT;
?>
