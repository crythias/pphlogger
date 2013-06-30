<?php
/* Swedish language localization
 *
 * $Id: se.inc.php,v 1.41 2002/11/03 07:35:36 cvs_iezzi Exp $
 * credits to: Erik Holmquist <erikholm@erikholmquist.net> www.erikholmquist.net
 * corrections by: Mattias Pettersson <mattias.pettersson@matesolutions.net> www.matesolutions.net
 */

$strCharset          = "iso-8859-1";
$strThousandSep      = " ";
$strDate             = "Y-m-d";
$strDate2            = "Y-m-d";
$strNumThousandsSep  = ' ';
$strNumDecimalSep    = ',';
$strByteUnits        = array('bytes', 'kB', 'MB', 'GB');

$strOn               = "på";
$strOff              = "av";
$strEnable           = "aktivera";
$strEnabled          = "aktiv";
$strDisable          = "avbryt";
$strDisabled         = "avbruten";
$strDellog           = "loggborttagning";
$strTopOfPage        = "Upp till toppen";
$strTotal            = "Totalt";
$strHits             = "träffar";
$strUniqs            = "unika";
$strUniq             = "unik";
$strPageimpressions  = "sidvisningar";
$strDomains          = "domäner";
$strConfiguration    = "inställning";
$strCurrConfig       = "aktuell inställning:";
$strUsername         = "användarnamn";
$strPassword         = "lösenord";
$strDelete           = "ta bort";
$strUser             = "användare";
$strUseraccount      = "användarkonto";
$strUseraccounts     = "användarkonton";
$strFrom             = "från";
$strTo               = "till";
$strTo2              = "till";
$strEdit             = "ändra";
$strSet              = "set";
$strMove             = "flytta";
$strDefault          = "standard";
$strCreateNew        = "skapa ny";
$strSave             = "spara";
$strUnknown          = "okänd";
$strUndefined        = "odefinierad";
$strCache            = "cache";
$strSeconds          = "sekunder";
$strDatabase         = "databas";
$strTable            = "tabell";
$strCalc             = "beräknat";
$strStep             = "steg";
$strSystem           = "system";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 timmar) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 timmar) Midway Island, Samoa";
$loca['tz']['-10']   = "(GMT -10:00 timmar) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 timmar) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 timmar) Pacific Time (US &amp; Canada), Tijuana";
$loca['tz']['-7']    = "(GMT -7:00 timmar) Mountain Time (US &amp; Canada), Arizona";
$loca['tz']['-6']    = "(GMT -6:00 timmar) Central Time (US &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 timmar) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 timmar) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 timmar) Newfoundland";
$loca['tz']['-3']    = "(GMT -3:00 timmar) Brassila, Buenos Aires, Georgetown, Falkland Is";
$loca['tz']['-2']    = "(GMT -2:00 timmar) Mid-Atlantic, Ascension Is., St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 timme) Azores, Cape Verde Islands";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 timme) Stockholm, Berlin, Brussels, Madrid, Paris, Rome";
$loca['tz']['2']     = "(GMT +2:00 timmar) Cairo, Helsingfors, Kaliningrad, South Africa";
$loca['tz']['3']     = "(GMT +3:00 timmar) Baghdad, Riyadh, Moscow, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 timmar) Tehran";
$loca['tz']['4']     = "(GMT +4:00 timmar) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 timmar) Kabul";
$loca['tz']['5']     = "(GMT +5:00 timmar) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 timmar) Bombay, Calcutta, Madras, New Delhi";
$loca['tz']['6']     = "(GMT +6:00 timmar) Almaty, Colombo, Dhaka, Novosibirsk";
$loca['tz']['6.5']   = "(GMT +6:30 timmar) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 timmar) Bangkok, Hanoi, Jakarta";
$loca['tz']['8']     = "(GMT +8:00 timmar) Beijing, Hong Kong, Perth, Singapore, Taipei";
$loca['tz']['9']     = "(GMT +9:00 timmar) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 timmar) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 timmar) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$loca['tz']['11']    = "(GMT +11:00 timmar) Magadan, New Caledonia, Solomon Islands";
$loca['tz']['12']    = "(GMT +12:00 timmar) Auckland, Wellington, Fiji, Marshall Island";

