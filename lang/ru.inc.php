<?php
/* Russian language localization
 *
 * $Id: ru.inc.php,v 1.37 2002/10/28 17:14:44 cvs_iezzi Exp $
 * credits to: Alex Hartmann <webmaster@rg-rb.de>
 */


$strCharset          = "windows-1251"; // other charsets: iso-8859-5 / koi8
$strThousandSep      = " ";
$strDate             = "d.m.Y";
$strDate2            = "M d, Y";
$strNumThousandsSep  = ',';
$strNumDecimalSep    = '.';
$strByteUnits        = array('Байт', 'кБ', 'МБ', 'ГБ');

$strOn               = "вкл.";
$strOff              = "выкл.";
$strEnable           = "Включить";
$strEnabled          = "включен";
$strDisable          = "Выключить";
$strDisabled         = "выключен";
$strDellog           = "Стирать Log-файлы";
$strTopOfPage        = "наверх";
$strTotal            = "Всего";
$strHits             = "Hits";
$strUniqs            = "uniqs";
$strUniq             = "uniq";
$strPageimpressions  = "pageimpressions";
$strDomains          = "Домены";
$strConfiguration    = "configuration";
$strCurrConfig       = "Действующая настройка:";
$strUsername         = "Имя пользователя";
$strPassword         = "Пароль";
$strDelete           = "Удалить";
$strUser             = "Пользователь";
$strUseraccount      = "useraccount";
$strUseraccounts     = "useraccounts";
$strFrom             = "с";
$strTo               = "по";
$strTo2              = "по";
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

// Список русифицирован: где нужно - первыми идут Российские/бСССР города
$loca['tz']['-12']   = "(GMT -12:00) Эневеток, Кваджалейн";
$loca['tz']['-11']   = "(GMT -11:00) о-в Мидуэй, Самоа";
$loca['tz']['-10']   = "(GMT -10:00) Гавайи";
$loca['tz']['-9']    = "(GMT -9:00) Аляска";
$loca['tz']['-8']    = "(GMT -8:00) Pacific Time (США и Канада)";
$loca['tz']['-7']    = "(GMT -7:00) Mountain Time (США и Канада)";
$loca['tz']['-6']    = "(GMT -6:00) Central Time (США и Канада), Мехико";
$loca['tz']['-5']    = "(GMT -5:00) Eastern Time (США и Канада), Богота, Лима, Кито";
$loca['tz']['-4']    = "(GMT -4:00) Atlantic Time (Канада), Каракас, Ла Пас";
$loca['tz']['-3.5']  = "(GMT -3:30) Ньюфаундленд";
$loca['tz']['-3']    = "(GMT -3:00) Бразилиа, Буэнос-Айрес, Джорджтаун, Фолклендские о-ва";
$loca['tz']['-2']    = "(GMT -2:00) Среднеатлантическое время";
$loca['tz']['-1']    = "(GMT -1:00) Азорские о-ва, о-ва Зелёного Мыса";
$loca['tz']['0']     = "(GMT) Время по Гринвичу: Лондон, Дублин, Эдинбург, Лиссабон, Монровия";
$loca['tz']['1']     = "(GMT +1:00) Берлин, Брюссель, Копенгаген, Мадрид, Париж, Рим";
$loca['tz']['2']     = "(GMT +2:00) Калининград, Киев, Минск, Рига, Таллин";
$loca['tz']['3']     = "(GMT +3:00) Москва, Санкт-Петербург, Волгоград, Багдад, Эр-Рияд, Найроби";
$loca['tz']['3.5']   = "(GMT +3:30) Тегеран";
$loca['tz']['4']     = "(GMT +4:00) Баку, Ереван, Тбилиси, Абу Даби, Мускат";
$loca['tz']['4.5']   = "(GMT +4:30) Кабул";
$loca['tz']['5']     = "(GMT +5:00) Екатеринбург, Ташкент, Исламабад, Карачи";
$loca['tz']['5.5']   = "(GMT +5:30) Бомбей, Калькутта, Мадрас, Нью-Дели";
$loca['tz']['6']     = "(GMT +6:00) Новосибирск, Омск, Алма-Ата, Коломбо, Дакка";
$loca['tz']['7']     = "(GMT +7:00) Красноярск, Бангкок, Ханой, Джакарта";
$loca['tz']['8']     = "(GMT +8:00) Иркутск, Пекин, Гонконг, Перт, Сингапур, Тайбэй";
$loca['tz']['9']     = "(GMT +9:00) Якутск, Осака, Саппоро, Сеул, Токио";
$loca['tz']['9.5']   = "(GMT +9:30) Аделаида, Дарвин";
$loca['tz']['10']    = "(GMT +10:00) Владивосток, Мельбурн, Папуа Новая Гвинея, Сидней";
$loca['tz']['11']    = "(GMT +11:00) Магадан, Сахалин, Новая Каледония, Соломоновы о-ва";
$loca['tz']['12']    = "(GMT +12:00) Камчатка, Окленд, Веллингтон, Фиджи, Маршалловы о-ва";

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
$strUsrPage[0]       = "Заново войти/выйти";
$strUsrPage[1]       = "Log-файлы";
$strUsrPage[2]       = "Статистика";
$strUsrPage[3]       = "Статистика 2";
$strUsrPage[4]       = "Статистика 3";
$strUsrPage[5]       = "Настройки";
$strUsrPage[6]       = "Профиль";
$strAdminPage[0]     = "Администрирование";
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
$strTrackedSite      = "Статистика страницы:";
$strCurrentTime      = "Сейчас";
$strHeadDateFormat   = "d. M, <b>H:i</b>";
$strYourHits         = "Ваша статистика:";
$strSlogan           = "...незаменимый счетчик!";

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
$strSignUp           = "Регистрация нового пользователя в PowerPhlogger:";
$strHtmlCode         = "HTML-код";
$strAddHtmlCode      = "Вставьте следующий код в Вашу HTML-страницу:";
$strJsFile           = "Если Вы потеряли файл pphlogger.js, то скачайте его снова:";
$strInstructions     = "ИНСТРУКЦИЯ:";
$strConfLogin        = "Чтобы подтвердить Вашу регистрацию, войдите еще раз в систему с помощью полученного пароля:";
$strConfLogin2       = "Если Вы не подтвердите регистрацию в течение ".$cleanup_lim." часов, то Ваши данные будут безжалостно удалены.";
$strUploadJs         = "Пожалуйста, закачайте приложенный Javascript-файл [pphlogger.js] на Ваш сервер.";
$strNoSignUp         = "Извините, в данный момент мы не в состоянии зарегистрировать нового пользователя!";
$strReturnToLogin    = "return to login";

