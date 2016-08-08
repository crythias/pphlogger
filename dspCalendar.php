<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dspCalendar.php,v 1.17 2003/08/18 19:10:02 cvs_iezzi Exp $

    shows calendar, visitor-per-month & visitor-per-hour graph
    --------------------------------------------------------- */
//@set_time_limit(90);
include "main_location.inc";
include INC_GETUSERDATA;
include MOD_CALENDAR;


/* clean-up calendar
 * This will delete all calendar data and further down load the whole thing again
 */
if (@$action == 'cleanup' && $password == $pw) {
	$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id=$id AND type='$uniq_type'";
	$res = mysql_query($sql);
}

/* reload visitors-per-hour
 * This deletes the current vis-per-hour cache and recalcs the whole thing
 */
if (!isset($hour_mode)) $hour_mode = 'log_hour_month';

if (@$action == 'vph_reload') {
	$sql  = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id=$id AND type='$hour_mode'";
	if($hour_mode == 'log_hour_month') {
		if (!isset($yyyymm)) {
			$last_mo = getSerializedCache($hour_mode);
			if ($last_mo) $sql .= " AND yyyymm=".$last_mo[2];
			else $sql = false;
		} else {
			$sql .= " AND yyyymm=".$yyyymm;
		}
	}
	if($sql) mysqli_query($connected,$sql);
}

/* update calendar
 * (this needs to run before inc_head, otherwise the css will not parse correctly
 *  due to max_execution_time)
 */
if (isset($show_impr)) {
	$showtxt = $strShowUniqVis;
	$uniq_type = 'log_impr_day_mo';
} else {
	$showtxt = $strShowPageimpress;
	$uniq_type = 'log_day_mo';
}
$sql = "SELECT * FROM ".PPHL_TBL_CACHE." WHERE type='$uniq_type' AND id=$id";
$res = @mysqli_query($connected,$sql);
$cache = mysqli_num_rows($res);
if($cache) {
	if ($cache_calendar == 0) echo update_calendar($uniq_type);
} else {
	echo reload_calendar($uniq_type);
}

$view = 'stats2';
include INC_HEAD;
?> 
<p>&nbsp;</p>
<a name="calendar"></a> 
<?php
/* show calendar */
echo show_calendar($uniq_type);


if($GD_enabled) {
?>
<br />
<div align="center">
<table cellpadding="5" cellspacing="0" border="0" align="center"><tr>
<td width="400">
<img alt="" src="<?php echo MOD_SHOWVISPERDAY; ?>?id=<?php 
echo $id;
echo '&uniq_type='.$uniq_type;
if (isset($yyyymm)) echo '&yyyymm='.$yyyymm;
echo '&reload='.time();
?>" />
<p align="center">
[&nbsp;<a href="<?php echo INC_COOKIES; ?>?uniqimpr=1" class="invertLink"><?php echo $showtxt; ?></a>&nbsp;]
</p>
</td>
<td width="400">
<img alt="" src="<?php echo MOD_SHOWVISPERHOUR; ?>?id=<?php 
echo $id;
if (!isset($hour_mode)) $hour_mode = 'log_hour_month';
echo '&visperhour_mode='.$hour_mode;
if ($hour_mode = 'log_hour_month' && isset($yyyymm)) echo '&yyyymm='.$yyyymm;
?>" />
<p align="center">
[&nbsp;<a href="<?php echo INC_COOKIES; ?>?visperhour=log_hour_month<?php if (isset($yyyymm)) echo '&yyyymm='.$yyyymm; ?>" class="invertLink"><?php echo $strMonth; ?></a>&nbsp;|&nbsp;
<a href="<?php echo INC_COOKIES; ?>?visperhour=log_hour_today" class="invertLink"><?php echo $strToday; ?></a>&nbsp;|&nbsp;
<a href="<?php echo INC_COOKIES; ?>?visperhour=log_hour_all" class="invertLink"><?php echo $strAll; ?></a>&nbsp;]
<?php
if (!$guest) {
?>
&nbsp;&nbsp;&nbsp;[&nbsp;<a href="<?php echo $usr_view[3]; ?>?action=vph_reload<?php if (isset($yyyymm)) echo '&yyyymm='.$yyyymm; ?>" class="invertLink"><?php echo $strReload; ?></a>&nbsp;]
<?php
}
?>
</p>
</td>
</tr></table>
</div>

<?php
} else { // if($GD_enabled)
?>
<p align="center">
<a href="<?php echo INC_COOKIES; ?>?uniqimpr=1" class="invertLink"><?php echo $showtxt; ?></a>
</p>
<?php
}
include INC_FOOT;
?>
