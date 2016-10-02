<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: admin2.php,v 1.26 2003/08/18 19:15:45 cvs_iezzi Exp $
    
    admin2.php show useraccounts
    --------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";

/*
 * actions
 */
switch(@$action) {
	case 'orderby':
		if ($useraccount_ord == $order) {
			$new_desc = ($useraccount_ord_desc) ? 'false' : 'true';
			mysqli_query($connected,"UPDATE ".PPHL_TBL_SETTINGS." SET value = '$new_desc' WHERE setting = 'useraccount_ord_desc'");
		} else {
			mysqli_query($connected,"UPDATE ".PPHL_TBL_SETTINGS." SET value = '$order' WHERE setting = 'useraccount_ord'");
			mysqli_query($connected,"UPDATE ".PPHL_TBL_SETTINGS." SET value = 'false' WHERE setting = 'useraccount_ord_desc'");
		}
		Header("Location: $PHP_SELF");
		exit;
	break;
	
	case 'calctblsize': // refresh the table's sizes
		calcTableSize();
	break;
}

$view = 'admin2';
include INC_HEAD;

/*
 * get the number of activated useraccounts
 */
$total_active_users = get_total_activeUser();

/*
 * get the ASC/DESC arrow image
 */
function ascdesc_img($ord) {
	global $useraccount_ord, $useraccount_ord_desc;
	
	if ($ord != $useraccount_ord) {
		return false;
	} else {
		$ascdesc = ($useraccount_ord_desc) ? 'desc' : 'asc';
		echo "&nbsp;<img src=\"".CFG_IMG_PATH.$ascdesc."_order.gif\" />";
		return true;
	}
}


/* check which users are ready to delete
   - if the account was not confirmed during the [cleanup_lim] hrs
   - if the account wasn't used during the last [cleanup_old] days  */
$sql = "UPDATE ".PPHL_TBL_USERS." SET del_usr = 0, access_diff = $curr_gmt_time-last_access";
$res = mysqli_query($connected,$sql);
$sql = "UPDATE ".PPHL_TBL_USERS." SET del_usr = 1 "
     . "WHERE access_diff > ".($cleanup_old*24*60*60)." "
	 . "OR (conf = 0 AND ($curr_gmt_time-date_start) > ".($cleanup_lim*60*60).")";
$res = mysqli_query($connected,$sql);


/*
 * userListRow returns one <tr>-row for useraccount output
 */
function userListRow($row) {
	global $strDate,$is_a_user,$rowcnt;
	
	if ($rowcnt%2) $bgcolor = "ref";
	else $bgcolor = "color2";
	$urls = explode("\n", $row['your_url']);
	$html  = "<tr class=\"$bgcolor\"><td align=\"right\">&nbsp;";
	$html .= "<a id=\"blacklink\" target=\"_blank\" href=\"".USR_LOGIN."?usr=".$row['id']."&admpw=".$row['pw']."\">".$row['id']."</a>&nbsp;</td>";
	$html .= "<td align=\"center\">&nbsp;<a id=\"blacklink\" href=\"change_state.".CFG_PHPEXT."?id=".$row['id']."&conf=".$row['conf']."\">".$row['conf']."</a>&nbsp;</td>";
	$html .= "<td>&nbsp;<a id=\"blacklink\" href=\"mailto:".$row['email']."\">".$row['username']."</a>&nbsp;</td>";
	$html .= "<td align=\"right\">&nbsp;".$row['hits']."&nbsp;</td>";
	$html .= "<td align=\"center\">&nbsp;<a id=\"blacklink\" href=\"change_state.".CFG_PHPEXT."?id=".$row['id']."&adm=".$row['admin']."\">".$row['admin']."</a>&nbsp;</td>";
	$html .= "<td align=\"center\">&nbsp;<a id=\"blacklink\" href=\"change_state.".CFG_PHPEXT."?id=".$row['id']."&demo=".$row['demo']."\">".$row['demo']."</a>&nbsp;</td>";
	//$html .= "<td>&nbsp;".$row['email']."&nbsp;</td>";
	$html .= "<td align=\"center\">&nbsp;<a id=\"blacklink\" href=\"change_state.".CFG_PHPEXT."?id=".$row['id']."&vis=".$row['visible']."\">".$row['visible']."</a>&nbsp;</td>";
	$html .= "<td nowrap=\"nowrap\">&nbsp;".date($strDate,GMTtoUser($row['date_start'],$is_a_user))."&nbsp;</td>";
	$html .= "<td align=\"center\">&nbsp;".(round($row['access_diff']/(24*60*60)))."&nbsp;</td>";
	$html .= "<td align=\"center\">&nbsp;".$row['gmt']."&nbsp;</td>";
	$html .= "<td align=\"right\">&nbsp;".$row['hit_mail']."&nbsp;</td>";
	$html .= "<td align=\"right\">&nbsp;".$row['loglim']."&nbsp;</td>";
	$html .= "<td>";
	$cnt_urls = count($urls);
	for ($i = 0; $i < $cnt_urls && $i < 5; $i++) {
		if ($i > 0) $html .= '<br />';
		if ($i == 4) $html .= '...';
		else $html .= "&nbsp;<a href=\"".trim($urls[$i])."\">".cutHTTP($urls[$i])."</a>&nbsp;";
	}
	$html .= "</td>";
	if (MYSQL_INT_VERSION >= 32303) $html .= "<td nowrap=\"nowrap\" align=\"right\">&nbsp;".formatPrettyByte($row['tblsize'])."&nbsp;</td>";
	$html .= "<td align=\"center\">&nbsp;<a href=\"change_userprofile.".CFG_PHPEXT."?usr=".$row['id']."&admpw=".$row['pw']."\">[X]</a>&nbsp;</td>";
	$html .= "</tr>\n";
	
	return $html;
}


