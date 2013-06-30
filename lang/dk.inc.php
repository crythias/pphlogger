<?php
/* Danish language localization
 *
 * $Id: dk.inc.php,v 1.18 2002/10/28 17:14:46 cvs_iezzi Exp $
 * credits to: Jan Becher <support@gullestrupnet.dk>
 */


$strCharset          = "iso-8859-1";
$strThousandSep      = ",";
$strDate             = "d-m-Y";
$strDate2            = "d-m-y";
$strNumThousandsSep  = '.';
$strNumDecimalSep    = '.,';
$strByteUnits        = array('Bytes', 'KB', 'MB', 'GB');

$strOn               = "til";
$strOff              = "fra";
$strEnable           = "aktiver";
$strEnabled          = "aktiveret";
$strDisable          = "deaktiver";
$strDisabled         = "deaktiver";
$strDellog           = "slet log";
$strTopOfPage        = "toppen af siden";
$strTotal            = "Total";
$strHits             = "hits";
$strUniqs            = "unikke";
$strUniq             = "unik";
$strPageimpressions  = "sidevisninger";
$strDomains          = "dom�ner";
$strConfiguration    = "konfiguration";
$strCurrConfig       = "aktuel konfiguration:";
$strUsername         = "brugernavn";
$strPassword         = "adgangskode";
$strDelete           = "slet";
$strUser             = "bruger";
$strUseraccount      = "brugerkonto";
$strUseraccounts     = "brugerkonti";
$strFrom             = "fra";
$strTo               = "til";
$strTo2              = "til";
$strEdit             = "ret";
$strSet              = "set";
$strMove             = "flyt";
$strDefault          = "standard";
$strCreateNew        = "opret ny";
$strSave             = "gem";
$strUnknown          = "ukendt";
$strUndefined        = "udefineret";
$strCache            = "cache";
$strSeconds          = "sekunders";
$strDatabase         = "database";
$strTable            = "tabel";
$strCalc             = "beregn";
$strStep             = "trin";
$strSystem           = "system";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 Timer) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 Timer) Midway Island, Findland";
$loca['tz']['-10']   = "(GMT -10:00 Timer) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 Timer) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 Timer) Pacific Time (US &amp; Canada), Tijuana";
$loca['tz']['-7']    = "(GMT -7:00 Timer) Mountain Time (US &amp; Canada), Arizona";
$loca['tz']['-6']    = "(GMT -6:00 Timer) Central Time (US &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 Timer) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 Timer) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 Timer) Newfoundland";
$loca['tz']['-3']    = "(GMT -3:00 Timer) Brassilien, Buenos Aires, Georgetown, Falklands �rne";
$loca['tz']['-2']    = "(GMT -2:00 Timer) Mid-Atlantic, Ascension Is., St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 Time) Azorene, Cape Verde Islands";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 Time) Amsterdam, Berlin, Brussel, K�benhavn, Madrid, Paris, Rom";
$loca['tz']['2']     = "(GMT +2:00 Timer) Cairo, Helsinki, Kaliningrad, Syd Afrika";
$loca['tz']['3']     = "(GMT +3:00 Timer) Baghdad, Riyadh, Moskva, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 Timer) Tehran";
$loca['tz']['4']     = "(GMT +4:00 Timer) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 Timer) Kabul";
$loca['tz']['5']     = "(GMT +5:00 Timer) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 Timer) Bombay, Calcutta, Madras, New Delhi";
$loca['tz']['6']     = "(GMT +6:00 Timer) Almaty, Colombo, Dhaka, Novosibirsk";
$loca['tz']['6.5']   = "(GMT +6:30 Timer) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 Timer) Bangkok, Hanoi, Jakarta";
$loca['tz']['8']     = "(GMT +8:00 Timer) Beijing, Hong Kong, Perth, Singapore, Taipei";
$loca['tz']['9']     = "(GMT +9:00 Timer) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 Timer) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 Timer) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$loca['tz']['11']    = "(GMT +11:00 Timer) Magadan, New Caledonia, Solomon Islands";
$loca['tz']['12']    = "(GMT +12:00 Timer) Auckland, Wellington, Fiji, Marshall �rene";

