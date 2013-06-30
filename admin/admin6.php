<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: admin6.php,v 1.16 2003/08/18 19:15:45 cvs_iezzi Exp $

    admin4.php mailing list
    --------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
$view = 'admin6';
include INC_HEAD;
?> 
<p>&nbsp;</p>
<table align="center" cellpadding="2" cellspacing="0" class="color2" border="0">
  <tr> 
    <td class="color3"><b>
<?php
echo $strMailinglist;
if(isset($action)) echo ' - '.$action;
?> </b></td>
  </tr>
  <tr> 
    <td> 
<?php
switch(@$action) {
	
	case 'preview':
		
		$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE id=0 AND type = 'mlist_sql'";
		$res = mysql_query($sql);
		
		/* select the users */
		$sql = "SELECT * FROM ".PPHL_TBL_USERS;
		if ($filter_onoff == 'on') {
		 	include LIB_SEARFUNC;
		 	$sql.= ' '.usrSearch();
		}
		$sql.= " ORDER BY id";
		$res = mysql_query($sql);
		
		$text = $mailtext;
		$to_email = ""; $num_mails = 0;
		while ($row = mysql_fetch_array($res)) {
			$to_email .= ($to_email > '') ? '; ' : '';
			$to_email .= emailAdressString($row["email"],$row['username']);
			$num_mails++;
		}
		
		$mlist_sql = "INSERT INTO ".PPHL_TBL_CACHE." (type,cache,time) VALUES ('mlist_sql','".addslashes($sql)."',$curr_gmt_time)";
		$res = mysql_query($mlist_sql);
		?>
      <form action="<?php echo ADM_MLISTSEND; ?>" method="post" target="_blank">
        <br />
        <table width="100%" border="0" cellpadding="5">
          <tr> 
            <td valign="top" align="right"><?php echo $strFrom; ?>:</td>
            <td valign="top">
              <input tabindex="1" class="myInput" size="80" type="text" name="mlist_from" value="<?php echo htmlentities(stripslashes(emailAdressString($fromemail,$fromname))); ?>" />
            </td>
          </tr>
          <tr> 
            <td valign="top" align="right"><?php echo $strTo; ?>:</td>
            <td valign="top"> 
              <textarea class="myInput" name="mlist_to" rows="15" readonly cols="80"><?php echo $to_email; ?>


<?php echo $strTotal.' '.$num_mails.' mails'; ?>
			  </textarea>
            </td>
          </tr>
          <tr> 
            <td valign="top" align="right">subject:</td>
            <td valign="top"> 
              <input tabindex="2" class="myInput" type="text" name="mlist_subj" size="80" value="<?php echo htmlentities(stripslashes($subject)); ?>" />
            </td>
          </tr>
          <tr> 
            <td valign="top" align="right">message:</td>
            <td valign="top"> 
              <textarea tabindex="3" class="myInput" name="mlist_body" rows="15" cols="100"><?php echo stripslashes($mailtext); ?></textarea>
            </td>
          </tr>
          <tr> 
            <td valign="top" align="right">&nbsp;</td>
            <td valign="top" align="right">
			  (pack of <input class="myInput" type="text" name="mail_pack" value="20" size="3" /> mails)<br /><br />
			  <input tabindex="3" class="myInput" type="submit" value=" <?php echo $strSend; ?> " name="submit" />
			  <input type=hidden name="num_mails" value="<?php echo $num_mails; ?>" />
              <input type=hidden name="action" value="send" />
            </td>
          </tr>
        </table>
      </form>

<?php
	break;
	
	default:
?>
      <form action="<?php echo $PHP_SELF; ?>" method="post">
        <br />
        <table width="100%" border="0" cellpadding="5">
          <tr> 
            <td valign="top" align="right"><?php echo $strFrom; ?>:</td>
            <td valign="top">
              <input class="myInput" type="text" name="fromname" value="<?php echo $admin_name; ?>" /> (name)
              <input class="myInput" type="text" name="fromemail" value="<?php echo $admin_mail; ?>" /> (email)
            </td>
          </tr>
          <tr> 
            <td valign="top" align="right">subject:</td>
            <td valign="top"> 
              <input class="myInput" type="text" name="subject" size="60" />
            </td>
          </tr>
          <tr> 
            <td valign="top" align="right">message:</td>
            <td valign="top"> 
              <textarea class="myInput" name="mailtext" rows="15" cols="80"></textarea>
            </td>
          </tr>
          <tr> 
            <td valign="top">filters:<br />
            <select class="myInput" name="filter_onoff">
              <option value="off"><?php echo $strOff; ?></option>
              <option value="on" selected><?php echo $strOn; ?></option>
            </select>
            </td>
            <td valign="top"> 
              <table cellpadding="2" cellspacing="0" class="color2" border="0" align="center">
                <tr> 
                  <td align="right">id /username 
                    <input class="myInput" type="text" name="S_usernameid"<?php if (isset($S_usernameid)) echo " value=\"$S_usernameid\""; ?> />
                  </td>
                  <td align="right"> <?php echo $strHits; ?> 
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
                </tr>
                <tr> 
                  <td align="right">email 
                    <input class="myInput" type="text" name="S_email"<?php if (isset($S_email)) echo " value=\"$S_email\""; ?> />
                  </td>
                  <td align="right"><?php echo $strTimeout; ?> 
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
                </tr>
              </table>
            </td>
          </tr>
          <tr> 
            <td valign="top" align="right">&nbsp;</td>
            <td valign="top" align="right">&nbsp;</td>
          </tr>
          <tr> 
            <td valign="top" align="right">&nbsp;</td>
            <td valign="top" align="right">
              <input class="myInput" type="submit" value=" preview " name="submit" />
              <input class="myInput" type="reset" value="Reset" name="reset" />
            </td>
          </tr>
        </table>
        <input type=hidden name="action" value="preview" />
      </form>
<?php
	break;
} // end of switch statement
?>
    </td>
  </tr>
</table>
<?php
include INC_FOOT;
?>
