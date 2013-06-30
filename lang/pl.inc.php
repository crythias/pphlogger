<?php
/* Polish language localization
 *
 * $Id: pl.inc.php,v 1.36 2003/01/01 18:12:23 cvs_iezzi Exp $
 * credits to: Wojciech Dorosz <wojtek@serwisy.net>
 * Fixed by:   .:[ mIRC.pl ]:.
 */


$strCharset          = "iso-8859-2";
$strThousandSep      = ",";
$strDate             = "d-m-Y";
$strDate2            = "m d Y";
$strNumThousandsSep  = '.';
$strNumDecimalSep    = ',';
$strByteUnits        = array('bajtów', 'kB', 'MB', 'GB');

$strOn               = "aktywne";
$strOff              = "nieaktywne";
$strEnable           = "w³±cz";
$strEnabled          = "w³±czone";
$strDisable          = "wy³±cz";
$strDisabled         = "wy³±czone";
$strDellog           = "kasowanie logu";
$strTopOfPage        = "góra strony";
$strTotal            = "razem";
$strHits             = "wej¶cia";
$strUniqs            = "uniqs";
$strUniq             = "uniq";
$strPageimpressions  = "pageimpressions";
$strDomains          = "domeny";
$strConfiguration    = "konfiguracja";
$strCurrConfig       = "aktualna konfiguracja:";
$strUsername         = "nazwa u¿ytkownika";
$strPassword         = "has³o";
$strDelete           = "usuñ";
$strUser             = "u¿ytkownik";
$strUseraccount      = "useraccount";
$strUseraccounts     = "useraccounts";
$strFrom             = "od";
$strTo               = "do";
$strTo2              = "do";
$strEdit             = "edycja";
$strSet              = "set";
$strMove             = "przenie¶";
$strDefault          = "domy¶lnie";
$strCreateNew        = "utwórz nowe";
$strSave             = "zapisz";
$strUnknown          = "nieznane";
$strUndefined        = "niezdefiniowane";
$strCache            = "pamiêæ";
$strSeconds          = "sek.";
$strDatabase         = "baza";
$strTable            = "tabela";
$strCalc             = "calc";
$strStep             = "step";
$strSystem           = "system";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 hours) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 hours) Wyspa Midway, Samoa";
$loca['tz']['10']    = "(GMT -10:00 hours) Hawaje";
$loca['tz']['-9']    = "(GMT -9:00 hours) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 hours) Pacific Time (US &amp; Kanada)";
$loca['tz']['-7']    = "(GMT -7:00 hours) Mountain Time (US &amp; Kanada)";
$loca['tz']['-6']    = "(GMT -6:00 hours) Central Time (US &amp; Kanada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 hours) Eastern Time (US &amp; Kanada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 hours) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 hours) Nowa Funflandia";
$loca['tz']['-3']    = "(GMT -3:00 hours) Brazylia, Buenos Aires, Georgetown, Falklandy";
$loca['tz']['-2']    = "(GMT -2:00 hours) ¦r-Atlantyk, Wyspa Ascension, ¦w. Helena";
$loca['tz']['-1']    = "(GMT -1:00 hours) Azory, Wyspy Cape Verde";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edynburg, Londyn, Lisbona, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 hours) Berlin, Bruksela, Kopenhaga, Madryd, Pary¿, Rzym";
$loca['tz']['2']     = "(GMT +2:00 hours) Kaliningrad, Po³. Afryka";
$loca['tz']['3']     = "(GMT +3:00 hours) Bagdad, Riyadh, Moskwa, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 hours) Teheran";
$loca['tz']['4']     = "(GMT +4:00 hours) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 hours) Kabul";
$loca['tz']['5']     = "(GMT +5:00 hours) Ekaterinburg, Islamabad, Karaczi, Taszkent";
$loca['tz']['5.5']   = "(GMT +5:30 hours) Bombaj, Kalkuta, Madras, Nowe Delhi";
$loca['tz']['6']     = "(GMT +6:00 hours) Almaty, Colombo, Dhaka";
$loca['tz']['6.5']   = "(GMT +6:30 hours) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 hours) Bangkok, Hanoi, D¿akarta";
$loca['tz']['8']     = "(GMT +8:00 hours) Pekin, Hong Kong, Perth, Singapur, Taipei";
$loca['tz']['9']     = "(GMT +9:00 hours) Osaka, Sapporo, Seoul, Tokyo, Jakuck";
$loca['tz']['9.5']   = "(GMT +9:30 hours) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 hours) Melbourne, Papua Nowa Gwinea, Sydney, W³adywostok";
$loca['tz']['11']    = "(GMT +11:00 hours) Magadan, Nowa Kaledonia, Wyspy Salomona";
$loca['tz']['12']    = "(GMT +12:00 hours) Auckland, Wellington, Fid¿i, Wyspy Marshalla";

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
$loca['setup']['header1']                         = "Ustawienia admina";
$loca['setup']['header2']                         = "Ogólne ustawienia";
$loca['setup']['header3']                         = "Specjalne ustawienia";
$loca['setup']['header4']                         = "Ustawienia graficzne";
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
$loca['setup']['admin_mail']['title']             = "Email admina";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "Imiê admina";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "Has³o admina";
$loca['setup']['admin_pw']['descr']               = "Used to delete user-accounts";
$loca['setup']['server_GMT']['title']             = "Strefa czasowa";
$loca['setup']['server_GMT']['descr']             = "timezone where your server is located";
$loca['setup']['admin_GMT']['title']              = "Administrator Timezone";
$loca['setup']['admin_GMT']['descr']              = "timezone where you are located";
$loca['setup']['default_lang']['title']           = "Domy¶lny jêzyk";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "Domy¶lny Style Sheet";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "Dozwolone auto zak³adanie kont u¿ytkowników";
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
$strAccActivation    = "Aktywacja konta";

