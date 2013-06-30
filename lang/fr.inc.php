<?php
/* French language localization
 *
 * $Id: fr.inc.php,v 1.38 2002/10/28 17:14:45 cvs_iezzi Exp $
 * credits to: Steve Aguet <gizeh@bluewin.ch>  www.otakudream.com
 *             Eric Blas <webmaster@phphomepage.net> www.phphomepage.net
 */

$strCharset          = "iso-8859-1";
$strThousandSep      = " ";
$strDate             = "d/m/Y";
$strDate2            = "M d, Y";
$strNumThousandsSep  = ' ';
$strNumDecimalSep    = ',';
$strByteUnits        = array('Octets', 'Ko', 'Mo', 'Go');

$strOn               = "on";
$strOff              = "off";
$strEnable           = "on";
$strEnabled          = "activé";
$strDisable          = "off";
$strDisabled         = "désactivé";
$strDellog           = "deletelog";
$strTopOfPage        = "haut de la page";
$strTotal            = "Total";
$strHits             = "hits";
$strUniqs            = "uniqs";
$strUniq             = "uniq";
$strPageimpressions  = "impressions de page";
$strDomains          = "domaines";
$strConfiguration    = "configuration";
$strCurrConfig       = "configuration actuelle:";
$strUsername         = "nom d'utilisateur";
$strPassword         = "mot de passe";
$strDelete           = "effacer";
$strUser             = "utilisateur";
$strUseraccount      = "compte utilisateur";
$strUseraccounts     = "comptes utilisateur";
$strFrom             = "du";
$strTo               = "au";
$strTo2              = "au";
$strEdit             = "éditer";
$strSet              = "set";
$strMove             = "change";
$strDefault          = "défaut";
$strCreateNew        = "créer un nouveau";
$strSave             = "sauver";
$strUnknown          = "inconnu";
$strUndefined        = "indéfini";
$strCache            = "cache";
$strSeconds          = "seconds";
$strDatabase         = "base de données";
$strTable            = "table";
$strCalc             = "calc";
$strStep             = "étape";
$strSystem           = "système";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 Heures) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 Heures) Iles Midway, Samoa";
$loca['tz']['-10']   = "(GMT -10:00 Heures) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 Heures) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 Heures) Pacifique (USA &amp; Canada), Tijuana";
$loca['tz']['-7']    = "(GMT -7:00 Heures) Montagnes (USA &amp; Canada), Arizona";
$loca['tz']['-6']    = "(GMT -6:00 Heures) Central (USA &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 Heures) Est (USA &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 Heures) Heure Atlantique (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 Heures) Terre-Neuve";
$loca['tz']['-3']    = "(GMT -3:00 Heures) Brasilia, Buenos Aires, Georgetown, Falkland Is";
$loca['tz']['-2']    = "(GMT -2:00 Heures) Centre-Atlantique, Ascension Is., St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 Heure) Les Açores, Iles du Cap Vert";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, Londres, Lisbonne, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 Heure) Amsterdam, Berlin, Bruxelles, Madrid, Paris, Rome";
$loca['tz']['2']     = "(GMT +2:00 Heures) Le Caire, Helsinki, Kaliningrad, Afrique du Sud";
$loca['tz']['3']     = "(GMT +3:00 Heures) Bagdad, Riyah, Moscow, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 Heures) Téhéran";
$loca['tz']['4']     = "(GMT +4:00 Heures) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 Heures) Kaboul";
$loca['tz']['5']     = "(GMT +5:00 Heures) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 Heures) Bombay, Calcutta, Madras, New Delhi";
$loca['tz']['6']     = "(GMT +6:00 Heures) Almaty, Colombo, Dhaka, Novosibirsk";
$loca['tz']['6.5']   = "(GMT +6:30 hours) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 Heures) Bangkok, Hanoï, Djakarta";
$loca['tz']['8']     = "(GMT +8:00 Heures) Pékin, Hong Kong, Perth, Singapour, Taïpei";
$loca['tz']['9']     = "(GMT +9:00 Heures) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 Heures) Adélaïde, Darwin";
$loca['tz']['10']    = "(GMT +10:00 Heures) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$loca['tz']['11']    = "(GMT +11:00 Heures) Magadan, New Caledonia, Solomon Islands";
$loca['tz']['12']    = "(GMT +12:00 Heures) Auckland, Wellington, Fiji, Marshall Island";

