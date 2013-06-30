<?php
/* German language localization
 *
 * $Id: de.inc.php,v 1.44 2003/08/18 19:13:35 cvs_iezzi Exp $
 * credits to: Carsten Albrecht <albrecht@caits.de> from CAITS.DE
 *             Jürgen Wöbcke <Juergen.Woebcke@gmx.de>
 *             Dirk Randhahn <dirait00@fht-esslingen.de>
 */


$strCharset          = "iso-8859-1";
$strThousandSep      = "'";
$strDate             = "d.m.Y";
$strDate2            = "d.m.Y";
$strNumThousandsSep  = '.';
$strNumDecimalSep    = ',';
$strByteUnits        = array('Bytes', 'KB', 'MB', 'GB');

$strOn               = "ein";
$strOff              = "aus";
$strEnable           = "anschalten";
$strEnabled          = "eingeschaltet";
$strDisable          = "ausschalten";
$strDisabled         = "ausgeschaltet";
$strDellog           = "L&ouml;sche Logdatei";
$strTopOfPage        = "Nach oben";
$strTotal            = "Gesamt";
$strHits             = "Hits";
$strUniqs            = "Hits";
$strUniq             = "uniq";
$strPageimpressions  = "Pageimpressions";
$strDomains          = "Domains";
$strConfiguration    = "Einstellung";
$strCurrConfig       = "Aktuelle Einstellung:";
$strUsername         = "Benutzername";
$strPassword         = "Passwort";
$strDelete           = "L&ouml;schen";
$strUser             = "Benutzer";
$strUseraccount      = "Benutzerkonto";
$strUseraccounts     = "Benutzerkonten";
$strFrom             = "von";
$strTo               = "bis";
$strTo2              = "nach";
$strEdit             = "Editieren";
$strSet              = "Set";
$strMove             = "Verschiebe";
$strDefault          = "Standard";
$strCreateNew        = "Neu";
$strSave             = "Speichern";
$strUnknown          = "Unbekannt";
$strUndefined        = "Unbestimmt";
$strCache            = "Cache";
$strSeconds          = "Sekunden";
$strDatabase         = "Datenbank";
$strTable            = "Tabelle";
$strCalc             = "Berechne";
$strStep             = "Schritt";
$strSystem           = "System";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 Stunden) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 Stunden) Midway Island, Samoa";
$loca['tz']['-10']   = "(GMT -10:00 Stunden) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 Stunden) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 Stunden) Pacific Time (US &amp; Canada)";
$loca['tz']['-7']    = "(GMT -7:00 Stunden) Mountain Time (US &amp; Canada)";
$loca['tz']['-6']    = "(GMT -6:00 Stunden) Central Time (US &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 Stunden) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 Stunden) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 Stunden) Neufundland";
$loca['tz']['-3']    = "(GMT -3:00 Stunden) Brasilien, Buenos Aires, Georgetown, Falkland-Inseln";
$loca['tz']['-2']    = "(GMT -2:00 Stunden) Mid-Atlantic, Ascension, St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 Stunden) Azoren, Cap Verde";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, London, Lissabon, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 Stunden) Berlin, Brüssel, Kopenhagen, Madrid, Paris, Rom";
$loca['tz']['2']     = "(GMT +2:00 Stunden) Kaliningrad, Südafrika";
$loca['tz']['3']     = "(GMT +3:00 Stunden) Baghdad, Riyadh, Moskau, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 Stunden) Teheran";
$loca['tz']['4']     = "(GMT +4:00 Stunden) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 Stunden) Kabul";
$loca['tz']['5']     = "(GMT +5:00 Stunden) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 Stunden) Bombay, Calcutta, Madras, Neu Delhi";
$loca['tz']['6']     = "(GMT +6:00 Stunden) Almaty, Colombo, Dhaka";
$loca['tz']['6.5']   = "(GMT +6:30 hours) Rangun";
$loca['tz']['7']     = "(GMT +7:00 Stunden) Bangkok, Hanoi, Jakarta";
$loca['tz']['8']     = "(GMT +8:00 Stunden) Peking, Hong Kong, Perth, Singapur, Taipeh";
$loca['tz']['9']     = "(GMT +9:00 Stunden) Osaka, Sapporo, Seoul, Tokio, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 Stunden) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 Stunden) Melbourne, Papua Neu Guinea, Sydney, Wladiwostok";
$loca['tz']['11']    = "(GMT +11:00 Stunden) Magadan, Neu Kaledonien, Solomon-Inseln";
$loca['tz']['12']    = "(GMT +12:00 Stunden) Auckland, Wellington, Fidji, Marshall-Insel";