// Language selection
$loca['lang']['bh']  = "Bosnian";
$loca['lang']['cn']  = "Chinese Simplified";
$loca['lang']['de']  = "German";
$loca['lang']['dk']  = "Dansk";
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
$strSetup                                         = "Indstillinger";
$loca['setup']['header1']                         = "Admin indstillinger";
$loca['setup']['header2']                         = "Geerelle indstillinger";
$loca['setup']['header3']                         = "Special indstillinger";
$loca['setup']['header4']                         = "Grafik indstillinger";
$loca['setup']['header5']                         = "Log Gr�nse / Auto Sletning";
$loca['setup']['header6']                         = "Display Gr�nser";
$loca['setup']['header7']                         = "Display Indstillinger";
$loca['setup']['intro_txt']                       = "Dette script hj�lper dig med at ops�tte de variable som er n�dvendige for at starte. Du bliver guided gennem et antal sider. P� hver side indstilles forskellige dele af scriptet.";
$loca['setup']['step0_txt']                       = "<b>Licens</b> -- L�s venligst hele GNU General Public License. PowerPhlogger er udviklet som gratis software, men der er visse krav for distribution og �ndring.";
$loca['setup']['step1_txt']                       = "<b>Generelle indstillinger</b> -- Check alle felter p� denne side og kontroller at du har indtastet de rigtige oplysninger. Hvis du ikke er sikker, s� undlad at rette standardindstilligerne.";
$loca['setup']['step2_txt']                       = "<b>Yderligere indstillinger</b> -- For de fleste af disse indstillinger, b�r du bibeholde standardindstillingerne. Ret kun de indstillinger du er sikker p�.";
$loca['setup']['step3_txt_a']                     = "<b>Ops�tning fuldf�rt</b> -- Du kan nu begynde at arbejde med PowerPhlogger.<br /><br />Husk at omd�be dit /admin katalog og beskyt det med htaccess.<br />L�s dokumentationen omhyggeligt for yderligere informationer";
$loca['setup']['step3_txt_b']                     = "Du kan nu begynde at oprette brugerkonti";

