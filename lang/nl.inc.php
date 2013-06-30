<?php
/* Dutch language localization
 *
 * $Id: nl.inc.php,v 1.38 2002/10/28 17:14:44 cvs_iezzi Exp $
 * credits to: Marco Broeken <marco@silver.nl> www.knijper.nl
 *             Rob den Toom <rodeto@wxs.nl>
 */


$strCharset          = "iso-8859-1";
$strThousandSep      = " ";
$strDate             = "d-m-Y";
$strDate2            = "M d, Y";
$strNumThousandsSep  = ',';
$strNumDecimalSep    = '.';
$strByteUnits        = array('Bytes', 'KB', 'MB', 'GB');

$strOn               = "aan";
$strOff              = "uit";
$strEnable           = "activeer";
$strEnabled          = "geactiveerd";
$strDisable          = "uitgeschakeld";
$strDisabled         = "uitgeschakeld";
$strDellog           = "verwijder logbestanden";
$strTopOfPage        = "naar boven";
$strTotal            = "totaal";
$strHits             = "hits";
$strUniqs            = "uniqs";
$strUniq             = "uniq";
$strPageimpressions  = "pagina impressies";
$strDomains          = "domeinen";
$strConfiguration    = "configuratie";
$strCurrConfig       = "huidige configuratie:";
$strUsername         = "gebruikersnaam";
$strPassword         = "wachtwoord";
$strDelete           = "verwijderen";
$strUser             = "gebruiker";
$strUseraccount      = "useraccount";
$strUseraccounts     = "useraccounts";
$strFrom             = "van";
$strTo               = "aan";
$strTo2              = "aan";
$strEdit             = "edit";
$strSet              = "set";
$strMove             = "verplaats";
$strDefault          = "default";
$strCreateNew        = "maak nieuwe";
$strSave             = "bewaar";
$strUnknown          = "onbekend";
$strUndefined        = "niet gedefinieerd";
$strCache            = "cache";
$strSeconds          = "seconden";
$strDatabase         = "database";
$strTable            = "tabel";
$strCalc             = "calc";
$strStep             = "step";
$strSystem           = "systeem";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 uur) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 uur) Midway Island, Samoa";
$loca['tz']['-10']   = "(GMT -10:00 uur) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 uur) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 uur) Pacific Time (US &amp; Canada), Tijuana";
$loca['tz']['-7']    = "(GMT -7:00 uur) Mountain Time (US &amp; Canada), Arizona";
$loca['tz']['-6']    = "(GMT -6:00 uur) Central Time (US &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 uur) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 uur) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 uur) Newfoundland";
$loca['tz']['-3']    = "(GMT -3:00 uur) Brassila, Buenos Aires, Georgetown, Falkland Is";
$loca['tz']['-2']    = "(GMT -2:00 uur) Mid-Atlantic, Ascension Is., St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 uur) Azores, Cape Verde Islands";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 uur) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome";
$loca['tz']['2']     = "(GMT +2:00 uur) Cairo, Helsinki, Kaliningrad, South Africa";
$loca['tz']['3']     = "(GMT +3:00 uur) Baghdad, Riyadh, Moscow, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 uur) Tehran";
$loca['tz']['4']     = "(GMT +4:00 uur) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 uur) Kabul";
$loca['tz']['5']     = "(GMT +5:00 uur) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 uur) Bombay, Calcutta, Madras, New Delhi";
$loca['tz']['6']     = "(GMT +6:00 uur) Almaty, Colombo, Dhaka, Novosibirsk";
$loca['tz']['6.5']   = "(GMT +6:30 hours) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 uur) Bangkok, Hanoi, Jakarta";
$loca['tz']['8']     = "(GMT +8:00 uur) Beijing, Hong Kong, Perth, Singapore, Taipei";
$loca['tz']['9']     = "(GMT +9:00 uur) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 uur) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 uur) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$loca['tz']['11']    = "(GMT +11:00 uur) Magadan, New Caledonia, Solomon Islands";
$loca['tz']['12']    = "(GMT +12:00 uur) Auckland, Wellington, Fiji, Marshall Island";

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
$strAccActivation    = "account activatie";

// pages
$strUsrPage[0]       = "inloggen/uitloggen";
$strUsrPage[1]       = "logbestand";
$strUsrPage[2]       = "bezoekers";
$strUsrPage[3]       = "dag / maand staten";
$strUsrPage[4]       = "browser, OS";
$strUsrPage[5]       = "instellingen";
$strUsrPage[6]       = "gebruikersprofiel";
$strAdminPage[0]     = "administratie";
$strAdminPage[1]     = "maak/verwijder user";
$strAdminPage[2]     = "useraccounts";
$strAdminPage[3]     = "laatste users";
$strAdminPage[4]     = "CSS editor";
$strAdminPage[5]     = "statistieken";
$strAdminPage[6]     = "mailing list";

// functions.lib.php
$strPrev             = "vorige";
$strNext             = "volgende";

