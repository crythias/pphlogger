<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: change_userprofile.php,v 1.21 2003/08/18 19:15:45 cvs_iezzi Exp $

    change_userprofile.php - edit userprofiles
    --------------------------------------------------------- */


define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
if (isset($usr))   { $id = $usr; $username = $usr; }
if (isset($admpw)) { $password = $admpw; }
include INC_GETUSERDATA;
$view = 'admin2';
include INC_HEAD;
?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td align="center">
        <table cellpadding="3" cellspacing="0" class="color2" border="0">
          <tr> 
            <td colspan="2" class="color3">PowerPhlogger <?php echo $strUserprofile." #".$id; ?></td>
          </tr>
          <tr> 
            <td><?php echo $strEditProfile; ?><br />
              <form action="edit_user.<?php echo CFG_PHPEXT; ?>" method="post">
			    <input type="hidden" name="usr" value="<?php echo $usr; ?>" />
			    <input type="hidden" name="admpw" value="<?php echo $admpw; ?>" />
              <table width="100%" border="0" cellspacing="0" cellpadding="2">
                <tr> 
                  <td align="right" valign="top"><?php echo $strUrl1Txt; ?><br />
				<?php echo $strUrl2Txt; ?><br /> 
				  </td>
                  <td align="left"> 
                    <textarea class="myInput" name="N_your_url" cols="50" rows="3"><?php echo $your_url; ?></textarea>
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strEmail;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_email" value="<?php echo $email; ?>" />
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strHits;?>: </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_hits" size="6" value="<?php echo $hits; ?>" />
                  </td>
                </tr>
				<tr> 
            <td align="right"><?php echo $strTimezone; ?></td>
            <td align="left"><?php echo tz_select($gmt, 'N_gmt'); ?></td>
                </tr>
				<tr> 
                  <td align="right"><?php echo $strUserLang;?> </td>
                  <td align="left">
                <?php 
				$select_array = directoryList(CFG_LANG_PATH, TRUE, 2);
				print "<select class=\"myInput\"";
				if ($guest) print "Guest";
				print " name=\"N_lang\">";
				$cnt_select_array = count($select_array);
				for($i=0; $i < $cnt_select_array; $i++) {
					$N_lang = substr($select_array[$i],0,2);
					print "<option ";
					if ($N_lang == $lang) print "selected=\"selected\" ";
					print "value=\"$N_lang\">".$loca['lang'][$N_lang]."</option>\n";
				}
				print "</select>"; 
				?>
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strTimeout;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_timeout" size=4 value="<?php echo $timeout/60; ?>" />
                    minutes</td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strOnline.' '.$strTimeout;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_timeout_onl" size=4 value="<?php echo $timeout_onl/60; ?>" />
                    minutes</td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strEmailNotif;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_hit_mail" size="3"  value="<?php echo $hit_mail; ?>" />
                    <?php echo $strHits; ?></td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strDefLogNo;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_loglim" size="3"  value="<?php echo $loglim; ?>" />
                  </td>
                </tr>
