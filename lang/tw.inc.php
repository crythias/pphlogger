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

$strOn               = "開";
$strOff              = "關";
$strEnable           = "啟用";
$strEnabled          = "已啟用";
$strDisable          = "停用";
$strDisabled         = "已停用";
$strDellog           = "刪除記錄";
$strTopOfPage        = "本頁首";
$strTotal            = "總流量";
$strHits             = "人次";
$strUniqs            = "uniqs";
$strUniq             = "uniq";
$strPageimpressions  = "pageimpressions";
$strDomains          = "網域";
$strConfiguration    = "configuration";
$strCurrConfig       = "目前設定:";
$strUsername         = "登入名稱";
$strPassword         = "通關密碼";
$strDelete           = "刪除";
$strUser             = "使用者";
$strUseraccount      = "useraccount";
$strUseraccounts     = "useraccounts";
$strFrom             = "來自";
$strTo               = "至";
$strTo2              = "至";
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
$loca['tz']['-12']   = "(GMT - 12 小時) 埃尼威托克島, 瓜加林島";
$loca['tz']['-11']   = "(GMT - 11 小時) 中途島, 薩摩亞";
$loca['tz']['-10']   = "(GMT - 10 小時) 夏威夷";
$loca['tz']['-9']    = "(GMT - 9 小時) 阿拉斯加";
$loca['tz']['-8']    = "(GMT - 8 小時) 太平洋標準時間 (美國 &amp; 加拿大)";
$loca['tz']['-7']    = "(GMT - 7 小時) 山區標準時間 (美國 &amp; 加拿大)";
$loca['tz']['-6']    = "(GMT - 6 小時) 中央標準時間 (美國 &amp; 加拿大), 墨西哥城";
$loca['tz']['-5']    = "(GMT - 5 小時) 東部標準時間 (美國 &amp; 加拿大), 波哥大, 利馬, 基多";
$loca['tz']['-4']    = "(GMT - 4 小時) 大西洋標準時間 (加拿大), 卡拉卡斯, 拉巴斯";
$loca['tz']['-3.5']  = "(GMT - 3.5 小時) 紐芬蘭";
$loca['tz']['-3']    = "(GMT - 3 小時) 巴西, 布宜諾斯艾利斯, 喬治城, 福克蘭群島";
$loca['tz']['-2']    = "(GMT - 2 小時) 中大西洋, 亞森松島, 聖赫勒拿島";
$loca['tz']['-1']    = "(GMT - 1 小時) 亞速爾群島, 維德角";
$loca['tz']['0']     = "(GMT) 卡薩布蘭卡, 都柏林, 愛丁堡, 倫敦, 里斯本, 蒙羅維亞";
$loca['tz']['1']     = "(GMT + 1 小時) 柏林, 布魯塞爾, 哥本哈根, 馬德里, 巴黎, 羅馬";
$loca['tz']['2']     = "(GMT + 2 小時) 加里寧格勒, 南非, 華沙";
$loca['tz']['3']     = "(GMT + 3 小時) 巴格達, 利雅德, 莫斯科, 奈洛比";
$loca['tz']['3.5']   = "(GMT + 3.5 小時) 德黑蘭";
$loca['tz']['4']     = "(GMT + 4 小時) 阿布達比, 巴庫, 馬斯喀特, 第比利斯";
$loca['tz']['4.5']   = "(GMT + 4.5 小時) 喀布爾";
$loca['tz']['5']     = "(GMT + 5 小時) 伊卡特林堡, 伊斯蘭馬巴德, 喀拉蚩, 塔什干";
$loca['tz']['5.5']   = "(GMT + 5.5 小時) 孟買, 加爾各答, 馬德拉斯, 新德里";
$loca['tz']['6']     = "(GMT + 6 小時) 阿蒙提, 可倫坡, 代吉哈";
$loca['tz']['6.5']   = "(GMT + 6.5 小時) 仰光";
$loca['tz']['7']     = "(GMT + 7 小時) 曼谷, 河內, 雅加達";
$loca['tz']['8']     = "(GMT + 8 小時) 北京, 香港, 伯斯, 新加坡, 台北";
$loca['tz']['9']     = "(GMT + 9 小時) 大阪, 札幌, 漢城, 東京, 亞庫次克";
$loca['tz']['9.5']   = "(GMT + 9.5 小時) 阿得雷德, 達爾文";
$loca['tz']['10']    = "(GMT + 10 小時) 莫爾本, 巴布新幾內亞, 雪梨, 海參威";
$loca['tz']['11']    = "(GMT + 11 小時) 馬加丹, 新卡里多尼亞, 所羅門群島";
$loca['tz']['12']    = "(GMT + 12 小時) 奧克蘭, 威靈頓, 斐濟, 馬紹爾群島";

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
$strUsrPage[0]       = "登入/登出";
$strUsrPage[1]       = "流量記錄";
$strUsrPage[2]       = "流量狀態";
$strUsrPage[3]       = "流量狀態 2";
$strUsrPage[4]       = "流量狀態 3";
$strUsrPage[5]       = "設定";
$strUsrPage[6]       = "使用者帳號資料";
$strAdminPage[0]     = "系統控制台";
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
$strTrackedSite      = "已記錄網站:";
$strCurrentTime      = "目前時間";
$strHeadDateFormat   = "M d, <b>h:iA</b>";
$strYourHits         = "您的網站流量:";
$strSlogan           = "...最棒的網站流量統計工具！";

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
$strSignUp           = "申請一個新 PowerPhlogger 帳號：";
$strHtmlCode         = "HTML 代碼";
$strAddHtmlCode      = "別忘了在你想記錄的頁面加上以下代碼：";
$strJsFile           = "假如您遺失你的 pphlogger.js 檔案，可以點按此下載：";
$strInstructions     = "說明指引：";
$strConfLogin        = "為了確認您申請的新帳號，您必須使用我們寄送到您電郵信箱的密碼登入。";
$strConfLogin2       = "假如您未確認帳號啟用，您的帳號將在 ".$cleanup_lim." 個小時後自動刪除";
$strUploadJs         = "請以附件帶檔方式上傳你收到的 pphlogger.js 檔案。";
$strNoSignUp         = "對不起，目前本伺服器暫時不提供免費流量統計服務帳號申請！";
$strReturnToLogin    = "return to login";

