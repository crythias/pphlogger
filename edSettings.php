<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: edSettings.php,v 1.20 2003/06/19 20:47:57 cvs_iezzi Exp $

    user settings
    --------------------------------------------------------- */

include "main_location.inc";
include INC_GETUSERDATA;
$view = 'settings';
include INC_HEAD;

if (isset($myloglim)) $loglim = $myloglim;
$extended=TRUE;
?> 
<table align="center" cellpadding="10">
  <tr> 
    <td valign="top" align="center"> 
      <!-- SET COOKIE -->
      <a name="mycookie"></a> 
      <table cellpadding="2" cellspacing="0" class="color2" border="0">
        <tr> 
          <td class="color3"><b>cookie</b></td>
        </tr>
        <tr> 
          <td> 
            <?php echo $strCookieTxt; ?>
            <br />
            <a href="cookie.<?php echo CFG_PHPEXT; ?>?cookie_switch=on"> 
            <?php echo $strCountMe; ?>
            </a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="cookie.<?php echo CFG_PHPEXT; ?>?cookie_switch=off"> 
            <?php echo $strDontCountMe; ?>
            </a>&nbsp;&nbsp;<br />
            <br />
            <?php echo $strCurrConfig; ?>
            &nbsp; 
            <?php
		if (isset($$cookie_phloff)) echo "<b>".$strDisabled."</b>";
		else echo "<b>".$strEnabled."</b>";
	?>
          </td>
        </tr>
      </table>
      <?php
if ($guest) {
	echo "<br /><br /><a class=\"invertLink\">as guest-user you are not allowed<br />to set cookies!!!</a>";
}
?>
    </td>
    <!-- SET HITS -->
    <td valign="top" align="center"> <a name="sethits"></a> 
      <table cellpadding="2" cellspacing="0" class="color2" border="0">
        <tr> 
          <td class="color3"><b><?php echo $strResetHits; ?></b></td>
        </tr>
        <tr> 
          <td> 
            <?php echo $strResHitsTxt; ?>
            <br />
            <div align="center">
              <form action="<?php echo ACT_CHANGEHITS; ?>" method="post">
                <input type="hidden" name="id" value=<?php echo $id;?> />
                <input size="4" class="myInput" type="text" name="new_hits" />
                &nbsp;&nbsp; 
                <input class="myInput" type="submit" name="submit_hits" value="reset" />
              </form>
            </div>
          </td>
        </tr>
      </table>
<?php
if ($guest) {
	echo "<br /><br /><a class=\"invertLink\">as guest-user you are not allowed<br />to reset hits!!!</a>";
}
?>
    </td>
    <td valign="top" rowspan="3">
	<form action="<?php echo USR_EDUSER; ?>" method="post">
      <table cellpadding="2" cellspacing="0" class="color2" border="0">
        <tr> 
          <td class="color3"><b>IP <?php echo $strBlocking; ?></b></td>
        </tr>
        <tr> 
          <td align="right">
            <textarea class="myInput" name="N_ipblock" cols="22" rows="5"><?php echo $ipblock; ?></textarea>
            <br />
          </td>
        </tr>
        <tr> 
          <td class="color3"><b><?php echo $strReferrer.' '.$strBlocking; ?></b></td>
        </tr>
        <tr> 
          <td align="right">
            <textarea class="myInput" name="N_refblock" cols="22" rows="5"><?php echo $refblock; ?></textarea>
            <br />
          </td>
        </tr>
        <tr> 
          <td class="color3"><b><?php echo $strOwnReferrers; ?></b></td>
        </tr>
        <tr> 
          <td align="right">
            <textarea class="myInput" name="N_ownref" cols="22" rows="5"><?php echo $ownref; ?></textarea>
            <br />
          </td>
        </tr>
        <tr> 
          <td class="color3"><b>index.* --> /</b></td>
        </tr>
        <tr> 
          <td align="right">
            <textarea class="myInput" name="N_index_files" cols="22" rows="5"><?php echo $index_files; ?></textarea>
            <br />
          </td>
        </tr>
        <tr> 
          <td class="color3"><b><?php echo $strShortQuery; ?></b></td>
        </tr>
        <tr> 
          <td align="right">
            <textarea class="myInput" name="N_qstr" cols="22" rows="5"><?php echo $qstr; ?></textarea>
            <br />
            <input class="myInput" type="submit" value=" <?php echo $strSave; ?> " name="settings_update" />
          </td>
        </tr>
      </table>
	</form>
      <br />
    </td>
  </tr>
  <tr> 
    <td valign="top" colspan="2"> 
      <!-- HTML CODE -->
      <a name="htmlcode"></a> 
      <table cellpadding="2" cellspacing="0" class="color2" border="0" align="center">
        <tr> 
          <td class="color3"><b><?php echo $strHtmlCode; ?></b></td>
        </tr>
        <tr> 
          <td> 
            <?php echo $strAddHtmlCode.' [ '.$primary_url.' ]'; ?>
            <br />
            <br />
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
            <br />
            <br />
            <?php echo $strJsFile ?>
            <br />
            <a href="<?php echo PPHLOGGER_DYNJS.'?id='.$id; ?>">pphlogger.js</a> 
          </td>
        </tr>
      </table>
    </td>
  </tr>
