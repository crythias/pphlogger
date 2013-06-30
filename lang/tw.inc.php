<?php
/* Traditional Chinese language localization
 *
 * $Id: tw.inc.php,v 1.37 2002/10/28 17:14:44 cvs_iezzi Exp $
 * credits to: Danny Lin
 */


$strCharset          = "big5";
$strThousandSep      = ",";
$strDate             = "Y/m/d";
$strDate2            = "M d, Y";
$strNumThousandsSep  = ',';
$strNumDecimalSep    = '.';
$strByteUnits        = array('Bytes', 'KB', 'MB', 'GB');

$strOn               = "�}";
$strOff              = "��";
$strEnable           = "�ҥ�";
$strEnabled          = "�w�ҥ�";
$strDisable          = "����";
$strDisabled         = "�w����";
$strDellog           = "�R���O��";
$strTopOfPage        = "������";
$strTotal            = "�`�y�q";
$strHits             = "�H��";
$strUniqs            = "uniqs";
$strUniq             = "uniq";
$strPageimpressions  = "pageimpressions";
$strDomains          = "����";
$strConfiguration    = "configuration";
$strCurrConfig       = "�ثe�]�w:";
$strUsername         = "�n�J�W��";
$strPassword         = "�q���K�X";
$strDelete           = "�R��";
$strUser             = "�ϥΪ�";
$strUseraccount      = "useraccount";
$strUseraccounts     = "useraccounts";
$strFrom             = "�Ӧ�";
$strTo               = "��";
$strTo2              = "��";
$strEdit             = "edit";
$strSet              = "set";
$strMove             = "move";
$strDefault          = "default";
$strCreateNew        = "create new";
$strSave             = "save";
$strUnknown          = "unknown";
$strUndefined        = "undefined";
$strCache            = "cache";
$strSeconds          = "seconds";
$strDatabase         = "database";
$strTable            = "table";
$strCalc             = "calc";
$strStep             = "step";
$strSystem           = "system";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT - 12 �p��) �J���¦��J�q, �ʥ[�L�q";
$loca['tz']['-11']   = "(GMT - 11 �p��) ���~�q, �ļ���";
$loca['tz']['-10']   = "(GMT - 10 �p��) �L�¦i";
$loca['tz']['-9']    = "(GMT - 9 �p��) ���Դ��[";
$loca['tz']['-8']    = "(GMT - 8 �p��) �ӥ��v�зǮɶ� (���� &amp; �[���j)";
$loca['tz']['-7']    = "(GMT - 7 �p��) �s�ϼзǮɶ� (���� &amp; �[���j)";
$loca['tz']['-6']    = "(GMT - 6 �p��) �����зǮɶ� (���� &amp; �[���j), �������";
$loca['tz']['-5']    = "(GMT - 5 �p��) �F���зǮɶ� (���� &amp; �[���j), �i���j, �Q��, ��h";
$loca['tz']['-4']    = "(GMT - 4 �p��) �j��v�зǮɶ� (�[���j), �d�ԥd��, �Ԥڴ�";
$loca['tz']['-3.5']  = "(GMT - 3.5 �p��) �ê���";
$loca['tz']['-3']    = "(GMT - 3 �p��) �ڦ�, ���y�մ���Q��, ��v��, �֧J���s�q";
$loca['tz']['-2']    = "(GMT - 2 �p��) ���j��v, �ȴ˪Q�q, �t���Ǯ��q";
$loca['tz']['-1']    = "(GMT - 1 �p��) �ȳt���s�q, ���w��";
$loca['tz']['0']     = "(GMT) �d�ĥ����d, ���f�L, �R�B��, �۴�, ������, �Xù����";
$loca['tz']['1']     = "(GMT + 1 �p��) �f�L, ���|�뺸, ��������, ���w��, �ھ�, ù��";
$loca['tz']['2']     = "(GMT + 2 �p��) �[������, �n�D, �بF";
$loca['tz']['3']     = "(GMT + 3 �p��) �ڮ�F, �Q���w, ������, �`����";
$loca['tz']['3.5']   = "(GMT + 3.5 �p��) �w����";
$loca['tz']['4']     = "(GMT + 4 �p��) �����F��, �ڮw, �����دS, �Ĥ�Q��";
$loca['tz']['4.5']   = "(GMT + 4.5 �p��) �إ���";
$loca['tz']['5']     = "(GMT + 5 �p��) ��d�S�L��, �촵�����ڼw, �ة԰E, �𤰤z";
$loca['tz']['5.5']   = "(GMT + 5.5 �p��) �s�R, �[���U��, ���w�Դ�, �s�w��";
$loca['tz']['6']     = "(GMT + 6 �p��) ���X��, �i�۩Y, �N�N��";
$loca['tz']['6.5']   = "(GMT + 6.5 �p��) ����";
$loca['tz']['7']     = "(GMT + 7 �p��) �Ҩ�, �e��, ���[�F";
$loca['tz']['8']     = "(GMT + 8 �p��) �_��, ����, �B��, �s�[�Y, �x�_";
$loca['tz']['9']     = "(GMT + 9 �p��) �j��, ���E, �~��, �F��, �Ȯw���J";
$loca['tz']['9.5']   = "(GMT + 9.5 �p��) ���o�p�w, �F����";
$loca['tz']['10']    = "(GMT + 10 �p��) ������, �ڥ��s�X����, ����, ���ѫ�";
$loca['tz']['11']    = "(GMT + 11 �p��) ���[��, �s�d���h����, ��ù���s�q";
$loca['tz']['12']    = "(GMT + 12 �p��) ���J��, ���F�y, ����, ���к��s�q";

// Language selection
$loca['lang']['bh']  = "Bosnian";
$loca['lang']['cn']  = "Chinese Simplified";
$loca['lang']['de']  = "German";
$loca['lang']['dk']  = "Danish";
$loca['lang']['en']  = "English";
$loca['lang']['es']  = "Spanish";
$loca['lang']['fr']  = "French";
$loca['lang']['gr']  = "Greek";
$loca['lang']['it']  = "Italian";
$loca['lang']['jp']  = "Japanese";
$loca['lang']['lv']  = "Latvian";
$loca['lang']['nl']  = "Dutch";
$loca['lang']['no']  = "Norwegian";
$loca['lang']['pl']  = "Polish";
$loca['lang']['po']  = "Brazilian Portugese";
$loca['lang']['ro']  = "Romanian";
$loca['lang']['ru']  = "Russian";
$loca['lang']['se']  = "Swedish";
$loca['lang']['tr']  = "Turkish";
$loca['lang']['tw']  = "Traditional Chinese";

// setup.php
$strSetup                                         = "Setup";
$loca['setup']['header1']                         = "Admin Settings";
$loca['setup']['header2']                         = "General Settings";
$loca['setup']['header3']                         = "Special Settings";
$loca['setup']['header4']                         = "Graphic Settings";
$loca['setup']['header5']                         = "Log Limits / Auto Deletion";
$loca['setup']['header6']                         = "Display Limits";
$loca['setup']['header7']                         = "Display Settings";
$loca['setup']['intro_txt']                       = "This script will help you set up the variables that you need to start. You will be taken through a variety of pages. Each page sets a different portion of the script.";
$loca['setup']['step0_txt']                       = "<b>License</b> -- Please read through the GNU General Public License. PowerPhlogger is developed as free software, but there are certain requirements for distributing and editing.";
$loca['setup']['step1_txt']                       = "<b>general settings</b> -- Please check all fields on this page and make sure you enter the correct information. If you're not sure, just keep the default values.";
$loca['setup']['step2_txt']                       = "<b>optional settings</b> -- For most of these settings you should keep the default value. Only edit them if you're sure about it.";
$loca['setup']['step3_txt_a']                     = "<b>setup successfully</b> -- you can now start to work with PowerPhlogger.<br /><br />Please don't forget to rename your /admin directory and secure it with htaccess.<br />Please carefully read the Documentation for further information";
$loca['setup']['step3_txt_b']                     = "you can now start setting up user-accounts";

$loca['setup']['pphlogger_location']['title']     = "PowerPhlogger Location";
$loca['setup']['pphlogger_location']['descr']     = "URL of your PowerPhlogger root directory";
$loca['setup']['admin_mail']['title']             = "Admin Email Adress";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "Admin Name";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "Administrator Password";
$loca['setup']['admin_pw']['descr']               = "Used to delete user-accounts";
$loca['setup']['server_GMT']['title']             = "System Timezone";
$loca['setup']['server_GMT']['descr']             = "timezone where your server is located";
$loca['setup']['admin_GMT']['title']              = "Administrator Timezone";
$loca['setup']['admin_GMT']['descr']              = "timezone where you are located";
$loca['setup']['default_lang']['title']           = "Default Language";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "Default Style Sheet";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "Enable User Self-Signup";
$loca['setup']['signup_ok']['descr']              = "Do you want to make the Sign-Up page available for users to sign-up for a useraccount?";
$loca['setup']['master_timeout']['title']         = "Userlog Timeout";
$loca['setup']['master_timeout']['descr']         = "[in sec, default = 30min = 1800]";
$loca['setup']['traceroute']['title']             = "Traceroute URL";
$loca['setup']['traceroute']['descr']             = "If you know another service that lets you do tracerouts, enter it here.";
$loca['setup']['pass_length']['title']            = "User Password Length";
$loca['setup']['pass_length']['descr']            = "The length of the generated password (do NOT set this higher than 15!)";
$loca['setup']['pw_privacy']['title']             = "Password Privacy";
$loca['setup']['pw_privacy']['descr']             = "If you set pw_privacy to false, a BCC: of the plain-text password confirmation email will be sent to the admin's email-address. Out of privacy reasons, default is set to true.";
$loca['setup']['cache_calendar']['title']         = "Calendar Cache";
$loca['setup']['cache_calendar']['descr']         = "Set caching-time in seconds. If you set this to 0 (default), calendar will use the advanced caching update function (highly recommended!)";
$loca['setup']['mxlookup']['title']               = "MX Lookup";
$loca['setup']['mxlookup']['descr']               = "To make the email-validation-function more intelligent, enable this. If enabled, the function verifies the existence of the domain. Default is false, as some win32 PHP builds don't support this!";
$loca['setup']['loopback_bug']['title']           = "Loopback Bug";
$loca['setup']['loopback_bug']['descr']           = "Only enable this if you're using a f2s or similar hosting provider and you're getting wrong IP/proxy-information!";
$loca['setup']['mysqldump_on']['title']           = "MySQL Dump";
$loca['setup']['mysqldump_on']['descr']           = "enable/disable the mysql dump in the settings tab for all users";
$loca['setup']['md5form']['title']                = "MD5 Login Form";
$loca['setup']['md5form']['descr']                = "enable/disable the md5-encryption (using JS) for the login-form";
$loca['setup']['mail_mod']['title']               = "Mailing Module";
$loca['setup']['mail_mod']['descr']               = "Choose the mailing-module you wish to use to send the confirmation emails including the pphlogger.js-attachment [libmail|htmlmime|plain]";
$loca['setup']['GD_enabled']['title']             = "GD Enabled";
$loca['setup']['GD_enabled']['descr']             = "If you cannot get your GD-lib run at all or if your hosting provider doesn't wnat to install it, you could disable GD-image in PPhlogger. You will miss a lot of great features if you set this to false, though!";
$loca['setup']['gd_img_type']['title']            = "GD Image Type";
$loca['setup']['gd_img_type']['descr']            = "GD-library: Change this to the correct image format if you encounter any problems. Default is 'auto' for auto-detection. [auto|png|gif|jpeg]";
$loca['setup']['Freetype_enabled']['title']       = "Freetype Enabled";
$loca['setup']['Freetype_enabled']['descr']       = "If you cannot get your Freetype-library run at all or if your hosting provider doesn't wnat to install it, you could disable this. Users won't be able to use TTF-fonts for their counter display. Built-in fonts should be available, though.";
$loca['setup']['ttf_location']['title']           = "TTF Location";
$loca['setup']['ttf_location']['descr']           = "If you're not able to see the counter image and you're using GD 2.x or GD 1.x in a buggy PHP distribution, try to set an absolute server-path to your ttf_fonts directory. Otherwise DO NOT CHANGE THIS! [relative|/your/absolute/path/to/ttf_fonts/]";
$loca['setup']['cleanup_lim']['title']            = "Clean-Up Limit";
$loca['setup']['cleanup_lim']['descr']            = "time-limit after which unconfirmed user-accounts get deleted using the clean-up link in admin2 [hours]";
$loca['setup']['cleanup_old']['title']            = "Clean-Up Old Limit";
$loca['setup']['cleanup_old']['descr']            = "After how many days should unused (no hits, no login) accounts get deleted? [days]";
$loca['setup']['dellog_global']['title']          = "Log Deletion Global Switch";
$loca['setup']['dellog_global']['descr']          = "If you set this to false, each user's own settings will be used. If you set it to true, use the following values...";
$loca['setup']['dellog_lim']['title']             = "Log Deletion by Logs";
$loca['setup']['dellog_lim']['descr']             = "Set number of logs to store. If you set this to 0, there will be no limit [default].";
$loca['setup']['dellog_lim_d']['title']           = "Log Deletion by Days";
$loca['setup']['dellog_lim_d']['descr']           = "Set number of days after which logs get deleted. If you set this to 0, there will be no limit [default].";
$loca['setup']['dellog_lim_prob']['title']        = "Log Deletion Probability";
$loca['setup']['dellog_lim_prob']['descr']        = "Deletion probability in percent";
$loca['setup']['delpath_global']['title']         = "Path Deletion Global Switch";
$loca['setup']['delpath_global']['descr']         = "If you set this to false, each user's own settings will be used. If you set it to true, use the following values...";
$loca['setup']['delpath_lim']['title']            = "Path Deletion by Logs";
$loca['setup']['delpath_lim']['descr']            = "Set number of visitor paths to store. If you set this to 0, there will be no limit.";
$loca['setup']['delpath_lim_d']['title']          = "Path Deletion by Days";
$loca['setup']['delpath_lim_d']['descr']          = "Set number of days after which visitor paths get deleted. If you set this to 0, there will be no limit [default].";
$loca['setup']['delpath_lim_prob']['title']       = "Path Deletion Probability";
$loca['setup']['delpath_lim_prob']['descr']       = "Deletion probability in percent";
$loca['setup']['show_cust']['title']              = "Userlog Customer Limit";
$loca['setup']['show_cust']['descr']              = "How many customer-logs should be displayed in the userlog?";
$loca['setup']['calendar_months']['title']        = "Calendar Months Limit";
$loca['setup']['calendar_months']['descr']        = "How many months should be displayed in the calendar?";
$loca['setup']['topref_lim']['title']             = "Top Referrers Limit";
$loca['setup']['topref_lim']['descr']             = "";
$loca['setup']['topdomain_lim']['title']          = "Top Domains Limit";
$loca['setup']['topdomain_lim']['descr']          = "";
$loca['setup']['topres_lim']['title']             = "Top Resolution Limit";
$loca['setup']['topres_lim']['descr']             = "";
$loca['setup']['topcolor_lim']['title']           = "Top Color Limit";
$loca['setup']['topcolor_lim']['descr']           = "";
$loca['setup']['topkeywords_lim']['title']        = "Top Keywords Limit";
$loca['setup']['topkeywords_lim']['descr']        = "";
$loca['setup']['topbrowseros_lim']['title']       = "Top Browser/OS Limit";
$loca['setup']['topbrowseros_lim']['descr']       = "";
$loca['setup']['topsearcheng_lim']['title']       = "Top Searchengines Limit";
$loca['setup']['topsearcheng_lim']['descr']       = "";
$loca['setup']['mpfront_lim']['title']            = "MP-front Limit";
$loca['setup']['mpfront_lim']['descr']            = "Limit multi-pages on the bottom of the Logs-view.";
$loca['setup']['useraccount_lim']['title']        = "Useraccount-View Limit";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "Last Referrer List Limit";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "MP Width Maximum";
$loca['setup']['width_max']['descr']              = "MP view-bar in Logs [pixel]";
$loca['setup']['width_factor']['title']           = "MP Width Factor";
$loca['setup']['width_factor']['descr']           = "MP view-bar in Logs [factor]";
$loca['setup']['browseros_barsize']['title']      = "Browser/OS Bar Size";
$loca['setup']['browseros_barsize']['descr']      = "Maximum size of the percentage-bars in Browser/OS statistics [pixel]";
$loca['setup']['extended']['title']               = "Extended Log-List";
$loca['setup']['extended']['descr']               = "If you set this to false, you won't see the res & color column (only recommended for users with small resolution monitors)";
$loca['setup']['ttf_demo_size']['title']          = "TTF Demo Size";
$loca['setup']['ttf_demo_size']['descr']          = "TTF-font demonstration [points]";
$loca['setup']['css_show']['title']               = "CSS Overview";
$loca['setup']['css_show']['descr']               = "Which colors should be visible in the CSS edit table overview? [comma-separated]";

//email stuff
$strAccActivation    = "account activation";

// pages
$strUsrPage[0]       = "�n�J/�n�X";
$strUsrPage[1]       = "�y�q�O��";
$strUsrPage[2]       = "�y�q���A";
$strUsrPage[3]       = "�y�q���A 2";
$strUsrPage[4]       = "�y�q���A 3";
$strUsrPage[5]       = "�]�w";
$strUsrPage[6]       = "�ϥΪ̱b�����";
$strAdminPage[0]     = "�t�α���x";
$strAdminPage[1]     = "create/del user";
$strAdminPage[2]     = "useraccounts";
$strAdminPage[3]     = "last customers";
$strAdminPage[4]     = "CSS editor";
$strAdminPage[5]     = "statistics";
$strAdminPage[6]     = "mailing list";

// functions.lib.php
$strPrev             = "previous";
$strNext             = "next";

// headfoot.inc.php
$strTrackedSite      = "�w�O������:";
$strCurrentTime      = "�ثe�ɶ�";
$strHeadDateFormat   = "M d, <b>h:iA</b>";
$strYourHits         = "�z�������y�q:";
$strSlogan           = "...�̴Ϊ������y�q�έp�u��I";

// index.php
$strEnterUsernPw     = "please enter your username/pw";
$strLostPw           = "lost password?";
$strLinkNewPw        = "NEW PASSWORD";
$strGetFreeAccount   = "Get your free account";
$strSignUpUseracc    = "Sign up for a free user-account!";
$strMsgWrongPw       = "<b>you entered a wrong password or username!!!</b><br />please try again...";
$strMsgNewPw         = "<b>your new password has been successfully issued!</b><br />it was sent to your email-address which you provided.";
// dspNewPw.php
$strForVerification  = "for verification enter your username and email";
$strGetIt            = "get it!";
$strMsgNoValidUser   = "<b>you didn't enter any valid email/username</b><br />pls try again...";

// signup.php
$strSignUp           = "�ӽФ@�ӷs PowerPhlogger �b���G";
$strHtmlCode         = "HTML �N�X";
$strAddHtmlCode      = "�O�ѤF�b�A�Q�O���������[�W�H�U�N�X�G";
$strJsFile           = "���p�z�򥢧A�� pphlogger.js �ɮסA�i�H�I�����U���G";
$strInstructions     = "�������ޡG";
$strConfLogin        = "���F�T�{�z�ӽЪ��s�b���A�z�����ϥΧڭ̱H�e��z�q�l�H�c���K�X�n�J�C";
$strConfLogin2       = "���p�z���T�{�b���ҥΡA�z���b���N�b ".$cleanup_lim." �Ӥp�ɫ�۰ʧR��";
$strUploadJs         = "�ХH����a�ɤ覡�W�ǧA���쪺 pphlogger.js �ɮסC";
$strNoSignUp         = "�藍�_�A�ثe�����A���Ȯɤ����ѧK�O�y�q�έp�A�ȱb���ӽСI";
$strReturnToLogin    = "return to login";

// dspLogs.php
$strShowLogs         = "��ܰO���G";
$strSelect           = "select";
$strUnselect         = "unselect";
$strAll              = "�Ҧ�";
$strTurnShowref      = "�}����ܳ]�w�}��";
$strFullAgt          = "full agent";
$strDemoMode         = "����i�ܼҦ��I";
$strGuestMsg1        = "�z�ثe�O�X�Ȩ����A����R������O���I";
$strGuestMsg2        = "�аO�o�ҥΧR���O���\��I";
$strViewLogs         = "�˵��O��";
$strHostIP           = "�D�� / IP";
$strReferrer         = "�ӷ����}";
$strReferrers        = "�ɬy�ӷ�";
$strAgent            = "�s������T";
$strRes              = "�ѪR��";
$strColor            = "�C��";
$strTimestamp        = "�ɶ��O��";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "�C��X�ȤH��";
$strPerDay           = "per day";
$strVisPerHour       = "Visitors per hour";
$strLast             = "�e";
$strMonth            = "��";
$strMonths           = "�Ӥ�";
$strToday            = "today";
$strAverage          = "�����y�q";
$strAverageAbbr      = "����";
$strDay              = "��";
$strDays             = "��";
$strCurrOnlUsers     = "�ثe�u�W�ϥΪ�";
$strIPkept           = "��@ IP ��ƥu�O�d�e";
$strIPkept2          = "��������";
$strOnline           = "�W�u";
$strEntryTime        = "�i�J�ɶ�";
$strLastReload       = "�e�����s��z";
$strLastUrl          = "���e�����}";
$strSince            = "�έp�_�l��G";
$strMultipage        = "�h���y�q�έp";
$strKeywords         = "����r";
$strSingleWords      = "single words";
$strWholeStrings     = "whole strings";
$strDownloads        = "�U���q";
$strTerritories      = "�Ҧb��a";
$str_arrMonths       = Array(1 => "�@��", "�G��", "�T��", "�|��", "����", "����", "�C��", 
                                    "�K��", "�E��", "�Q��", "�Q�@��", "�Q�G��");
$str_arrMonthsAbbr   = Array(1 => "�@��", "�G��", "�T��", "�|��", "����", "����", "�C��", "�K��", "�E��", "�Q��", "�Q�@��", "�Q�G��");
$str_area            = Array(
                         'EU'   => 'Europe',
                         'AM'   => 'America',
                         'AF'   => 'Africa',
                         'AS'   => 'Asia',
                         'OZ'   => 'Ozeania',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "show unique visitors";
$strShowPageimpress  = "show all pageimpressions";
$strReload           = "reload";

// edSettings.php
$strCookieTxt        = "�]�w cookie ����O���A�ۤv�s���G";
$strCountMe          = "�O��";
$strDontCountMe      = "���n�O��";
$strEnableDellog     = "�ҥΧR���O��";
$strDisableDellog    = "���ΧR���O��";
$strEnableDellog2    = "�ҥΧR���O���G";
$strResetHits        = "���]�p�ƭ�";
$strResHitsTxt       = "�п�J�A�n���]�᪺�ƭȡG";
$strMysqlDump        = "�˵� mySQL �ץX��� (��Ƶ��c)";
$strStructOnly       = "�ȸ�Ƶ��c";
$strAddDropTbl       = "�s�W '����Ʈw���'";
$strStructData       = "��Ƶ��c�P���";
$strSend             = "�e�X";
$strComplInserts     = "���J��Ƨ���";
$strDiskSpace        = "�ϺЪŶ�";
$strAvailSpace       = "�i�κϺЪŶ�";
$strUsedSpace        = "�w�κϺЪŶ�";
$strDbSpace          = "Used database space";
$strFreeSpace        = "�Ѿl�ϺЪŶ�";
$strFileUpload       = "�W�Ǧh��";
$strMaxFilesize      = "�̤j�ɮפj�p����";
$strErrUpload        = "�W�ǿ��~�A�ЦA�դ@���I";
$strUploadOk         = "�ɮפw���\�W�ǡI";
$strFilename         = "�ɮצW��";
$strSize             = "�ɮפj�p";
$strYourLast         = "�e";
$strCustomers        = "��X��";
$strYourTimeout      = "�z���O�ɭȥثe�]�w��";
$strMinutes          = "����";
$strBlocking         = "blocking";
$strShortQuery       = "short query";
$strOwnReferrers     = "own referrers";

// edUserprofile.php
$strUserprofile      = "���ϥΪ̱b�����";
$strEditProfile      = "�I�����s�s��A���]�w�G";
$strUrl1Txt          = "����A���������� index �����}";
$strUrl2Txt          = "�p�G�٦���L���}�A�b�H�U���C��i�H��J�@���G";
$strEmail            = "�q�l�l��G";
$strTimezone         = "�ɰϡG";
$strUserLang         = "�y���G";
$strVisible          = "��ܡG";
$strVisibleStyle     = "��ܭ���G";
$strTimeout          = "�O�ɭȡG";
$strEmailNotif       = "�q�l�q���G�C...";
$strDefLogNo         = "���w��ܰO�����ơG";
$strKwListMode       = "����r�C��Ҧ��G";
$strAllowDemo        = "���\�i�ܼҦ��G";
$strTTF              = "��� TrueType �r�ΡG";
$strAvailFonts       = "available fonts";
$strFontSize         = "�r�Τj�p�G";
$strFontColor        = "�r���C��";
$strBgColor          = "�I���C��G";
$strTransBg          = "�I���z���G";
$strSample           = "�ܽd�Ϥ��G";
$strChangePw         = "���K�X�G";
$strOldPw            = "�±K�X�G";
$strNewPw            = "�s�K�X�G";
$strReenterPw        = "�T�{�s�K�X�G";
$strLoadCSS          = "���J�˦���G";
$strView4Msg1        = "�ϥΪ̱b����Ƥw�g��s���\�I";
$strView4Msg2        = "�t�εL�k��s�A���b����ơI";
$strView4Msg3        = "�z�ثe�O�X�Ȩ����A<br />�����ʥ���O���I";
$strPwChanged        = "�q���K�X�w���I";
$strWrongPw          = "�q���K�X���~�I";

// admin/index.php
$strAdmin            = "administration";
$strMaintenance      = "maintenance";
$strCheckNewVer      = "Check For New Version";
$strCreate           = "�s�W�ϥΪ̱b���G";
$strAdminMsg1        = "�o�ӵn�J�W�٤w�g���H�ϥΤF";
$strAdminMsg2        = "�ϥΪ̱b���w���\�إ�";
$strAdminMsg3        = "�A��J���q�l�l��H�c�榡���~�I";
$strAdminMsg4        = "usernames must only contain alphanumeric characters,<br />.,-,_, and must be less than 30 characters!";
$strAdminErr1        = "�s�W�ϥΪ̱b���ɵo�Ϳ��~";
$strDelUser          = "�R���ϥΪ̡G";
$strDelErr           = "�t�εo�Ϳ��~�I";
$strDelOk            = "�Ҧ��ϥΪ̸�Ƥw�R���I";
$strWrongPwUser      = "�q���K�X�εn�J�W�ٿ��~�I";
$strAdminCookie      = "�s�W�޲z�� cookie";
$strNetcheck         = "�ҥκ����ˬd�\��";
$strHideAccounts     = "���èϥΪ̱b��";
$strShowAccounts     = "��ܨϥΪ̱b��";
$strReadyDelete      = "ready to delete";
$strMailinglist      = "mailing list";
$strLatestPphlVers   = "Latest PowerPhlogger Version";
$strLatestVersion    = "Latest Version";
$strReleaseDate      = "Release Date";
$strDownloadLoc      = "Download Locations";
$strReloadKeywords   = "reload keywords";
$strReloadKeyw1      = "This will refresh your users keyword-toplist";
$strReloadKeyw2      = "Do not run this unless you've modified engines-list.ini !!";

// admin/change_userprofile.php
$strMaxLoglim        = "�̤j�O������G";
$strMaxPath          = "max stored visitor paths:";
?>