// dspLogs.php
$strShowLogs         = "顯示記錄：";
$strSelect           = "select";
$strUnselect         = "unselect";
$strAll              = "所有";
$strTurnShowref      = "開啟顯示設定開關";
$strFullAgt          = "full agent";
$strDemoMode         = "執行展示模式！";
$strGuestMsg1        = "您目前是訪客身分，不能刪除任何記錄！";
$strGuestMsg2        = "請記得啟用刪除記錄功能！";
$strViewLogs         = "檢視記錄";
$strHostIP           = "主機 / IP";
$strReferrer         = "來源網址";
$strReferrers        = "導流來源";
$strAgent            = "瀏覽器資訊";
$strRes              = "解析度";
$strColor            = "顏色";
$strTimestamp        = "時間記錄";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "每日訪客人數";
$strPerDay           = "per day";
$strVisPerHour       = "Visitors per hour";
$strLast             = "前";
$strMonth            = "月";
$strMonths           = "個月";
$strToday            = "today";
$strAverage          = "平均流量";
$strAverageAbbr      = "平均";
$strDay              = "天";
$strDays             = "天";
$strCurrOnlUsers     = "目前線上使用者";
$strIPkept           = "單一 IP 資料只保留前";
$strIPkept2          = "分鐘為準";
$strOnline           = "上線";
$strEntryTime        = "進入時間";
$strLastReload       = "前次重新整理";
$strLastUrl          = "先前的網址";
$strSince            = "統計起始日：";
$strMultipage        = "多頁流量統計";
$strKeywords         = "關鍵字";
$strSingleWords      = "single words";
$strWholeStrings     = "whole strings";
$strDownloads        = "下載量";
$strTerritories      = "所在國家";
$str_arrMonths       = Array(1 => "一月", "二月", "三月", "四月", "五月", "六月", "七月", 
                                    "八月", "九月", "十月", "十一月", "十二月");
