<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: edUserprofile.php,v 1.29 2003/08/18 19:10:02 cvs_iezzi Exp $

    view6_userprofile.php edit current userprofile
    --------------------------------------------------------- */

include "main_location.inc";
include INC_GETUSERDATA;
$view = 'userprofile';
include INC_HEAD;


?>
<script language="JavaScript" type="text/javascript">
//<!--
function FG(hex) {
      document.forms[0].N_fg_c.value = "#" + hex;
}
function BG(hex) {
      document.forms[0].N_bg_c.value = "#" + hex;
}
//-->
</script>


<br />
<form action="<?php echo USR_EDUSER; ?>" method="post">
  <table cellpadding="5" cellspacing="0" class="color2" border="0" align="center">
    <tr> 
      <td class="color3"><b>PowerPhlogger <?php echo $strUserprofile; ?></b></td>
      <td class="color3">&nbsp;</td>
    </tr>
    <tr> 
      <td> 
        <?php echo $strEditProfile; ?><br />
        <br />
        <?php echo $strUrl1Txt; ?>
        <br />
        <?php echo $strUrl2Txt; ?>
        <br />
        <textarea class="myInput" name="N_your_url" cols="53" rows="4"><?php echo $your_url; ?></textarea>
        <br />
        <br />
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr> 
            <td align="right"> 
              <?php echo $strEmail;?>
            </td>
            <td> 
              <input class="myInput" type="text" name="N_email" value="<?php echo $email; ?>" />
            </td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strUserLang;?>
            </td>
            <td> 
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
            <td align="right"> 
              <?php echo $strTimeout;?>
            </td>
            <td> 
              <input class="myInput" type="text" name="N_timeout" size="4" value="<?php echo $timeout/60; ?>" />
              <?php echo $strMinutes; ?></td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strOnline.' '.$strTimeout;?>
            </td>
            <td> 
              <input class="myInput" type="text" name="N_timeout_onl" size="4" value="<?php echo $timeout_onl/60; ?>" />
              <?php echo $strMinutes; ?></td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strEmailNotif;?>
            </td>
            <td> 
              <input class="myInput" type="text" name="N_hit_mail" size="3"  value="<?php echo $hit_mail; ?>" />
              <?php echo $strUniqs; ?></td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strDefLogNo;?>
            </td>
            <td> 
              <input class="myInput" type="text" name="N_loglim" size="3"  value="<?php echo $loglim; ?>" />
            </td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strKwListMode;?>
            </td>
            <td> 
              <input type="radio"<?php if ($kwspl) echo " checked=\"checked\""; ?> name="N_kwspl" value="1" />
              <?php echo $strSingleWords; ?><br />
              <input type="radio"<?php if (!$kwspl) echo " checked=\"checked\""; ?> name="N_kwspl" value="0" />
              <?php echo $strWholeStrings; ?></td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strAllowDemo;?>
            </td>
            <td> 
              <input type="checkbox"<?php if ($demo) echo " checked=\"checked\""; ?> name="N_demo" value="1" />
              (&quot;guest&quot; login)</td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strUsrPage[2].' '.$strCache;?>
            </td>
            <td> 
              <input class="myInput" type="text" name="N_stats_cache" size="3"  value="<?php echo $stats_cache; ?>" />
			  <?php echo $strSeconds; ?>
            </td>
          </tr>
          <tr> 
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <br />
      </td>
      <td valign="bottom" align="right"> 
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr> 
            <td align="right"><?php echo $strTimezone; ?></td>
            <td align="left"><?php echo tz_select($gmt, 'N_gmt'); ?></td>
          </tr>
          <tr> 
            <td align="right" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strVisible;?>
            </td>
            <td align="left"> 
              <input type="checkbox"<?php if ($visible) echo " checked=\"checked\""; ?> name="N_visible" />
            </td>
          </tr>
