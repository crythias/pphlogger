<?php
 /* Latvian language localization
 *
 * $Id: lv.inc.php,v 1.17 2002/10/28 17:14:44 cvs_iezzi Exp $
 * credits to: Ansis Ataols B�rzi�� <ataols@latnet.lv>
 */


$strCharset          = "windows-1257"; //RIM
$strThousandSep      = " ";
$strDate             = "d.m.Y";
$strDate2            = "Y. gada d. M";	// the word "gada" should be keeped as it is !!!!
$strNumThousandsSep  = ' ';
$strNumDecimalSep    = ',';
$strByteUnits        = array('b', 'Kb', 'Mb', 'Gb');

$strOn               = "iesl.";
$strOff              = "izsl.";
$strEnable           = "Iesl�gt";
$strEnabled          = "iesl�gts";
$strDisable          = "Izsl�gt";
$strDisabled         = "izsl�gts";
$strDellog           = "Nodz�st v�sturi";
$strTopOfPage        = "Aug�up";
$strTotal            = "Kop�";
$strHits             = "Apmekl�jumi";
$strUniqs            = "da��di";
$strUniq             = "da��di"; // da��di apmekl�t�ji
$strPageimpressions  = "rei�u skaitu";
$strDomains          = "Mui�u v�rdi";
$strConfiguration    = "Konfigur�cija";
$strCurrConfig       = "Teko�ie uzst�d�jumi:";
$strUsername         = "Lietot�ja v�rds";
$strPassword         = "Parole";
$strDelete           = "Nodz�st";
$strUser             = "Lietot�js";
$strUseraccount      = "useraccount";
$strUseraccounts     = "useraccounts";
$strFrom             = "no";
$strTo               = "l�dz";
$strTo2              = "l�dz";
$strEdit             = "redi��t";
$strSet              = "uzst�d�t";
$strMove             = "p�rvietot";
$strDefault          = "p�c noklus�juma";
$strCreateNew        = "rad�t jaunu";
$strSave             = "noglab�t";
$strUnknown          = "nezin�ms";
$strUndefined        = "nav defin�ts";
$strCache            = "�e��";
$strSeconds          = "sekundes";
$strDatabase         = "datub�ze";
$strTable            = "tabula";
$strCalc             = "apr��ini";
$strStep             = "step";
$strSystem           = "system";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 hours) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 hours) Midway Island, Samoa";
$loca['tz']['-10']   = "(GMT -10:00 hours) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 hours) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 hours) Pacific Time (US &amp; Canada), Tijuana";
$loca['tz']['-7']    = "(GMT -7:00 hours) Mountain Time (US &amp; Canada), Arizona";
$loca['tz']['-6']    = "(GMT -6:00 hours) Central Time (US &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 hours) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 hours) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 hours) Newfoundland";
$loca['tz']['-3']    = "(GMT -3:00 hours) Brassila, Buenos Aires, Georgetown, Falkland Is";
$loca['tz']['-2']    = "(GMT -2:00 hours) Mid-Atlantic, Ascension Is., St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 hours) Azores, Cape Verde Islands";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 hours) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome";
$loca['tz']['2']     = "(GMT +2:00 hours) Cairo, Helsinki, Kaliningrad, South Africa";
$loca['tz']['3']     = "(GMT +3:00 hours) Baghdad, Riyadh, Moscow, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 hours) Tehran";
$loca['tz']['4']     = "(GMT +4:00 hours) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 hours) Kabul";
$loca['tz']['5']     = "(GMT +5:00 hours) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 hours) Bombay, Calcutta, Madras, New Delhi";
$loca['tz']['6']     = "(GMT +6:00 hours) Almaty, Colombo, Dhaka, Novosibirsk";
$loca['tz']['6.5']   = "(GMT +6:30 hours) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 hours) Bangkok, Hanoi, Jakarta";
$loca['tz']['8']     = "(GMT +8:00 hours) Beijing, Hong Kong, Perth, Singapore, Taipei";
$loca['tz']['9']     = "(GMT +9:00 hours) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 hours) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 hours) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$loca['tz']['11']    = "(GMT +11:00 hours) Magadan, New Caledonia, Solomon Islands";
$loca['tz']['12']    = "(GMT +12:00 hours) Auckland, Wellington, Fiji, Marshall Island";

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
$strUsrPage[0]       = "piesl�gties/atsl�gties";
$strUsrPage[1]       = "v�sture";
$strUsrPage[2]       = "statistika";
$strUsrPage[3]       = "kalend�ris";
$strUsrPage[4]       = "p�rl�ks/OS";
$strUsrPage[5]       = "uzst�d�jumi";
$strUsrPage[6]       = "lietot�ja opcijas";
$strAdminPage[0]     = "administr��ana";
$strAdminPage[1]     = "create/del user";
$strAdminPage[2]     = "useraccounts";
$strAdminPage[3]     = "last customers";
$strAdminPage[4]     = "CSS editor";
$strAdminPage[5]     = "statistics";
$strAdminPage[6]     = "mailing list";