// Language selection
$loca['lang']['bh']  = "Bosniaque";
$loca['lang']['cn']  = "Chinois simplifié";
$loca['lang']['de']  = "Allemand";
$loca['lang']['dk']  = "Danois";
$loca['lang']['en']  = "Anglais";
$loca['lang']['es']  = "Spanish";
$loca['lang']['fr']  = "Français";
$loca['lang']['gr']  = "Grec";
$loca['lang']['it']  = "Italien";
$loca['lang']['jp']  = "Japanese";
$loca['lang']['lv']  = "Latvian";
$loca['lang']['nl']  = "Hollandais";
$loca['lang']['no']  = "Norvégien";
$loca['lang']['pl']  = "Polonais";
$loca['lang']['po']  = "Brésilien Portugais";
$loca['lang']['ro']  = "Romanian";
$loca['lang']['ru']  = "Russe";
$loca['lang']['se']  = "Suedois";
$loca['lang']['tr']  = "Turc";
$loca['lang']['tw']  = "Chinois traditionnel";

// setup.php
$strSetup                                         = "Installation";
$loca['setup']['header1']                         = "Paramètres de l'administration";
$loca['setup']['header2']                         = "Paramètres généraux";
$loca['setup']['header3']                         = "Paramètres spéciaux";
$loca['setup']['header4']                         = "Paramètres Graphiques";
$loca['setup']['header5']                         = "Limites des Logs / Suppression Automatique";
$loca['setup']['header6']                         = "Limites pour les Affichages";
$loca['setup']['header7']                         = "Paramètres  d'affichage";
$loca['setup']['intro_txt']                       = "Ce script vous aidera à installer les variables que vous devez fixer. Vous verez plusieurs pages différentes. Chaque page représente une partie différente du script.";
$loca['setup']['step0_txt']                       = "<b>License</b> -- SVP lisez la GNU General Public License. PowerPhlogger est développé en tant que logiciel libre, mais il y a certaines conditions pour le distribuer et l'éditer.";
$loca['setup']['step1_txt']                       = "<b>Paramètres généraux</b> -- vérifiez svp tous les champs de cette page et assurez-vous que les informations sont correctes. Si vous n'êtes pas suffisamment sûre,garder les valeurs par défaut.";
$loca['setup']['step2_txt']                       = "<b>Paramètres facultatifs</b> -- pour la plupart de ces paramètres vous devriez garder les valeurs par défaut. Éditez les seulement si vous êtes sûr de vouloir le faire. ";
$loca['setup']['step3_txt_a']                     = "<b>Installation réalisé avec succès</b> -- vous pouvez maintenant commencer à travailler avec PowerPhlogger.<br /><br />Svp n'oubliez pas de renommer le dossier votre/admin et de le protéger avec un htaccess. <br />Veuillez lire soigneusement la documentation pour de plus amples informations";
$loca['setup']['step3_txt_b']                     = "vous pouvez maintenant commencer à installer vos comptes utilisateur";