<?php
if($GD_enabled) {
	if($Freetype_enabled) {
?>
          <tr> 
            <td align="right"> 
              <?php echo $strTTF;?>
            </td>
            <td align="left"> 
<?php 
				$select_array = directoryList(CFG_TTF_PATH);
				print "<select class=\"myInput\" name=\"N_ttf_file\">";
				$cnt_select_array = count($select_array);
				for($i=0; $i < $cnt_select_array; $i++) {
					print "<option ";
					if (isset($font)) {
						if ($select_array[$i] == $font) print "selected=\"selected\" ";
					} else {
						if ($select_array[$i] == $ttf_file) print "selected=\"selected\"";
					}
					print "value=\"".$select_array[$i]."\">".strtolower(eregi_replace('.ttf','',$select_array[$i]))."</option>\n";
				}
				print "</select>";
?>
              &nbsp;<a href="dspTTF.<?php echo CFG_PHPEXT; ?>"><?php echo $strAvailFonts; ?></a> 
            </td>
          </tr>
<?php
	}
?>
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
            <td align="right"> 
              <?php echo $strFontColor;?>
              <br />
              <input class="myInput" type="text" name="N_fg_c" size="7"  value="<?php echo $fg_c; ?>" />
            </td>
            <td align="left"> <img src="<?php echo CFG_IMG_PATH; ?>colors.gif" width="326" height="38" border="0" alt="choose FG-color" usemap="#fgmap" /><br />
            </td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strBgColor;?>
              <br />
              <input class="myInput" type="text" name="N_bg_c" size="7"  value="<?php echo $bg_c; ?>" />
            </td>
            <td align="left"><img src="<?php echo CFG_IMG_PATH; ?>colors.gif" width="326" height="38" border="0" alt="choose BG-color" usemap="#bgmap" /></td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strTransBg;?>
            </td>
            <td align="left"> 
              <input type="checkbox"<?php if ($bg_trans) echo " checked=\"checked\""; ?> name="N_bg_trans" />
            </td>
          </tr>
          <tr> 
            <td align="right"> 
              <?php echo $strSample;?>
            </td>
            <td align="left"> 
<?php
echo "<img alt=\"\" src=\"showhits.".CFG_PHPEXT."?id=$username&st=img\" />";
?>
            </td>
          </tr>
<?php
} else { // If GD is disabled by the administrator (config.inc.php) ?>
	<input type="hidden" name="N_ttf_file" value="<?php echo $ttf_file;?>" />
	<input type="hidden" name="N_gd_font" value="<?php echo $gd_font;?>" />
	<input type="hidden" name="N_ttf_size" value="<?php echo $ttf_size;?>" />
	<input type="hidden" name="N_fg_c"     value="<?php echo $fg_c;?>" />
	<input type="hidden" name="N_bg_c"     value="<?php echo $bg_c;?>" />
	<input type="hidden" name="N_bg_trans" value="<?php echo $bg_trans;?>" />
<?php
}
?>
        </table>
        <br />
        <br />
        <input class="myInput" type="submit" value="<?php echo $strSave; ?>" name="edit_user" />
      </td>
    </tr>
  </table>
</form>
<p align="center"> 
  <?php 
if (isset($edited_ok)) {
	if ($edited_ok) echo "&nbsp;<a class=\"invertLink\">$strView4Msg1</a><br />";
	else echo "&nbsp;<a class=\"invertLink\">$strView4Msg2</a><br />";
}
if (isset($guestuser)) echo "<a class=\"invertLink\">$strView4Msg3</a><br />";
if (isset($pw_changed)) echo "<a class=\"invertLink\">$strPwChanged</a><br />";
if (isset($wrongpw)) echo "<a class=\"invertLink\">$strWrongPw</a><br />";
?>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr> 
    <td align="right" width="50%"> 
      <table cellpadding="2" cellspacing="0" class="color2" border="0">
        <tr> 
         <td class="color3"><?php echo $strChangePw; ?></td>
        </tr>
		<tr> 
          <td><br />
            <form action="<?php echo ACT_CREATENEWPW; ?>" method="post">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td> 
                    <?php echo $strOldPw; ?>
                  </td>
                  <td> 
                    <input class="myInput" type="password" name="check_pw" />
                  </td>
                </tr>
                <tr> 
                  <td> 
                    <?php echo $strNewPw; ?>
                  </td>
                  <td> 
                    <input class="myInput" type="password" name="change_pw" />
                  </td>
                </tr>
                <tr> 
                  <td> 
                    <?php echo $strReenterPw; ?>
                  </td>
                  <td> 
                    <input class="myInput" type="password" name="change_pw2" />
                  </td>
                </tr>
              </table>
              <br />
              <div align="right"> 
                <input class="myInput" type="submit" value="Change" name="change_your_pw" />
              </div>
            </form>
          </td>
        </tr>
      </table>
    </td>
    <td valign="top" width="50%"> 
      <table cellpadding="2" cellspacing="0" class="color2" border="0">
        <tr> 
         <td class="color3"><?php echo $strLoadCSS; ?></td>
        </tr>
        <tr> 
          <td><br />
            <form action="<?php echo DO_LOADCSS; ?>" method="post"><div align="right"> 
              <?php
				$sql = "SELECT id,css,userid FROM ".PPHL_TBL_CSS." WHERE userid = 0 OR userid = $id ORDER BY userid ASC, css ASC";
				$res = mysql_query($sql);
				echo "<select class=\"myInput";
				if ($guest) print "Guest";
				echo "\" name=\"N_css\">\n";
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
              <br /><br />
			  <a href="<?php echo USR_EDCSS;?>"><?php echo $strEdit; ?> css</a>
			  <br />
              <br />
                <input class="myInput" type="submit" value="Load" name="load_css" />
              </div>
            </form>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