// Language selection
$loca['lang']['bh']  = "Bosnisch";
$loca['lang']['cn']  = "Chinesisch (Simplified)";
$loca['lang']['de']  = "Deutsch";
$loca['lang']['dk']  = "D&auml;nisch";
$loca['lang']['en']  = "Englisch";
$loca['lang']['es']  = "Spanisch";
$loca['lang']['fr']  = "Franz&ouml;sisch";
$loca['lang']['gr']  = "Griechisch";
$loca['lang']['it']  = "Italienisch";
$loca['lang']['jp']  = "Japanisch";
$loca['lang']['lv']  = "Lettisch";
$loca['lang']['nl']  = "Holl&auml;ndisch";
$loca['lang']['no']  = "Norwegisch";
$loca['lang']['pl']  = "Polnisch";
$loca['lang']['po']  = "Portugiesisch (Brasilien)";
$loca['lang']['ro']  = "Rumänisch";
$loca['lang']['ru']  = "Russisch";
$loca['lang']['se']  = "Schwedisch";
$loca['lang']['tr']  = "T&uuml;rkisch";
$loca['lang']['tw']  = "Chinesisch (Traditional)";

// setup.php
$strSetup                                         = "Setup";
$loca['setup']['header1']                         = "Administrator-Konfiguration";
$loca['setup']['header2']                         = "Generelle Konfiguration";
$loca['setup']['header3']                         = "Spezielle Einstellungen";
$loca['setup']['header4']                         = "Grafik-Konfiguration";
$loca['setup']['header5']                         = "Log Limit / Automatisches L&ouml;schen";
$loca['setup']['header6']                         = "Anzeige-Limit";
$loca['setup']['header7']                         = "Anzeige-Einstellungen";
$loca['setup']['intro_txt']                       = "Dieses Script wird Ihnen helfen, die n&ouml;tigen Einstellungen vorzunehmen. Sie werden nun durch einige Konfigurationsmenus gef&uuml;hrt. Jede Seite deckt einen anderen Bereich der Konfiguration ab.";
$loca['setup']['step0_txt']                       = "<b>Lizenz</b> -- Bitte lesen Sie die GNU General Public License. PowerPhlogger wird als freie Software entwickelt, trotzdem sollten Sie die verschiedenen Einschr&auml;nkungen beachten.";
$loca['setup']['step1_txt']                       = "<b>Basiskonfiguration</b> -- Bitte &uuml;berpr&uuml;fen Sie alle Felder des folgenden Formulars und vergewissern Sie sich, dass Sie die richtigen Informationen eingegeben haben. Wenn Sie sich bei einem Wert nicht sicher sind, so behalten Sie einfach den Standardwert bei.";
$loca['setup']['step2_txt']                       = "<b>Optionale Einstellungen</b> -- Für die meisten Einstellungen auf dieser Seite sollte der Standardwert ausreichen. &Auml;ndern Sie die Werte nur, wenn Sie auch wirklich wissen, was für Auswirkungen dies hat.";
$loca['setup']['step3_txt_a']                     = "<b>Konfiguration erfolgreich!</b> -- Sie k&ouml;nnen nun beginnen, PowerPhlogger anzuwenden.<br /><br />Vergessen Sie bitte nicht, Ihr /admin Verzeichnis mit .htaccess vor unbefugtem Zugang zu sch&uuml;tzen. (Dasselbe gilt f&uuml;r das Verzeichnis /upgrade). Bitte nehmen Sie sich auch Zeit, die Dokumentation durchzulesen.";
$loca['setup']['step3_txt_b']                     = "Sie k&ouml;nnen nun mit dem Er&ouml;ffnen von neuen Benutzerkonten beginnen.";

