<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: head.inc.php,v 1.28 2003/06/19 20:44:33 cvs_iezzi Exp $

    head.inc.php contains the main header
    --------------------------------------------------------- */


include INC_HEADSTUFF;

if(!isset($setfocus)) $setfocus = false;
header("Pragma: no-cache");
header("Expires: 1");
if($strCharset == '') $strCharset = 'iso-8859-1';
header('Content-Type: text/html; charset=' . $strCharset);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>PowerPhlogger <?php echo PPHLOGGER_VERSION." - ".$view ?></title>
<meta name="Copyright" content="2000-2003, PHPEE.COM" />
<meta name="AUTHOR" content="Philip IEZZI" />
<meta name="description" content="Power Phlogger - log and counter hosting tool" />
<meta name="PHP Version" content="<?php echo phpversion(); ?>" />
<meta name="MYSQL Version" content="<?php echo mysqlversion(); ?>" />
<meta name="Server Software" content="<?php echo @$SERVER["SERVER_SOFTWARE"]; ?>" />
<meta name="keywords" content="PHP, Phlogger, Power Phlogger, PPhlogger, Philip, Philip Iezzi, Counter, visitor tracking, visitor analysis, web statistics, Free-counter, free counter, script, counter hosting, opensource, open-source, gnu, GPL, website statistics, statistics, php-scripts, php-script, tracker, logger, log, track, Zurich, Z&uuml;rich, Fifi, Pipo, Philippo, freelogger, freelogger.com, logging tool, Apache, Linux, mySQL, free, Rocco, soraxis" />
<link href="<?php echo CSS_GETCSS; ?>?this_css=<?php echo $cssid; ?>" rel="STYLESHEET" type="text/css" />
<?php
if (SOLID_BORDER_CSS) {
	echo "<style type=\"text/css\">\n";
	echo "        .myInput { border: solid 1px #000000; }\n";
	echo "        HR { border: solid 1px;  }\n";
	echo "</style>\n";
}
?>    
<script language="JavaScript" type="text/javascript" src="<?php echo LIB_FUNCTIONSJS; ?>"> </script>
<?php
if ($md5form) {
	echo "<script language=\"JavaScript\" type=\"text/javascript\" src=\"".INC_MD5JS."\"> </script>";
}

if ($setfocus) {
?>
<script language="Javascript" type="text/javascript">
<!--
function setfocus() { document.<?php echo $setfocus; ?>.focus(); }
//-->
</script>
<?php
}
?>
</head>

<body<?php if ($setfocus) echo " onLoad=\"setfocus()\""; ?> leftmargin="0" rightmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!--
<?php readfile(INC_COPYRIGHT); ?>
-->

<!-- current version: <?php echo PPHLOGGER_VERSION; ?> build date: <?php echo $build_date; ?>-->
<a name="topofpage"></a>
<?php if(!defined('NO_HEADFOOT')) { ?>
<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td class="color1" valign="top" height="70">
      <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td class="color1">
            <h3>POWER PHLOGGER <?php echo PPHLOGGER_VERSION; ?> - <?php echo ($view == 'setup') ? 'SETUP' : 'phpee.com'; ?></h3>
            <p>
              <?php
if (defined('__GOT_USERDATA__')){
	$urls = explode("\n", $your_url);
	$cnt_urls = count($urls);
	for ($i = 0; $i < $cnt_urls; $i++) {
		if ($i == 0)  echo $strTrackedSite."&nbsp;<a class=\"color1\" href=\"".trim($urls[$i])."\">".cutHTTP($urls[$i])."</a>";
		else echo " [&nbsp;<a class=\"color1\" href=\"".trim($urls[$i])."\">".cutHTTP($urls[$i])."</a>&nbsp;]";
	}
} else {
	if ($view != 'setup') echo $strSlogan;
}
	  ?>
            </p>
          </td>
          <td align="right" valign="top"> 
<?php
/* current date&time table */
if ($view != 'setup') { ?>
            <table  width="60%" cellspacing="0" cellpadding="0" bgcolor="<?php echo getHEX($color_1t); ?>" border="0">
              <tr> 
                <td> 
                  <table cellspacing="1" cellpadding="2" bgcolor="<?php echo getHEX($color_1t); ?>" border="0" width="100%">
                    <tr> 
                      <td class="color1" align="center" nowrap="nowrap"> 
<?php
	echo $strCurrentTime.'&nbsp;';
	if (isset($gmt)) {
		echo ($gmt>=0) ? "[ GMT +".$gmt." ]" : "[ GMT ".$gmt." ]";
	} else {
		if (isset($server_GMT)) {
			echo ($server_GMT>=0) ? "[ GMT +".$server_GMT." ]" : "[ GMT ".$server_GMT." ]";
		}
	}
?>
					  <br /><b><?php echo  $date_current; ?></b>
                      </td>
                    </tr>
					<?php if ($hits) { ?>
                    <tr>
                      <td class="color1" align="center"><?php echo $strYourHits; ?>&nbsp;<b><?php echo  $hits; ?></b></td>
                    </tr>
					<?php } ?>
                  </table>
                </td>
              </tr>
            </table>
<?php
} // if $view != 'setup'
?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr valign="top">
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
    <td> 
      <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr> 
          <td> 
<?php } else { // if(!defined('NO_HEADFOOT')
	echo "<table cellspacing=\"20\" cellpadding=\"15\" width=\"100%\"><tr><td class=\"color1\">";
}
?>