<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: index.php,v 1.21 2003/10/31 15:32:06 cvs_iezzi Exp $

    index.php Standard login page of PowerPhlogger
    --------------------------------------------------------- */

include "main_location.inc";

if (defined('PHP_SESS')) {
	/* As of php 4.3.3 you get a notice when you start an session twice.
	 * Only start session if it doesn't exist yet.
	 */
	if(!session_id()){
		session_start();
	}
	session_destroy();
} else {
	setcookie("username", "", time() - 3600);
	setcookie("password", "", time() - 3600);
}

$view = 'loginout'; $setfocus = 'login_form.usr';
include INC_HEAD;
?>
<p>&nbsp;</p>
<p>&nbsp;</p>

  <table align="center" cellpadding="3" cellspacing="0" class="color2" border="0">
   <tr>
    <td class="color3"><b>PPhlogger login</b></td>
   </tr>
   <tr>
   	<td>
<?php
if      (isset($wrongpw)) echo $strMsgWrongPw;
else if (isset($newpw))   echo $strMsgNewPw;
else                      echo $strEnterUsernPw.':<br />';

if ($md5form) {
?>
<script language="JavaScript" type="text/javascript"><!--
var html = "<form action=\"login.<?php echo CFG_PHPEXT; ?>\" name=\"login_form\" method=\"post\" onSubmit=\"return validateForm(this)\">\n" +
           "<input type=\"hidden\" name=\"js_onoff\" value=\"on\" />\n" +
           "<input type=\"hidden\" name=\"md5_pw\" value=\"\" />\n" +
           "<label for=\"username\" accesskey=\"U\"><?php echo $strUsername; ?>: </label>\n" +
           "<input size=\"15\" id=\"username\" class=\"myInput\" type=\"text\" name=\"usr\" tabindex=\"1\" />\n" +
           "<label for=\"password\" accesskey=\"P\"><?php echo $strPassword; ?>: </label>\n" +
           "<input size=\"8\" id=\"password\" class=\"myInput\" type=\"password\" name=\"pw\" tabindex=\"2\" />&nbsp;&nbsp;\n" +
           "<input class=\"myInput\" type=\"submit\" value=\"Login\" name=\"submit\" />\n" +
           "</form>\n";
document.open();
document.write(html);
document.close();
//-->
</script>
<noscript>
<?php
} // if (md5form)
?>
<form action="login.<?php echo CFG_PHPEXT; ?>" name="login_form" method="post">
<label for="username" accesskey="U"><?php echo $strUsername; ?>: </label>
<input size="15" id="username" class="myInput" type="text" name="usr" tabindex="1" />
<label for="password" accesskey="P"><?php echo $strPassword; ?>: </label>
<input size="8" id="password" class="myInput" type="password" name="pw" tabindex="2" />&nbsp;&nbsp;
<input class="myInput" type="submit" value="Login" name="submit" />
</form>
<?php
if ($md5form) echo '</noscript>';
?>
		<br /><br />
		<?php echo $strLostPw; ?> <a href="dspNewPw.<?php echo CFG_PHPEXT; ?>"><?php echo $strLinkNewPw; ?></a>
	</td>
   </tr>
  </table>
<p>&nbsp;</p>
<?php
// hide the signup-section if signup_ok = false (set this in /admin/setup.php)
if ($signup_ok) {
?>
  <table cellpadding="3" cellspacing="0" class="color2" border="0" align="center">
   <tr>
    <td class="color3"><b><?php echo $strGetFreeAccount; ?></b></td>
   </tr>
   <tr>
    <td><a href="dspSignup.<?php echo CFG_PHPEXT; ?>"><?php echo $strSignUpUseracc; ?></a></td>
  </tr>
  </table>
<?php
} // if ($signup_ok)
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
include INC_FOOT;
?>