$loca['setup']['pphlogger_location']['title']     = "Localisation de PowerPhlogger";
$loca['setup']['pphlogger_location']['descr']     = "URL du dossier principal de votre PowerPhlogger";
$loca['setup']['admin_mail']['title']             = "Adresse Email de l'Administrateur";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "Nom de l'Administrateur";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "Mot de passe Administrateur";
$loca['setup']['admin_pw']['descr']               = "Utilisez pour effacer les comptes utilistateurs";
$loca['setup']['server_GMT']['title']             = "Décalage horaire du Système";
$loca['setup']['server_GMT']['descr']             = "Décalage horaire de l'emplacement de votre serveur";
$loca['setup']['admin_GMT']['title']              = "Décalage horaire de l'Administrateur";
$loca['setup']['admin_GMT']['descr']              = "Décalage horaire de l'emplacement où vous vous trouvez";
$loca['setup']['default_lang']['title']           = "Langue par Défaut";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "Feuille de Style par Défaut";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "Permettre aux utilisateurs de s'autoenregistrer";
$loca['setup']['signup_ok']['descr']              = "Voulez-vous rendre disponible la page d'enregistrement pour que les utilisateurs créent des comptes utilisateurs ?";
$loca['setup']['master_timeout']['title']         = "Userlog Timeout";
$loca['setup']['master_timeout']['descr']         = "[en sec, défaut = 30min = 1800]";
$loca['setup']['traceroute']['title']             = "Traceroute URL";
$loca['setup']['traceroute']['descr']             = "Si vous savez un autre service qui vous laisse faire des traceroutes, entrez-le ici.";
$loca['setup']['pass_length']['title']            = "Longuer du mot de passe utilisateur";
$loca['setup']['pass_length']['descr']            = "La longueur du mot de passe automatique (NE dépacez PAS 15 caractères !)  ";
$loca['setup']['pw_privacy']['title']             = "Mot de passe Privé";
$loca['setup']['pw_privacy']['descr']             = "Si vous mettez le pw_privacy à False un BCC : un email plain-text de la confirmation de mot de passe sera envoyé à l'adresse email de l'administrateur. Sauf pour des raisons privé, le paramètre par défaut est true.";
$loca['setup']['cache_calendar']['title']         = "Cache du Calendrier";
$loca['setup']['cache_calendar']['descr']         = "Paramétrez le cache-temps en secondes.  Si vous paramètrez celui ci à 0 (défaut), le calendrier emploiera la fonction de cache avançée de mise à jour (fortement recommandée!)";
$loca['setup']['mxlookup']['title']               = "MX Lookup";
$loca['setup']['mxlookup']['descr']               = "Pour rendre la fonction de validation par email plus intelligente, activé ceci. Si activé, la fonction vérifie l'existence du domaine. Le défaut est false, car certain PHP sous win32 ne supporte pas cette fonction !";
$loca['setup']['loopback_bug']['title']           = "Loopback Bug";
$loca['setup']['loopback_bug']['descr']           = "Activez seulement ceci si vous employez un f2s ou un hébergeur semblable et que vous obtenez des informations IP/proxy fausses !";
$loca['setup']['mysqldump_on']['title']           = "MySQL Dump";
$loca['setup']['mysqldump_on']['descr']           = "activer/désactiver les dump mysql dans l'onglet paramètres pour tous les utilisateurs";
$loca['setup']['md5form']['title']                = "MD5 Login Form";
$loca['setup']['md5form']['descr']                = "activer/désactiver la md5-encryption (utilisant JS) pour le formulaire de login";
$loca['setup']['mail_mod']['title']               = "Module de Mailing";
$loca['setup']['mail_mod']['descr']               = "Choisissez le Module de Mailing que vous souhaitez utiliser pour envoyer les email de confirmation comprenant la pièce jointe pphlogger.js [libmail|htmlmime|plain]";
$loca['setup']['GD_enabled']['title']             = "Activer la GD";
$loca['setup']['GD_enabled']['descr']             = "Si vous ne pouvez pas faire fonctionner votre GD-Lib ou si votre hébergeur ne veut pas l'installer, vous pouvez neutraliser les images générer par la GD-lib dans PPhlogger. Vous manquerez beaucoup de grandes fonctionnalités si vous placez ceci à false, cependant !";
$loca['setup']['gd_img_type']['title']            = "GD format d'Image ";
$loca['setup']['gd_img_type']['descr']            = "GD-library: Changez ceci en format correct d'image si vous rencontrez n'importe quels problèmes. Défaut est 'auto' pour auto-detection. [auto|png|gif|jpeg]";
$loca['setup']['Freetype_enabled']['title']       = "Activer Freetype";
$loca['setup']['Freetype_enabled']['descr']       = "Si vous ne pouvez pas faire fonctionner votre Freetype-Lib ou si votre hébergeur ne veut pas l'installer, vous pouvez neutraliser ceci.  Les utilisateurs ne pourront pas employer des polices TTF pour leur compteur. Les polices intégrées devraient être disponibles, cependant.";
$loca['setup']['ttf_location']['title']           = "Emplacement des TTF";
$loca['setup']['ttf_location']['descr']           = "Si vous ne pouvez pas voir le compteur et que vous employez GD 2.x ou GD 1.x dans une distribution PHP, essayez de parmètrer un chemin absolu du serveur à votre répertoire de polices ttf.  Autrement NE CHANGEZ PAS CECI!   [relative|/your/absolute/path/to/ttf_fonts/]";
$loca['setup']['cleanup_lim']['title']            = "Clean-Up Limit";
$loca['setup']['cleanup_lim']['descr']            = "le délai après quoi un compte utilisateur non confirmé peut être supprimé en utilisant le lien de nettoyage dans les Comptes utilisateurs (admin2) [heures]";
$loca['setup']['cleanup_old']['title']            = "Clean-Up Old Limit";
$loca['setup']['cleanup_old']['descr']            = "Après combien de jours les comptes inutilisés (aucuns hits, aucun login) devraient-ils être supprimés? [jours]";
$loca['setup']['dellog_global']['title']          = "Log Deletion Global Switch";
$loca['setup']['dellog_global']['descr']          = "Si vous paramétrez ceci à false, les propres paramètres de chaque utilisateur seront employés. Si vous le mettez à true, utilisez les valeurs suivantes ...";
$loca['setup']['dellog_lim']['title']             = "Log Deletion par Logs";
$loca['setup']['dellog_lim']['descr']             = "Paramétrez le nombre de log à archiver. Si vous paramétrez ceci à 0, il n'y aura aucune limite [défaut].";
$loca['setup']['dellog_lim_d']['title']           = "Log Deletion par Jours";
$loca['setup']['dellog_lim_d']['descr']           = "Paramétrez le nombre de jours après quoi les logs doivent être supprimées. Si vous mettez ceci à 0, il n'y aura aucune limite [défaut].";
$loca['setup']['dellog_lim_prob']['title']        = "Log Deletion Probability";
$loca['setup']['dellog_lim_prob']['descr']        = "Deletion probability in percent";
$loca['setup']['delpath_global']['title']         = "Path Deletion Global Switch";
$loca['setup']['delpath_global']['descr']         = "Si vous paramétrez ceci à false, les propres paramètres de chaque utilisateur seront employés. Si vous le mettez à true, utilisez les valeurs suivantes...";
$loca['setup']['delpath_lim']['title']            = "Path Deletion par Logs";
$loca['setup']['delpath_lim']['descr']            = "Placez le nombre de chemins de visiteur à archiver. Si vous paramétrez ceci à 0, il n'y aura aucune limite.  ";
$loca['setup']['delpath_lim_d']['title']          = "Path Deletion par Jours";
$loca['setup']['delpath_lim_d']['descr']          = "Placez le nombre de jours après quoi les chemins de visiteur doivent être supprimées.  Si vous paramétrez ceci à 0, il n'y aura aucune limite [défaut].";
$loca['setup']['delpath_lim_prob']['title']       = "Path Deletion Probability";
$loca['setup']['delpath_lim_prob']['descr']       = "Deletion probability in percent";
$loca['setup']['show_cust']['title']              = "Userlog Client Limit";
$loca['setup']['show_cust']['descr']              = "Combien de logs client devraient être montrées dans le userlog ?";
$loca['setup']['calendar_months']['title']        = "Limite en mois du Calendrier";
$loca['setup']['calendar_months']['descr']        = "Combien de mois devraient être montrés dans le calendrier ?";
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
$loca['setup']['mpfront_lim']['descr']            = "Limitez les multi-pages sur la page de Logs.";
$loca['setup']['useraccount_lim']['title']        = "Nombre d'affichage de comptes utilisateur";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "Limite des Derniers Referrer";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "MP Width Maximum";
$loca['setup']['width_max']['descr']              = "MP view-bar in Logs [pixel]";
$loca['setup']['width_factor']['title']           = "MP Width Factor";
$loca['setup']['width_factor']['descr']           = "MP view-bar in Logs [factor]";
$loca['setup']['browseros_barsize']['title']      = "Browser/OS Bar Size";
$loca['setup']['browseros_barsize']['descr']      = "Taille maximum des barres de pourcentage dans Browser/OS statistics [pixel]";
$loca['setup']['extended']['title']               = "Extended Log-List";
$loca['setup']['extended']['descr']               = "Si vous paramétrez ceci à false, vous ne verrez pas la colonne de Top Res et de Top Color (seulement recommandée pour des utilisateurs avec de petites résolution de moniteurs)";
$loca['setup']['ttf_demo_size']['title']          = "TTF Demo Size";
$loca['setup']['ttf_demo_size']['descr']          = "TTF-font demonstration [points]";
$loca['setup']['css_show']['title']               = "CSS Overview";
$loca['setup']['css_show']['descr']               = "Quelles couleurs devraient être affiché dans le CSS éditent la vue d'ensemble de table ? [comma-separated]";