$loca['setup']['pphlogger_location']['title']     = "PowerPhlogger placering";
$loca['setup']['pphlogger_location']['descr']     = "URL til dit PowerPhlogger rod-katalog";
$loca['setup']['admin_mail']['title']             = "Admin Email Adresse";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "Admin Navn";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "Administrator Adgangskode";
$loca['setup']['admin_pw']['descr']               = "Bruges til at slette brugerkonti";
$loca['setup']['server_GMT']['title']             = "System Tidszone";
$loca['setup']['server_GMT']['descr']             = "tidszone hvor din server er placeret";
$loca['setup']['admin_GMT']['title']              = "Administrator Tidszone";
$loca['setup']['admin_GMT']['descr']              = "tidszone hvor du er";
$loca['setup']['default_lang']['title']           = "Standardsprog";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "Standard Style Sheet";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "Aktiver �ben brugertilmelding";
$loca['setup']['signup_ok']['descr']              = "Vil du g�re det muligt for brugerne selv at oprette en brugerkonto?";
$loca['setup']['master_timeout']['title']         = "Brugerlog Timeout";
$loca['setup']['master_timeout']['descr']         = "[i sek., standard = 30min. = 1800]";
$loca['setup']['traceroute']['title']             = "Traceroute URL";
$loca['setup']['traceroute']['descr']             = "Hvis du kender en anden service, som kan k�re tracerouts, s� indtast det her.";
$loca['setup']['pass_length']['title']            = "Bruger adgangskodel�ngde";
$loca['setup']['pass_length']['descr']            = "L�ngden p� atro-genererede adgangskoder (s�t ikke denne v�rdi til mere end 15!)";
$loca['setup']['pw_privacy']['title']             = "Adgangskodebeskyttelse";
$loca['setup']['pw_privacy']['descr']             = "Hvis du s�tter pw_privacy til deaktiveret, vil en kopi af adgangskoden (i klar tekst) fra bekr�ftelses emailen vil blive sendt til admin's email-adresse. Af sikkerhedshensyn, er dette som standard sat til aktiveret.";
$loca['setup']['cache_calendar']['title']         = "Kalender Cache";
$loca['setup']['cache_calendar']['descr']         = "S�t caching-tid i sekunder. Hvis denne s�ttes til 0 (standard), vil kalenderen bruge den avancerede cache opdateringsfunktion (st�rkt anbefalet!)";
$loca['setup']['mxlookup']['title']               = "MX-opslag";
$loca['setup']['mxlookup']['descr']               = "Aktiver denne, for at g�re email-kontrolfunktionen mere intelligent. Hvis dene aktiveres, kontrolleres eksistensen af indtastede dom�ner. Stadard er deaktiveret, da nogle win32 PHP udgaver ikke underst�tter dette!";
$loca['setup']['loopback_bug']['title']           = "Tilbagel�bsfejl";
$loca['setup']['loopback_bug']['descr']           = "Aktiver kun dette, hvis du bruger en af f2s eller tilsvarende hostingudbydere og du f�r forkerte IP/proxy-informationer!";
$loca['setup']['mysqldump_on']['title']           = "MySQL Dump";
$loca['setup']['mysqldump_on']['descr']           = "aktiver/deaktiver mysql dump i indstillingerne for alle brugere";
$loca['setup']['md5form']['title']                = "MD5 Loginformular";
$loca['setup']['md5form']['descr']                = "aktiver/deaktiver md5-kryptering (vha. JS) i login-formularen";
$loca['setup']['mail_mod']['title']               = "Mailmodul";
$loca['setup']['mail_mod']['descr']               = "V�lg det mailmodul du vil bruge til at sende bekr�ftelses emails incl. pphlogger.js-vedh�ftning [libmail|htmlmime|plain]";
$loca['setup']['GD_enabled']['title']             = "GD aktiveret";
$loca['setup']['GD_enabled']['descr']             = "Hvis du ikke kan f� GD-lib til at fungere eller hos din hostingudbyder ikke vil installere det, kan du deaktivere GD-grafik i PPhlogger. Du mister dog en del funktioner hvis du deaktiverer det!";
$loca['setup']['gd_img_type']['title']            = "GD-grafiktype";
$loca['setup']['gd_img_type']['descr']            = "GD-library: Ret dette til det korrekte grafik-format hvis du st�der p� problemer. Standard er 'auto' for auto-dtektering. [auto|png|gif|jpeg]";
$loca['setup']['Freetype_enabled']['title']       = "Freetype aktiveret";
$loca['setup']['Freetype_enabled']['descr']       = "Hvis du ikke kan f� GD-lib til at fungere eller hos din hostingudbyder ikke vil installere det, kan du deaktivere GD-grafik i PPhlogger. Brugerne kan s� ikke bruge TTF-fonte i deres t�ller. Indbyggede fonte b�r dog v�re tilg�ngelige.";
$loca['setup']['ttf_location']['title']           = "TTF-placering";
$loca['setup']['ttf_location']['descr']           = "Hvis du ikke kan se t�ller-grafikken og du benytter GD 2.x eller GD 1.x i en fejbeh�ftet PHP udgave, pr�v at s�tte en absolut serversti til dit ttf_fonts katalog. Eller B�R DET IKKE RETTES! [relativ|/din/absolutte/sti/til/ttf_fonts/]";
$loca['setup']['cleanup_lim']['title']            = "Oprydningsgr�nse";
$loca['setup']['cleanup_lim']['descr']            = "tidsfrist hvorefter ubekr�ftede brugerkonti slettes ved brug af oprydnings-linket i admin2 [hours]";
$loca['setup']['cleanup_old']['title']            = "Oprydningsgr�nse for gamle";
$loca['setup']['cleanup_old']['descr']            = "Efter hvor mange dage skal ubrugte (ingen hits, ingen login) brugerkonti slettes? [dage]";
$loca['setup']['dellog_global']['title']          = "Logsletning globale-indstillinger";
$loca['setup']['dellog_global']['descr']          = "Hvis du s�tter denne til deaktiveret, benyttes den enkelte brugers egne indstillinger. Hvis du aktiverer denne, benyttes f�lgende v�rdier:...";
$loca['setup']['dellog_lim']['title']             = "Logsletning efter logs";
$loca['setup']['dellog_lim']['descr']             = "S�t antal log der skal gemmes. Hvis du s�tter v�rdien til 0, vil der ingen gr�nse v�re [standard].";
$loca['setup']['dellog_lim_d']['title']           = "Logsletning efter dage";
$loca['setup']['dellog_lim_d']['descr']           = "S�t antal dage efter hvilke loggen slettes. Hvis v�rdien s�ttes til 0, vil der ingen gr�nse v�re [standard].";
$loca['setup']['dellog_lim_prob']['title']        = "Log Deletion Probability";
$loca['setup']['dellog_lim_prob']['descr']        = "Deletion probability in percent";
$loca['setup']['delpath_global']['title']         = "Sti-sletning globale-indstillinger";
$loca['setup']['delpath_global']['descr']         = "Hvis du s�tter denne til deaktiveret, benyttes den enkelte brugers egne indstillinger. Hvis du aktiverer denne, benyttes f�lgende v�rdier:...";
$loca['setup']['delpath_lim']['title']            = "Sti-sletning efter logs";
$loca['setup']['delpath_lim']['descr']            = "S�t antal bes�gsstier der skal gemmes. Hvis v�rdien s�ttes til 0, vil der ingen gr�nse v�re [standard].";
$loca['setup']['delpath_lim_d']['title']          = "Sti-sletning efter dage";
$loca['setup']['delpath_lim_d']['descr']          = "S�t antal dage efter hvilke bes�gsstierne skal slettes. Hvis v�rdien s�ttes til 0, vil der ingen gr�nse v�re [standard].";
$loca['setup']['delpath_lim_prob']['title']       = "Path Deletion Probability";
$loca['setup']['delpath_lim_prob']['descr']       = "Deletion probability in percent";
$loca['setup']['show_cust']['title']              = "Brugerlog kundegr�nse";
$loca['setup']['show_cust']['descr']              = "Hvor mange kunde-logs skal der vises i brugerloggen?";
$loca['setup']['calendar_months']['title']        = "Kalender m�nedsgr�nse";
$loca['setup']['calendar_months']['descr']        = "Hvor mange m�neder skal der vises i kalenderen?";
$loca['setup']['topref_lim']['title']             = "Gr�nse forTop-henvisere";
$loca['setup']['topref_lim']['descr']             = "";
$loca['setup']['topdomain_lim']['title']          = "Gr�nse Top-d�mone";
$loca['setup']['topdomain_lim']['descr']          = "";
$loca['setup']['topres_lim']['title']             = "Gr�nse Top-opl�sning";
$loca['setup']['topres_lim']['descr']             = "";
$loca['setup']['topcolor_lim']['title']           = "Gr�nse Top-farve";
$loca['setup']['topcolor_lim']['descr']           = "";
$loca['setup']['topkeywords_lim']['title']        = "Gr�nse Top-n�gleord";
$loca['setup']['topkeywords_lim']['descr']        = "";
$loca['setup']['topbrowseros_lim']['title']       = "Gr�nse Top-Browser/OS";
$loca['setup']['topbrowseros_lim']['descr']       = "";
$loca['setup']['topsearcheng_lim']['title']       = "Gr�nse Top-s�gemaskiner";
$loca['setup']['topsearcheng_lim']['descr']       = "";
$loca['setup']['mpfront_lim']['title']            = "MP-forside gr�nse";
$loca['setup']['mpfront_lim']['descr']            = "Begr�ns multi-side i bunden af Logs-visningen.";
$loca['setup']['useraccount_lim']['title']        = "Gr�nse for Brugerkonto-visning";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "Gr�nse for seneste henviser liste";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "MP bredde max.";
$loca['setup']['width_max']['descr']              = "MP vis-bar i Logs [pixel]";
$loca['setup']['width_factor']['title']           = "MP bredde-faktor";
$loca['setup']['width_factor']['descr']           = "MP vis-bar i Logs [faktor]";
$loca['setup']['browseros_barsize']['title']      = "Browser/OS Bar st�rrelse";
$loca['setup']['browseros_barsize']['descr']      = "Max. st�rrelse p� procent-baren i Browser/OS statistik [pixel]";
$loca['setup']['extended']['title']               = "Udvidet Log-Liste";
$loca['setup']['extended']['descr']               = "Hvis denne deaktiveres, kan du ikke se opl�sning & farve kolonnen (anbefales kun til brugere med sk�rme med lav opl�sning)";
$loca['setup']['ttf_demo_size']['title']          = "TTF Demo St�trrelse";
$loca['setup']['ttf_demo_size']['descr']          = "TTF-font demonstrations [points]";
$loca['setup']['css_show']['title']               = "CSS Overblik";
$loca['setup']['css_show']['descr']               = "Hvilke farver skal v�re synlige i CSS ret-tabel oversigten? [kommasapareret]";