$loca['setup']['pphlogger_location']['title']     = "PowerPhlogger Ort";
$loca['setup']['pphlogger_location']['descr']     = "Absolute URL zu Ihrem PowerPhlogger Verzeichnis";
$loca['setup']['admin_mail']['title']             = "E-Mail des Administrators";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "Name des Administrators";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "Administrator Passwort";
$loca['setup']['admin_pw']['descr']               = "Wird zum L&ouml;schen von Benutzerkonten ben&ouml;tigt.";
$loca['setup']['server_GMT']['title']             = "System Zeitzone";
$loca['setup']['server_GMT']['descr']             = "Zeitzone, wo sich Ihr Server befindet.";
$loca['setup']['admin_GMT']['title']              = "Administrator Zeitzone";
$loca['setup']['admin_GMT']['descr']              = "Ihre eigene Zeitzone";
$loca['setup']['default_lang']['title']           = "Standardsprache";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "Standard-Design";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "Einschalten der Anmeldem&ouml;glichkeit";
$loca['setup']['signup_ok']['descr']              = "Soll es dem Benutzer erm&ouml;glicht werden, selbstst&auml;ndig ein eigenes Benutzerkonto zu er&ouml;ffnen?";
$loca['setup']['master_timeout']['title']         = "Benutzer-Log Timeout";
$loca['setup']['master_timeout']['descr']         = "[in Sekunden, Standardwert = 30 min. = 1800 sek.]";
$loca['setup']['traceroute']['title']             = "Traceroute URL";
$loca['setup']['traceroute']['descr']             = "Falls Sie einen anderen Service nutzen wollen, so geben Sie ihn hier ein. Lassen Sie dieses Feld frei, falls Sie ihr Servereigenes Traceroute nutzen m&ouml;chten.";
$loca['setup']['pass_length']['title']            = "L&auml;nge des Benutzer-Passworts";
$loca['setup']['pass_length']['descr']            = "L&auml;nge des automatisch generierten Passworts (Der Wert darf nicht &uuml;ber 15 liegen!)";
$loca['setup']['pw_privacy']['title']             = "Keine Benachrichtigung bei Passwort&auml;nderung";
$loca['setup']['pw_privacy']['descr']             = "Falls Sie dies auf false setzen, wird jeweils eine Kopie des Passworts an den Administrator gesendet, sobald ein Benutzer sein Passwort &auml;ndert. Standardm&auml;&szlig;ig ist dies ausgeschaltet.";
$loca['setup']['cache_calendar']['title']         = "Kalender-Cache";
$loca['setup']['cache_calendar']['descr']         = "Cache-Zeit in Sekunden. Falls Sie diesen Wert auf 0 (Standard) setzen, wird das intelligente Caching verwendet (Empfohlen!)";
$loca['setup']['mxlookup']['title']               = "MX Lookup";
$loca['setup']['mxlookup']['descr']               = "Falls Sie dies einschalten, wird ihre E-Mail Pr&uuml;ffunktion intelligenter, da sie jeweils auch das Vorhandensein einer Domain &uuml;berpr&uuml;ft. Leider funktioniert dies aber auf gewissen Win32-Systemen nicht und kann auch zu erheblichen Verz&ouml;gerungen f&uuml;hren!";
$loca['setup']['loopback_bug']['title']           = "Loopback Bug";
$loca['setup']['loopback_bug']['descr']           = "Achtung: Bitte nur einschalten, falls Sie Probleme mit falschen IP/Proxy-Informationen haben! Diese Problem tritt bekanntlich nur bei F2S-Kunden auf.";
$loca['setup']['mysqldump_on']['title']           = "MySQL Dump";
$loca['setup']['mysqldump_on']['descr']           = "Hier k&ouml;nnen Sie die MySQL Dump-Funktion für s&auml;mtliche Benutzer ein- oder ausschalten";
$loca['setup']['md5form']['title']                = "MD5 Login Formular";
$loca['setup']['md5form']['descr']                = "Hier k&ouml;nnen Sie die Verschl&uuml;sselung (per JavaScript) f&uuml;r das Login-Formular ein- oder ausschalten. Bei Problemen mit dem Einloggen bitte ausschalten.";
$loca['setup']['mail_mod']['title']               = "Mail-Modul";
$loca['setup']['mail_mod']['descr']               = "W&auml;hlen Sie Ihr Mail-Modul f&uuml;r das Versenden von den Best&auml;tigungs-Mails (inkl. pphlogger.js-Attachment) [libmail|htmlmime]";
$loca['setup']['GD_enabled']['title']             = "GD aktiviert";
$loca['setup']['GD_enabled']['descr']             = "Falls Ihr Provider keine GD-Library anbietet und Sie daher keine Grafiken erzeugen k&ouml;nnen, so schalten Sie die GD-Unterst&uuml;tzung hier aus. Sie m&uuml;ssen jedoch einige Abstriche bei der Verwendung von PowerPhlogger in Kauf nehmen!";
$loca['setup']['gd_img_type']['title']            = "GD Grafik-Format";
$loca['setup']['gd_img_type']['descr']            = "Normalerweise wird das unterst&uuml;tze Grafik-Format automatisch erkannt. Falls es bei Ihnen nicht funktionieren sollte, so k&ouml;nnen Sie hier das Format auch manuell eingeben: [auto|png|gif|jpeg]";
$loca['setup']['Freetype_enabled']['title']       = "Freetype aktiviert";
$loca['setup']['Freetype_enabled']['descr']       = "Falls Ihr Provider keine Freetype-Library anbietet, so k&ouml;nnen Sie diese hier auch manuell ausschalten. Sie werden dann leider nicht in den Genuss der TrueType-Fonts kommen und k&ouml;nnen nur die eingebauten Fonts verwenden.";
$loca['setup']['ttf_location']['title']           = "TTF Verzeichnis";
$loca['setup']['ttf_location']['descr']           = "Einige Versionen von GD 2.x und 1.x in PHP4 scheinen fehlerhaft zu sein. Falls es Ihnen nicht gelingt, die Counter-Grafik zum Laufen zu bringen, so geben Sie hier den absoluten Server-Pfad zu Ihrem ttf_fonts Verzeichnis an. Ansonsten BITTE NICHT VERSTELLEN! [relative|/your/absolute/path/to/ttf_fonts/]";
$loca['setup']['cleanup_lim']['title']            = "Clean-Up Limit";
$loca['setup']['cleanup_lim']['descr']            = "Zeitspanne, nach der unbest&auml;tigte Benutzerkonten zum L&ouml;schen bereit markiert werden in admin2 [Stunden]";
$loca['setup']['cleanup_old']['title']            = "Clean-Up Old Limit";
$loca['setup']['cleanup_old']['descr']            = "Nach wievielen Tagen sollen die unbenutzten Benutzerkonten (keine Hits, kein Login) zum L&ouml;schen bereit markiert werden? [Tage]";
$loca['setup']['dellog_global']['title']          = "Log-L&ouml;schung global";
$loca['setup']['dellog_global']['descr']          = "Falls dieser Schalter auf false gesetzt ist, werden die Benutzereigenen Einstellungen verwendet. Ansonsten werden folgende Werte verwendet...";
$loca['setup']['dellog_lim']['title']             = "Log-L&ouml;schung nach Logs";
$loca['setup']['dellog_lim']['descr']             = "Wieviele Logs sollen jeweils aufbewahrt werden pro Benutzerkonto? Falls dieser Wert auf 0 ist, wird nichts gel&ouml;scht [Standard].";
$loca['setup']['dellog_lim_d']['title']           = "Log-L&ouml;schung nach Tagen";
$loca['setup']['dellog_lim_d']['descr']           = "Wieviele Tage sollen die Logs aufbewahrt werden? Falls dieser Wert auf 0 ist, wird nichts gel&ouml;scht [Standard].";
$loca['setup']['dellog_lim_prob']['title']        = "Log-L&ouml;schung Wahrscheinlichkeit";
$loca['setup']['dellog_lim_prob']['descr']        = "Wahrscheinlichkeit in Prozent";
$loca['setup']['delpath_global']['title']         = "Besucherpfad-L&ouml;schung global";
$loca['setup']['delpath_global']['descr']         = "Falls dieser Schalter auf false gesetzt ist, werden die Benutzereigenen Einstellungen verwendet. Ansonsten werden folgende Werte verwendet...";
$loca['setup']['delpath_lim']['title']            = "Besucherpfad-L&ouml;schung nach Logs";
$loca['setup']['delpath_lim']['descr']            = "Für wieviele Logs sollen die Besucherpfade jeweils aufbewahrt werden pro Benutzerkonto? Falls dieser Wert auf 0 ist, wird nichts gel&ouml;scht.";
$loca['setup']['delpath_lim_d']['title']          = "Besucherpfad-L&ouml;schung nach Tagen";
$loca['setup']['delpath_lim_d']['descr']          = "Wieviele Tage sollen die Besucherpfade aufbewahrt werden? Falls dieser Wert auf 0 ist, wird nichts gel&ouml;scht [Standard].";
$loca['setup']['delpath_lim_prob']['title']       = "Besucherpfad-L&ouml;schung Wahrscheinlichkeit";
$loca['setup']['delpath_lim_prob']['descr']       = "Wahrscheinlichkeit in Prozent";
$loca['setup']['show_cust']['title']              = "Benutzer-Log Anzeigelimit";
$loca['setup']['show_cust']['descr']              = "Wieviele Logs sollen beim Benutzer angezeigt werden?";
$loca['setup']['calendar_months']['title']        = "Kalendermonat-Limit";
$loca['setup']['calendar_months']['descr']        = "Wieviele Monate sollen im Kalender der Benutzer angezeigt werden?";
$loca['setup']['topref_lim']['title']             = "Top Referrer-Limit";
$loca['setup']['topref_lim']['descr']             = "";
$loca['setup']['topdomain_lim']['title']          = "Top Domain-Limit";
$loca['setup']['topdomain_lim']['descr']          = "";
$loca['setup']['topres_lim']['title']             = "Top Aufl&ouml;sung-Limit";
$loca['setup']['topres_lim']['descr']             = "";
$loca['setup']['topcolor_lim']['title']           = "Top Farbtiefe-Limit";
$loca['setup']['topcolor_lim']['descr']           = "";
$loca['setup']['topkeywords_lim']['title']        = "Top Suchbegriffe-Limit";
$loca['setup']['topkeywords_lim']['descr']        = "";
$loca['setup']['topbrowseros_lim']['title']       = "Top Browser/OS-Limit";
$loca['setup']['topbrowseros_lim']['descr']       = "";
$loca['setup']['topsearcheng_lim']['title']       = "Top Suchmaschinen-Limit";
$loca['setup']['topsearcheng_lim']['descr']       = "";
$loca['setup']['mpfront_lim']['title']            = "Mp Front-Limit";
$loca['setup']['mpfront_lim']['descr']            = "Limit für die Seiten unterhalb der Log-Anzeige.";
$loca['setup']['useraccount_lim']['title']        = "Benutzerkonten Anzeige-Limit";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "Letzte Referrer-Limit";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "Mp-Breite maximum";
$loca['setup']['width_max']['descr']              = "Breite des Mp-Balkens [Pixel]";
$loca['setup']['width_factor']['title']           = "Mp-Breite Faktor";
$loca['setup']['width_factor']['descr']           = "Faktor zur Berechnung des Mp-Balkens [Faktor]";
$loca['setup']['browseros_barsize']['title']      = "Browser/OS-Balkenbreite";
$loca['setup']['browseros_barsize']['descr']      = "Maximale Breite des Prozent-Balkens in der Browser/OS-Statistik [Pixel]";
$loca['setup']['extended']['title']               = "Erweiterte Log-Liste";
$loca['setup']['extended']['descr']               = "Falls Sie dies auf false sezten, wird in der Log-Liste die Spalten Aufl&ouml;sung und Farben ausgeblendet.";
$loca['setup']['ttf_demo_size']['title']          = "TTF Demo-Schriftgr&ouml;&szlig;e";
$loca['setup']['ttf_demo_size']['descr']          = "TTF-Schriftgr&ouml;&szlig;e auf der Demo-Seite [Points]";
$loca['setup']['css_show']['title']               = "CSS &Uuml;bersicht";
$loca['setup']['css_show']['descr']               = "Welche Farbwerte sollen sichtbar sein in der Ansicht des CSS-Editors [Kommaseparierte Werte]";

