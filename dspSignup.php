<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: dspSignup.php,v 1.20 2003/08/18 19:19:16 cvs_iezzi Exp $

    signup.php useraccount signup-page
    --------------------------------------------------------- */

setcookie("username", "", time() - 3600);
setcookie("password", "", time() - 3600);

include "main_location.inc";

$view = 'loginout';
include INC_HEADSTUFF;

/* break here and return to login-page
 * if $signup_ok = false
 */
if (!$signup_ok) {
	Header("Location: $usr_view[0]");
}

include INC_HEAD;
?>
<br />

<?php if(isset($usr)) { 
	$id = $usr; $username = $usr;
?>
  <table cellpadding="2" cellspacing="0" class="color2" border="0" align="center">
   <tr>
    <td class="color3"><b><?php echo $strAdminMsg2; ?>!!</b></td>
   </tr>
   <tr>
   	<td>
	<?php echo $strInstructions; ?><br /><br />
		<table cellpadding="6" cellspacing="0" border="0">
		<tr><td valign="top"><b>[1]</b></td><td>
			<?php echo $strConfLogin; ?><br /><a href="index.<?php echo CFG_PHPEXT; ?>">login !</a><br />
			<?php echo $strConfLogin2; ?>
		</td></tr>
		<tr><td valign="top"><b>[2]</b></td><td>
			<?php echo $strUploadJs; ?>
		</td></tr>
		<tr><td valign="top"><b>[3]</b></td><td>
			<?php echo $strAddHtmlCode; ?><br />
<?php
        $file_body_txt = INC_HTMLCODE;
        $body_txt = fread($fp = fopen($file_body_txt, 'r'), filesize($file_body_txt));
        fclose($fp);
		$body_txt = str_replace('{CFG_PHPEXT}',CFG_PHPEXT,$body_txt); // ugly work-around
		while(preg_match('/(%.+%)/U',$body_txt, $matches) == TRUE){
			$matchvar = str_replace('%','',$matches[1]);
			$body_txt = str_replace($matches[1], $$matchvar, $body_txt);
		}
		echo '<a>'.nl2br(htmlspecialchars($body_txt)).'</a>';
?>
		</td></tr>
		</table>
	</td>
   </tr>
  </table>
<?php } else { ?>
  <table align="center" width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td align="center" valign="top">
        <table cellpadding="2" cellspacing="0" class="color2" border="0">
          <tr> 
            <td class="color3"><b>PowerPhlogger SIGN-UP</b></td>
          </tr>
          <tr> 
            <td><?php echo $strSignUp; ?><br />
              <form action="newaccount_self.<?php echo CFG_PHPEXT; ?>" method="post">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td> 
                    <b><?php echo $strUsername; ?>:</b>&nbsp;</td>
                  <td><input class="myInput" type="text" name="N_username" />
                  </td>
                </tr>
                <tr> 
                  <td> 
                    <b><?php echo $strEmail; ?></b></td>
                  <td><input class="myInput" type="text" name="email" />
                  </td>
                </tr>
              </table>
              <p><br />
                <?php echo $strTimezone; ?>
                &nbsp; 
                <?php echo tz_select($gmt, 'N_gmt'); ?><br /><br />
                <?php echo $strUserLang;?>
                <?php 
				$select_array = directoryList(CFG_LANG_PATH, TRUE, 2);
				print "<select class=\"myInput\" name=\"N_lang\">";
				$cnt_select_array = count($select_array);
				for($i=0; $i < $cnt_select_array; $i++) {
					$N_lang = substr($select_array[$i],0,2);
					print "<option ";
					if ($N_lang == $default_lang) print "selected=\"selected\" ";
					print "value=\"$N_lang\">".$loca['lang'][$N_lang]."</option>\n";
				}
				print "</select>"; 
				?>
                <br />
                <br />
                <?php echo $strUrl1Txt; ?><br />
                <?php echo $strUrl2Txt; ?><br />
                <textarea class="myInput" name="N_your_url" cols="50" rows="3"><?php echo $your_url; ?></textarea>
                <br />
                <br />
              </p>
              <div align="center">&nbsp;&nbsp;
				<textarea name="termsconditions" align="center" class="myInput" wrap="hard" readonly="readonly" cols="70" rows="10">
<?php
/* include the terms and conditions */
if(!isset($lang)) $lang = $default_lang;
checkLangFormat($lang);
$terms_cond_file = file_exists(CFG_MSG_PATH.'terms_and_conditions_'.$lang.'.txt') ? CFG_MSG_PATH.'terms_and_conditions_'.$lang.'.txt' : CFG_MSG_PATH.'terms_and_conditions_en.txt';
readfile($terms_cond_file);
?>
				</textarea>&nbsp;&nbsp;
				<br />
                <input class="myInput" type="submit" value="Create" name="create_user" />
				</div>
              </form>
<?php 
if (isset($msg)) {
	echo "<br /><br /><b>";
	if      ($msg == 'sameuser')     echo $strAdminMsg1;
	else if ($msg == 'created')      echo $strAdminMsg2;
	else if ($msg == 'novalidemail') echo $strAdminMsg3;
	else if ($msg == 'badusername')  echo $strAdminMsg4;
	else                             echo $strAdminErr1;
	echo "</b><br />";
}
?>
            </td>
          </tr>
        </table>
	</td>
  </tr>
 </table>
<?php
}

include INC_FOOT;
?>
