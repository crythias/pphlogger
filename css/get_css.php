<?php
// $Id: get_css.php,v 1.9 2003/10/31 13:37:46 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
if(isset($this_css)) $cssid = $this_css;
include INC_GETCSSCOLORS;
include INC_COLORARRAY;

/*
 * load the common css file and replace all %...% strings with its color-values
 */
$css_file = 'common.css';
$css_style = fread($fp = fopen($css_file, 'r'), filesize($css_file));
fclose($fp);
//var_dump($css_style);die;
while(preg_match('/(@.+@)/U',$css_style, $matches) == TRUE){
	$matchvar = str_replace('@','',$matches[1]);
	$css_style = str_replace($matches[1], getHEX($$matchvar), $css_style);
}


header("Content-type: text/css");
header("Pragma: no-cache");
header("Expires: 0");
print $css_style;
?>