// functions.lib.php
$strPrev             = "iepriek��j�";
$strNext             = "n�kam�";

// headfoot.inc.php
$strTrackedSite      = "T�mek�a iecirk�a pamatlapas vietr�dis:";
$strCurrentTime      = "Patlaban";
$strHeadDateFormat   = "d. M, <b>H:i</b>";
$strYourHits         = "J�su statistika:";
$strSlogan           = "...lab�kais skait�t�js!";
$strLogs             = "Ierakstu datnes";
$strStats1           = "1.statistika";
$strStats2           = "2.statistika";
$strStats3           = "3.statistika";
$strStats4           = "4.statistika";
$strStats5           = "5.statistika";
$strSettings         = "Uzst�d�jumi";
$strChUserprofile    = "Lietot�ja dati";
$strLoginLogout      = "Beigt darbu";

// index.php
$strEnterUsernPw     = "L�dzu ievadiet lietot�ja v�rdu un paroli";
$strLostPw           = "Vai aizmirs�t paroli?";
$strLinkNewPw        = "JAUNA PAROLE";
$strGetFreeAccount   = "Konts pa�am";
$strSignUpUseracc    = "Re�istr�jieties!";
$strMsgWrongPw       = "<b>Nepareizs lietot�ja v�rds vai parole!!!</b><br />L�dzu m��iniet v�lreiz...";
$strMsgNewPw         = "<b>Jaun� parole nos�t�ta uz J�su E-pasta adresi.</b>";
// dspNewPw.php
$strForVerification  = "L�dzu ievadiet savu lietot�ja v�rdu un E-pasta adresi";
$strGetIt            = "K�rt�b�!";
$strMsgNoValidUser   = "<b>E-pasta adrese un lietot�ja v�rds nesapas!</b><br /> L�dzu m��iniet v�lreiz...";

// signup.php
$strSignUp           = "Jauna lietot�ja re�istr�cija:";
$strHtmlCode         = "HTML-kods";
$strAddHtmlCode      = "Ievietojiet doto kodu sav�s HTML lap�s:";
$strJsFile           = "Ja esat noz�m�ju�i datni <I>pphlogger.js</I>, tad varat to nos�kt v�lreiz:";
$strInstructions     = "PAM�C�BA:";
$strConfLogin        = "Lai apstiprin�tu savu re�istr��anos, l�dzu, piesl�dz�ties sist�mai v�lreiz (izmantojot jaunieg�to paroli):";
$strConfLogin2       = "Ja ".$cleanup_lim." stundu laik� neapstiprin�siet re�istr�ciju, J�su dati tiks izdz�sti.";
$strUploadJs         = "L�dzu, ies�tiet pievienoto Javaskripta datni (pphlogger.js) sav� server�.";
$strNoSignUp         = "Piedodiet, bet �obr�d nevaram piere�istr�t jaunu lietot�ju!";
$strReturnToLogin    = "atgriezties s�kumlap�";

// dspLogs.php
$strShowLogs         = "Par�d�t ierakstu datnes:";
$strSelect           = "At�eks�t";
$strUnselect         = "Atcelt";
$strAll              = "Visi";
$strTurnShowref      = "R�d�t saites";
$strFullAgt          = "Pilns p�rl�ka v�rds";
$strDemoMode         = "Sist�ma darbojas izr�d��anas re��m�!";
$strGuestMsg1        = "Viesiem nav dotas ties�bas dz�st ierakstu datnes!!!";
$strGuestMsg2        = "L�dzu, vispirms aktiviz�jiet opciju �Dz�st ierakstu datnes�!";
$strViewLogs         = "Par�d�t ierakstu datnes";
$strHostIP           = "Skait�ot�ja v�rds/IP-adrese";
$strReferrer         = "Saites";
$strReferrers        = "Saites";
$strAgent            = "P�rl�ks+oper�t�jsist�ma";
$strRes              = "Iz��irtsp�ja";
$strColor            = "Kr�sas";
$strTimestamp        = "Plkst.";
$strProxy            = "Proksis";

