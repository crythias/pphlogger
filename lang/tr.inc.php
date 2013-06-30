<?php
/* Turkish language localization
 *
 * $Id: tr.inc.php,v 1.38 2002/10/28 17:14:44 cvs_iezzi Exp $
 * credits to: Canberk Þenolsun <canberk@celiknet.com>
 */


$strCharset          = "windows-1254";
$strThousandSep      = ",";
$strDate             = "d.m.Y";
$strDate2            = "M d, Y";
$strNumThousandsSep  = ',';
$strNumDecimalSep    = '.';
$strByteUnits        = array('Bytes', 'KB', 'MB', 'GB');

$strOn               = "açýk";
$strOff              = "kapalý";
$strEnable           = "aktif";
$strEnabled          = "aktifleþtirildi";
$strDisable          = "deaktive et";
$strDisabled         = "deaktive edildi";
$strDellog           = "Log silmeyi";
$strTopOfPage        = "sayfanýn baþý";
$strTotal            = "Toplam";
$strHits             = "hitler";
$strUniqs            = "uniqs";
$strUniq             = "uniq";
$strPageimpressions  = "pageimpressions";
$strDomains          = "domainler";
$strConfiguration    = "konfigürasyon";
$strCurrConfig       = "þu anki konfigürasyon:";
$strUsername         = "kullanýcý adý";
$strPassword         = "þifre";
$strDelete           = "sil";
$strUser             = "kullanýcý";
$strUseraccount      = "useraccount";
$strUseraccounts     = "useraccounts";
$strFrom             = "kimden";
$strTo               = "kime";
$strTo2              = "kime";
$strEdit             = "düzenle";
$strSet              = "set";
$strMove             = "taþý";
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
$loca['tz']['-12']   = "(GMT -12:00 Saat) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 Saat) Midway Island, Samoa";
$loca['tz']['-10']   = "(GMT -10:00 Saat) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 Saat) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 Saat) Pacific Time (US &amp; Canada), Tijuana";
$loca['tz']['-7']    = "(GMT -7:00 Saat) Mountain Time (US &amp; Canada), Arizona";
$loca['tz']['-6']    = "(GMT -6:00 Saat) Central Time (US &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 Saat) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 Saat) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 Saat) Newfoundland";
$loca['tz']['-3']    = "(GMT -3:00 Saat) Brassila, Buenos Aires, Georgetown, Falkland Is";
$loca['tz']['-2']    = "(GMT -2:00 Saat) Mid-Atlantic, Ascension Is., St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 Saat) Azores, Cape Verde Islands";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 Saat) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome";
$loca['tz']['2']     = "(GMT +2:00 Saat) Ýstanbul, Cairo, Helsinki, Kaliningrad, South Africa";
$loca['tz']['3']     = "(GMT +3:00 Saat) Baghdad, Riyadh, Moscow, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 Saat) Tehran";
$loca['tz']['4']     = "(GMT +4:00 Saat) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 Saat) Kabul";
$loca['tz']['5']     = "(GMT +5:00 Saat) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 Saat) Bombay, Calcutta, Madras, New Delhi";
$loca['tz']['6']     = "(GMT +6:00 Saat) Almaty, Colombo, Dhaka, Novosibirsk";
$loca['tz']['6.5']   = "(GMT +6:30 Saat) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 Saat) Bangkok, Hanoi, Jakarta";
$loca['tz']['8']     = "(GMT +8:00 Saat) Beijing, Hong Kong, Perth, Singapore, Taipei";
$loca['tz']['9']     = "(GMT +9:00 Saat) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 Saat) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 Saat) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$loca['tz']['11']    = "(GMT +11:00 Saat) Magadan, New Caledonia, Solomon Islands";
$loca['tz']['12']    = "(GMT +12:00 Saat) Auckland, Wellington, Fiji, Marshall Island";

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
$strUsrPage[0]       = "Giriþ/çýkýþ";
$strUsrPage[1]       = "Loglar";
$strUsrPage[2]       = "Ýstatistikler";
$strUsrPage[3]       = "Ýstatistikler 2";
$strUsrPage[4]       = "Ýstatistikler 3";
$strUsrPage[5]       = "Ayarlar";
$strUsrPage[6]       = "Kullanýcý Profili";
$strAdminPage[0]     = "Yönetim";
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
$strTrackedSite      = "Site trackleniyor:";
$strCurrentTime      = "Þu anki saat";
$strHeadDateFormat   = "A g, <b>S:D</b>";
$strYourHits         = "hitleriniz:";
$strSlogan           = "...Canberk Online! Sayaç Serveriniz";

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
$strSignUp           = "Canberk Online Sayaç'a üye ol:";
$strHtmlCode         = "HTML Kodu";
$strAddHtmlCode      = "bu kodu sayýlmasýný istediðiniz tüm sayfalarýn sonuna eklemelisiniz:";
$strJsFile           = "eðer sayaç dosyanýzý kaybetti iseniz buradan alabilirsiniz:";
$strInstructions     = "TALÝMATLAR:";
$strConfLogin        = "Üyeliðinizi onaylamak için adresinize gönderilen þifre ile siteye bir kez login olmalýsýnýz .";
$strConfLogin2       = "Eðer login olmazsanýz ".$cleanup_lim." saat sonra üyeliðiniz silinir";
$strUploadJs         = "Gönderdiðimiz E-mail'in yanýnda bulunan pphlogger.js dosyasýný serverýnýza yüklemelisiniz .";
$strNoSignUp         = "Kýsa bir süreliðine yeni üye kabul edemiyoruz !";
$strReturnToLogin    = "return to login";