$str_arrMonthsAbbr   = Array(1 => "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月");
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
$strCookieTxt        = "設定 cookie 防止記錄你自己瀏覽：";
$strCountMe          = "記錄";
$strDontCountMe      = "不要記錄";
$strEnableDellog     = "啟用刪除記錄";
$strDisableDellog    = "停用刪除記錄";
$strEnableDellog2    = "啟用刪除記錄：";
$strResetHits        = "重設計數值";
$strResHitsTxt       = "請輸入你要重設後的數值：";
$strMysqlDump        = "檢視 mySQL 匯出資料 (資料結構)";
$strStructOnly       = "僅資料結構";
$strAddDropTbl       = "新增 '丟棄資料庫表格'";
$strStructData       = "資料結構與資料";
$strSend             = "送出";
$strComplInserts     = "插入資料完成";
$strDiskSpace        = "磁碟空間";
$strAvailSpace       = "可用磁碟空間";
$strUsedSpace        = "已用磁碟空間";
$strDbSpace          = "Used database space";
$strFreeSpace        = "剩餘磁碟空間";
$strFileUpload       = "上傳多檔";
$strMaxFilesize      = "最大檔案大小限制";
$strErrUpload        = "上傳錯誤，請再試一次！";
$strUploadOk         = "檔案已成功上傳！";
$strFilename         = "檔案名稱";
$strSize             = "檔案大小";
$strYourLast         = "前";
$strCustomers        = "位訪客";
$strYourTimeout      = "您的逾時值目前設定為";
$strMinutes          = "分鐘";
$strBlocking         = "blocking";
$strShortQuery       = "short query";
$strOwnReferrers     = "own referrers";

// edUserprofile.php
$strUserprofile      = "更改使用者帳號資料";
$strEditProfile      = "點按按鈕編輯你的設定：";
$strUrl1Txt          = "指到你的網站首頁 index 的網址";
$strUrl2Txt          = "如果還有其他網址，在以下欄位每行可以輸入一筆：";
$strEmail            = "電子郵件：";
$strTimezone         = "時區：";
$strUserLang         = "語言：";
$strVisible          = "顯示：";
$strVisibleStyle     = "顯示風格：";
$strTimeout          = "逾時值：";
$strEmailNotif       = "電郵通知：每...";
$strDefLogNo         = "內定顯示記錄筆數：";
$strKwListMode       = "關鍵字列表模式：";
$strAllowDemo        = "允許展示模式：";
$strTTF              = "選擇 TrueType 字形：";
$strAvailFonts       = "available fonts";
$strFontSize         = "字形大小：";
$strFontColor        = "字形顏色";
$strBgColor          = "背景顏色：";
$strTransBg          = "背景透明：";
$strSample           = "示範圖片：";
$strChangePw         = "更改密碼：";
$strOldPw            = "舊密碼：";
$strNewPw            = "新密碼：";
$strReenterPw        = "確認新密碼：";
$strLoadCSS          = "載入樣式表：";
$strView4Msg1        = "使用者帳號資料已經更新成功！";
$strView4Msg2        = "系統無法更新你的帳號資料！";
$strView4Msg3        = "您目前是訪客身分，<br />不能更動任何記錄！";
$strPwChanged        = "通關密碼已更改！";
$strWrongPw          = "通關密碼錯誤！";

// admin/index.php
$strAdmin            = "administration";
$strMaintenance      = "maintenance";
$strCheckNewVer      = "Check For New Version";
$strCreate           = "新增使用者帳號：";
$strAdminMsg1        = "這個登入名稱已經有人使用了";
$strAdminMsg2        = "使用者帳號已成功建立";
$strAdminMsg3        = "你輸入的電子郵件信箱格式錯誤！";
$strAdminMsg4        = "usernames must only contain alphanumeric characters,<br />.,-,_, and must be less than 30 characters!";
$strAdminErr1        = "新增使用者帳號時發生錯誤";
$strDelUser          = "刪除使用者：";
$strDelErr           = "系統發生錯誤！";
$strDelOk            = "所有使用者資料已刪除！";
$strWrongPwUser      = "通關密碼或登入名稱錯誤！";
$strAdminCookie      = "新增管理員 cookie";
$strNetcheck         = "啟用網路檢查功能";
$strHideAccounts     = "隱藏使用者帳號";
$strShowAccounts     = "顯示使用者帳號";
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
$strMaxLoglim        = "最大記錄限制：";
$strMaxPath          = "max stored visitor paths:";
?>
