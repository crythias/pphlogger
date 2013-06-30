<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: image_txt.php,v 1.7 2003/06/19 20:43:17 cvs_iezzi Exp $

    image_txt.php

    prints out your counter image with the font-settings of
    your userprofile.
    If show_txt is specified, it will be printed instead of 
    your counter value.

    <img src="image_txt.php?id=[username]">
    <img src="image_txt.php?id=[username]&show_txt=sometext">
    --------------------------------------------------------- */

define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_GETUSERDATA;

if(isset($ttf_demo)) $ttf_file = $ttf_demo;

$showme   = 1;
$visible  = 1;

$bg_c      = '#'.$color_bg;
$fg_c      = '#'.$color_inv;
$bg_trans  = 1;
$ttf_size  = $ttf_demo_size;

include MOD_IMAGEGEN;
?>