// dspStats.php
$strVisPerDay        = "Apmekl�t�ju skaits diennakt�";
$strPerDay           = "skaits diennakt�";
$strVisPerHour       = "Apmekl�t�ju skaits stund�";
$strLast             = "p�d�jie";
$strMonth            = "m�nesis";
$strMonths           = "m�ne�i";
$strToday            = "�odien";
$strAverage          = "Vid�ji";
$strAverageAbbr      = "vid.";
$strDay              = "diena";
$strDays             = "dienas";
$strCurrOnlUsers     = "Apmekl�t�ju skaits �obr�d";
$strIPkept           = "IP-adreses tiek saglab�tas";
$strIPkept2          = "min.";
$strOnline           = "T�kl�";
$strEntryTime        = "Iera�an�s";
$strLastReload       = "P�d�j� p�rl�d��ana";
$strLastUrl          = "P�d�jais vietr�dis";
$strSince            = "Kop�";
$strMultipage        = "Daudzlapu";
$strKeywords         = "p�c atsl�gv�rdiem";
$strSingleWords      = "atsevi��i v�rdi";
$strWholeStrings     = "pilnas rindas";
$strDownloads        = "Nos�k�anas";
$strTerritories      = "Vietas";
$str_arrMonths       = Array(1 => "Janv�ris", "Febru�ris", "Marts", "Apr�lis", "Maijs", "J�nijs", "J�lijs",
                                    "Augusts", "Septembris", "Oktobris", "Novembris", "Decembris");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Feb", "Mar", "Apr", "Mai", "J�n", "J�l", "Aug", "Sep", "Okt", "Nov", "Dec");
$str_area            = Array(
                         'EU'   => 'Eiropa',
                         'AM'   => 'Amerika',
                         'AF'   => '�frika',
                         'AS'   => '�zija',
                         'OZ'   => 'Austr�lija un Oke�nija',
                         'GUS'  => 'GUS'	# ??
                       );

// dspCalendar.php
$strShowUniqVis      = "R�d�t apmekl�t�ju skaitu";
$strShowPageimpress  = "R�d�t nos�k�anas rei�u skaitu";
$strReload           = "P�rl�d�t";

// edSettings.php
$strCookieTxt        = "Pievienot rausi, lai pa�a apmekl�jumi netiktu uzskait�ti:";
$strCountMe          = "Mani var ar� pieskait�t!";
$strDontCountMe      = "Rauj vi�u jupis!";
$strEnableDellog     = "Dz�st ierakstu datnes (atsl./piesl.)";
$strDisableDellog    = "Atsl�gt v�stures izdz��anas iesp�ju";
$strEnableDellog2    = "Dz��anas funkcija (atsl./piesl.):";
$strResetHits        = "Main�t statistiku";
$strResHitsTxt       = "nepiecie�ams nor�d�t<br />jaunu s�kuma skaitli:";
$strMysqlDump        = "Apl�kot <I>mySQL</I> sh�mu";
$strStructOnly       = "Tikai strukt�ru";
$strAddDropTbl       = "Pievienot tabulu";
$strStructData       = "Strukt�ru un datus";
$strSend             = "Nos�t�t";
$strComplInserts     = "Piln�ga ievieto�ana";
$strDiskSpace        = "Vietas uz diska";
$strAvailSpace       = "Br�vas vietas";
$strUsedSpace        = "Aiz�emts";
$strDbSpace          = "Used database space";
$strFreeSpace        = "Br�vs";
$strFileUpload       = "Iepump�t datnes";
$strMaxFilesize      = "Datnes maksim�lais izm�rs";
$strErrUpload        = "K��da! M��iniet v�lreiz!";
$strUploadOk         = "Datne veiksm�gi iepump�ta!";
$strFilename         = "Datnes nosaukums";
$strSize             = "Izm�rs";
$strYourLast         = "P�d�jo";
$strCustomers        = "Apmekl�t�ju saraksts";
$strYourTimeout      = "Autom�tiska atsl�g�an�s notiek p�c";
$strMinutes          = "bezdarb�bas min�t�m.";
$strBlocking         = "blocking";
$strShortQuery       = "short query";
$strOwnReferrers     = "own referrers";