//email stuff
$strAccActivation    = "Benutzerkonto wurde eingerichtet";

// pages
$strUsrPage[0]       = "Login/Logout";
$strUsrPage[1]       = "Logs";
$strUsrPage[2]       = "Statistiken";
$strUsrPage[3]       = "Kalender";
$strUsrPage[4]       = "Browser/OS";
$strUsrPage[5]       = "Einstellungen";
$strUsrPage[6]       = "Benutzerprofil";
$strAdminPage[0]     = "Administration";
$strAdminPage[1]     = "Benutzer anlegen/l&ouml;schen";
$strAdminPage[2]     = "Benutzerkonto anzeigen";
$strAdminPage[3]     = "Letzten Benutzer anzeigen";
$strAdminPage[4]     = "CSS Editor";
$strAdminPage[5]     = "Statistik";
$strAdminPage[6]     = "E-Mailliste";

// functions.lib.php
$strPrev             = "Vorherige";
$strNext             = "N&auml;chste";

// headfoot.inc.php
$strTrackedSite      = "Gez&auml;hlte Webseiten:";
$strCurrentTime      = "Aktuelle Uhrzeit";
$strHeadDateFormat   = "d.m.Y - <b>H:i</b>";
$strYourHits         = "Ihre Hits:";
$strSlogan           = "...Ihr ultimatives Logging-Tool!";