// headfoot.inc.php
$strTrackedSite      = "De website die nu gemeten wordt is:";
$strCurrentTime      = "Het is nu";
$strHeadDateFormat   = "M d, <b>h:iA</b>";
$strYourHits         = "uw hits:";
$strSlogan           = "Power Phlogger, online statistieken";

// index.php
$strEnterUsernPw     = "Voer uw gebruikersnaam en wachtwoord in";
$strLostPw           = "Wachtwoord kwijt?";
$strLinkNewPw        = "Nieuw wachtwoord";
$strGetFreeAccount   = "Klik hier voor een gratis account";
$strSignUpUseracc    = "Klik hier voor een gratis account";
$strMsgWrongPw       = "<b>U heeft een verkeerd wachtwoord of gebruikersnaam ingevoerd!</b><br />Probeer het opnieuw.";
$strMsgNewPw         = "<b>Uw nieuwe wachtwoord is aangemaakt.</b><br />Het nieuwe wachtwoord is verzonden naar het door u opgegeven e-mailadres.";
// dspNewPw.php
$strForVerification  = "Voer uw gebruikersnaam en wachtwoord in voor identificatie";
$strGetIt            = "";
$strMsgNoValidUser   = "<b>U heeft geen geldige gebruikersnaam en/of wachtwoord ingevuld</b><br />Probeer het opnieuw";

// signup.php
$strSignUp           = "Maak nu uw persoonlijke account:";
$strHtmlCode         = "HTML Code";
$strAddHtmlCode      = "voeg de volgende html code in op de pagina's die u gemeten wilt hebben:";
$strJsFile           = "als u uw persoonlijke cooltracker.js file kwijt bent kunt u die hier weer downloaden:";
$strInstructions     = "INSTRUCTIES:";
$strConfLogin        = "als u in wilt loggen met uw nieuwe account, moet u inloggen met het paswoord die wij u met de email hebben toegezonden.";
$strConfLogin2       = "Als u uw nieuwe account niet bevestigd wordt uw account gedelete na ".$cleanup_lim." uur";
$strUploadJs         = "upload de tracker.js-bestand die u heeft ontvangen als attachment.";
$strNoSignUp         = "Sorry, we kunnen geen gratis accounts meer verstrekken op deze server !";
$strReturnToLogin    = "keer terug naar het login scherm";

// dspLogs.php
$strShowLogs         = "laat logbestanden zien:";
$strSelect           = "selecteren";
$strUnselect         = "unselect";
$strAll              = "alles";
$strTurnShowref      = "zet referenties";
$strFullAgt          = "volledige agent info";
$strDemoMode         = "in demo-mode!";
$strGuestMsg1        = "als gast-gebruiker is het u niet toegestaan om logbestanden te deleten.";
$strGuestMsg2        = "zet a.u.b. de delete-logbestanden funktie aan.";
$strViewLogs         = "laat logbestanden zien";
$strHostIP           = "host / IP-adres";
$strReferrer         = "referentie";
$strReferrers        = "referenties";
$strAgent            = "agent informatie";
$strRes              = "resolutie";
$strColor            = "kleur";
$strTimestamp        = "tijd";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "bezoekers per dag";
$strPerDay           = "per dag";
$strVisPerHour       = "bezoekers per uur";
$strLast             = "laatste";
$strMonth            = "maand";
$strMonths           = "maanden";
$strToday            = "vandaag";
$strAverage          = "gemiddelde";
$strAverageAbbr      = "gem.";
$strDay              = "dag";
$strDays             = "dag";
$strCurrOnlUsers     = "gebruikers momenteel online";
$strIPkept           = "IP's worden de laatste";
$strIPkept2          = "minuten behouden";
$strOnline           = "online";
$strEntryTime        = "binnenkomst tijd";
$strLastReload       = "laatste reload";
$strLastUrl          = "laatste URL";
$strSince            = "sinds";
$strMultipage        = "veelvuldige pagina's";
$strKeywords         = "sleutelwoorden";
$strSingleWords      = "single words";
$strWholeStrings     = "whole strings";
$strDownloads        = "downloads";
$strTerritories      = "gebieden";
$str_arrMonths       = Array(1 => "Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli",
                                    "Augustus", "September", "Oktober", "November", "December");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Feb", "Mrt", "Apr", "Mei", "Jun", "Jul", "Aug", "Sept", "Okt", "Nov", "Dec");