// Language selection
$loca['lang']['bh']  = "Bosniska";
$loca['lang']['cn']  = "Förenklad Kinesiska";
$loca['lang']['de']  = "Tyska";
$loca['lang']['dk']  = "Danska";
$loca['lang']['en']  = "Engelska";
$loca['lang']['es']  = "Spanska";
$loca['lang']['fr']  = "Franska";
$loca['lang']['gr']  = "Grekiska";
$loca['lang']['it']  = "Italienska";
$loca['lang']['jp']  = "Japanese";
$loca['lang']['lv']  = "Lettiska";
$loca['lang']['nl']  = "Holländska";
$loca['lang']['no']  = "Norska";
$loca['lang']['pl']  = "Polska";
$loca['lang']['po']  = "Brasiliansk Portugese";
$loca['lang']['ro']  = "Romanian";
$loca['lang']['ru']  = "Rysska";
$loca['lang']['se']  = "Svenska";
$loca['lang']['tr']  = "Turkiska";
$loca['lang']['tw']  = "Traditionell Kinesiska";

// setup.php
$strSetup                                         = "Inställningar";
$loca['setup']['header1']                         = "Adminstrationsinställningar";
$loca['setup']['header2']                         = "Generella Inställningar";
$loca['setup']['header3']                         = "Speciella Inställningar";
$loca['setup']['header4']                         = "Grafiska Inställningar";
$loca['setup']['header5']                         = "Loggbegränsningar / Autoradering";
$loca['setup']['header6']                         = "Visa begränsningar";
$loca['setup']['header7']                         = "Visa inställningar";
$loca['setup']['intro_txt']                       = "Detta script kommer hjälpa dig att sätta upp de variabler som du behöver ställa in för att börja. Du kommer att bli tagen genom en mängd sidor. Varje sida ställer in en viss del av programmet.";
$loca['setup']['step0_txt']                       = "<b>Licens</b> -- Vänligen läs igenom GNU General Public License. PowerPhlogger utvecklas som gratis programvara, med det finns regler för distribution och ändringar.";
$loca['setup']['step1_txt']                       = "<b>generella inställningar</b> -- Kontroller alla fält på på denna sida och ange korrekt information. Om du är osäker, behåll standardinställningarna.";
$loca['setup']['step2_txt']                       = "<b>valfria inställningar</b> -- För det mesta ska du ha dessa ställda på det som redan står. Redigera dem om du är säker på din sak.";
$loca['setup']['step3_txt_a']                     = "<b>inställningar genomförda</b> -- Du kan nu börja nyttja tjänsten.<br /><br />Glöm inte att döpa om ditt admin bibliotek och säkra det med htaccess.<br />Läs noggrant dokumentation för mer information";
$loca['setup']['step3_txt_b']                     = "Du kan nu sätta upp användarkonton";