<?php
if($mysqldump_on) {
?>
  <tr> 
    <td valign="top" align="center">
      <!-- MYSQL DUMP -->
      <a name="mysqldump"></a> 
      <form method="post" action="<?php echo MOD_DBDUMP; ?>">
        <table cellpadding="2" cellspacing="0" class="color2" border="0" align="center">
          <tr> 
            <td class="color3" colspan="3"><b><?php echo $strMysqlDump; ?></b></td>
          </tr>
          <tr> 
            <td> 
              <input type="radio" name="what" value="structure" checked="checked" />
              <?php echo $strStructOnly; ?>
            </td>
            <td> 
              <input type="checkbox" name="drop" value="1" />
              <?php echo $strAddDropTbl; ?>
            </td>
            <td> 
              <input class="myInput" type="submit" value="  view  " name="submit" />
            </td>
          </tr>
          <tr> 
            <td> 
              <input type="radio" name="what" value="data" />
              <?php echo $strStructData; ?>
            </td>
            <td colspan="2"> 
              <input type="checkbox" name="asfile" value="sendit" />
              <?php echo $strSend; ?>
            </td>
          </tr>
          <tr> 
            <td>&nbsp; </td>
            <td colspan="2"> 
              <input type="checkbox" name="showcolumns" value="yes" />
              <?php echo $strComplInserts; ?>
            </td>
          </tr>
        </table>
      </form>
    </td>
	<td valign="top" align="center">
<?php
/* -------------------------------- User's table size -------------------------------- */
$usr_tblsize = getSerializedCache('usr_tblsize', $stats_cache);
$usr_tblsize = @$usr_tblsize[1];
if (!$usr_tblsize) {
	calcTableSize($id);
	$usr_tblsize = getSerializedCache('usr_tblsize');
	$usr_tblsize = @$usr_tblsize[1];
}
if (!empty($usr_tblsize)) {
	$ArrUsrTblsize[0] = Array($strDatabase.' '.$strSize);
	$ArrUsrTblsize[1] = Array(' colspan="2"');
	$ArrUsrTblsize[2] = Array('', ' nowrap="nowrap" align="right"');
	$i = 3; $cnt_usrtblsize = count($usr_tblsize);
	$usrtblTotal = 0;
	for ($j = 0; $j < $cnt_usrtblsize; $j++) {
		$ArrUsrTblsize[$i][0] = $usr_tblsize[$j][0];
		$ArrUsrTblsize[$i][1] = '<b>'.formatPrettyByte($usr_tblsize[$j][1]).'</b>';
		$usrtblTotal += $usr_tblsize[$j][1];
		$i++;
	}
	$ArrUsrTblsize[$i][0] = '&nbsp;';
	$ArrUsrTblsize[$i][1] = '&nbsp;';
	$i++;
	$ArrUsrTblsize[$i][0] = '<b>'.$strTotal.'</b>';
	$ArrUsrTblsize[$i][1] = '<b>'.formatPrettyByte($usrtblTotal).'</b>';
	echo htmlStatTable($ArrUsrTblsize);
}
?>

	</td>
  </tr>
<?php
} else {
	// if mysqldump_on is disabled:
	echo '<tr><td valign="top" colspan="3">&nbsp;</td></tr>';
}
?>
</table>

<?php
include INC_FOOT;
?>