// pages
$strUsrPage[0]       = "zaloguj/wyloguj";
$strUsrPage[1]       = "logi";
$strUsrPage[2]       = "statystyki";
$strUsrPage[3]       = "kalendarz";
$strUsrPage[4]       = "przegl±darka/system";
$strUsrPage[5]       = "ustawienia";
$strUsrPage[6]       = "profil u¿ytkownika";
$strAdminPage[0]     = "administracja";
$strAdminPage[1]     = "utwórz/skasuj u¿ytkownika";
$strAdminPage[2]     = "konta u¿ytkowników";
$strAdminPage[3]     = "ostatni klient";
$strAdminPage[4]     = "CSS edytor";
$strAdminPage[5]     = "statystyka";
$strAdminPage[6]     = "mailing lista";

// functions.lib.php
$strPrev             = "dalej";
$strNext             = "wstecz";

// headfoot.inc.php
$strTrackedSite      = "monitorowana strona:";
$strCurrentTime      = "aktualny czas";
$strHeadDateFormat   = "d m, <b>H:i</b>";
$strYourHits         = "wej¶cia:";
$strSlogan           = "...program do statystyk!";
$strLogs             = "logi";
$strStats1           = "statystyki";
$strStats2           = "statystyki 2";
$strStats3           = "statystyki 3";
$strStats4           = "statystyki 4";
$strStats5           = "statystyki 5";
$strSettings         = "ustawienia";
$strChUserprofile    = "profil u¿ytkownika";
$strLoginLogout      = "zaloguj/wyloguj";

// index.php
$strEnterUsernPw     = "Proszê wpisaæ nazwê u¿ytkownika/has³o";
$strLostPw           = "Zapomna³e¶ has³a?";
$strLinkNewPw        = "Nowe Has³o";
$strGetFreeAccount   = "Zdob±dz nowe konto";
$strSignUpUseracc    = "Zarejstruj siê i zdob±dz darmowe konto!";
$strMsgWrongPw       = "<b>wpisa³e¶ z³e has³o albo login!!!</b><br />proszê spróbowaæ ponownie...";
$strMsgNewPw         = "<b>your new password has been successfully issued!</b><br />it was sent to your email-address which you provided.";
// dspNewPw.php
$strForVerification  = "dla weryfikacji wpisz login i mail";
$strGetIt            = "get it!";
$strMsgNoValidUser   = "<b>nie wpisa³e¶ wymaganego emaila/nazwy u¿ytkownika</b><br />proszê spróbowaæ ponownie...";

// signup.php
$strSignUp           = "nowe konto w systemie PowerPhlogger:";
$strHtmlCode         = "kod HTML";
$strAddHtmlCode      = "wstaw ten kod HTML do wszystkich plików, które maj± byæ monitorowane:";
$strJsFile           = "Je¶li nie masz pliku pphlogger.js, pobierz go st±d:";
$strInstructions     = "INSTRUKCJE:";
$strConfLogin        = "aby uaktywniæ nowe konto, musisz zalogowaæ siê korzystaj±c z has³a, które przes³ali¶my w e-mailu.";
$strConfLogin2       = "Je¶li nie aktywujesz konta w ci±gu ".$cleanup_lim." godzin - zostanie ono usuniête";
$strUploadJs         = "wgraj otrzymany jako za³±cznik plik pphlogger.js do w wszystkich katalogów na Twoim serwerze, w których znajduj± siê monitorowane strony.";
$strNoSignUp         = "Niestety aktualnie nie mo¿emy zaproponowaæ ¿adnych darmowych kont na naszym serwerze!";
$strReturnToLogin    = "wróæ do loginu";