$loca['setup']['pphlogger_location']['title']     = "PowerPhlogger Plats";
$loca['setup']['pphlogger_location']['descr']     = "URL till din PowerPhlogger";
$loca['setup']['admin_mail']['title']             = "Administratörens E-postadress";
$loca['setup']['admin_mail']['descr']             = "(din e-postadress)";
$loca['setup']['admin_name']['title']             = "Administratörens Namn";
$loca['setup']['admin_name']['descr']             = "(ditt faktiska namn)";
$loca['setup']['admin_pw']['title']               = "Administratörens Lösenord";
$loca['setup']['admin_pw']['descr']               = "Används för att radera användarkonton";
$loca['setup']['server_GMT']['title']             = "Systemets Tids-zon";
$loca['setup']['server_GMT']['descr']             = "Tids-zon där din server står";
$loca['setup']['admin_GMT']['title']              = "Administratörens Tids-zon";
$loca['setup']['admin_GMT']['descr']              = "Tids-zon där du är";
$loca['setup']['default_lang']['title']           = "Standardspråk";
$loca['setup']['default_lang']['descr']           = "(vilket språk är standard på webbplatsen?)";
$loca['setup']['cssid']['title']                  = "Standardutseende";
$loca['setup']['cssid']['descr']                  = "(vilket utseende är standard på webbplatsen?)";
$loca['setup']['signup_ok']['title']              = "Tillåt vem som helst att sätta upp ett konto";
$loca['setup']['signup_ok']['descr']              = "Vill du att sidan där man kan ansöka om konto ska vara tillgänglig?";
$loca['setup']['master_timeout']['title']         = "Timeout för Användarloggen";
$loca['setup']['master_timeout']['descr']         = "[i sekunder, standard = 30min = 1800]";
$loca['setup']['traceroute']['title']             = "URL till TraceRoute";
$loca['setup']['traceroute']['descr']             = "Om du känner till en annan tjänst som ger dig traceroute så ange den här.";
$loca['setup']['pass_length']['title']            = "Användarnas minsta lösenordslängd";
$loca['setup']['pass_length']['descr']            = "Längden på det genererade lösenordet (sätt INTE denna högre än 15!)";
$loca['setup']['pw_privacy']['title']             = "Lösenordsskydd";
$loca['setup']['pw_privacy']['descr']             = "Om du stänger av lösenordsskyddet, kommer en BCC: av lösenordet skickas till administratören. Av hänsyn till privatlivet så är denna satt på som standard.";
$loca['setup']['cache_calendar']['title']         = "Kalendercache";
$loca['setup']['cache_calendar']['descr']         = "Sätt cachetiden i sekunder. Om du sätter denna till 0 (standard), så kommer kalenderna att använda den avancerade cachningsfunktionen (rekommenderas varmt!)";
$loca['setup']['mxlookup']['title']               = "Kontrollera MX";
$loca['setup']['mxlookup']['descr']               = "För att göra e-post valideringen mer intelligent, slå på detta. Om den är påslagen, kommer funktionen att verifiera att domänen faktiskt finns. Standard är att den är avslagen för att vissa windowsversionen inte stödjer denna funktion!";
$loca['setup']['loopback_bug']['title']           = "Loopback Bug";
$loca['setup']['loopback_bug']['descr']           = "Slå endast på denna om du använder f2s eller liknande hosting och du får fel IP/Proxyinformation!";
$loca['setup']['mysqldump_on']['title']           = "MySQL Dump";
$loca['setup']['mysqldump_on']['descr']           = "slå på/slå av mysql dump i inställningarna för alla användare";
$loca['setup']['md5form']['title']                = "MD5 Login Form";
$loca['setup']['md5form']['descr']                = "slå på/slå av md5-kryptering (använder JS) för loginformuläret";
$loca['setup']['mail_mod']['title']               = "E-postmodul";
$loca['setup']['mail_mod']['descr']               = "Välj den modul som du vill använda för att skicka bekräftelsemail inklusive pphlogger.js-filen [libmail|htmlmime|plain]";
$loca['setup']['GD_enabled']['title']             = "GD påslaget";
$loca['setup']['GD_enabled']['descr']             = "Om du inte kan få igång din GD-lib eller om din hostingleverantör inte vill installera den, du kan slå av GD-bilder i PPhlogger. Du kommer gå miste om en hel del funktioner om du slår av den!";
$loca['setup']['gd_img_type']['title']            = "GD Bild Typ";
$loca['setup']['gd_img_type']['descr']            = "GD-library: Ändra detta till det korrekta bildformatet om du skulle råka på några problem. Standard är 'auto' för autoavkänning. [auto|png|gif|jpeg]";
$loca['setup']['Freetype_enabled']['title']       = "Freetype påslaget";
$loca['setup']['Freetype_enabled']['descr']       = "Om du inte kan få ditt Freetype-library att fungera eller om din hostingleverantör inte vill installera det, så kan du slå av det här. Användare kan dock inte använda TTF-fonter för att bygga räknare. Inbyggda fonter bör vara tillgängliga dock.";
$loca['setup']['ttf_location']['title']           = "TTF bibliotek";
$loca['setup']['ttf_location']['descr']           = "Om du inte kan se räknarbilden och du använder GD 2.x eller GD 1.x i en buggig PHP distribution, försök då sätta en absolut serverbibliotek till ditt TTF-bibliotek. ÄNDRA INTE PÅ DENNA ANNARS [relative|/your/absolute/path/to/ttf_fonts/]";
$loca['setup']['cleanup_lim']['title']            = "Upprensningsgräns";
$loca['setup']['cleanup_lim']['descr']            = "tidgräns varefter icke bekräftade användarkonton raderas [timmar]";
$loca['setup']['cleanup_old']['title']            = "Rensa upp gamla gräns";
$loca['setup']['cleanup_old']['descr']            = "Efter hur många dagar icke använda (inga träffar, inget login) konton raders? [dagar]";
$loca['setup']['dellog_global']['title']          = "Loggradering global switch";
$loca['setup']['dellog_global']['descr']          = "Om du sätter denna till falsk, användas varje användares egen inställning. Om du sätter den till sant, använd följande värden...";
$loca['setup']['dellog_lim']['title']             = "Loggradering efter loggar";
$loca['setup']['dellog_lim']['descr']             = "Sätt antalet loggar att spara. Om du sätter denna till 0, kommer det inte finnas någon begränsning [standard].";
$loca['setup']['dellog_lim_d']['title']           = "Loggradering efter dagar";
$loca['setup']['dellog_lim_d']['descr']           = "Sätt antalet dagar efter vilket loggar raderas. Om du sätter detta till 0 så finns ingen begränsning [standard].";
$loca['setup']['dellog_lim_prob']['title']        = "Log Deletion Probability";
$loca['setup']['dellog_lim_prob']['descr']        = "Deletion probability in percent";
$loca['setup']['delpath_global']['title']         = "Path radering global Switch";
$loca['setup']['delpath_global']['descr']         = "Om du sätter denna till flask, kommer varje användares egen inställning att användas. Om du ställer den till sant, använd följande värden....";
$loca['setup']['delpath_lim']['title']            = "Path radering efter loggar";
$loca['setup']['delpath_lim']['descr']            = "Set number of visitor paths to store. If you set this to 0, there will be no limit.";
$loca['setup']['delpath_lim_d']['title']          = "Path radering efter dagar";
$loca['setup']['delpath_lim_d']['descr']          = "Ställ antalet dagar efter att besökspaths blir raderade. Om sätter denna till 0, så finns ingen begränsning [standard].";
$loca['setup']['delpath_lim_prob']['title']       = "Path Deletion Probability";
$loca['setup']['delpath_lim_prob']['descr']       = "Deletion probability in percent";
$loca['setup']['show_cust']['title']              = "Användarlogg Kundbegränsning";
$loca['setup']['show_cust']['descr']              = "Hur många kundloggar ska visas under användarlogg?";
$loca['setup']['calendar_months']['title']        = "Kalendermånads begränsning";
$loca['setup']['calendar_months']['descr']        = "Hur många månader ska visas i kalendern?";
$loca['setup']['topref_lim']['title']             = "Topp Referersbegränsning";
$loca['setup']['topref_lim']['descr']             = "";
$loca['setup']['topdomain_lim']['title']          = "Topp Domänsbegränsning";
$loca['setup']['topdomain_lim']['descr']          = "";
$loca['setup']['topres_lim']['title']             = "Topp Upplösningsbegränsning";
$loca['setup']['topres_lim']['descr']             = "";
$loca['setup']['topcolor_lim']['title']           = "Topp Färgbegränsning";
$loca['setup']['topcolor_lim']['descr']           = "";
$loca['setup']['topkeywords_lim']['title']        = "Topp Nyckelordsbegränsning";
$loca['setup']['topkeywords_lim']['descr']        = "";
$loca['setup']['topbrowseros_lim']['title']       = "Topp Webbläsare/Operativssystemsbegränsning";
$loca['setup']['topbrowseros_lim']['descr']       = "";
$loca['setup']['topsearcheng_lim']['title']       = "Topp Sökmotorsbegränsning";
$loca['setup']['topsearcheng_lim']['descr']       = "";
$loca['setup']['mpfront_lim']['title']            = "MP-front begränsning";
$loca['setup']['mpfront_lim']['descr']            = "Begränsa flersidors på slutet av logvisning.";
$loca['setup']['useraccount_lim']['title']        = "Användarkonto-Visningsbegränsning";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "Senaste refererlista begränsning";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "MP maxbredd";
$loca['setup']['width_max']['descr']              = "MP visning i Loggen [pixel]";
$loca['setup']['width_factor']['title']           = "MP breddfaktor";
$loca['setup']['width_factor']['descr']           = "MP visnings i Loggen [faktor]";
$loca['setup']['browseros_barsize']['title']      = "Webbläsare/Operativsystems storlek";
$loca['setup']['browseros_barsize']['descr']      = "Max storlek av procentraderna Webbläsar/Operativsystems statistiken [pixel]";
$loca['setup']['extended']['title']               = "Utökad logglista";
$loca['setup']['extended']['descr']               = "Om du sätter denna till falskt, kommer du inte att se upplösnings & färgkolumnenerna (bara rekommederad för användare med liten upplösning på skärmen)";
$loca['setup']['ttf_demo_size']['title']          = "TTF Demostorlek";
$loca['setup']['ttf_demo_size']['descr']          = "TTF-font demo [punkter]";
$loca['setup']['css_show']['title']               = "CSS visning";
$loca['setup']['css_show']['descr']               = "Vilka färger skall visas i CSS redigerstabellen? [komma-separerad]";