//email stuff
$strAccActivation    = "kontoaktivering";

// pages
$strUsrPage[0]       = "logind/logud";
$strUsrPage[1]       = "logs";
$strUsrPage[2]       = "statistik";
$strUsrPage[3]       = "kalender";
$strUsrPage[4]       = "browser/OS";
$strUsrPage[5]       = "indstillinger";
$strUsrPage[6]       = "brugerprofil";
$strAdminPage[0]     = "administration";
$strAdminPage[1]     = "create/del user";
$strAdminPage[2]     = "useraccounts";
$strAdminPage[3]     = "last customers";
$strAdminPage[4]     = "CSS editor";
$strAdminPage[5]     = "statistics";
$strAdminPage[6]     = "mailing list";

// functions.lib.php
$strPrev             = "forreg�ende";
$strNext             = "n�ste";

// headfoot.inc.php
$strTrackedSite      = "Overv�get site:";
$strCurrentTime      = "aktuel tid";
$strHeadDateFormat   = "d M y, <b>h:iA</b>";
$strYourHits         = "dine hits:";
$strSlogan           = "...dit ultimative logningsv�rkt�j!";
$strLogs             = "logs";
$strStats1           = "statistik";
$strStats2           = "statistik 2";
$strStats3           = "statistik 3";
$strStats4           = "statistik 4";
$strStats5           = "statistik 5"; 
$strSettings         = "indstillinger";
$strChUserprofile    = "brugerprofil";
$strLoginLogout      = "logind/logud";