// index.php
$strEnterUsernPw     = "Bitte geben Sie Ihren Benutzernamen und das Passwort ein";
$strLostPw           = "Passwort verloren?";
$strLinkNewPw        = "NEUES PASSWORT anfordern!";
$strGetFreeAccount   = "Jetzt anmelden!";
$strSignUpUseracc    = "Melden Sie jetzt Ihren Gratiscounter an!";
$strMsgWrongPw       = "<b>Ihr Passwort oder der Benutzername ist nicht g&uuml;ltig!</b><br />Versuchen Sie es bitte erneut...";
$strMsgNewPw         = "<b>Ihr neues Passwort wurde erfolgreich erstellt!</b><br />Es wurde an Ihre E-Mailadresse versandt.";

// dspNewPw.php
$strForVerification  = "Zur &Uuml;berpr&uuml;fung geben Sie bitte Ihren Benutzernamen und die E-Mailadresse ein";
$strGetIt            = "Anfordern!";
$strMsgNoValidUser   = "<b>Ihr Benutzername oder die E-Mailadresse ist nicht g&uuml;ltig.</b><br />Versuchen Sie es bitte erneut...";

// signup.php
$strSignUp           = "PowerPhlogger Benutzerkonto erstellen:";
$strHtmlCode         = "HTML-Code";
$strAddHtmlCode      = "Binden Sie in jedem Dokument, welches Sie mit dem Counter ausstatten wollen, den folgenden HTML-Code ein:";
$strJsFile           = "Falls Sie die pphlogger.js Datei verloren haben, so k&ouml;nnen Sie es sich hier erneut herunterladen:<br />";
$strInstructions     = "ANLEITUNG:";
$strConfLogin        = "Um Ihr Konto endg&uuml;ltig freizuschalten, loggen Sie sich bitte mit dem Passwort, welches Sie von uns per E-Mail erhalten haben, ein:";
$strConfLogin2       = "Falls Sie Ihr Konto nicht innerhalb von ".$cleanup_lim." Stunden best&auml;tigen, so wird es gel&ouml;scht.";
$strUploadJs         = "Bitte laden Sie das als Attachement beigef&uuml;gte Javascript [pphlogger.js] auf Ihren Webserver hoch.";
$strNoSignUp         = "Zur Zeit k&ouml;nnen wir keine neuen Benutzerkonten erstellen!";
$strReturnToLogin    = "zur&uuml;ck zum Login";