//email stuff
$strAccActivation    = "Kontoaktivering";

// pages
$strUsrPage[0]       = "logga in/logga ut";
$strUsrPage[1]       = "logg";
$strUsrPage[2]       = "statistik";
$strUsrPage[3]       = "statistik 2";
$strUsrPage[4]       = "statistik 3";
$strUsrPage[5]       = "inställningar";
$strUsrPage[6]       = "användarprofil";
$strAdminPage[0]     = "administration";
$strAdminPage[1]     = "skapa/radera användare";
$strAdminPage[2]     = "användarkonton";
$strAdminPage[3]     = "senaste inloggningarna";
$strAdminPage[4]     = "CSS redigerare";
$strAdminPage[5]     = "statistik";
$strAdminPage[6]     = "e-postlista";

// functions.lib.php
$strPrev             = "föregående";
$strNext             = "nästa";

// headfoot.inc.php
$strTrackedSite      = "webbplats som loggas:";
$strCurrentTime      = "klockan är";
$strHeadDateFormat   = "Y-m-d <b>h:m</b>";
$strYourHits         = "antal träffar:";
$strSlogan           = "...för dig som är intresserad av statistik!";

// index.php
$strEnterUsernPw     = "ange ditt användarnamn och lösenord";
$strLostPw           = "förlorat lösenordet?";
$strLinkNewPw        = "NYTT LÖSENORD";
$strGetFreeAccount   = "Skaffa ditt gratiskonto";
$strSignUpUseracc    = "Ansök om ett gratis användarkonto!";
$strMsgWrongPw       = "<b>du angav fel lösenord eller användarnamn!!!</b><br />försök igen...";
$strMsgNewPw         = "<b>ditt nya lösenord har utfärdats!</b><br />det skickades till den e-postadressen som du angav.";
// dspNewPw.php
$strForVerification  = "för verifiering, ange ditt användarnamn och din e-postadress";
$strGetIt            = "kör hårt!";
$strMsgNoValidUser   = "<b>du angav inte någon giltig e-post/användarnamn</b><br />försök igen...";

