<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dspOnline.php,v 1.15 2003/08/18 19:10:02 cvs_iezzi Exp $

    dspOnline.php VIEW2 - shows online users / stored IPs
    --------------------------------------------------------- */

include "main_location.inc";
include INC_GETUSERDATA;
$view = 'stats';
include INC_HEAD;


if (isset($allips)) {
	$onl_txt = "online users";
	$timeout_var = $timeout;
} else {
	$onl_txt = "all IP's";
	$timeout_var = $timeout_onl;
}

/* get the multi-page arrays */
$mpArr = getMpArr();
?>
<a class="invertLink" href="cookie.<?php echo CFG_PHPEXT; ?>?allips_onoff=1"><?php echo $onl_txt;?></a>

<a name="nowonline"></a> 
<table align="center" cellpadding="2" cellspacing="0" class="color2" border="0">
  <tr> 
    <td colspan="5"><b> 
      <?php echo $strCurrOnlUsers; ?>
      </b><br />
      <?php echo $strIPkept.' '.($timeout/60).' '.$strIPkept2; ?>
      <br />
    </td>
	<td align="right">
	  <a href="<?php echo $usr_view[2]; ?>">&lt;&lt;&lt;</a>
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
include INC_ONLINELIST;
?>
</table>
<p>&nbsp;</p>
<?php
	$sql = "SELECT L.*,A.*,DATE_FORMAT(L.time,'%b %d, %T') AS newdate, "
	     . "TIME_FORMAT(SEC_TO_TIME(L.online),'%k:%i:%s') AS otime, "
	     . "CONCAT(res_w,'x',res_h) AS res "
	     . "FROM $tbl_logs AS L, ".PPHL_TBL_AGENTS." AS A "
	     . "WHERE L.t_reload > ".($curr_gmt_time-$timeout_var)." AND L.agentid = A.id "
	     . "ORDER BY t_reload DESC, logid DESC";
	
	$res = mysqli_query($connected,$sql);
	// show the whole log-list:
	include INC_LOGLIST;


include INC_FOOT;
?>