if (isset($hideusers)) $hideusers_txt = $strShowAccounts;
else $hideusers_txt = $strHideAccounts; ?>
[&nbsp;<a class="invertLink" href="admin_cookie.<?php echo CFG_PHPEXT; ?>?hideusers_onoff=1"><?php echo $hideusers_txt;?></a>&nbsp;]&nbsp;
[&nbsp;<a class="invertLink" href="<?php echo $PHP_SELF; ?>?action=calctblsize"><?php echo $strCalc.' '.$strTable.' '.$strSize; ?></a>&nbsp;]
</p>

<?php if (!isset($hideusers)) { ?>
<table cellpadding="2" cellspacing="0" border="0" align="center">
<tr>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=id">id</a><?php ascdesc_img('id'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=conf">conf</a><?php ascdesc_img('conf'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=username">username</a><?php ascdesc_img('username'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=hits">hits</a><?php ascdesc_img('hits'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=admin">admin</a><?php ascdesc_img('admin'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=demo">demo</a><?php ascdesc_img('demo'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=visible">visible</a><?php ascdesc_img('visible'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=date_start">date_start</a><?php ascdesc_img('date_start'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=access_diff">access</a><?php ascdesc_img('access_diff'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=gmt">gmt</a><?php ascdesc_img('gmt'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=hit_mail">notif</a><?php ascdesc_img('hit_mail'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=loglim">loglim</a><?php ascdesc_img('loglim'); ?></th>
	<th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=your_url">your_url</a><?php ascdesc_img('your_url'); ?></th>
	<?php if (MYSQL_INT_VERSION >= 32303) { ?><th class="color3" nowrap="nowrap"><a class="color3" href="<?php echo $PHP_SELF; ?>?action=orderby&order=tblsize">tblsize</a><?php ascdesc_img('tblsize'); ?></th><?php } ?>
	<th class="color3" nowrap="nowrap">edit</th>
</tr>

<?php
$cust_colspan = 15;
if (MYSQL_INT_VERSION < 32303) $cust_colspan--;
$rowcnt = 0;
$sql_base = "SELECT id,conf,username,hits,admin,demo,email,visible,"
          . "date_start,access_diff,del_usr,gmt,hit_mail,loglim,your_url,pw,tblsize FROM ".PPHL_TBL_USERS." ";

/*
 * active useraccounts
 */
$sql = $sql_base;
if (!isset($sql_sear)) $sql_sear = '';
if (isset($search_users)) {
	include LIB_SEARFUNC;
	$sql_sear = usrSearch();
	$sql .= $sql_sear;
} else {
	$sql .= "WHERE conf = 1 AND del_usr = 0 ";
}
$sql .= "ORDER BY $useraccount_ord ";
$sql .= ($useraccount_ord_desc) ? " DESC " : " ASC ";
if ($sql_sear == '' && $useraccount_lim > 0) {
	$sql .= (isset($offset)) ? "LIMIT ".$offset.",".$useraccount_lim : "LIMIT ".$useraccount_lim;
}
$res = mysqli_query($connected,$sql);
while ($row = @mysqli_fetch_array($res)) {
	echo userListRow($row);
	$rowcnt++;
}

if ($sql_sear == '') { // do not display unconfirmed and ready-to-delete if searching
	
	/*
	 * Prev-Next bar
	 */
	echo "<tr><td colspan=\"$cust_colspan\" align=\"right\">";
	echo PrevNext($useraccount_lim,$total_active_users);
	echo "</td></tr>";
	
	/*
	 * unconfirmed useraccounts
	 */
	$sql = $sql_base
		 . "WHERE conf = 0 AND del_usr = 0 "
		 . "ORDER BY del_usr DESC, conf, id";
	$res = mysqli_query($connected,$sql);
	if(@mysqli_affected_rows()) {
		echo "<tr><td colspan=\"$cust_colspan\">&nbsp;</td><tr><tr><td colspan=\"$cust_colspan\" class=\"color3\">unconfirmed:</td></tr>";
		while ($row = @mysqli_fetch_array($res)) {
			echo userListRow($row);
			$rowcnt++;
		}
	}
	
	/*
	 * ready to delete useraccounts
	 */
	$sql = $sql_base
		 . "WHERE del_usr = 1 "
		 . "ORDER BY del_usr DESC, conf, id";
	$res = mysqli_query($connected,$sql);
	if(@mysqli_affected_rows()) {
		echo "<tr><td colspan=\"$cust_colspan\">&nbsp;</td></tr><tr><td colspan=\"$cust_colspan\" class=\"color3\">$strReadyDelete:</td></tr>";
		while ($row = @mysqli_fetch_array($res)) {
			echo userListRow($row);
			$rowcnt++;
		}
		echo "<tr><td colspan=\"$cust_colspan\" align=\"right\">";
		echo "<a class=\"invertLink\" href=\"account_cleanup.".CFG_PHPEXT."\">clean-up useraccounts</a><br />";
		echo "[delete useraccounts that haven't been confirmed ]</td></tr>";
	}
}

echo "</table>";
} //hide if hideusers-cookie is set
?>


<p>&nbsp;</p>
<form action="<?php echo $adm_view[2]; ?>" method="post">
  <table cellpadding="2" cellspacing="0" class="color2" border="0" align="center">
    <tr> 
      <td align="right">id /username 
        <input class="myInput" type="text" name="S_usernameid"<?php if (isset($S_usernameid)) echo " value=\"$S_usernameid\""; ?> />
      </td>
      <td align="right"> hits 
        <select class="myInput" name="S_hits_x">
          <option value="&lt;">&lt;</option>
          <option value="=">=</option>
          <option value="&gt;" selected>&gt;</option>
        </select>
        <input class="myInput" type="text" name="S_hits" size="4"<?php if (isset($S_hits)) echo " value=\"$S_hits\""; ?> />
      </td>
      <td align="right">access 
        <select class="myInput" name="S_access_x">
          <option value="&lt;">&lt;</option>
          <option value="=">=</option>
          <option value="&gt;" selected>&gt;</option>
        </select>
        <input class="myInput" type="text" name="S_access" size="4"<?php if (isset($S_access)) echo " value=\"$S_access\""; ?> />
      </td>
      <td>&nbsp; </td>
      <td>&nbsp; </td>
    </tr>
    <tr> 
      <td align="right">email 
        <input class="myInput" type="text" name="S_email"<?php if (isset($S_email)) echo " value=\"$S_email\""; ?> />
      </td>
      <td align="right">timeout 
        <select class="myInput" name="S_timeout_x">
          <option value="&lt;">&lt;</option>
          <option value="=">=</option>
          <option value="&gt;" selected>&gt;</option>
        </select>
        <input class="myInput" type="text" name="S_timeout" size="4"<?php if (isset($S_timeout)) echo " value=\"$S_timeout\""; ?> />
      </td>
      <td align="right">gmt 
        <select class="myInput" name="S_gmt_x">
          <option value="&lt;">&lt;</option>
          <option value="=">=</option>
          <option value="&gt;" selected>&gt;</option>
        </select>
        <input class="myInput" type="text" name="S_gmt" size="4"<?php if (isset($S_gmt)) echo " value=\"$S_gmt\""; ?> />
      </td>
      <td>&nbsp; </td>
      <td>&nbsp; </td>
    </tr>
    <tr> 
      <td align="right"> url 
        <input class="myInput" type="text" name="S_url"<?php if (isset($S_url)) echo " value=\"$S_url\""; ?> />
      </td>
      <td align="right" colspan="2">
        demo 
        <select class="myInput" name="S_demo">
          <option value="-"<?php echo (!isset($S_demo) || (isset($S_demo) && $S_demo == '-')) ? ' selected="selected"': ''; ?>>-</option>
          <option value="1"<?php echo (isset($S_demo) && $S_demo == '1') ? ' selected="selected"': ''; ?>>Y</option>
          <option value="0"<?php echo (isset($S_demo) && $S_demo == '0') ? ' selected="selected"': ''; ?>>N</option>
        </select>
        <?php echo $strVisible; ?> 
        <select class="myInput" name="S_visible">
          <option value="-"<?php echo (!isset($S_visible) || (isset($S_visible) && $S_visible == '-')) ? ' selected="selected"': ''; ?>>-</option>
          <option value="1"<?php echo (isset($S_visible) && $S_visible == '1') ? ' selected="selected"': ''; ?>>Y</option>
          <option value="0"<?php echo (isset($S_visible) && $S_visible == '0') ? ' selected="selected"': ''; ?>>N</option>
        </select>
		confirmed
        <select class="myInput" name="S_conf">
          <option value="-"<?php echo (!isset($S_conf) || (isset($S_conf) && $S_conf == '-')) ? ' selected="selected"': ''; ?>>-</option>
          <option value="1"<?php echo (isset($S_conf) && $S_conf == '1') ? ' selected="selected"': ''; ?>>Y</option>
          <option value="0"<?php echo (isset($S_conf) && $S_conf == '0') ? ' selected="selected"': ''; ?>>N</option>
        </select>
      </td>
      <td>&nbsp;</td>
      <td align="right"> 
        <input class="myInput" type="submit" value="search" name="search_users" />
      </td>
    </tr>
  </table>
</form>


<?php
include INC_FOOT;
?>