// signup.php
$strSignUp           = "Ansök om ett loggkonto:";
$strHtmlCode         = "HTML kod";
$strAddHtmlCode      = "lägg till följande HTML-kod i alla filer som du vill logga:";
$strJsFile           = "Om du har tappat bort din pphlogger.js-fil, så kan du tanka ner den här:";
$strInstructions     = "INSTRUKTIONER:";
$strConfLogin        = "för att kunna bekräfta ditt nya konto, måste du logga in med det lösenord som vi skickat till din e-postadress.";
$strConfLogin2       = "Om du inte bekräftar ditt konto så kommer det att raderas efter ".$cleanup_lim." timmar";
$strUploadJs         = "ladda upp pphlogger.js-filen som du fått som bifogad fil.";
$strNoSignUp         = "Ledsen, men vi kan inte erbjuda några gratiskonton på denna server!";
$strReturnToLogin    = "återvänt till login";

// dspLogs.php
$strShowLogs         = "visa logg:";
$strSelect           = "välj";
$strUnselect         = "ta bort val";
$strAll              = "Alla";
$strTurnShowref      = "visa referenser";
$strFullAgt          = "full agent";
$strDemoMode         = "körs i demoläge!";
$strGuestMsg1        = "som gästanvändare kan du inte ta bort något!!!";
$strGuestMsg2        = "aktivera loggborttagning!";
$strViewLogs         = "visa logg";
$strHostIP           = "Host / IP";
$strReferrer         = "Referens";
$strReferrers        = "Referers";
$strAgent            = "Agentinformation";
$strRes              = "res";
$strColor            = "färg";
$strTimestamp        = "tid";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "Användare per dag";
$strPerDay           = "per dag";
$strVisPerHour       = "Besökare per timme";
$strLast             = "sista";
$strMonth            = "månaden";
$strMonths           = "månaderna";
$strToday            = "idag";
$strAverage          = "medel";
$strAverageAbbr      = "med.";
$strDay              = "dag";
$strDays             = "dag";
$strCurrOnlUsers     = "besökare just nu";
$strIPkept           = "IPnummer sparas som längst 30 minuter";
$strIPkept2          = "minuter";
$strOnline           = "online";
$strEntryTime        = "besökstid";
$strLastReload       = "senaste klick";
$strLastUrl          = "senaste URL";
$strSince            = "senaste";
$strMultipage        = "fler sidor";
$strKeywords         = "nyckelord";
$strSingleWords      = "ensamma ord";
$strWholeStrings     = "hela strängar";
$strDownloads        = "nerladdning";
$strTerritories      = "områden";
$str_arrMonths       = Array(1 => "Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", 
                                    "Augusti", "September", "Oktober", "November", "December");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec");