// index.php
$strEnterUsernPw     = "Indtast venligst brugernavn/adgangskode";
$strLostPw           = "glemt adgangskoden?";
$strLinkNewPw        = "NY ADGANGSKODE";
$strGetFreeAccount   = "F� en gratis konto";
$strSignUpUseracc    = "Tilmeld dig en gratis brugerkonto!";
$strMsgWrongPw       = "<b>du har indtastet en forkert adgangskode eller brugernavn!!!</b><br />please try again...";
$strMsgNewPw         = "<b>adgangskoden er skiftet!</b><br />den er sendt til din email-adresse.";
// dspNewPw.php
$strForVerification  = "for kontrol, indtast dit brugernavn og email-adresse";
$strGetIt            = "f� det!";
$strMsgNoValidUser   = "<b>du har ikke indtastet en gyldig email/brugernavn</b><br />pr�v igen...";

//signup.php
$strSignUp           = "Registrer en ny PowerPhlogger-konto:";
$strHtmlCode         = "HTML kode";
$strAddHtmlCode      = "inds�t f�lgende HTML-kode p� alle de sider/filer du vil have overv�get:";
$strJsFile           = "Hvis du har mistet din pphlogger.js-fil, kan du downloade den her:";
$strInstructions     = "VEJLEDNING:";
$strConfLogin        = "For at aktivere/bekr�fte din nye konto, skal du logge ind med den adgangskode vi har sendt til din email-adresse.";
$strConfLogin2       = "Hvis du ikke aktiverer/bekr�fter din konto, vil den blive slettet efter ".$cleanup_lim." timer";
$strUploadJs         = "upload pphlogger.js-filen som du har modtaget som vedh�ftet fil.";
$strNoSignUp         = "Vi beklager, men vi tilbyder i �jeblikket ikke gratis konti p� denne server !";
$strReturnToLogin    = "retur til logind";