//email stuff
$strAccActivation    = "activation du compte";

// pages
$strUsrPage[0]       = "login/logout";
$strUsrPage[1]       = "logs";
$strUsrPage[2]       = "stats";
$strUsrPage[3]       = "stats 2";
$strUsrPage[4]       = "stats 3";
$strUsrPage[5]       = "paramètres";
$strUsrPage[6]       = "profil";
$strAdminPage[0]     = "administration";
$strAdminPage[1]     = "création/Sup user";
$strAdminPage[2]     = "Comptes Utilisateurs";
$strAdminPage[3]     = "Derniers clients";
$strAdminPage[4]     = "Editeur CSS";
$strAdminPage[5]     = "statistiques";
$strAdminPage[6]     = "mailing list";

// functions.lib.php
$strPrev             = "précédent";
$strNext             = "suivant";

// headfoot.inc.php
$strTrackedSite      = "site suivi:";
$strCurrentTime      = "heure actuelle";
$strHeadDateFormat   = "d. M, <b>H:i</b>";
$strYourHits         = "vos hits:";
$strSlogan           = "...votre outils de stats ultime!";

// index.php
$strEnterUsernPw     = "SVP entrez votre login/mot de passe";
$strLostPw           = "mot de passe perdu?";
$strLinkNewPw        = "NOUVEAU MOT DE PASSE";
$strGetFreeAccount   = "Obtenir un accés gratuit";
$strSignUpUseracc    = "Enregistrez vous pour compte utilisateur gratuit!";
$strMsgWrongPw       = "<b>Vous avez tapé un mauvais mot de passe ou login !!!</b><br />SVP Essayez de nouveau...";
$strMsgNewPw         = "<b>Votre nouveau mot de passe vous a été envoyé !</b><br />Il a été envoyé à l'adresse mail que vous aviez communiquée.";
// dspNewPw.php
$strForVerification  = "Pour vérification tapez votre login et votre email";
$strGetIt            = "L'obtenir!";
$strMsgNoValidUser   = "<b>Vous n'avez pas tapez d'email/de login valide</b><br />SVP Essayez de nouveau...";