// dspLogs.php
$strShowLogs         = "Logs anzeigen:";
$strSelect           = "Ausw&auml;hlen";
$strUnselect         = "Auswahl aufheben";
$strAll              = "Alle";
$strTurnShowref      = "Zeige Referrer";
$strFullAgt          = "Alle Browser";
$strDemoMode         = "Demo-Modus";
$strGuestMsg1        = "Als Gast haben Sie keine Berechtigung zum L&ouml;schen von Log-Dateien!";
$strGuestMsg2        = "Bitte erst die Deletelog-Funktion einschalten!";
$strViewLogs         = "Logs anzeigen";
$strHostIP           = "Host / IP";
$strReferrer         = "Referrer";
$strReferrers        = "Referrer";
$strAgent            = "Browser-Information";
$strRes              = "Aufl&ouml;sung";
$strColor            = "Farben";
$strTimestamp        = "Uhrzeit";
$strProxy            = "Proxy";

// dspStats.php
$strVisPerDay        = "Besucher pro Tag";
$strPerDay           = "pro Tag";
$strVisPerHour       = "Besucher pro Stunde";
$strLast             = "letzte";
$strMonth            = "Monat";
$strMonths           = "Monate";
$strToday            = "Heute";
$strAverage          = "Durchschnittlich";
$strAverageAbbr      = "Durchschn.";
$strDay              = "Tag";
$strDays             = "Tage";
$strCurrOnlUsers     = "Aktuell anwesende Besucher";
$strIPkept           = "IP's werden f&uuml;r die letzten";
$strIPkept2          = "Minuten festgehalten.";
$strOnline           = "Online";
$strEntryTime        = "Ankunft";
$strLastReload       = "Letzer Reload";
$strLastUrl          = "Letzte URL";
$strSince            = "seit";
$strMultipage        = "Multipage";
$strKeywords         = "Suchbegriffe";
$strSingleWords      = "Einzelne W&ouml;rter";
$strWholeStrings     = "Ganze Phrasen";
$strDownloads        = "Downloads";
$strTerritories      = "Land";
$str_arrMonths       = Array(1 => "Januar", "Februar", "Maerz", "April", "Mai", "Juni", "Juli", 
                                    "August", "September", "Oktober", "November", "Dezember");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez");
