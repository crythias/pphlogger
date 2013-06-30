<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: admin1.php,v 1.16 2003/06/19 20:46:11 cvs_iezzi Exp $

    admin1.php create/delete useraccounts
    --------------------------------------------------------- */

if(!defined('NO_SESS')) define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
$view = 'admin1';
include INC_HEAD;
?>
  <table align="center" width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td align="right" valign="top">
        <table cellpadding="5" cellspacing="0" class="box-table" border="0">
          <tr> 
            <td class="color3"><b><?php echo $strCreate; ?></b></td>
          </tr>
          <tr> 
            <td align="left" class="color2">
              <form action="<?php echo ADM_NEWACCOUNT; ?>" method="post">
                <input class="myInput" type="text" name="N_username" /> <?php echo $strUsername; ?><br />
                <input class="myInput" type="password" name="pw" /> <?php echo $strPassword; ?><br />
                <br />
				<?php echo $strEmail; ?> <input class="myInput" type="text" name="email" />
			  <br /><br />
			  <?php echo $strTimezone; ?>&nbsp;
			  <select class="myInput" name="N_gmt">
					<?php for ($i = -13; $i <14; $i++) {
						   echo "<option value=\"$i\"";
						   if ($admin_GMT == $i) echo " selected";
						   echo ">GMT ";
						   echo ($i >= 0) ? "+" : "";
						   echo "$i</option>\n";
					   }
					?>
			  </select>
			  &nbsp;
			  <?php echo $strUserLang;?>
                <?php 
				$select_array = directoryList(CFG_LANG_PATH, TRUE, 2);
				print "<select class=myInput name=\"N_lang\">";
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
                <textarea class="myInput" name="N_your_url" cols="50" rows="4"><?php echo $your_url; ?></textarea>
                <br />
                <br />
				<?php echo $strDemoMode; ?> <input type="checkbox" name="demo" value="1" /><br />
				ADMIN user: <input type="checkbox" name="admin" value="1" /><br />
              	<br />
                <input id="myButton" class="myInput" type="submit" value="Create" name="create_user" />
              </form>
<?php 
if (isset($usr)) $msg = 'created';
if (isset($msg)) {
	echo "<br /><br /><div align=\"left\"><b>";
	if      ($msg == 'sameuser')     echo $strAdminMsg1;
	else if ($msg == 'created')      echo $strAdminMsg2;
	else if ($msg == 'novalidemail') echo $strAdminMsg3;
	else if ($msg == 'badusername')  echo $strAdminMsg4;
	else                             echo $strAdminErr1;
	echo "</b></div><br />";
}
?>
            </td>
          </tr>
        </table>
      </td>
      <td valign="top">
        <table cellpadding="5" cellspacing="0" class="box-table" border="0">
          <tr> 
            <td class="color3"><b><?php echo $strDelUser; ?></b></td>
		  </tr>
		  <tr>
		    <td class="color2">
              <form action="delete_user.<?php echo CFG_PHPEXT; ?>" method="post">
                <?php echo $strUsername; ?>/id: 
                <input class="myInput" type="text" name="usr" />
                <?php echo $strPassword; ?>: 
                <input class="myInput" type="password" name="pw_check" />
                <br />
                <input id="myButton" class="myInput" type="submit" value="Delete" name="delete_user" />
				<input type="hidden" name="redir_view" value="<?php echo $adm_view[1]; ?>" />
              </form>
              <?php if (isset($deleted)) {
			if ($deleted) echo "<br /><br /><b>$strDelOk</b><br />";
			else echo "<br /><br /><b>$strDelErr</b><br />";
		   }
		   if (isset($wrongpw)) {
		   echo "<br /><br /><b>$strWrongPwUser</b><br />";
		   }
		?>
            </td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </td>
    </tr>
  </table>


<?php
include INC_FOOT;
?>