// dspLogs.php
$strShowLogs         = "poka¿ logi:";
$strSelect           = "select";
$strUnselect         = "unselect";
$strAll              = "Wszystko";
$strTurnShowref      = "w³±cz pokazywanie hostów odsy³aj±cych";
$strFullAgt          = "pe³ne monitorowanie";
$strDemoMode         = "tryb DEMO!";
$strGuestMsg1        = "jako go¶æ nie mo¿esz usuwaæ ¿adnych wpisów!!!";
$strGuestMsg2        = "w³±cz funkcjê kasowania!";
$strViewLogs         = "zobacz logi";
$strHostIP           = "Host / IP";
$strReferrer         = "Odsy³acz";
$strReferrers        = "Odsy³acze";
$strAgent            = "Informacje";
$strRes              = "rozdz.";
$strColor            = "kolor";
$strTimestamp        = "znak czasu";
$strProxy            = "serwer proxy";

// dspStats.php
$strVisPerDay        = "Go¶ci dziennie";
$strPerDay           = "dziennie";
$strVisPerHour       = "Odwiedzaj±cych na godzine ";
$strLast             = "ostatnie";
$strMonth            = "miesi±c";
$strMonths           = "miesi±ce";
$strToday            = "today";
$strAverage          = "¶rednio";
$strAverageAbbr      = "¶r.";
$strDay              = "dzieñ";
$strDays             = "dni";
$strCurrOnlUsers     = "u¿ytkownicy on-line";
$strIPkept           = "ostatnie adresy IP";
$strIPkept2          = "minut";
$strOnline           = "on-line";
$strEntryTime        = "czas wej¶cia";
$strLastReload       = "ostatnie prze³adowanie";
$strLastUrl          = "ostatni URL";
$strSince            = "od";
$strMultipage        = "wielostronny";
$strKeywords         = "s³owa kluczowe";
$strSingleWords      = "single words";
$strWholeStrings     = "whole strings";
$strDownloads        = "¶æigniêcia";
$strTerritories      = "obszary";
$str_arrMonths       = Array(1 => "Stycznia", "Lutego", "Marca", "Kwietnia", "Maja", "Czerwca", "Lipca", 
                                    "Sierpnia", "Wrze¶nia", "Pa¼dziernika", "Listopada", "Grudnia");