// dspLogs.php
$strShowLogs         = "vis logs:";
$strSelect           = "v�lg";
$strUnselect         = "frav�lg";
$strAll              = "Alle";
$strTurnShowref      = "sl� visrefs";
$strFullAgt          = "komplet browser";
$strDemoMode         = "k�rer i demo-tilstand!";
$strGuestMsg1        = "som g�ste-bruger har du ikke tilladelse til at slette logfiler!!!";
$strGuestMsg2        = "venlig aktiver slet-log funktionen!";
$strViewLogs         = "vis logs";
$strHostIP           = "Host / IP";
$strReferrer         = "Henviser";
$strReferrers        = "Henvisere";
$strAgent            = "Browser Information";
$strRes              = "opl";
$strColor            = "farve";
$strTimestamp        = "Tidsstempel";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "Bes�gende pr. dag";
$strPerDay           = "pr. dag";
$strVisPerHour       = "Bes�gende pr. time";
$strLast             = "sidste";
$strMonth            = "m�ned";
$strMonths           = "m�neder";
$strToday            = "i dag";
$strAverage          = "gennemsnit";
$strAverageAbbr      = "gennemsn.";
$strDay              = "dag";
$strDays             = "dage";
$strCurrOnlUsers     = "brugere online i �jeblikket";
$strIPkept           = "IP-adresser gemmes/vises for de seneste";
$strIPkept2          = "minutter";
$strOnline           = "online";
$strEntryTime        = "indgangstidspunkt";
$strLastReload       = "sidste genindl�sning";
$strLastUrl          = "sidste URL";
$strSince            = "siden";
$strMultipage        = "fler-side";
$strKeywords         = "n�gleord";
$strSingleWords      = "enkeltord";
$strWholeStrings     = "hel s�tning";
$strDownloads        = "downloads";
$strTerritories      = "omr�der";
$str_arrMonths       = Array(1 => "Januar", "Februar", "Marts", "April", "Maj", "Juni", "Juli", 
                                    "August", "September", "Oktober", "November", "December");
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
$strShowUniqVis      = "vis unikke bes�gende";
$strShowPageimpress  = "vis alle sidevisninger";
$strReload           = "genindl�s";

// edSettings.php
$strCookieTxt        = "Anbring cookie for at undg� egne hits:";
$strCountMe          = "T�l mig!";
$strDontCountMe      = "T�l mig ikke!";
$strEnableDellog     = "aktiver log-sletning";
$strDisableDellog    = "deaktiver logsletning";
$strEnableDellog2    = "aktiver slettefunktionen:";
$strResetHits        = "nulstil hits";
$strResHitsTxt       = "for at stille dit hit-antal, indtast venligts den nye v�rdi:";
$strMysqlDump        = "Vis mySQL dump (skema)";
$strStructOnly       = "Kun strukturen";
$strAddDropTbl       = "Tilf�j 'drop tabel'";
$strStructData       = "Struktur og data";
$strSend             = "Send";
$strComplInserts     = "Komplet inds�tning";
$strDiskSpace        = "Diskplads";
$strAvailSpace       = "Tilg�ngelig diskplads";
$strUsedSpace        = "Brugt diskplads";
$strDbSpace          = "Brugt databaseplads";
$strFreeSpace        = "Ledig diskplads";
$strFileUpload       = "Flerfils upload";
$strMaxFilesize      = "h�jeste fil-st�rrelse";
$strErrUpload        = "Fejl ved upload. Pr�v igen.";
$strUploadOk         = "Succesfuld upload!!";
$strFilename         = "filnavn";
$strSize             = "st�rrelse";
$strYourLast         = "dine sidste";
$strCustomers        = "kunder";
$strYourTimeout      = "din timeout er sat til";
$strMinutes          = "minutter";
$strBlocking         = "blokering";
$strShortQuery       = "kort foresp�rgsel";
$strOwnReferrers     = "own referrers";