// dspLogs.php
$strShowLogs         = "Loglarý göster:";
$strSelect           = "select";
$strUnselect         = "unselect";
$strAll              = "Tümünü";
$strTurnShowref      = "Refererleri aç";
$strFullAgt          = "full agent";
$strDemoMode         = "demo modunda çalýþýyor!";
$strGuestMsg1        = "misafir kullanýcý olarak herhangi bir logu silemezsiniz!!!";
$strGuestMsg2        = "Lütfen log silme fonksiyonunu aktifleþtirin!";
$strViewLogs         = "Loglarý gör";
$strHostIP           = "Host / IP";
$strReferrer         = "Referer";
$strReferrers        = "Referrerler";
$strAgent            = "Aracý bilgileri";
$strRes              = "res";
$strColor            = "renk";
$strTimestamp        = "zamandamgasý";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "Günlere göre ziyaretçiler";
$strPerDay           = "göre ziyaretçiler";
$strVisPerHour       = "Visitors per hour";
$strLast             = "son";
$strMonth            = "ay";
$strMonths           = "ay";
$strToday            = "today";
$strAverage          = "ortalama";
$strAverageAbbr      = "ort.";
$strDay              = "gün";
$strDays             = "gün";
$strCurrOnlUsers     = "Þu andaki online kullanýcý";
$strIPkept           = "IP's are kept for the last";
$strIPkept2          = "dakika";
$strOnline           = "online";
$strEntryTime        = "giriþ zamaný";
$strLastReload       = "son refresh";
$strLastUrl          = "son url ";
$strSince            = "since";
$strMultipage        = "multi-sayfa";
$strKeywords         = "anahtar kelimeler";
$strSingleWords      = "single words";
$strWholeStrings     = "whole strings";
$strDownloads        = "downloadlar";
$strTerritories      = "bölgeseller";
$str_arrMonths       = Array(1 => "Ocak", "Þubat", "Mart", "Nisan", "Mayýs", "Haziran", "Temmuz", 
                                    "Aðustos", "Eylül", "Ekim", "Kasým", "Aralýk");
