<?php
 /* ---------------------------------------------------------------
    YABD 0.41 - Yet Another Browser Detector
    ****************************************
    (c)2001-2002 Philip Iezzi <philippo@iezzi.ch>
	http://www.iezzi.ch
    $Id: yabd.lib.php,v 1.13 2003/01/25 12:37:47 cvs_iezzi Exp $
    
    function extract_agent returns browser, version, and system
    in an array. If there is no matching browser return the original
    string instead of an array.
    
    ---------------------------------------------------------------
    ported from StatIt 2.3d by Helge Orthmann [www.otterware.de]
    added some more browsers/systems.
    --------------------------------------------------------------- */

if (!defined('__LIB_YABD__')) {

$arr_brows = Array (
	'IE'   => 'Internet Explorer',
	'NS'   => 'Netscape',
	'MZ'   => 'Mozilla',
	'OP'   => 'Opera',
	'KONQ' => 'Konqueror',
	'OMNI' => 'OmniWeb',
	'ICAB' => 'iCab',
	'LX'   => 'Lynx',
	'NPOS' => 'NetPositive'
);

$arr_sys = Array (
	'Win'       => 'Windows',
	'Win2000'   => 'Windows 2000',
	'Win95'     => 'Windows 95',
	'Win98'     => 'Windows 98',
	'WinMe'     => 'Windows Me',
	'WinXP'     => 'Windows XP',
	'WinNT'     => 'Windows NT',
	'WinNT4.0'  => 'Windows NT4',
	'Mac'       => 'Mac OS',
	'MacOSX'    => 'Mac OS X'
);

// extract agent from $HTTP_USER_AGENT ($agt)
function extract_agent($agt) {
	
	/* Browser detection */
	if     (preg_match("/(opera) ([0-9]{1,2}.[0-9]{1,3}){0,1}/i",$agt,$st_regs) ||
	        preg_match("/(opera)([0-9]{1,2}.[0-9]{1,3}){0,1}/i",$agt,$st_regs))             {$st_brows = "OP";      $fl_ver = $st_regs[2];}
	else if(preg_match("/(konqueror)\/([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs) ||
	        preg_match("/(konqueror)\/([0-9]{1,2})/i",$agt,$st_regs))                         {$st_brows = "KONQ";    $fl_ver = $st_regs[2]; $st_sys = "Linux";}
	else if(preg_match("/(NetPositive)\/([0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2})/i",$agt,$st_regs)) {$st_brows = "NPOS";    $st_ver = $st_regs[2];}
	else if(preg_match("/(iCab)\/([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                   {$st_brows = "ICAB";    $fl_ver = $st_regs[2];}
	else if(preg_match("/(lynx)\/([0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2})/i",$agt,$st_regs) )       {$st_brows = "LX";      $st_ver = $st_regs[2];}
	else if(preg_match("/(links) \(([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                {$st_brows = "Links";   $fl_ver = $st_regs[2];}
	else if(preg_match("/(omniweb\/)([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                {$st_brows = "OMNI";    $fl_ver = $st_regs[2];}
	else if(preg_match("/(webtv\/)([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                  {$st_brows = "WebTV";   $fl_ver = $st_regs[2];}
	else if(preg_match("/(msie) ([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                   {$st_brows = "IE";      $fl_ver = $st_regs[2];}
	else if(preg_match("/(Netscape)\/([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))               {$st_brows = "NS";      $fl_ver = $st_regs[2];}
	else if(preg_match("/(netscape6)\/(6.[0-9]{1,3})/i",$agt,$st_regs))                       {$st_brows = "NS";      $fl_ver = $st_regs[2];}
	else if(preg_match("/Mozilla\/5/i",$agt) &&
	        preg_match("/(rv:)([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                     {$st_brows = "MZ";      $fl_ver = $st_regs[2];}
	else if(preg_match("/mozilla\/5/i",$agt))                                                 {$st_brows = "NS";      $fl_ver = '6';        }
	else if(preg_match("/(mozilla)\/([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                {$st_brows = "NS";      $fl_ver = $st_regs[2];}
	else if(preg_match("/w3m/i",$agt))                                                       {$st_brows = "w3m";                           }
	else if(preg_match("/(scooter)-([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))                {$st_brows = "Scooter"; $fl_ver = $st_regs[2];}
	else if(preg_match("/(w3c_validator)\/([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))          {$st_brows = "W3C";     $fl_ver = $st_regs[2];}
	else if(preg_match("/(googlebot)\/([0-9]{1,2}.[0-9]{1,3})/i",$agt,$st_regs))              {$st_brows = "Google";  $fl_ver = $st_regs[2];}
	else {$st_brows = '';}
	
	
	/* System detection */
	if     (preg_match("/linux/i",$agt))                                                     {$st_sys = "Linux";}
	else if(preg_match("/Win 9x 4.90/i",$agt))                                               {$st_sys = "WinMe";}
	else if(preg_match("/win32/i",$agt))                                                     {$st_sys = "Win";}
	else if(preg_match("/windows 2000/i",$agt))                                              {$st_sys = "Win2000";}
	else if((preg_match("/(win)([9][5,8])/i",$agt,$st_regs)) || 
	        (preg_match("/(windows) ([9][5,8])/i",$agt,$st_regs)))                           {$st_sys = "Win".$st_regs[2];}
	else if(preg_match("/(windows nt)( ){0,1}(5.0)/i",$agt))                                 {$st_sys = "Win2000";}
	else if(preg_match("/(windows nt)( ){0,1}(5.1)/i",$agt) ||
	        preg_match("/windows XP/i",$agt))                                                {$st_sys = "WinXP";}
	else if(preg_match("/(winnt)([0-9]{1,2}.[0-9]{1,2}){0,1}/i",$agt,$st_regs))              {$st_sys = "WinNT".$st_regs[2];}
	else if(preg_match("/(windows nt)( ){0,1}([0-9]{1,2}.[0-9]{1,2}){0,1}/i",$agt,$st_regs)) {$st_sys = "WinNT".$st_regs[3];}
	else if(preg_match("/PPC Mac OS X/i",$agt))                                              {$st_sys = "MacOSX";}
	else if(preg_match("/PPC/i",$agt) || preg_match("/Mac_PowerPC/i",$agt))                          {$st_sys = "MacPPC";}
	else if(preg_match("/mac/i",$agt))                                                       {$st_sys = "Mac";}
	else if(preg_match("/(sunos) ([0-9]{1,2}.[0-9]{1,2}){0,1}/i",$agt,$st_regs))             {$st_sys = "SunOS".$st_regs[2];}
	else if(preg_match("/(beos) r([0-9]{1,2}.[0-9]{1,2}){0,1}/i",$agt,$st_regs))             {$st_sys = "BeOS".$st_regs[2];}
	else if(preg_match("/freebsd/i",$agt))                                                   {$st_sys = "FreeBSD";}
	else if(preg_match("/openbsd/i",$agt))                                                   {$st_sys = "OpenBSD";}
	else if(preg_match("/irix/i",$agt))                                                      {$st_sys = "IRIX";}
	else if(preg_match("/os/2/i",$agt))                                                      {$st_sys = "OS/2";}
	else if(preg_match("/plan9/i",$agt))                                                     {$st_sys = "Plan9";}
	else if(preg_match("/unix/i",$agt) || preg_match("hp-ux",$agt) )                              {$st_sys = "Unix";}
	else if(preg_match("/osf/i",$agt))                                                       {$st_sys = "OSF";}
	else if(preg_match("/X11/i",$agt) && !isset($st_sys))                                    {$st_sys = "Unix";}
	else {$st_sys = '';}
	
	if(!isset($st_ver)) $st_ver = '';
	if(!isset($fl_ver)) $fl_ver = 0;
	if($st_ver != '' && $fl_ver == 0) $fl_ver = (float) $st_ver;
	
	if ($st_brows != '' || $st_sys != '') {
		$new_agt[0] = $st_brows;        // browser
		$new_agt[1] = (float) $fl_ver;  // version as float
		$new_agt[2] = $st_ver;          // version as string
		$new_agt[3] = $st_sys;          // system
	} else {
		$new_agt    = $agt;
	}
	
	return($new_agt);
}

define('__LIB_YABD__', 1);
}
?>