$str_area            = Array(
                         'EU'   => 'Europa',
                         'AM'   => 'Amerika',
                         'AF'   => 'Afrika',
                         'AS'   => 'Asien',
                         'OZ'   => 'Ozeanien',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "Anzahl Besucher anzeigen";
$strShowPageimpress  = "Alle Seitenaufrufe anzeigen";
$strReload           = "Aktualisieren";

// edSettings.php
$strCookieTxt        = "Cookie setzen, um Eigenz&auml;hlungen zu vermeiden:";
$strCountMe          = "Z&auml;hl mich!";
$strDontCountMe      = "Z&auml;hl mich nicht!";
$strEnableDellog     = "Delete-Log einschalten";
$strDisableDellog    = "Delete-Log ausschalten";
$strEnableDellog2    = "Delete-Funktion ein/ausschalten:";
$strResetHits        = "Hits zur&uuml;cksetzen";
$strResHitsTxt       = "Zum Zur&uuml;cksetzen der Hits bitte einen Wert eingeben:";
$strMysqlDump        = "MySQL Dump (Schema) ansehen";
$strStructOnly       = "Nur Struktur";
$strAddDropTbl       = "'Drop Table' hinzuf&uuml;gen";
$strStructData       = "Struktur und Daten";
$strSend             = "Senden";
$strComplInserts     = "Komplette Inserts";
$strDiskSpace        = "Speicherplatz";
$strAvailSpace       = "Vorhandener Speicherplatz";
$strUsedSpace        = "Benutzter Speicherplatz";
$strDbSpace          = "Speicherplatz in Datenbank";
$strFreeSpace        = "Noch frei";
$strFileUpload       = "Mehrfacher Datei-Upload";
$strMaxFilesize      = "Maximale Dateigr&ouml;&szlig;e";
$strErrUpload        = "Fehler beim Upload. Versuchen Sie es bitte noch einmal!";
$strUploadOk         = "Erfolgreicher Upload!";
$strFilename         = "Dateiname";
$strSize             = "Gr&ouml;&szlig;e";
$strYourLast         = "Ihre letzten";
$strCustomers        = "Kunden";
$strYourTimeout      = "Ihr Timeout ist auf";
$strMinutes          = "Minuten";
$strBlocking         = "Sperren";
$strShortQuery       = "Short query";
$strOwnReferrers     = "Eigene Referrer";

// edUserprofile.php
$strUserprofile      = "Benutzerprofil-Verwaltung";
$strEditProfile      = "Editieren Sie Ihre Daten und klicken Sie anschlie&szlig;end auf den Button 'Speichern'";
$strUrl1Txt          = "URL zu Ihrer Startseite.";
$strUrl2Txt          = "Weitere URLs bitte getrennt durch Zeilenschaltung eingeben:";
$strEmail            = "E-Mail:";
$strTimezone         = "Ihre Zeitzone:";
$strUserLang         = "Ihre Sprache:";
$strVisible          = "Sichtbar:";
$strVisibleStyle     = "Stil:";
$strTimeout          = "Timeout:";
$strEmailNotif       = "E-Mailbenachrichtigung: alle...";
$strDefLogNo         = "Anzahl anzuzeigender Logs:";
$strKwListMode       = "Modus Suchbegriffe:";
$strAllowDemo        = "Demo-Modus erlauben:";
$strTTF              = "Counter-Style w&auml;hlen:";
$strAvailFonts       = "verf&uuml;gbare Schriften";
$strFontSize         = "Schriftgr&ouml;&szlig;e:";
$strFontColor        = "Schriftfarbe:";
$strBgColor          = "Hintergrundfarbe:";
$strTransBg          = "Transparenter Hintergrund:";
$strSample           = "Beispielbild:";
$strChangePw         = "Passwort &auml;ndern:";
$strOldPw            = "Altes Passwort:";
$strNewPw            = "Neues Passwort:";
$strReenterPw        = "Neues Passwort wiederholen:";
$strLoadCSS          = "Stylesheet laden:";
$strView4Msg1        = "Benutzerprofil erfolgreich ge&auml;ndert!";
$strView4Msg2        = "Ein Fehler ist beim &Auml;ndern des Profils aufgetreten!";
$strView4Msg3        = "Als Gast k&ouml;nnen Sie<br />keine &Auml;nderungen speichern!";
$strPwChanged        = "Passwort ge&auml;ndert!";
$strWrongPw          = "Falsches Passwort!";

// admin/index.php
$strAdmin            = "Administration";
$strMaintenance      = "Wartung";
$strCheckNewVer      = "Suche nach neuer Version";
$strCreate           = "Neues Konto anlegen:";
$strAdminMsg1        = "Benutzername existiert schon!";
$strAdminMsg2        = "Benutzer erfolgreich angelegt!";
$strAdminMsg3        = "Ihr E-Mailadresse wurde nicht akzeptiert!";
$strAdminMsg4        = "Der Benutzername darf keine Umlaute, sondern nur alphanumerische Werte<br />oder die Zeichen . , _ oder - enthalten.<br />Auch darf die L&auml;nge 30 Zeichen nicht &uuml;bersteigen!";
$strAdminErr1        = "Ein Fehler ist aufgetreten. Bitte versuchen Sie es noch einmal!";
$strDelUser          = "Benutzer l&ouml;schen:";
$strDelErr           = "Ein Fehler ist aufgetreten!";
$strDelOk            = "Alle Daten des Benutzers wurden gel&ouml;scht!";
$strWrongPwUser      = "Falscher Benutzername oder Passwort!";
$strAdminCookie      = "Admin Cookie anlegen";
$strNetcheck         = "Netcheck einschalten";
$strHideAccounts     = "Benutzerkonten verstecken";
$strShowAccounts     = "Benutzerkonten anzeigen";
$strReadyDelete      = "Bereit zum L&ouml;schen";
$strMailinglist      = "E-Mailliste";
$strLatestPphlVers   = "Letzte PowerPhlogger Version";
$strLatestVersion    = "Letzte Version";
$strReleaseDate      = "Release-Datum";
$strDownloadLoc      = "Download-Ort";
$strReloadKeywords   = "Reload Suchbegriffe";
$strReloadKeyw1      = "Dies wird die Keyword-Toplist der Benutzer auffrischen.";
$strReloadKeyw2      = "Bitte nicht ausf&uuml;hren, es sei denn, Sie haben die Datei 'engines-list.ini' editiert!";

// admin/change_userprofile.php
$strMaxLoglim        = "Maximales Log-Limit:";
$strMaxPath          = "Maximal gespeicherte Besucherpfade:";
?>