// signup.php
$strSignUp           = "Enregistrez vous pour un nouveau compte PowerPhlogger:";
$strHtmlCode         = "HTML Code";
$strAddHtmlCode      = "ajoutez le code HTML suivant dans toutes vos pages dont vous souhaitez avoir des stats:  ";
$strJsFile           = "Si vous avez perdu votre fichier pphlogger.js, télécharger le ici :";
$strInstructions     = "INSTRUCTIONS:";
$strConfLogin        = "afin de confirmer votre nouveau compte, vous devez utilisez le login et le mot de passe que nous avons envoyé à votre addresse email.";
$strConfLogin2       = "Si vous ne confirmez pas votre compte il sera supprimé après ".$cleanup_lim." hrs";
$strUploadJs         = "téléchargez le fichier pphlogger.js que vous avez reçu comme pièce jointe.";
$strNoSignUp         = "Désolés, actuellement nous ne pouvons offrir aucun comptes gratuit sur ce serveur !";
$strReturnToLogin    = "Retournez au login";

// dspLogs.php
$strShowLogs         = "nb de logs à afficher:";
$strSelect           = "select";
$strUnselect         = "unselect";
$strAll              = "Tous";
$strTurnShowref      = "referer";
$strFullAgt          = "navigateur complet";
$strDemoMode         = "mode démo!";
$strGuestMsg1        = "les visiteurs n'ont pas la permission de supprimer les logs!!!";
$strGuestMsg2        = "veuillez activer la fonction de suppression!";
$strViewLogs         = "voir les logs";
$strHostIP           = "hôte / IP";
$strReferrer         = "referrer";
$strReferrers        = "referrers";
$strAgent            = "navigateur";
$strRes              = "rés";
$strColor            = "couleur";
$strTimestamp        = "date/heure";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "visiteurs par jour";
$strPerDay           = "par jour";
$strVisPerHour       = "visiteurs par heure";
$strLast             = "dernier";
$strMonth            = "mois";
$strMonths           = "mois";
$strToday            = "aujourd'hui";
$strAverage          = "moyenne";
$strAverageAbbr      = "Moy.";
$strDay              = "jour";
$strDays             = "jours";
$strCurrOnlUsers     = "utilisateur actuellement en ligne";
$strIPkept           = "les IP sont conservées pour les dernières";
$strIPkept2          = "minutes";
$strOnline           = "en-ligne";
$strEntryTime        = "heure d'entrée";
$strLastReload       = "dernier reload";
$strLastUrl          = "dernière URL";
$strSince            = "depuis";
$strMultipage        = "multi-page";
$strKeywords         = "keywords";
$strSingleWords      = "mots seul";
$strWholeStrings     = "tout la chaîne";
$strDownloads        = "downloads";
$strTerritories      = "territoires";
$str_arrMonths       = Array(1 => "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet",
                                    "Août", "Septembre", "Octobre", "Novembre", "Décembre");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jui", "Aou", "Sep", "Oct", "Nov", "Dec");
