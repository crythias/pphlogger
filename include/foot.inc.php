<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: foot.inc.php,v 1.13 2003/06/19 20:44:33 cvs_iezzi Exp $

    headfoot.inc.php contains the main site-structure
    --------------------------------------------------------- */

@mysqli_close();

if(!defined('NO_HEADFOOT')) { ?>
	<p>&nbsp;</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr valign="bottom"> 
    <td height="10"> 
      <table  width="100%" cellspacing="0" cellpadding="0" bgcolor="black" border="0">
        <tr> 
          <td> 
            <table cellspacing="1" cellpadding="2" bgcolor="black" border="0" width="100%">
              <tr align="center">
<?php include INC_HEADFOOTMENU; ?>
			  </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr valign="top"> 
    <td class="color1" height="40"> 
      <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td align="center" class="color1">
            <p>powered by <a class="color1" href="http://www.phpee.com/">POWER PHLOGGER <?php echo PPHLOGGER_VERSION;?></a>&nbsp;&copy;2000-2003 Philip Iezzi<br />
            hosted by: <a class="color1" href="<?php echo emailEncode('mailto:'.$admin_mail, 10); ?>"><?php echo emailEncode($admin_mail, 10); ?></a>
<?php if(defined('DEBUG_MODE')) echo ' ['.(getmicrotime()-T1).' s]'; ?>
			</p>
          </td>
        </tr>
      </table>
<?php
} // if(!defined('NO_HEADFOOT'))
?>
    </td>
  </tr>
</table>
</body>
</html>