<map name="fgmap" id="map1"> 
  <area shape="rect" coords="1,1,9,9"       href="javascript:FG('c600ff')" />
  <area shape="rect" coords="10,1,18,9"     href="javascript:FG('ff00ff')" />
  <area shape="rect" coords="19,1,27,9"     href="javascript:FG('ff00c6')" />
  <area shape="rect" coords="28,1,36,9"     href="javascript:FG('ff0084')" />
  <area shape="rect" coords="37,1,45,9"     href="javascript:FG('ff0042')" />
  <area shape="rect" coords="46,1,54,9"     href="javascript:FG('ff0000')" />
  <area shape="rect" coords="55,1,63,9"     href="javascript:FG('ff4200')" />
  <area shape="rect" coords="64,1,72,9"     href="javascript:FG('ff8400')" />
  <area shape="rect" coords="73,1,81,9"     href="javascript:FG('ffc600')" />
  <area shape="rect" coords="82,1,90,9"     href="javascript:FG('ffff00')" />
  <area shape="rect" coords="91,1,99,9"     href="javascript:FG('c6ff00')" />
  <area shape="rect" coords="100,1,108,9"   href="javascript:FG('84ff00')" />
  <area shape="rect" coords="109,1,117,9"   href="javascript:FG('42ff00')" />
  <area shape="rect" coords="118,1,126,9"   href="javascript:FG('00ff00')" />
  <area shape="rect" coords="127,1,135,9"   href="javascript:FG('00ff42')" />
  <area shape="rect" coords="136,1,144,9"   href="javascript:FG('00ff84')" />
  <area shape="rect" coords="145,1,153,9"   href="javascript:FG('00ffc6')" />
  <area shape="rect" coords="154,1,162,9"   href="javascript:FG('00ffff')" />
  <area shape="rect" coords="163,1,171,9"   href="javascript:FG('00c6ff')" />
  <area shape="rect" coords="172,1,180,9"   href="javascript:FG('0084ff')" />
  <area shape="rect" coords="181,1,189,9"   href="javascript:FG('0042ff')" />
  <area shape="rect" coords="190,1,198,9"   href="javascript:FG('0000ff')" />
  <area shape="rect" coords="199,1,207,9"   href="javascript:FG('4200ff')" />
  <area shape="rect" coords="208,1,216,9"   href="javascript:FG('8400ff')" />
  <area shape="rect" coords="217,1,225,9"   href="javascript:FG('ffffff')" />
  <area shape="rect" coords="226,1,234,9"   href="javascript:FG('eaeaea')" />
  <area shape="rect" coords="235,1,243,9"   href="javascript:FG('d5d5d5')" />
  <area shape="rect" coords="244,1,252,9"   href="javascript:FG('c0c0c0')" />
  <area shape="rect" coords="253,1,261,9"   href="javascript:FG('ababab')" />
  <area shape="rect" coords="262,1,270,9"   href="javascript:FG('979797')" />
  <area shape="rect" coords="271,1,279,9"   href="javascript:FG('828282')" />
  <area shape="rect" coords="280,1,288,9"   href="javascript:FG('6d6d6d')" />
  <area shape="rect" coords="289,1,297,9"   href="javascript:FG('585858')" />
  <area shape="rect" coords="298,1,306,9"   href="javascript:FG('434343')" />
  <area shape="rect" coords="307,1,315,9"   href="javascript:FG('2e2e2e')" />
  <area shape="rect" coords="316,1,324,9"   href="javascript:FG('000000')" />
  <area shape="rect" coords="1,10,9,18"     href="javascript:FG('ad00e7')" />
  <area shape="rect" coords="10,10,18,18"   href="javascript:FG('e700e7')" />
  <area shape="rect" coords="19,10,27,18"   href="javascript:FG('e700ad')" />
  <area shape="rect" coords="28,10,36,18"   href="javascript:FG('e70073')" />
  <area shape="rect" coords="37,10,45,18"   href="javascript:FG('e70039')" />
  <area shape="rect" coords="46,10,54,18"   href="javascript:FG('e70000')" />
  <area shape="rect" coords="55,10,63,18"   href="javascript:FG('e73900')" />
  <area shape="rect" coords="64,10,72,18"   href="javascript:FG('e77300')" />
  <area shape="rect" coords="73,10,81,18"   href="javascript:FG('e7ad00')" />
  <area shape="rect" coords="82,10,90,18"   href="javascript:FG('e7e700')" />
  <area shape="rect" coords="91,10,99,18"   href="javascript:FG('ade700')" />
  <area shape="rect" coords="100,10,108,18" href="javascript:FG('73e700')" />
  <area shape="rect" coords="109,10,117,18" href="javascript:FG('39e700')" />
  <area shape="rect" coords="118,10,126,18" href="javascript:FG('00e700')" />
  <area shape="rect" coords="127,10,135,18" href="javascript:FG('00e739')" />
  <area shape="rect" coords="136,10,144,18" href="javascript:FG('00e773')" />
  <area shape="rect" coords="145,10,153,18" href="javascript:FG('00e7ad')" />
  <area shape="rect" coords="154,10,162,18" href="javascript:FG('00e7e7')" />
  <area shape="rect" coords="163,10,171,18" href="javascript:FG('00ade7')" />
  <area shape="rect" coords="172,1,180,18" href="javascript:FG('0073e7')" />
  <area shape="rect" coords="181,10,189,18" href="javascript:FG('0039e7')" />
  <area shape="rect" coords="190,10,198,18" href="javascript:FG('0000e7')" />
  <area shape="rect" coords="199,10,207,18" href="javascript:FG('3900e7')" />
  <area shape="rect" coords="208,10,216,18" href="javascript:FG('7300e7')" />
  <area shape="rect" coords="217,10,225,18" href="javascript:FG('ffa5ff')" />
  <area shape="rect" coords="226,10,234,18" href="javascript:FG('ffa5d6')" />
  <area shape="rect" coords="235,10,243,18" href="javascript:FG('ffa5a5')" />
  <area shape="rect" coords="244,10,252,18" href="javascript:FG('ffd6a5')" />
  <area shape="rect" coords="253,10,261,18" href="javascript:FG('ffffa5')" />
  <area shape="rect" coords="262,10,270,18" href="javascript:FG('d6ffa5')" />
  <area shape="rect" coords="271,10,279,18" href="javascript:FG('a5ffa5')" />
  <area shape="rect" coords="280,10,288,18" href="javascript:FG('a5ffd6')" />
  <area shape="rect" coords="289,10,297,18" href="javascript:FG('a5ffff')" />
  <area shape="rect" coords="298,10,306,18" href="javascript:FG('a5d6ff')" />
  <area shape="rect" coords="307,10,315,18" href="javascript:FG('a5a5ff')" />
  <area shape="rect" coords="316,10,324,18" href="javascript:FG('d6a5ff')" />
  <area shape="rect" coords="1,19,9,27"     href="javascript:FG('9400c6')" />
  <area shape="rect" coords="10,19,18,27"   href="javascript:FG('c600c6')" />
  <area shape="rect" coords="19,19,27,27"   href="javascript:FG('c60094')" />
  <area shape="rect" coords="28,19,36,27"   href="javascript:FG('c60063')" />
  <area shape="rect" coords="37,19,45,27"   href="javascript:FG('c60031')" />
  <area shape="rect" coords="46,19,54,27"   href="javascript:FG('c60000')" />
  <area shape="rect" coords="55,19,63,27"   href="javascript:FG('c63100')" />
  <area shape="rect" coords="64,19,72,27"   href="javascript:FG('c66300')" />
  <area shape="rect" coords="73,19,81,27"   href="javascript:FG('c69400')" />
  <area shape="rect" coords="82,19,90,27"   href="javascript:FG('c6c600')" />
  <area shape="rect" coords="91,19,99,27"   href="javascript:FG('94c600')" />
  <area shape="rect" coords="100,19,108,27" href="javascript:FG('63c600')" />
  <area shape="rect" coords="109,19,117,27" href="javascript:FG('31c600')" />
  <area shape="rect" coords="118,19,126,27" href="javascript:FG('00c600')" />
  <area shape="rect" coords="127,19,135,27" href="javascript:FG('00c631')" />
  <area shape="rect" coords="136,19,144,27" href="javascript:FG('00c663')" />
  <area shape="rect" coords="145,19,153,27" href="javascript:FG('00c694')" />
  <area shape="rect" coords="154,19,162,27" href="javascript:FG('00c6c6')" />
  <area shape="rect" coords="163,19,171,27" href="javascript:FG('0094c6')" />
  <area shape="rect" coords="172,19,180,27" href="javascript:FG('0063c6')" />
  <area shape="rect" coords="181,19,189,27" href="javascript:FG('0031c6')" />
  <area shape="rect" coords="190,19,198,27" href="javascript:FG('0000c6')" />
  <area shape="rect" coords="199,19,207,27" href="javascript:FG('3100c6')" />
  <area shape="rect" coords="208,19,216,27" href="javascript:FG('6300c6')" />
  <area shape="rect" coords="217,19,225,27" href="javascript:FG('ff63ff')" />
  <area shape="rect" coords="226,19,234,27" href="javascript:FG('ff63b5')" />
  <area shape="rect" coords="235,19,243,27" href="javascript:FG('ff6363')" />
  <area shape="rect" coords="244,19,252,27" href="javascript:FG('ffb563')" />
  <area shape="rect" coords="253,19,261,27" href="javascript:FG('ffff63')" />
  <area shape="rect" coords="262,19,270,27" href="javascript:FG('b5ff63')" />
  <area shape="rect" coords="271,19,279,27" href="javascript:FG('63ff63')" />
  <area shape="rect" coords="280,19,288,27" href="javascript:FG('63ffb5')" />
  <area shape="rect" coords="289,19,297,27" href="javascript:FG('63ffff')" />
  <area shape="rect" coords="298,19,306,27" href="javascript:FG('63b5ff')" />
  <area shape="rect" coords="307,19,315,27" href="javascript:FG('6363ff')" />
  <area shape="rect" coords="316,19,324,27" href="javascript:FG('b563ff')" />
  <area shape="rect" coords="1,28,9,36"     href="javascript:FG('7b00a5')" />
  <area shape="rect" coords="10,28,18,36"   href="javascript:FG('a500a5')" />
  <area shape="rect" coords="19,28,27,36"   href="javascript:FG('a5007b')" />
  <area shape="rect" coords="28,28,36,36"   href="javascript:FG('a50052')" />
  <area shape="rect" coords="37,28,45,36"   href="javascript:FG('a50029')" />
  <area shape="rect" coords="46,28,54,36"   href="javascript:FG('a50000')" />
  <area shape="rect" coords="55,28,63,36"   href="javascript:FG('a52900')" />
  <area shape="rect" coords="64,28,72,36"   href="javascript:FG('a55200')" />
  <area shape="rect" coords="73,28,81,36"   href="javascript:FG('a57b00')" />
  <area shape="rect" coords="82,28,90,36"   href="javascript:FG('a5a500')" />
  <area shape="rect" coords="91,28,99,36"   href="javascript:FG('7ba500')" />
  <area shape="rect" coords="100,28,108,36" href="javascript:FG('52a500')" />
  <area shape="rect" coords="109,28,117,36" href="javascript:FG('29a500')" />
  <area shape="rect" coords="118,28,126,36" href="javascript:FG('00a500')" />
  <area shape="rect" coords="127,28,135,36" href="javascript:FG('00a529')" />
  <area shape="rect" coords="136,28,144,36" href="javascript:FG('00a552')" />
  <area shape="rect" coords="145,28,153,36" href="javascript:FG('00a57b')" />
  <area shape="rect" coords="154,28,162,36" href="javascript:FG('00a5a5')" />
  <area shape="rect" coords="163,28,171,36" href="javascript:FG('007ba5')" />
  <area shape="rect" coords="172,28,180,36" href="javascript:FG('0052a5')" />
  <area shape="rect" coords="181,28,189,36" href="javascript:FG('0029a5')" />
  <area shape="rect" coords="190,28,198,36" href="javascript:FG('0000a5')" />
  <area shape="rect" coords="199,28,207,36" href="javascript:FG('2900a5')" />
  <area shape="rect" coords="208,28,216,36" href="javascript:FG('5200a5')" />
  <area shape="rect" coords="217,28,225,36" href="javascript:FG('ff21ff')" />
  <area shape="rect" coords="226,28,234,36" href="javascript:FG('ff2194')" />
  <area shape="rect" coords="235,28,243,36" href="javascript:FG('ff2121')" />
  <area shape="rect" coords="244,28,252,36" href="javascript:FG('ff9421')" />
  <area shape="rect" coords="253,28,261,36" href="javascript:FG('ffff21')" />
  <area shape="rect" coords="262,28,270,36" href="javascript:FG('94ff21')" />
  <area shape="rect" coords="271,28,279,36" href="javascript:FG('21ff21')" />
  <area shape="rect" coords="280,28,288,36" href="javascript:FG('21ff94')" />
  <area shape="rect" coords="289,28,297,36" href="javascript:FG('21ffff')" />
  <area shape="rect" coords="298,28,306,36" href="javascript:FG('2194ff')" />
  <area shape="rect" coords="307,28,315,36" href="javascript:FG('2121ff')" />
  <area shape="rect" coords="316,28,324,36" href="javascript:FG('9421ff')" />
  <area nohref shape="default" />