<?php
if(!$dellog_global) { ?>
                <tr> 
                  <td align="right"><?php echo $strMaxLoglim;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_limh" size="3"  value="<?php echo $limh; ?>" />
                    <?php echo $strHits; ?></td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strMaxLoglim;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_limd" size="3"  value="<?php echo $limd; ?>" />
                    <?php echo $strDays; ?></td>
                </tr>
<?php
} // if(!dellog_lim)
if(!$delpath_global) { ?>
                <tr> 
                  <td align="right"><?php echo $strMaxPath; ?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_limh_p" size="3"  value="<?php echo $limh_p; ?>" />
                    <?php echo $strHits; ?></td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strMaxPath; ?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_limd_p" size="3"  value="<?php echo $limd_p; ?>" />
                    <?php echo $strDays; ?></td>
                </tr>
<?php
} // if(!dellog_lim)
?>
                <tr> 
                  <td align="right"><?php echo $strLoadCSS; ?> </td>
                  <td align="left">
              <?php 
				$sql = "SELECT id,css,userid FROM ".PPHL_TBL_CSS." WHERE userid = 0 OR userid = $id ORDER BY userid ASC, css ASC";
				$res = mysql_query($sql);
				echo "<select class=\"myInput\" name=\"N_css\">\n";
				while ($row = @mysql_fetch_array($res)) {
					echo "<option ";
					if ($row['userid'] > 0) {
						if ($row['id'] == $cssid) echo "selected=\"selected\" ";
					} else if ($row['id'] == $cssid) echo "selected=\"selected\" ";
					echo "value=\"".$row['id']."\">";
					echo ($row['userid'] > 0) ? $row['css']." ($username)" : $row['css'];
					print "</option>\n";
				}
				print "</select>"; 
				?>
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strKwListMode;?> </td>
                  <td align="left"> 
                    <input type="radio"<?php if ($kwspl) echo " checked=\"checked\""; ?> name="N_kwspl" value="1" />
                    single words<br />
                    <input type="radio"<?php if (!$kwspl) echo " checked=\"checked\""; ?> name="N_kwspl" value="0" />
                    whole strings</td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strAllowDemo;?> </td>
                  <td align="left"> 
                    <input type="checkbox"<?php if ($demo) echo " checked=\"checked\""; ?> name="N_demo" value="1" />
                    (&quot;guest&quot; login)</td>
                </tr>
                <tr> 
                  <td align="right"> 
                    <?php echo $strUsrPage[2].' '.$strCache;?>
                  </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_stats_cache" size="3"  value="<?php echo $stats_cache; ?>" />
                    <?php echo $strSeconds; ?>
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strVisible;?> </td>
                  <td align="left"> 
                    <input type="checkbox"<?php if ($visible) echo " checked=\"checked\""; ?> name="N_visible" />
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strTTF;?> </td>
                  <td align="left"> 
                <?php 
				$select_array = directoryList(CFG_TTF_PATH);
				print "<select class=myInput name=\"N_ttf_file\">";
				$cnt_select_array = count($select_array);
				for($i=0; $i < $cnt_select_array; $i++) {
					print "<option ";
					if ($select_array[$i] == $ttf_file) print "selected=\"selected\" ";
					print "value=\"$select_array[$i]\">$select_array[$i]</option>\n";
				}
				print "</select>"; 
				?>
                  </td>
                </tr>
                <tr> 
                  <td align="right"> 
                    <?php echo $strFontSize;?>
                  </td>
                  <td align="left">
<?php
if($Freetype_enabled) {
?>
                    <input class="myInput" type="text" name="N_ttf_size" size="2"  value="<?php echo $ttf_size; ?>" />
                    <input type="hidden" name="N_gd_font" value="<?php echo $gd_font;?>" />
<?php
} else {
				print "<select class=\"myInput\" name=\"N_gd_font\">";
				for($i=1; $i < 6; $i++) {
					print "<option ";
					if ($i == $gd_font) print "selected=\"selected\" ";
					print "value=\"$i\">$i</option>\n";
				}
				print "</select>";
?>
	      <input type="hidden" name="N_ttf_file" value="<?php echo $ttf_file;?>" />
	      <input type="hidden" name="N_ttf_size" value="<?php echo $ttf_size;?>" />
<?php
}
?>
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strFontColor;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_fg_c" size="7"  value="<?php echo $fg_c; ?>" />
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strBgColor;?> </td>
                  <td align="left"> 
                    <input class="myInput" type="text" name="N_bg_c" size="7"  value="<?php echo $bg_c; ?>" />
                  </td>
                </tr>
                <tr> 
                  <td align="right"><?php echo $strTransBg;?> </td>
                  <td align="left"> 
                    <input type="checkbox"<?php if ($bg_trans) echo " checked=\"checked\""; ?> name="N_bg_trans" />
                  </td>
                </tr>
                <tr>
                  <td align="right"><?php echo $strSample;?> </td>
                  <td align="left">
<?php
echo "<img src=\"".PPHL_SCRIPT_PATH."showhits.".CFG_PHPEXT."?id=$id&st=img\" />";
?>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
                <input class="myInput" type="submit" value="Save configuration" name="edit_user" />
              </form>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>


<?php
include INC_FOOT;
?>