$str_arrMonthsAbbr   = Array(1 => "Oc", "Þub", "Mar", "Nis", "May", "Haz", "Tem", "Aðu", "Eyl", "Ekm", "Kas", "Ara");
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
$strCookieTxt        = "Kendi hitlerinizin sayýlmamasý için cookie oluþtur:";
$strCountMe          = "Beni say!";
$strDontCountMe      = "Beni say!";
$strEnableDellog     = "Log silmeyi aktifleþtir";
$strDisableDellog    = "Log silmeyi deaktive et";
$strEnableDellog2    = "silme fonksiyonunu aktifleþtir:";
$strResetHits        = "hitleri resetle";
$strResHitsTxt       = "hitlerinizi silmek için bir deðer girin:";
$strMysqlDump        = "Mysql dump gör";
$strStructOnly       = "Sadece dizin";
$strAddDropTbl       = "Satýrý düþür'";
$strStructData       = "Dizin ve data";
$strSend             = "Gönder";
$strComplInserts     = "giriþleri tamamla";
$strDiskSpace        = "Disk Alaný";
$strAvailSpace       = "Kullanýlabilir disk alaný";
$strUsedSpace        = "Kullanýlan disk alaný";
$strDbSpace          = "Used database space";
$strFreeSpace        = "Kalan disk alaný";
$strFileUpload       = "çoklu dosya yükleme";
$strMaxFilesize      = "maximum dosya boyutu";
$strErrUpload        = "Yükleme hatasý.Tekrar deneyin";
$strUploadOk         = "Baþarýyla yüklendi!!";
$strFilename         = "Dosya adý";
$strSize             = "boyut";
$strYourLast         = "sizin son";
$strCustomers        = "müþteriler";
$strYourTimeout      = "zaman aþýmýnýz";
$strMinutes          = "dakika.";
$strBlocking         = "blocking";
$strShortQuery       = "short query";
$strOwnReferrers     = "own referrers";

// edUserprofile.php
$strUserprofile      = "Kullanýcý bilgileri deðiþtir";
$strEditProfile      = "Bilgilerinizi deðiþtirin ve butona týklayýn:";
$strUrl1Txt          = "Ana index dosyanýnýz adresi.";
$strUrl2Txt          = "Eðer alternatif adresleriniz varsa ekleyin:";
$strEmail            = "email:";
$strTimezone         = "Zaman diliminiz:";
$strUserLang         = "Kullanýcý dili:";
$strVisible          = "Görünür:";
$strVisibleStyle     = "Görünme sitili:";
$strTimeout          = "tzaman aþýmý:";
$strEmailNotif       = "email bildirisi: her...";
$strDefLogNo         = "gösterilecek loglarýn varsayýlan numarasý:";
$strKwListMode       = "anahtar kelime listeleme modu:";
$strAllowDemo        = "demo modunu etkinleþtir:";
$strTTF              = "Font seç:";
$strAvailFonts       = "available fonts";
$strFontSize         = "font-boyutu:";
$strFontColor        = "font-renk:";
$strBgColor          = "arkaplan rengi:";
$strTransBg          = "transparan arkaplan:";
$strSample           = "örnek resim:";
$strChangePw         = "Þifrenizi deðiþtirin:";
$strOldPw            = "eski þifre:";
$strNewPw            = "yeni þire:";
$strReenterPw        = "yeni þifreyi tekrar girin:";
$strLoadCSS          = "stylesheet yükle:";
$strView4Msg1        = "Kullanýcý profili baþarýyla güncellendi!";
$strView4Msg2        = "Kullanýcý profiliniz güncellenemedi!!!";
$strView4Msg3        = "Misafir olarak <br />herhangi bir deðiþiklik yapamazsýnýz</br>!";
$strPwChanged        = "þifre deðiþtirildi !";
$strWrongPw          = "hatalý þifre !!";

// admin/index.php
$strAdmin            = "administration";
$strMaintenance      = "maintenance";
$strCheckNewVer      = "Check For New Version";
$strCreate           = "Yeni kullanýcý yarat:";
$strAdminMsg1        = "Kullanýcý zaten var";
$strAdminMsg2        = "kullanýcý baþarýyla yaratýldý";
$strAdminMsg3        = "Hatalý bir e-mail adresi girdiniz!";
$strAdminMsg4        = "usernames must only contain alphanumeric characters,<br />.,-,_, and must be less than 30 characters!";
$strAdminErr1        = "Yeni üye yaratýrken bir hata oluþtu";
$strDelUser          = "Kullanýcý sil:";
$strDelErr           = "burada bir sorun var !!";
$strDelOk            = "bütün kullanýcý verileri sildi!";
$strWrongPwUser      = "yanlýþ kullanýcý adý veya þifre !";
$strAdminCookie      = "Yönetici cookiesi ekle";
$strNetcheck         = "netkontrol aktifleþtir";
$strHideAccounts     = "kullanýcý hesaplarýný gizle";
$strShowAccounts     = "kullanýcý hesaplarýný göster";
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
$strMaxLoglim        = "Maksimum log limiti:";
$strMaxPath          = "max stored visitor paths:";
?>