$str_area            = Array(
                         'EU'   => 'Europa',
                         'AM'   => 'Amerika',
                         'AF'   => 'Afrika',
                         'AS'   => 'Asien',
                         'OZ'   => 'Oceanien',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "visa unika besökare";
$strShowPageimpress  = "visa alla sidvisningar";
$strReload           = "ladda om";

// edSettings.php
$strCookieTxt        = "Baka kaka för att inte logga dig själv:";
$strCountMe          = "Räkna mig!";
$strDontCountMe      = "Räkna inte mig!";
$strEnableDellog     = "aktivera loggborttagning";
$strDisableDellog    = "avbryt loggborttagning";
$strEnableDellog2    = "aktivera loggborttagning:";
$strResetHits        = "återställ antalet träffar";
$strResHitsTxt       = "för att återställa träffar. skriv in ett nytt värde:";
$strMysqlDump        = "Visa mySQL dump (schema)";
$strStructOnly       = "Endast struktur";
$strAddDropTbl       = "Addera 'drop table'";
$strStructData       = "Struktur och data";
$strSend             = "Skicka";
$strComplInserts     = "komplett med inserts";
$strDiskSpace        = "Hårddiskutrymme";
$strAvailSpace       = "Tillgängligt diskutrymme";
$strUsedSpace        = "Använt diskutrymme";
$strDbSpace          = "Använd databasutrymme";
$strFreeSpace        = "Diskutrymme som är kvar";
$strFileUpload       = "ladda upp fil";
$strMaxFilesize      = "största filstorlek";
$strErrUpload        = "Fel vid uppladdning, försök igen.";
$strUploadOk         = "Uppladdning lyckades!!";
$strFilename         = "filnamn";
$strSize             = "storlek";
$strYourLast         = "dina sista";
$strCustomers        = "kunder";
$strYourTimeout      = "din timeout är inställd på";
$strMinutes          = "minuter.";
$strBlocking         = "blocking";
$strShortQuery       = "kort fråga";
$strOwnReferrers     = "egna referers";

// edUserprofile.php
$strUserprofile      = "ändra användarprofil";
$strEditProfile      = "ändra din inställning och klicka på knappen:";
$strUrl1Txt          = "URL adress till index-fil.";
//$strUrl2Txt          = "If you got alternate URLs enter them each on a new line:";
$strUrl2Txt          = "Om du har en annan URL som är kopplad till samma sida <br />skriv den i så fall här:";
$strEmail            = "epost:";
$strTimezone         = "din tidzon:";
$strUserLang         = "användarspråk:";
$strVisible          = "synlig:";
$strVisibleStyle     = "synlig stil:";
$strTimeout          = "timeout:";
$strEmailNotif       = "email underättning: varje...";
$strDefLogNo         = "antal som visas i logg:";
$strKwListMode       = "läge nyckelordslista:";
$strAllowDemo        = "tillåt demo läge:";
$strTTF              = "välj TrueType-Font:";
$strAvailFonts       = "tillgängliga typsnitt";
$strFontSize         = "font-storlek:";
$strFontColor        = "font-färg:";
$strBgColor          = "bakgrunds-färg:";
$strTransBg          = "transparent bakgrund:";
$strSample           = "testbild:";
$strChangePw         = "ändra lösenord:";
$strOldPw            = "gammalt lösenord:";
$strNewPw            = "nytt lösenord:";
$strReenterPw        = "skriv nytt lösenord igen:";
$strLoadCSS          = "ladda stylesheet:";
$strView4Msg1        = "användarprofil upppdaterades utan problem!";
$strView4Msg2        = "Det gick inte att uppdatera din användarprofil!!!";
$strView4Msg3        = "som gästanvändare är du inte tillåten<br />att göra ändringar!";
$strPwChanged        = "lösenord ändrat !";
$strWrongPw          = "fel lösenord !!";

// admin/index.php
$strAdmin            = "administration";
$strMaintenance      = "underhåll";
$strCheckNewVer      = "Kolla efter ny version";
$strCreate           = "Skapa nytt användarkonto:";
$strAdminMsg1        = "användarnamnet finns redan";
$strAdminMsg2        = "ditt önskade användarnamn är skapat";
$strAdminMsg3        = "Du har angivit en felaktig e-postadress!";
$strAdminMsg4        = "användarnamn får bara innehålla alfanumeriska tecken och <br />.,-,_, och måste vara kortare än 30 tecken!";
$strAdminErr1        = "det uppstod ett fel vid skapande av användare";
$strDelUser          = "Ta bort användare:";
$strDelErr           = "det uppstod ett problem !!";
$strDelOk            = "all användardata raderad!";
$strWrongPwUser      = "fel lösenord eller användarnamn!";
$strAdminCookie      = "skapa administratörskaka";
$strNetcheck         = "aktivera netcheck";
$strHideAccounts     = "göm användarkonto";
$strShowAccounts     = "visa användarkonto";
$strReadyDelete      = "redo att radera";
$strMailinglist      = "mailinglista";
$strLatestPphlVers   = "Senaste versionen av PowerPhlogger är";
$strLatestVersion    = "Senaste versionen";
$strReleaseDate      = "Datum för release";
$strDownloadLoc      = "Nerladdningsplatser";
$strReloadKeywords   = "ladda om nyckelord";
$strReloadKeyw1      = "Detta fräshar upp dina användares nyckelordslistor";
$strReloadKeyw2      = "Kör ej denna såvida du inte modifierat engines-list.ini !!";

// admin/change_userprofile.php
$strMaxLoglim        = "maximal loggstorlek:";
$strMaxPath          = "maximalt antal besöksvägar som sparas:";
?>