// dspLogs.php
$strShowLogs         = "Показать Log-файлы:";
$strSelect           = "select";
$strUnselect         = "unselect";
$strAll              = "Все";
$strTurnShowref      = "Показать ссылки";
$strFullAgt          = "full agent";
$strDemoMode         = "В демонстрационном режиме!";
$strGuestMsg1        = "В качестве гостя Вы не авторизированы стирать Log-файлы!!!";
$strGuestMsg2        = "Пожалуйста, сначала активируйте в настройках функцию «Стереть Log-файлы»!";
$strViewLogs         = "Показать Log-файлы";
$strHostIP           = "Host / IP";
$strReferrer         = "Ссылки";
$strReferrers        = "Ссылки";
$strAgent            = "Браузер + (ОП)";
$strRes              = "Разреш.";
$strColor            = "Цвета";
$strTimestamp        = "Время";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "Посетители за день";
$strPerDay           = "за день";
$strVisPerHour       = "Visitors per hour";
$strLast             = "последний";
$strMonth            = "месяц";
$strMonths           = "месяцы";
$strToday            = "today";
$strAverage          = "В среднем";
$strAverageAbbr      = "средн.";
$strDay              = "день";
$strDays             = "день";
$strCurrOnlUsers     = "Посетители на данный момент";
$strIPkept           = "IP-номера сохоаняются за последние";
$strIPkept2          = "мин.";
$strOnline           = "online";
$strEntryTime        = "Приход :)";
$strLastReload       = "Последняя перезагрузка";
$strLastUrl          = "Последний URL";
$strSince            = "с";
$strMultipage        = "Multipage";
$strKeywords         = "по ключевым словам";
$strSingleWords      = "single words";
$strWholeStrings     = "whole strings";
$strDownloads        = "Downloads";
$strTerritories      = "Места";
$str_arrMonths       = Array(1 => "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", 
                                    "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
$str_arrMonthsAbbr   = Array(1 => "Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек");
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
$strCookieTxt        = "Посадить кукис (cookie), чтобы избежать подсчета собственных визитов:";
$strCountMe          = "Меня можно считать!";
$strDontCountMe      = "Фиг с ним!";
$strEnableDellog     = "Стирать Log-файлы вкл.";
$strDisableDellog    = "Стирать Log-файлы выкл.";
$strEnableDellog2    = "Функция удаления вкл./выкл.:";
$strResetHits        = "Изменить статистику";
$strResHitsTxt       = "для этого необходимо задать<br />новое исходное число:";
$strMysqlDump        = "Посмотреть на схему (Dump) mySQL";
$strStructOnly       = "Только структуру";
$strAddDropTbl       = "Добавить таблицу ('drop table')";
$strStructData       = "Структуру и данные";
$strSend             = "Отослать";
$strComplInserts     = "Insertions полностью";
$strDiskSpace        = "Пространство на диске";
$strAvailSpace       = "Свободное пространство";
$strUsedSpace        = "Занято";
$strDbSpace          = "Used database space";
$strFreeSpace        = "Еще свободно";
$strFileUpload       = "Закачать несколько файлов";
$strMaxFilesize      = "макс. размер файла";
$strErrUpload        = "Произошла ошибка. Попробуйте еще раз!";
$strUploadOk         = "Файл успешно закачан!";
$strFilename         = "Название файла";
$strSize             = "Размер";
$strYourLast         = "Список последних";
$strCustomers        = "клиентов";
$strYourTimeout      = "Продолжительность Вашей сессии (timeout) настроена на";
$strMinutes          = "минут.";
$strBlocking         = "blocking";
$strShortQuery       = "short query";
$strOwnReferrers     = "own referrers";

// edUserprofile.php
$strUserprofile      = "Администрирование профиля";
$strEditProfile      = "Отредактируйте Ваши данные и нажмите на кнопку:";
$strUrl1Txt          = "URL Вашей страницы.";
$strUrl2Txt          = "If you got alternate URLs enter them each on a new line:";
//$strUrl2Txt          = "Если у Вас есть второй URL, указывающий на эту же страницу,<br />то внесите его здесь:";
$strEmail            = "e-mail:";
$strTimezone         = "Ваш часовой пояс:";
$strUserLang         = "Ваш язык:";
$strVisible          = "Показывать:";
$strVisibleStyle     = "Стиль:";
$strTimeout          = "Продолжительность сессии (timeout):";
$strEmailNotif       = "Оповещение по эл. почте: каждые...";
$strDefLogNo         = "Кол-во Log-файлов по умолчанию:";
$strKwListMode       = "keyword-list mode:";
$strAllowDemo        = "Разрешить демонстрационный режим:";
$strTTF              = "Выбрать TrueType-шрифт:";
$strAvailFonts       = "available fonts";
$strFontSize         = "Размер шрифта:";
$strFontColor        = "Цвет шрифта:";
$strBgColor          = "Фон:";
$strTransBg          = "Прозрачный фон:";
$strSample           = "Пример:";
$strChangePw         = "Сменить пароль:";
$strOldPw            = "Старый пароль:";
$strNewPw            = "Новый пароль:";
$strReenterPw        = "Повторить новый пароль:";
$strLoadCSS          = "Загрузить Stylesheet:";
$strView4Msg1        = "Профиль пользователя успешно обновлен!";
$strView4Msg2        = "Извините, произошла какая-то ошибка!!!";
$strView4Msg3        = "Вы не вправе сохранять изменения<br />в гостевом режиме!!";
$strPwChanged        = "Пароль изменен!";
$strWrongPw          = "Неправильный пароль!!";

// admin/index.php
$strAdmin            = "administration";
$strMaintenance      = "maintenance";
$strCheckNewVer      = "Check For New Version";
$strCreate           = "Регистрация нового пользователя:";
$strAdminMsg1        = "Это имя уже используется!..";
$strAdminMsg2        = "Новый пользователь успешно зарегистрирован";
$strAdminMsg3        = "You've entered an invalid email address!";
$strAdminMsg4        = "usernames must only contain alphanumeric characters,<br />.,-,_, and must be less than 30 characters!";
$strAdminErr1        = "Извините, произошла какая-то ошибка. Попробуйте еще раз!";
$strDelUser          = "Удалить пользователя:";
$strDelErr           = "Оп-ля!! Не сработало...";
$strDelOk            = "Все данные пользователя стерты!";
$strWrongPwUser      = "Неправильный пароль или имя пользователя!";
$strAdminCookie      = "Admin Cookie anlegen";
$strNetcheck         = "Включить netcheck";
$strHideAccounts     = "Убрать показ пользователей";
$strShowAccounts     = "Показывать пользователей";
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
$strMaxLoglim        = "maximum log limit:";
$strMaxPath          = "max stored visitor paths:";
?>