$str_area            = Array(
                         'EU'   => 'Europe',
                         'AM'   => 'America',
                         'AF'   => 'Africa',
                         'AS'   => 'Asia',
                         'OZ'   => 'Ozeania',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "Montrer les visiteurs uniques";
$strShowPageimpress  = "Montrer le nombre d'impression de pages";
$strReload           = "rafraichir";

// edSettings.php
$strCookieTxt        = "placer le cookie pour éviter vos propres visites:";
$strCountMe          = "me compter!";
$strDontCountMe      = "ne pas me compter!";
$strEnableDellog     = "deletelog on";
$strDisableDellog    = "deletelog off";
$strEnableDellog2    = "activer la fonction de suppression:";
$strResetHits        = "remise à zero";
$strResHitsTxt       = "pour remettre les hits, indiquez une valeur:";
$strMysqlDump        = "voir le dump mySQL (schema)";
$strStructOnly       = "structure uniquement";
$strAddDropTbl       = "ajouter 'drop table'";
$strStructData       = "structure et données";
$strSend             = "envoyer";
$strComplInserts     = "inserts complets";
$strDiskSpace        = "espace dique";
$strAvailSpace       = "espace disque disponible";
$strUsedSpace        = "espace disque utilisé";
$strDbSpace          = "Espace utilisé par la base de donnée";
$strFreeSpace        = "espace disque libre";
$strFileUpload       = "upload de fichiers";
$strMaxFilesize      = "taille maximale du fichier";
$strErrUpload        = "Erreur de transmission. Ressayez.";
$strUploadOk         = "Transmission réussie!!";
$strFilename         = "non du fichier";
$strSize             = "taille";
$strYourLast         = "vos derniers";
$strCustomers        = "clients";
$strYourTimeout      = "votre timeout est mis à";
$strMinutes          = "minutes.";
$strBlocking         = "blocking";
$strShortQuery       = "Requête courte";
$strOwnReferrers     = "nos referrers";

// edUserprofile.php
$strUserprofile      = "profil";
$strEditProfile      = "éditez votre configuration et cliquez sur le bouton:";
$strUrl1Txt          = "URL pointant sur votre page d'index principale.";
$strUrl2Txt          = "Si vous avez des URL alternatives pointant sur la même page,<br />indiquez chacune sur une nouvelle ligne:";
$strEmail            = "email:";
$strTimezone         = "votre fuseau horaire:";
$strUserLang         = "langue:";
$strVisible          = "visible:";
$strVisibleStyle     = "visible style:";
$strTimeout          = "timeout:";
$strEmailNotif       = "notification par email : tous les...";
$strDefLogNo         = "nombre de logs à montrer par défaut:";
$strKwListMode       = "mode keyword-list:";
$strAllowDemo        = "autoriser le mode demo:";
$strTTF              = "police TrueType:";
$strAvailFonts       = "police disponible";
$strFontSize         = "taille de la police:";
$strFontColor        = "couleur de la police:";
$strBgColor          = "couleur d'arrière-plan:";
$strTransBg          = "arrière-plan transparent:";
$strSample           = "image example:";
$strChangePw         = "changer votre mot de passe:";
$strOldPw            = "ancien mot de passe:";
$strNewPw            = "nouveau mot de passe:";
$strReenterPw        = "confirmez le mot de passe:";
$strLoadCSS          = "charger la feuille de style:";
$strView4Msg1        = "profil mis à jour avec succès!";
$strView4Msg2        = "impossible de mettre à jour votre profil!!!";
$strView4Msg3        = "comme invité vous n'êtes pas autorisé<br />à faire des changement!";
$strPwChanged        = "mot de passe modifié !";
$strWrongPw          = "mauvais mot de passe !!";

// admin/index.php
$strAdmin            = "administration";
$strMaintenance      = "maintenance";
$strCheckNewVer      = "Cherche nouvelle version";
$strCreate           = "créer un nouveau compte:";
$strAdminMsg1        = "nom d'utilisateur existant";
$strAdminMsg2        = "utilisateur créé avec succès";
$strAdminMsg3        = "Votre email n'est pas correct!";
$strAdminMsg4        = "les usernames doivent seulement contenir les caractères alphanumériques,<br />.,-,_, et doivent être inférieur à 30 caractères!";
$strAdminErr1        = "un problème s'est produit lors de la création d'un nouveau utilisateur";
$strDelUser          = "supprimer un utilisateur:";
$strDelErr           = "il y a eu un problème !!";
$strDelOk            = "toutes les données utilisateurs ont été effacées!";
$strWrongPwUser      = "mot de passe ou utilisateur invalide !";
$strAdminCookie      = "créer le cookie admin";
$strNetcheck         = "activer netcheck";
$strHideAccounts     = "masquer les comptes-utilisateur";
$strShowAccounts     = "montrer les comptes-utilisateur";
$strReadyDelete      = "prêt à effacer";
$strMailinglist      = "mailing list";
$strLatestPphlVers   = "Dernière version de PowerPhlogger";
$strLatestVersion    = "Dernière Version";
$strReleaseDate      = "Release Date";
$strDownloadLoc      = "Download Locations";
$strReloadKeywords   = "Recharger les keywords";
$strReloadKeyw1      = "Ceci va réactualisé votre liste de keyword";
$strReloadKeyw2      = "Ne réactualisé pas à moins que vous ayez modifié engines-list.ini !!";

// admin/change_userprofile.php
$strMaxLoglim        = "limite maximal des logs:";
$strMaxPath          = "chemin des visiteurs max stocké:";
?>