// edUserprofile.php
$strUserprofile      = "lietot�ja datu redi���ana";
$strEditProfile      = "Ierakstiet savus datus un nospiediet pogu r�m��a lejasda��.";
$strUrl1Txt          = "T�mek�a iecirk�a pamatlapas vietr�dis (bez 'http://').";
$strUrl2Txt          = "Ja pamatlapai ir vair�ki vietr��i, ievadiet p�r�jos (katru jaun� rind�).";
$strEmail            = "E-pasts:";
$strTimezone         = "Laika josla:";
$strUserLang         = "Valoda:";
$strVisible          = "R�d�t:";
$strVisibleStyle     = "Stils:";
$strTimeout          = "Autom�tiska atsl�g�an�s p�c (min.):";
$strEmailNotif       = "Zi�o�ana pa E-pastu p�c katriem ... apmekl�jumiem";
$strDefLogNo         = "Ierakstu dat�u skaits p�c noklus�juma:";
$strKwListMode       = "Atsl�gv�rdu saraksta veids:";
$strAllowDemo        = "At�aut izr�d��anas re��mu:";
$strTTF              = "Izv�l�ties TrueType �riftu:";
$strAvailFonts       = "Pieejamie �rifti";
$strFontSize         = "�rifta izm�rs:";
$strFontColor        = "�rifta kr�sa:";
$strBgColor          = "Fons:";
$strTransBg          = "Caursp�d�gs fons:";
$strSample           = "Paraugs:";
$strChangePw         = "Nomain�t paroli:";
$strOldPw            = "Vec� parole:";
$strNewPw            = "Jaun� parole:";
$strReenterPw        = "Vec� parole v�lreiz:";
$strLoadCSS          = "Iel�d�t CSS jeb stila specifik�ciju:";
$strView4Msg1        = "Lietotaja dati nomain�ti!";
$strView4Msg2        = "Piedodiet, k�uda!";
$strView4Msg3        = "Viesim nav ties�bu<br />saglab�t izmai�as!!";
$strPwChanged        = "Parole nomain�ta!";
$strWrongPw          = "Nepareiza parole!!";

// admin/index.php
$strAdmin            = "Administr��ana";
$strMaintenance      = "Uztur��ana";
$strCheckNewVer      = "Vai pieejama jaun�ka versija?";
$strCreate           = "Jauna lietot�ja re�istr�cija:";
$strAdminMsg1        = "Diem��l �is lietot�ja v�rds ir jau aiz�emts!..";
$strAdminMsg2        = "Jaunais lietot�js piere�istr�ts";
$strAdminMsg3        = "Nepareiza E-pasta adrese!";
$strAdminMsg4        = "Lietot�ja v�rds dr�kst satur�t tikai lat��u burtus, ciparus,<br /> k� ar� .,-,_, un tas nedr�kst b�t gar�ks par 30 simboliem!";
$strAdminErr1        = "K��da! M��iniet v�lreiz!";
$strDelUser          = "Izmest lietot�ju:";
$strDelErr           = "Uj! Nenostr�d�ja...";
$strDelOk            = "Lietot�js izmests!";
$strWrongPwUser      = "Nepareiza parole vai lietot�ja v�rds!";
$strAdminCookie      = "Administr�tora rausis";
$strNetcheck         = "Iesl�gt t�kla p�rbaudi";
$strHideAccounts     = "Atsl�gt lietot�ju rad��anu";
$strShowAccounts     = "Rad�t lietot�jus";
$strReadyDelete      = "Gatavs dz��anai";
$strMailinglist      = "V�stkopa";
$strLatestPphlVers   = "Latest PowerPhlogger Version";
$strLatestVersion    = "Latest Version";
$strReleaseDate      = "Release Date";
$strDownloadLoc      = "Download Locations";
$strReloadKeywords   = "reload keywords";
$strReloadKeyw1      = "This will refresh your users keyword-toplist";
$strReloadKeyw2      = "Do not run this unless you've modified engines-list.ini !!";

// admin/change_userprofile.php
$strMaxLoglim        = "maksim�lais ierakstu datnes izm�rs:";
$strMaxPath          = "maksim�lais uzglab�jamais lietot�ja ce�a garums:";
?>