</map>


<map name="bgmap" id="map2"> 
  <area shape="rect" coords="1,1,9,9"       href="javascript:BG('c600ff')" />
  <area shape="rect" coords="10,1,18,9"     href="javascript:BG('ff00ff')" />
  <area shape="rect" coords="19,1,27,9"     href="javascript:BG('ff00c6')" />
  <area shape="rect" coords="28,1,36,9"     href="javascript:BG('ff0084')" />
  <area shape="rect" coords="37,1,45,9"     href="javascript:BG('ff0042')" />
  <area shape="rect" coords="46,1,54,9"     href="javascript:BG('ff0000')" />
  <area shape="rect" coords="55,1,63,9"     href="javascript:BG('ff4200')" />
  <area shape="rect" coords="64,1,72,9"     href="javascript:BG('ff8400')" />
  <area shape="rect" coords="73,1,81,9"     href="javascript:BG('ffc600')" />
  <area shape="rect" coords="82,1,90,9"     href="javascript:BG('ffff00')" />
  <area shape="rect" coords="91,1,99,9"     href="javascript:BG('c6ff00')" />
  <area shape="rect" coords="100,1,108,9"   href="javascript:BG('84ff00')" />
  <area shape="rect" coords="109,1,117,9"   href="javascript:BG('42ff00')" />
  <area shape="rect" coords="118,1,126,9"   href="javascript:BG('00ff00')" />
  <area shape="rect" coords="127,1,135,9"   href="javascript:BG('00ff42')" />
  <area shape="rect" coords="136,1,144,9"   href="javascript:BG('00ff84')" />
  <area shape="rect" coords="145,1,153,9"   href="javascript:BG('00ffc6')" />
  <area shape="rect" coords="154,1,162,9"   href="javascript:BG('00ffff')" />
  <area shape="rect" coords="163,1,171,9"   href="javascript:BG('00c6ff')" />
  <area shape="rect" coords="172,1,180,9"   href="javascript:BG('0084ff')" />
  <area shape="rect" coords="181,1,189,9"   href="javascript:BG('0042ff')" />
  <area shape="rect" coords="190,1,198,9"   href="javascript:BG('0000ff')" />
  <area shape="rect" coords="199,1,207,9"   href="javascript:BG('4200ff')" />
  <area shape="rect" coords="208,1,216,9"   href="javascript:BG('8400ff')" />
  <area shape="rect" coords="217,1,225,9"   href="javascript:BG('ffffff')" />
  <area shape="rect" coords="226,1,234,9"   href="javascript:BG('eaeaea')" />
  <area shape="rect" coords="235,1,243,9"   href="javascript:BG('d5d5d5')" />
  <area shape="rect" coords="244,1,252,9"   href="javascript:BG('c0c0c0')" />
  <area shape="rect" coords="253,1,261,9"   href="javascript:BG('ababab')" />
  <area shape="rect" coords="262,1,270,9"   href="javascript:BG('979797')" />
  <area shape="rect" coords="271,1,279,9"   href="javascript:BG('828282')" />
  <area shape="rect" coords="280,1,288,9"   href="javascript:BG('6d6d6d')" />
  <area shape="rect" coords="289,1,297,9"   href="javascript:BG('585858')" />
  <area shape="rect" coords="298,1,306,9"   href="javascript:BG('434343')" />
  <area shape="rect" coords="307,1,315,9"   href="javascript:BG('2e2e2e')" />
  <area shape="rect" coords="316,1,324,9"   href="javascript:BG('000000')" />
  <area shape="rect" coords="1,10,9,18"     href="javascript:BG('ad00e7')" />
  <area shape="rect" coords="10,10,18,18"   href="javascript:BG('e700e7')" />
  <area shape="rect" coords="19,10,27,18"   href="javascript:BG('e700ad')" />
  <area shape="rect" coords="28,10,36,18"   href="javascript:BG('e70073')" />
  <area shape="rect" coords="37,10,45,18"   href="javascript:BG('e70039')" />
  <area shape="rect" coords="46,10,54,18"   href="javascript:BG('e70000')" />
  <area shape="rect" coords="55,10,63,18"   href="javascript:BG('e73900')" />
  <area shape="rect" coords="64,10,72,18"   href="javascript:BG('e77300')" />
  <area shape="rect" coords="73,10,81,18"   href="javascript:BG('e7ad00')" />
  <area shape="rect" coords="82,10,90,18"   href="javascript:BG('e7e700')" />
  <area shape="rect" coords="91,10,99,18"   href="javascript:BG('ade700')" />
  <area shape="rect" coords="100,10,108,18" href="javascript:BG('73e700')" />
  <area shape="rect" coords="109,10,117,18" href="javascript:BG('39e700')" />
  <area shape="rect" coords="118,10,126,18" href="javascript:BG('00e700')" />
  <area shape="rect" coords="127,10,135,18" href="javascript:BG('00e739')" />
  <area shape="rect" coords="136,10,144,18" href="javascript:BG('00e773')" />
  <area shape="rect" coords="145,10,153,18" href="javascript:BG('00e7ad')" />
  <area shape="rect" coords="154,10,162,18" href="javascript:BG('00e7e7')" />
  <area shape="rect" coords="163,10,171,18" href="javascript:BG('00ade7')" />
  <area shape="rect" coords="172,1,180,18" href="javascript:BG('0073e7')" />
  <area shape="rect" coords="181,10,189,18" href="javascript:BG('0039e7')" />
  <area shape="rect" coords="190,10,198,18" href="javascript:BG('0000e7')" />
  <area shape="rect" coords="199,10,207,18" href="javascript:BG('3900e7')" />
  <area shape="rect" coords="208,10,216,18" href="javascript:BG('7300e7')" />
  <area shape="rect" coords="217,10,225,18" href="javascript:BG('ffa5ff')" />
  <area shape="rect" coords="226,10,234,18" href="javascript:BG('ffa5d6')" />
  <area shape="rect" coords="235,10,243,18" href="javascript:BG('ffa5a5')" />
  <area shape="rect" coords="244,10,252,18" href="javascript:BG('ffd6a5')" />
  <area shape="rect" coords="253,10,261,18" href="javascript:BG('ffffa5')" />
  <area shape="rect" coords="262,10,270,18" href="javascript:BG('d6ffa5')" />
  <area shape="rect" coords="271,10,279,18" href="javascript:BG('a5ffa5')" />
  <area shape="rect" coords="280,10,288,18" href="javascript:BG('a5ffd6')" />
  <area shape="rect" coords="289,10,297,18" href="javascript:BG('a5ffff')" />
  <area shape="rect" coords="298,10,306,18" href="javascript:BG('a5d6ff')" />
  <area shape="rect" coords="307,10,315,18" href="javascript:BG('a5a5ff')" />
  <area shape="rect" coords="316,10,324,18" href="javascript:BG('d6a5ff')" />
  <area shape="rect" coords="1,19,9,27"     href="javascript:BG('9400c6')" />
  <area shape="rect" coords="10,19,18,27"   href="javascript:BG('c600c6')" />
  <area shape="rect" coords="19,19,27,27"   href="javascript:BG('c60094')" />
  <area shape="rect" coords="28,19,36,27"   href="javascript:BG('c60063')" />
  <area shape="rect" coords="37,19,45,27"   href="javascript:BG('c60031')" />
  <area shape="rect" coords="46,19,54,27"   href="javascript:BG('c60000')" />
  <area shape="rect" coords="55,19,63,27"   href="javascript:BG('c63100')" />
  <area shape="rect" coords="64,19,72,27"   href="javascript:BG('c66300')" />
  <area shape="rect" coords="73,19,81,27"   href="javascript:BG('c69400')" />
  <area shape="rect" coords="82,19,90,27"   href="javascript:BG('c6c600')" />
  <area shape="rect" coords="91,19,99,27"   href="javascript:BG('94c600')" />
  <area shape="rect" coords="100,19,108,27" href="javascript:BG('63c600')" />
  <area shape="rect" coords="109,19,117,27" href="javascript:BG('31c600')" />
  <area shape="rect" coords="118,19,126,27" href="javascript:BG('00c600')" />
  <area shape="rect" coords="127,19,135,27" href="javascript:BG('00c631')" />
  <area shape="rect" coords="136,19,144,27" href="javascript:BG('00c663')" />
  <area shape="rect" coords="145,19,153,27" href="javascript:BG('00c694')" />
  <area shape="rect" coords="154,19,162,27" href="javascript:BG('00c6c6')" />
  <area shape="rect" coords="163,19,171,27" href="javascript:BG('0094c6')" />
  <area shape="rect" coords="172,19,180,27" href="javascript:BG('0063c6')" />
  <area shape="rect" coords="181,19,189,27" href="javascript:BG('0031c6')" />
  <area shape="rect" coords="190,19,198,27" href="javascript:BG('0000c6')" />
  <area shape="rect" coords="199,19,207,27" href="javascript:BG('3100c6')" />
  <area shape="rect" coords="208,19,216,27" href="javascript:BG('6300c6')" />
  <area shape="rect" coords="217,19,225,27" href="javascript:BG('ff63ff')" />
  <area shape="rect" coords="226,19,234,27" href="javascript:BG('ff63b5')" />
  <area shape="rect" coords="235,19,243,27" href="javascript:BG('ff6363')" />
  <area shape="rect" coords="244,19,252,27" href="javascript:BG('ffb563')" />
  <area shape="rect" coords="253,19,261,27" href="javascript:BG('ffff63')" />
  <area shape="rect" coords="262,19,270,27" href="javascript:BG('b5ff63')" />
  <area shape="rect" coords="271,19,279,27" href="javascript:BG('63ff63')" />
  <area shape="rect" coords="280,19,288,27" href="javascript:BG('63ffb5')" />
  <area shape="rect" coords="289,19,297,27" href="javascript:BG('63ffff')" />
  <area shape="rect" coords="298,19,306,27" href="javascript:BG('63b5ff')" />
  <area shape="rect" coords="307,19,315,27" href="javascript:BG('6363ff')" />
  <area shape="rect" coords="316,19,324,27" href="javascript:BG('b563ff')" />
  <area shape="rect" coords="1,28,9,36"     href="javascript:BG('7b00a5')" />
  <area shape="rect" coords="10,28,18,36"   href="javascript:BG('a500a5')" />
  <area shape="rect" coords="19,28,27,36"   href="javascript:BG('a5007b')" />
  <area shape="rect" coords="28,28,36,36"   href="javascript:BG('a50052')" />
  <area shape="rect" coords="37,28,45,36"   href="javascript:BG('a50029')" />
  <area shape="rect" coords="46,28,54,36"   href="javascript:BG('a50000')" />
  <area shape="rect" coords="55,28,63,36"   href="javascript:BG('a52900')" />
  <area shape="rect" coords="64,28,72,36"   href="javascript:BG('a55200')" />
  <area shape="rect" coords="73,28,81,36"   href="javascript:BG('a57b00')" />
  <area shape="rect" coords="82,28,90,36"   href="javascript:BG('a5a500')" />
  <area shape="rect" coords="91,28,99,36"   href="javascript:BG('7ba500')" />
  <area shape="rect" coords="100,28,108,36" href="javascript:BG('52a500')" />
  <area shape="rect" coords="109,28,117,36" href="javascript:BG('29a500')" />
  <area shape="rect" coords="118,28,126,36" href="javascript:BG('00a500')" />
  <area shape="rect" coords="127,28,135,36" href="javascript:BG('00a529')" />
  <area shape="rect" coords="136,28,144,36" href="javascript:BG('00a552')" />
  <area shape="rect" coords="145,28,153,36" href="javascript:BG('00a57b')" />
  <area shape="rect" coords="154,28,162,36" href="javascript:BG('00a5a5')" />
  <area shape="rect" coords="163,28,171,36" href="javascript:BG('007ba5')" />
  <area shape="rect" coords="172,28,180,36" href="javascript:BG('0052a5')" />
  <area shape="rect" coords="181,28,189,36" href="javascript:BG('0029a5')" />
  <area shape="rect" coords="190,28,198,36" href="javascript:BG('0000a5')" />
  <area shape="rect" coords="199,28,207,36" href="javascript:BG('2900a5')" />
  <area shape="rect" coords="208,28,216,36" href="javascript:BG('5200a5')" />
  <area shape="rect" coords="217,28,225,36" href="javascript:BG('ff21ff')" />
  <area shape="rect" coords="226,28,234,36" href="javascript:BG('ff2194')" />
  <area shape="rect" coords="235,28,243,36" href="javascript:BG('ff2121')" />
  <area shape="rect" coords="244,28,252,36" href="javascript:BG('ff9421')" />
  <area shape="rect" coords="253,28,261,36" href="javascript:BG('ffff21')" />
  <area shape="rect" coords="262,28,270,36" href="javascript:BG('94ff21')" />
  <area shape="rect" coords="271,28,279,36" href="javascript:BG('21ff21')" />
  <area shape="rect" coords="280,28,288,36" href="javascript:BG('21ff94')" />
  <area shape="rect" coords="289,28,297,36" href="javascript:BG('21ffff')" />
  <area shape="rect" coords="298,28,306,36" href="javascript:BG('2194ff')" />
  <area shape="rect" coords="307,28,315,36" href="javascript:BG('2121ff')" />
  <area shape="rect" coords="316,28,324,36" href="javascript:BG('9421ff')" />
  <area nohref shape="default" />
</map>
<?php
include INC_FOOT;
?>