$str_arrMonthsAbbr   = Array(1 => "Sty", "Lut", "Mar", "Kwi", "Maj", "Cze", "Lip", "Sie", "Wrz", "Pa¼", "Lis", "Gru");
$str_area            = Array(
                         'EU'   => 'Europa',
                         'AM'   => 'Ameryka',
                         'AF'   => 'Afryka',
                         'AS'   => 'Azja',
                         'OZ'   => 'Oceania',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "show unique visitors";
$strShowPageimpress  = "show all pageimpressions";
$strReload           = "prze³aduj";

// edSettings.php
$strCookieTxt        = "Ustaw cookie, aby unikn±æ zliczania w³asnych wej¶æ:";
$strCountMe          = "Policz mnie!";
$strDontCountMe      = "Nie licz mnie!";
$strEnableDellog     = "w³±cz kasowanie logu";
$strDisableDellog    = "wy³±cz kasowanie logu";
$strEnableDellog2    = "w³±cz funkcjê kasowania:";
$strResetHits        = "resetuj wej¶cia";
$strResHitsTxt       = "aby zresetowac wej¶cia podaj ilo¶æ:";
$strMysqlDump        = "Zobacz zrzut bazy MySQL";
$strStructOnly       = "Tylko struktura";
$strAddDropTbl       = "Dodaj 'drop table'";
$strStructData       = "Struktura i dane";
$strSend             = "Wy¶lij";
$strComplInserts     = "pe³ne wstawki";
$strDiskSpace        = "Przestrzeñ na dysku";
$strAvailSpace       = "Dostêpna przestrzeñ na dysku";
$strUsedSpace        = "U¿ywana przestrzeñ na dysku";
$strDbSpace          = "Used database space";
$strFreeSpace        = "Wolne miejsce";
$strFileUpload       = "wgrywanie wielu plików";
$strMaxFilesize      = "maksymalna wielko¶æ plików";
$strErrUpload        = "B³±d wgrywania. Spróbuj ponownie.";
$strUploadOk         = "Zakoñczone sukcesem!!";
$strFilename         = "nazwa pliku";
$strSize             = "wielko¶æ";
$strYourLast         = "oststnie";
$strCustomers        = "go¶cie";
$strYourTimeout      = "czas ustawiony na";
$strMinutes          = "minut";
$strBlocking         = "blocking";
$strShortQuery       = "short query";
$strOwnReferrers     = "own referrers";

// edUserprofile.php
$strUserprofile      = "modyfikuj profil";
$strEditProfile      = "edytuj konfiguracjê i naci¶nij przycisk:";
$strUrl1Txt          = "URL pliku strony g³ównej.";
$strUrl2Txt          = "Je¶li masz alternatywne adresy - wpisz ka¿dy w osobnej linii:";
$strEmail            = "e-mail:";
$strTimezone         = "strefa czasowa:";
$strUserLang         = "jêzyk u¿ytkownika:";
$strVisible          = "widoczne:";
$strVisibleStyle     = "widoczne style:";
$strTimeout          = "czas:";
$strEmailNotif       = "informacja na e-mail: co...";
$strDefLogNo         = "domy¶lna liczba logów do pokazania:";
$strKwListMode       = "tryb listy s³ów kluczowych:";
$strAllowDemo        = "udostêpnij tryb DEMO:";
$strTTF              = "wybierz czcionkê TrueType:";
$strAvailFonts       = "available fonts";
$strFontSize         = "wielko¶æ czcionki:";
$strFontColor        = "kolor:";
$strBgColor          = "kolor t³a:";
$strTransBg          = "przezroczyste t³o:";
$strSample           = "przyk³adowy obraz:";
$strChangePw         = "zmieñ has³o:";
$strOldPw            = "stare has³o:";
$strNewPw            = "nowe has³o:";
$strReenterPw        = "wpisz ponownie:";
$strLoadCSS          = "za³aduj arkusz stylów:";
$strView4Msg1        = "profil u¿ytkownika zmodyfikowany!";
$strView4Msg2        = "Nie mo¿na zmodyfikowaæ profilu u¿ytkownika!!!";
$strView4Msg3        = "jak go¶æ nie mo¿esz wprowadzac<br />¿adnych zmian!";
$strPwChanged        = "has³o zmienione !";
$strWrongPw          = "b³êdne has³o !!";

// admin/index.php
$strAdmin            = "administracja";
$strMaintenance      = "stan";
$strCheckNewVer      = "Sprzewd¼ nowe wersje";
$strCreate           = "Utwórz nowe konto u¿ytkownika:";
$strAdminMsg1        = "u¿ytkownik istnieje";
$strAdminMsg2        = "u¿ytkownik utworzony";
$strAdminMsg3        = "Podano b³êdny adres e-mail!";
$strAdminMsg4        = "usernames must only contain alphanumeric characters,<br />.,-,_, and must be less than 30 characters!";
$strAdminErr1        = "podczas tworzenia nowego uzytkownika wyst±pi³ b³±d";
$strDelUser          = "Skasuj u¿ytkownika:";
$strDelErr           = "Houston, mamy problem !!";
$strDelOk            = "wszystkie dane u¿ytkownika zosta³y skasowane!";
$strWrongPwUser      = "b³êdne has³o lub nazwa u¿ytkownika !";
$strAdminCookie      = "utwórz cookie administratora";
$strNetcheck         = "w³±cz netcheck";
$strHideAccounts     = "ukryj konta u¿ytkowników";
$strShowAccounts     = "poka¿ konta u¿ytkowników";
$strReadyDelete      = "gotowy do kasowania";
$strMailinglist      = "lista e-mailowa";
$strLatestPphlVers   = "Ostatnia wersja PowerPhlogger Version";
$strLatestVersion    = "Ostatnia wersja";
$strReleaseDate      = "Data wydania";
$strDownloadLoc      = "Lokacja pliku";
$strReloadKeywords   = "prze³aduj s³owa kluczowe";
$strReloadKeyw1      = "This will refresh your users keyword-toplist";
$strReloadKeyw2      = "Do not run this unless you've modified engines-list.ini !!";

// admin/change_userprofile.php
$strMaxLoglim        = "limit logów:";
$strMaxPath          = "limit hostów go¶ci:";
?>