// edUserprofile.php
$strUserprofile      = "ret brugerprofil";
$strEditProfile      = "ret konfigurationen og klik p� knappen:";
$strUrl1Txt          = "URL til din hoved-index-fil.";
$strUrl2Txt          = "Hvis du har alternative URL'er, indtast hver enkelt af den p� en ny linie:";
$strEmail            = "email:";
$strTimezone         = "din tidszone:";
$strUserLang         = "brugerens sprog:";
$strVisible          = "synlig:";
$strVisibleStyle     = "synlig stil:";
$strTimeout          = "timeout:";
$strEmailNotif       = "email notifikation: hver...";
$strDefLogNo         = "vis som standard antal logninger:";
$strKwListMode       = "n�gleordsliste tilstand:";
$strAllowDemo        = "tillad demo tilstand:";
$strTTF              = "v�lg TrueType-Skrifttyper:";
$strAvailFonts       = "tilg�ngelige fonte";
$strFontSize         = "font-st�rrelse:";
$strFontColor        = "font-farve:";
$strBgColor          = "baggrundsfarve:";
$strTransBg          = "gennemsigtig baggrund:";
$strSample           = "eksempel billede:";
$strChangePw         = "skift adgangskode:";
$strOldPw            = "nuv�rende adgangskode:";
$strNewPw            = "ny adgangskode:";
$strReenterPw        = "gentag ny adgangskode:";
$strLoadCSS          = "hent stylesheet:";
$strView4Msg1        = "brugerprofil succesfuldt opdateret!";
$strView4Msg2        = "Din brugerprofil kunne ikke opdateres!!!";
$strView4Msg3        = "som g�stebruger kan du ikke<br />lave �ndringer!";
$strPwChanged        = "adgangskode �ndret !";
$strWrongPw          = "forkert adgangskode !!";

// admin/index.php
$strAdmin            = "administration";
$strMaintenance      = "vedligeholdelse";
$strCheckNewVer      = "Check for ny version";
$strCreate           = "Opret en ny brugerkonto:";
$strAdminMsg1        = "brugernavnet findes i forvejen";
$strAdminMsg2        = "brugeren succesfuldt oprettet";
$strAdminMsg3        = "Du har indtastet en ugyldig email-adresse!";
$strAdminMsg4        = "brugernavne m� kun indeholde bogstaver,<br />.,-,_, og skal v�re mindre end 30 tegn!";
$strAdminErr1        = "der opstod en fejl under brugeroprettelsen";
$strDelUser          = "Slet en bruger:";
$strDelErr           = "der var et problem !!";
$strDelOk            = "alle brugerdata er slettet!";
$strWrongPwUser      = "forkert adgangskode eller brugernavn !";
$strAdminCookie      = "opret admin cookie";
$strNetcheck         = "aktiver netcheck";
$strHideAccounts     = "skjul brugerkonti";
$strShowAccounts     = "vis brugerkonti";
$strReadyDelete      = "klar til at slette";
$strMailinglist      = "postliste";
$strLatestPphlVers   = "Latest PowerPhlogger Version";
$strLatestVersion    = "Latest Version";
$strReleaseDate      = "Release Date";
$strDownloadLoc      = "Download Locations";
$strReloadKeywords   = "reload keywords";
$strReloadKeyw1      = "This will refresh your users keyword-toplist";
$strReloadKeyw2      = "Do not run this unless you've modified engines-list.ini !!";

// admin/change_userprofile.php
$strMaxLoglim        = "maximal logst�rrelse:";
$strMaxPath          = "maximal antalt bes�gsstier gemt:";
?>