$str_area            = Array(
                         'EU'   => 'Europa',
                         'AM'   => 'Amerika',
                         'AF'   => 'Afrika',
                         'AS'   => 'Azie',
                         'OZ'   => 'Oceanie',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "laat unieke bezoekers zien";
$strShowPageimpress  = "laat alle pagina-impressies zien";
$strReload           = "reload";

// edSettings.php
$strCookieTxt        = "maak een cookie om eigen hits te verbergen:";
$strCountMe          = "tel me!";
$strDontCountMe      = "tel me niet!";
$strEnableDellog     = "delete logbestanden aan";
$strDisableDellog    = "delete logbestanden uit";
$strEnableDellog2    = "delete functie aan:";
$strResetHits        = "reset hits";
$strResHitsTxt       = "om uw hit nr. te veranderen moet u een nummer invoeren:";
$strMysqlDump        = "bekijk mySQL dump (schema)";
$strStructOnly       = "struktuur alleen";
$strAddDropTbl       = "'drop table' toevoegen";
$strStructData       = "structuur en data";
$strSend             = "zenden";
$strComplInserts     = "complete inserts";
$strDiskSpace        = "harddisk ruimte";
$strAvailSpace       = "beschikbare ruimte";
$strUsedSpace        = "bebruikte ruimte over";
$strDbSpace          = "gebruikte database ruimte";
$strFreeSpace        = "vrije ruimte over";
$strFileUpload       = "veelvoudige bestand upload";
$strMaxFilesize      = "maximum bestands grootte";
$strErrUpload        = "Fout in upload. probeer opnieuw.";
$strUploadOk         = "met succes geupload!!";
$strFilename         = "bestandsnaam";
$strSize             = "grootte";
$strYourLast         = "uw laatste";
$strCustomers        = "bezoekers";
$strYourTimeout      = "de timeout is gezet op";
$strMinutes          = "minuten.";
$strBlocking         = "blocking";
$strShortQuery       = "short query";
$strOwnReferrers     = "eigen referrers";

// edUserprofile.php
$strUserprofile      = ". Wijzig hier uw gebruikersprofiel.";
$strEditProfile      = "Verander uw configuratie en klik de button:";
$strUrl1Txt          = "URL naar uw index file op de website die gemeten moet worden.";
$strUrl2Txt          = "Als u een 2e URL hebt die naar dezelfde pagina verwijst<br />type het op een nieuwe regel:";
$strEmail            = "email adres:";
$strTimezone         = "uw tijdzone:";
$strUserLang         = "gebruikerstaal:";
$strVisible          = "zichtbaar:";
$strVisibleStyle     = "zichtbare manier:";
$strTimeout          = "korte onderbreking:";
$strEmailNotif       = "email notificatie: elke ";
$strDefLogNo         = "normaal aantal logbestanden:";
$strKwListMode       = "keyword-lijst met:";
$strAllowDemo        = "sta demo-mode toe:";
$strTTF              = "kies lettertype:";
$strAvailFonts       = "beschikbare fonts";
$strFontSize         = "lettertype grootte:";
$strFontColor        = "lettertype kleur:";
$strBgColor          = "achtergrond kleur:";
$strTransBg          = "doorzichtige achtergrond:";
$strSample           = "voorbeeld:";
$strChangePw         = "verander hier uw wachtwoord:";
$strOldPw            = "oude wachtwoord:";
$strNewPw            = "nieuwe wachtwoord";
$strReenterPw        = "opnieuw nieuwe wachtwoord:";
$strLoadCSS          = "welke stylesheet:";
$strView4Msg1        = "gebruikersprofiel met succes geupdate.";
$strView4Msg2        = "probleem met updaten van uw gebruikersprofiel";
$strView4Msg3        = "als gast mag u <br />helemaal niets veranderen";
$strPwChanged        = "wachtwoord veranderd";
$strWrongPw          = "verkeerd wachtwoord";

// admin/index.php
$strAdmin            = "administratie";
$strMaintenance      = "onderhoud";
$strCheckNewVer      = "check voor een nieuwe versie";
$strCreate           = "maak een nieuwe gebruiker:";
$strAdminMsg1        = "gebruiker bestaat al";
$strAdminMsg2        = "gebruiker met succes gemaakt";
$strAdminMsg3        = "u heeft een foutief e-mailadres ingevoerd";
$strAdminMsg4        = "gebruikersnamen mogen alleen cijfers en letters bevatten,<br />.,-,_, en moeten minder dan 30 karakters bevatten.";
$strAdminErr1        = "probleem met aanmaken nieuwe gebruiker";
$strDelUser          = "verwijder gebruiker:";
$strDelErr           = "probleem";
$strDelOk            = "alle gebruikers data verwijderd!";
$strWrongPwUser      = "verkeerde inloggegevens";
$strAdminCookie      = "maak administrator cookie";
$strNetcheck         = "netcheck aan";
$strHideAccounts     = "onzichtbare gebruikers";
$strShowAccounts     = "laat gebruikers zien";
$strReadyDelete      = "wilt u dit eccht verwijderen?";
$strMailinglist      = "mailing list";
$strLatestPphlVers   = "meest recente PowerPhlogger Versie";
$strLatestVersion    = "laatste versie";
$strReleaseDate      = "release datum";
$strDownloadLoc      = "Download Locations";
$strReloadKeywords   = "reload keywords";
$strReloadKeyw1      = "This will refresh your users keyword-toplist";
$strReloadKeyw2      = "Do not run this unless you've modified engines-list.ini !!";

// admin/change_userprofile.php
$strMaxLoglim        = "maximum log limiet:";
$strMaxPath          = "maximum bewaarde bezoekers paths:";
?>
