<?php
/* Japanese language localization
 *
 * $Id: jp.inc.php,v 1.2 2002/11/03 07:36:19 cvs_iezzi Exp $
 * credits to: Haruki Setoyama <haruki@planewave.org>
 */


$strCharset          = "EUC-JP";
$strThousandSep      = ",";
$strDate             = "Y/m/d";
$strDate2            = "Y M d";
$strNumThousandsSep  = ',';
$strNumDecimalSep    = '.';
$strByteUnits        = array('バイト', 'KB', 'MB', 'GB');

$strOn               = "オン";
$strOff              = "オフ";
$strEnable           = "有効にする";
$strEnabled          = "有効";
$strDisable          = "無効にする";
$strDisabled         = "無効";
$strDellog           = "ログ削除";
$strTopOfPage        = "ページのトップへ";
$strTotal            = "合計";
$strHits             = "ヒット数";
$strUniqs            = "uniqs+";
$strUniq             = "uniq+";
$strPageimpressions  = "pageimpressions";
$strDomains          = "ドメイン";
$strConfiguration    = "設定";
$strCurrConfig       = "現在の設定:";
$strUsername         = "ユーザ名";
$strPassword         = "パスワード";
$strDelete           = "削除";
$strUser             = "ユーザ";
$strUseraccount      = "ユーザアカウント";
$strUseraccounts     = "ユーザアカウント";
$strFrom             = "from";
$strTo               = "to";
$strTo2              = "to";
$strEdit             = "編集：";
$strSet              = "セット";
$strMove             = "移動";
$strDefault          = "デフォルト";
$strCreateNew        = "新規作成";
$strSave             = "保存";
$strUnknown          = "不明";
$strUndefined        = "未定義";
$strCache            = "キャッシュ";
$strSeconds          = "秒";
$strDatabase         = "データベース";
$strTable            = "テーブル";
$strCalc             = "再計算：";
$strStep             = "ステップ";
$strSystem           = "システム";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT-12:00) エニウェトク、クエジェリン";
$loca['tz']['-11']   = "(GMT-11:00) ミッドウェー島、サモア";
$loca['tz']['-10']   = "(GMT-10:00) ハワイ";
$loca['tz']['-9']    = "(GMT-9:00) アラスカ";
$loca['tz']['-8']    = "(GMT-8:00) 太平洋標準時（米国・カナダ）、ティファナ";
$loca['tz']['-7']    = "(GMT-7:00) 山地標準時（米国・カナダ）";
$loca['tz']['-6']    = "(GMT-6:00) 中部標準時（米国・カナダ）、メキシコシティ";
$loca['tz']['-5']    = "(GMT-5:00) 東部標準時（米国・カナダ）、ボゴタ、リマ、キト";
$loca['tz']['-4']    = "(GMT-4:00) 大西洋標準時（カナダ）、カラカス、ラパス";
$loca['tz']['-3.5']  = "(GMT-3:30) ニューファンドランド";
$loca['tz']['-3']    = "((GMT-3:00) ブラジリア、ブエノスアイレス、ジョージタウン";
$loca['tz']['-2']    = "(GMT-2:00) 中央大西洋、セントヘレナ";
$loca['tz']['-1']    = "(GMT-1:00) アゾレス諸島、カーボベルデ諸島";
$loca['tz']['0']     = "(GMT) グリニッジ標準時、ダブリン、ロンドン、リスボン、カサブランカ";
$loca['tz']['1']     = "(GMT+1:00) ブリュッセル、ベルリン、マドリッド、パリ、アムステルダム";
$loca['tz']['2']     = "(GMT+2:00) アテネ、イスタンブール、エルサレム、カイロ、ヘルシンキ";
$loca['tz']['3']     = "(GMT+3:00) バグダッド、ナイロビ、クウェート、リヤド、モスクワ";
$loca['tz']['3.5']   = "(GMT+3:30) テヘラン";
$loca['tz']['4']     = "(GMT+4:00) アブダビ、マスカット、バク、トビリシ";
$loca['tz']['4.5']   = "(GMT+4:30) カブール";
$loca['tz']['5']     = "(GMT+5:00) イスラマバード、カラチ、タシケント、エカテリンバーグ";
$loca['tz']['5.5']   = "(GMT+5:30) ボンベイ、カルカッタ、マドラス、ニューデリー";
$loca['tz']['6']     = "(GMT+6:00) アルマティ、コロンボ、ダッカ、ノボシビルスク";
$loca['tz']['6.5']   = "(GMT+6:30) ラングーン";
$loca['tz']['7']     = "(GMT+7:00) バンコク、ハノイ、ジャカルタ";
$loca['tz']['8']     = "(GMT+8:00) シンガポール、パース、台北、北京、重慶、香港、ウルムチ";
$loca['tz']['9']     = "(GMT+9:00) 東京、大阪、札幌、ソウル、ヤクーツク";
$loca['tz']['9.5']   = "(GMT+9:30) アデレード、ダーウィン";
$loca['tz']['10']    = "(GMT+10:00) ウラジオストク、キャンベラ、メルボルン、シドニー、グアム";
$loca['tz']['11']    = "(GMT+11:00) マガダン、ソロモン諸島、ニューカレドニア";
$loca['tz']['12']    = "(GMT+12:00) オークランド、ウェリントン、フィジー、マーシャル諸島";

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
$loca['lang']['jp']  = "日本";
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
$strSetup                                         = "セットアップ";
$loca['setup']['header1']                         = "管理設定";
$loca['setup']['header2']                         = "一般設定";
$loca['setup']['header3']                         = "詳細設定";
$loca['setup']['header4']                         = "グラフィック";
$loca['setup']['header5']                         = "ログ設定／自動削除";
$loca['setup']['header6']                         = "表示数";
$loca['setup']['header7']                         = "表示設定";
$loca['setup']['intro_txt']                       = "POWER PHLOGGERに必要な設定を行います。それぞれページで、POWER PHLOGGERの各部分の設定を行っていきます。";
$loca['setup']['step0_txt']                       = "<b>ライセンス</b> -- GNU 一般公衆利用許諾契約書（参考：<a href='http://www.opensource.jp/gpl/gpl.ja.html'>非公式日本語訳</a>）をお読みください。POWER PHLOGGERはフリーソフトウエアですが、その配布や改変には一定の用件があります。";
$loca['setup']['step1_txt']                       = "<b>一般設定</b> -- いずれの項目も正しく設定されているか確認ください。よく分からない場合は、デフォルト値のままにしてください。";
$loca['setup']['step2_txt']                       = "<b>オプション設定</b> --これらの設定は、ほとんどの場合、デフォルトのままで問題ありません。 詳細を把握した上で編集してください。";
$loca['setup']['step3_txt_a']                     = "<b>セットアップが終了しました！</b> -- POWER PHLOGGERを利用になれます。<br /><br />セキュリティーのため、/adminディレクトリに対して.htaccessファイル等によるアクセス制限を行い、さらにディレクトリ名称も変更してください。<br />詳しい使用方法については、以下の文書をご覧下さい。";
$loca['setup']['step3_txt_b']                     = "ます、ユーザアカウントの設定から開始してください。";

$loca['setup']['pphlogger_location']['title']     = "PowerPhloggerのロケーション";
$loca['setup']['pphlogger_location']['descr']     = "PowerPhloggerへのルートディレクトリのURL";
$loca['setup']['admin_mail']['title']             = "管理者のメールアドレス";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "管理者の名前";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "管理者のパスワード";
$loca['setup']['admin_pw']['descr']               = "ユーザのアカウントの削除に使用";
$loca['setup']['server_GMT']['title']             = "システムのタイムゾーン";
$loca['setup']['server_GMT']['descr']             = "サーバの時計が設定されているタイムゾーン";
$loca['setup']['admin_GMT']['title']              = "管理者のタイムゾーン";
$loca['setup']['admin_GMT']['descr']              = "管理者向けに表示するタイムゾーン";
$loca['setup']['default_lang']['title']           = "デフォルトの言語";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "デフォルトのスタイルシート";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "ユーザのサインアップが可能";
$loca['setup']['signup_ok']['descr']              = "ユーザがサインアップ可能な「サインアップページ」を表示";
$loca['setup']['master_timeout']['title']         = "ユーザログのタイムアウト時間";
$loca['setup']['master_timeout']['descr']         = "（単位：秒）デフォルトは1800秒（30分）";
$loca['setup']['traceroute']['title']             = "Traceroute URL";
$loca['setup']['traceroute']['descr']             = "Tracerouteを行う他のサービスがあれば入力してください。自サーバのTracerouteを使う場合は空白にしてください。";
$loca['setup']['pass_length']['title']            = "ユーザパスワードの長さ";
$loca['setup']['pass_length']['descr']            = "生成されるパスワードの文字長（15以下」）";
$loca['setup']['pw_privacy']['title']             = "パスワードのプライバシ";
$loca['setup']['pw_privacy']['descr']             = "falseとすると、平文のパスワード確認メールがBCCで管理者アドレスまで送信されます。プライバシーの観点から、デフォルトではTrueです。";
$loca['setup']['cache_calendar']['title']         = "カレンダーのキャッシュ";
$loca['setup']['cache_calendar']['descr']         = "キャッシュ時間を秒で設定。0（デフォルト）とすると、advancedなキャッシュ更新機能しようされる（推奨）";
$loca['setup']['mxlookup']['title']               = "MXルックアップ";
$loca['setup']['mxlookup']['descr']               = "メールアドレスの有効性確認をよりインテリジェントに行う。Trueにすると、ドメインの存在確認を行う。デフォルトはFalse。ウインドウズ版のPHPがこの機能をサポートしないことがあるため。";
$loca['setup']['loopback_bug']['title']           = "ループバックバグ";
$loca['setup']['loopback_bug']['descr']           = "IP/プロキシ情報が正しく取得できないISPを使用している場合にTrueとしてください。";
$loca['setup']['mysqldump_on']['title']           = "MySQLダンプ";
$loca['setup']['mysqldump_on']['descr']           = "すべてのユーザに、設定タブ中でMySQLダンプを可能にする。";
$loca['setup']['md5form']['title']                = "MD5ログイン";
$loca['setup']['md5form']['descr']                = "MD5で暗号化されたログインフォームを使用（JavaScript使用）";
$loca['setup']['mail_mod']['title']               = "メールモジュール";
$loca['setup']['mail_mod']['descr']               = "pphlogger.jsファイルが添付された確認メールを送付するためのメールモジュールを選択（libmailかhtmlmime）";
$loca['setup']['GD_enabled']['title']             = "GDライブラリ";
$loca['setup']['GD_enabled']['descr']             = "GDライブラリが有効でない場合には、GDによる画像を使用しないことができます。ただし、かなりの機能が使えなくなります。";
$loca['setup']['gd_img_type']['title']            = "GD画像タイプ";
$loca['setup']['gd_img_type']['descr']            = "GDライブラリで生成される画像に問題がある場合に設定してください。デフォルトはauto（自動設定）です。（autoかpngかgifかjpeg）";
$loca['setup']['Freetype_enabled']['title']       = "フリータイプ";
$loca['setup']['Freetype_enabled']['descr']       = "フリータイプ・ライブラリが有効でない場合、Falseとしてください。TTFフォントをカウンター表示に使用できません。ビルトインのフォントは使用できます。";
$loca['setup']['ttf_location']['title']           = "TTFロケーション";
$loca['setup']['ttf_location']['descr']           = "バグのあるPHPディストリビューション使っていて、カウンタ画像が正しく表示されない場合は、TTFフォントがあるディレクトリまでのフルパスを入力してみてください。それ以外の場合は、変更しないでください。（relativeか/TTFフォントがあるディレクトリまでのフルパス/）";
$loca['setup']['cleanup_lim']['title']            = "未承認ユーザのクリーンアップリミット";
$loca['setup']['cleanup_lim']['descr']            = "未承認のユーザアカウントが、削除されるまでの時間制限（単位：時間）";
$loca['setup']['cleanup_old']['title']            = "非利用ユーザのクリーンアップリミット";
$loca['setup']['cleanup_old']['descr']            = "使われていない（ユーザページのヒットもログインもない）ユーザアカウントが削除されるまでの時間（単位：日）";
$loca['setup']['dellog_global']['title']          = "全ユーザ共通のログ保存設定を使用";
$loca['setup']['dellog_global']['descr']          = "Falseとすると、ユーザごとの設定が使用されます。Trueとすると、以下の設定が共通に使用されます。";
$loca['setup']['dellog_lim']['title']             = "　最大保存ログ数";
$loca['setup']['dellog_lim']['descr']             = "　保存するログの数。０とすると制限なし（デフォルト）";
$loca['setup']['dellog_lim_d']['title']           = "　最大保存日数";
$loca['setup']['dellog_lim_d']['descr']           = "　ログが削除されるまでの日数。０とすると制限なし（デフォルト）";
$loca['setup']['dellog_lim_prob']['title']        = "　削除の確率";
$loca['setup']['dellog_lim_prob']['descr']        = "　ログが削除される確率（パーセント）";
$loca['setup']['delpath_global']['title']         = "全ユーザ共通のパス保存設定を使用";
$loca['setup']['delpath_global']['descr']         = "Falseとすると、ユーザごとの設定が使用されます。Trueとすると、以下の設定が共通に使用されます。";
$loca['setup']['delpath_lim']['title']            = "　最大保存パス数";
$loca['setup']['delpath_lim']['descr']            = "　保存するパスの数。０とすると制限なし。";
$loca['setup']['delpath_lim_d']['title']          = "　最大保存日数";
$loca['setup']['delpath_lim_d']['descr']          = "　パスが削除されるまでの日数。０とすると制限なし（デフォルト）。";
$loca['setup']['delpath_lim_prob']['title']       = "　削除の確率";
$loca['setup']['delpath_lim_prob']['descr']       = "　パスが削除される確率（パーセント）";
$loca['setup']['show_cust']['title']              = "ユーザログ・カスタマ";
$loca['setup']['show_cust']['descr']              = "ユーザログ表示ページで何件のカスタマログを表示するか。";
$loca['setup']['calendar_months']['title']        = "表示月数";
$loca['setup']['calendar_months']['descr']        = "カレンダページで何ヶ月分を表示するか。";
$loca['setup']['topref_lim']['title']             = "トップ参照元";
$loca['setup']['topref_lim']['descr']             = "";
$loca['setup']['topdomain_lim']['title']          = "トップドメイン";
$loca['setup']['topdomain_lim']['descr']          = "";
$loca['setup']['topres_lim']['title']             = "トップ解像度";
$loca['setup']['topres_lim']['descr']             = "";
$loca['setup']['topcolor_lim']['title']           = "トップ色数";
$loca['setup']['topcolor_lim']['descr']           = "";
$loca['setup']['topkeywords_lim']['title']        = "トップキーワード";
$loca['setup']['topkeywords_lim']['descr']        = "";
$loca['setup']['topbrowseros_lim']['title']       = "トップブラウザ/OS";
$loca['setup']['topbrowseros_lim']['descr']       = "";
$loca['setup']['topsearcheng_lim']['title']       = "トップサーチエンジン";
$loca['setup']['topsearcheng_lim']['descr']       = "";
$loca['setup']['mpfront_lim']['title']            = "MPフロント";
$loca['setup']['mpfront_lim']['descr']            = "ログ表示下部のMP（巡回ページ）の表示数";
$loca['setup']['useraccount_lim']['title']        = "ユーザアカウント";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "最新参照元";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "MP最大幅";
$loca['setup']['width_max']['descr']              = "MP（巡回ページ）グラフの最大幅（ピクセル）";
$loca['setup']['width_factor']['title']           = "MP表示倍率";
$loca['setup']['width_factor']['descr']           = "MP（巡回ページ）グラフの表示倍率";
$loca['setup']['browseros_barsize']['title']      = "ブラウザ/OSグラフサイズ";
$loca['setup']['browseros_barsize']['descr']      = "ブラウザ/OS統計でのパーセントグラフの最大サイズ（ピクセル）";
$loca['setup']['extended']['title']               = "拡張ログ表示";
$loca['setup']['extended']['descr']               = "Falseとすると、解像度と色数が表示されません。";
$loca['setup']['ttf_demo_size']['title']          = "TTFデモサイズ";
$loca['setup']['ttf_demo_size']['descr']          = "TTFデモンストレーションのフォントサイズ（ポイント）";
$loca['setup']['css_show']['title']               = "CSS概要表示";
$loca['setup']['css_show']['descr']               = "CSS編集ページで、どの色をCSSの概要として表示するか。";

//email stuff
$strAccActivation    = "アカウント有効化";

// pages
$strUsrPage[0]       = "ログイン/ログアウト";
$strUsrPage[1]       = "ログ";
$strUsrPage[2]       = "統計";
$strUsrPage[3]       = "カレンダ";
$strUsrPage[4]       = "ブラウザ/OS";
$strUsrPage[5]       = "設定";
$strUsrPage[6]       = "ユーザプロフィール";
$strAdminPage[0]     = "管理メニュー";
$strAdminPage[1]     = "ユーザの作成/削除";
$strAdminPage[2]     = "ユーザアカウント";
$strAdminPage[3]     = "最新カスタマ";
$strAdminPage[4]     = "CSSエディタ";
$strAdminPage[5]     = "統計";
$strAdminPage[6]     = "メーリングリスト";

// functions.lib.php
$strPrev             = "前へ";
$strNext             = "次へ";

// headfoot.inc.php
$strTrackedSite      = "ログ対象サイト:";
$strCurrentTime      = "現在時刻";
$strHeadDateFormat   = "M d, <b>h:iA</b>";
$strYourHits         = "ヒット数:";
$strSlogan           = "...最高のロギングツール";
$strLogs             = "ログ";
$strStats1           = "統計";
$strStats2           = "統計2";
$strStats3           = "統計3";
$strStats4           = "統計4";
$strStats5           = "統計5";
$strSettings         = "設定";
$strChUserprofile    = "ユーザプロフィール";
$strLoginLogout      = "ログイン/ログアウト";

// index.php
$strEnterUsernPw     = "ユーザ名とパスワードを入力";
$strLostPw           = "パスワードを忘れた?";
$strLinkNewPw        = "新規パスワード作成";
$strGetFreeAccount   = "アカウント登録";
$strSignUpUseracc    = "ユーザアカウントの登録ができます！";
$strMsgWrongPw       = "<b>パスワードかユーザ名が間違っています</b><br />もう一度行ってください...";
$strMsgNewPw         = "<b>新しいパスワードが作成されました</b><br />入力したメールアドレスに送信されたので、確認してください";

// dspNewPw.php
$strForVerification  = "ユーザ名とメールアドレスを入力してください。";
$strGetIt            = "作成";
$strMsgNoValidUser   = "<b>メールアドレスかユーザ名が間違っています</b><br />もう一度行ってください...";

// signup.php
$strSignUp           = "新規ユーザアカウントのサインアップ:";
$strHtmlCode         = "HTMLコード";
$strAddHtmlCode      = "以下のHTMLコードを、ログを記録したいファイルに追加してください:";
$strJsFile           = "pphlogger.jsを無くした場合は、以下からダウンロードしてください:";
$strInstructions     = "取り扱い説明:";
$strConfLogin        = "メールで送付したパスワードでログインすると、あなたのユーザアカウントをが有効になります。";
$strConfLogin2       = "有効化をしないでいると、".$cleanup_lim."後にユーザアカウントが削除されます。";
$strUploadJs         = "添付したpphlogger.jsファイルをあなたのサイトへアップロードしてください。";
$strNoSignUp         = "現在、ユーザアカウントの新規登録はできません。";
$strReturnToLogin    = "ログイン画面へ";

// dspLogs.php
$strShowLogs         = "ログ表示数:";
$strSelect           = "選択：";
$strUnselect         = "非選択：";
$strAll              = "All";
$strTurnShowref      = "参照元表示";
$strFullAgt          = "エージェント詳細";
$strDemoMode         = "デモモード";
$strGuestMsg1        = "ゲストユーザはログを削除できません。";
$strGuestMsg2        = "ログ削除機能を有効にしてください。";
$strViewLogs         = "ログ表示";
$strHostIP           = "ホスト/IP";
$strReferrer         = "参照元";
$strReferrers        = "参照元";
$strAgent            = "エージェント";
$strRes              = "解像度";
$strColor            = "色数";
$strTimestamp        = "日時";
$strProxy            = "プロキシ";

// dspStats.php
$strVisPerDay        = "Visitors per day"; // keep english
$strPerDay           = "per day";
$strVisPerHour       = "Visitors per hour"; // keep english
$strLast             = "Last";
$strMonth            = "Month";
$strMonths           = "Months";
$strToday            = "Today";
$strAverage          = "平均";
$strAverageAbbr      = "平均";
$strDay              = "日";
$strDays             = "日";
$strCurrOnlUsers     = "現在オンラインのユーザ";
$strIPkept           = "IP保存時間:";
$strIPkept2          = "分";
$strOnline           = "オンライン";
$strEntryTime        = "開始時刻";
$strLastReload       = "最終再読込";
$strLastUrl          = "最終URL";
$strSince            = "経過時間";
$strMultipage        = "複数ページ";
$strKeywords         = "キーワード";
$strSingleWords      = "1単語";
$strWholeStrings     = "全文字列";
$strDownloads        = "ダウンロード";
$strTerritories      = "territories";
$str_arrMonths       = Array(1 => "1月", "2月", "3月", "4月", "5月", "6月", "7月", 
                                    "8月", "9月", "10月", "11月", "12月");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
$str_area            = Array(
                         'EU'   => 'ヨーロッパ',
                         'AM'   => 'アメリカ',
                         'AF'   => 'アフリカ',
                         'AS'   => 'アジア',
                         'OZ'   => 'オセアニア',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "訪問者数を表示";
$strShowPageimpress  = "全ページインプレッション数を表示";
$strReload           = "再読込";

// edSettings.php
$strCookieTxt        = "ユーザ自身の訪問を、";
$strCountMe          = "カウントする";
$strDontCountMe      = "カウントしない";
$strEnableDellog     = "ログ削除有効";
$strDisableDellog    = "ログ削除無効";
$strEnableDellog2    = "ログ削除機能を有効にする:";
$strResetHits        = "ヒット数再設定";
$strResHitsTxt       = "ヒット数再設定が行えます。数値を入力してください。";
$strMysqlDump        = "mySQLダンプ(スキーマ)表示";
$strStructOnly       = "構造のみ";
$strAddDropTbl       = "'drop table'を追加";
$strStructData       = "構造とデータ";
$strSend             = "送信";
$strComplInserts     = "完全なinserts文";
$strDiskSpace        = "ディスクスペース";
$strAvailSpace       = "全ディスクスペース";
$strUsedSpace        = "使用済ディスクスペース";
$strDbSpace          = "使用済データベースペース";
$strFreeSpace        = "未使用ディスクスペース";
$strFileUpload       = "複数ファイルアップロード";
$strMaxFilesize      = "最大ファイルサイズ";
$strErrUpload        = "アップロード時にエラーが発生しました。もう一度行ってください。";
$strUploadOk         = "アップロードされました。";
$strFilename         = "ファイル名";
$strSize             = "サイズ";
$strYourLast         = "your last";
$strCustomers        = "customers";
$strYourTimeout      = "タイムアウト:";
$strMinutes          = "分";
$strBlocking         = "による制限";
$strShortQuery       = "ショートクエリ";
$strOwnReferrers     = "自身の参照元";

// edUserprofile.php
$strUserprofile      = "ユーザプロフィールの変更";
$strEditProfile      = "設定を編集して保存ボタンをクリックしてください:";
$strUrl1Txt          = "サイトのURL";
$strUrl2Txt          = "複数のURLがあるときは、改行してすべて入力してください:";
$strEmail            = "メールアドレス:";
$strTimezone         = "タイムゾーン:";
$strUserLang         = "言語:";
$strVisible          = "カウンタ表示:";
$strVisibleStyle     = "表示スタイル:";
$strTimeout          = "タイムアウト:";
$strEmailNotif       = "メールで通知（以下の訪問者ごと）:";
$strDefLogNo         = "デフォルトのログ表示数:";
$strKwListMode       = "キーワード一覧:";
$strAllowDemo        = "デモモード許可:";
$strTTF              = "フォント名:";
$strAvailFonts       = "使用可能フォント";
$strFontSize         = "フォントサイズ:";
$strFontColor        = "フォント色:";
$strBgColor          = "背景色:";
$strTransBg          = "透明な背景:";
$strSample           = "サンプル画像:";
$strChangePw         = "パスワード変更:";
$strOldPw            = "旧パスワード:";
$strNewPw            = "新パスワード:";
$strReenterPw        = "再入力:";
$strLoadCSS          = "スタイルシート:";
$strView4Msg1        = "ユーザプロフィールが更新されました。";
$strView4Msg2        = "ユーザプロフィールを更新できません。";
$strView4Msg3        = "ゲストは一切の変更を行うことができません。";
$strPwChanged        = "パスワードが変更されました。";
$strWrongPw          = "パスワードが間違っています。";

// admin/index.php
$strAdmin            = "管理メニュー";
$strMaintenance      = "メンテナンス";
$strCheckNewVer      = "新しいバージョンをチェック";
$strCreate           = "新規ユーザアカウントの作成:";
$strAdminMsg1        = "そのユーザ名は既に登録されています。";
$strAdminMsg2        = "ユーザアカウントが作成されました。";
$strAdminMsg3        = "メールアドレスが不正です。";
$strAdminMsg4        = "ユーザ名は半角アルファベットと<br />.,-,_,の文字だけが使用できます。また30文字以下としてください。";
$strAdminErr1        = "ユーザアカウント作成時にエラーが発生しました。";
$strDelUser          = "ユーザ削除:";
$strDelErr           = "問題が発生しました。";
$strDelOk            = "すべてのユーザが削除されました。";
$strWrongPwUser      = "パスワードかユーザ名が間違っています。";
$strAdminCookie      = "管理者クッキーを作成";
$strNetcheck         = "enable netcheck";
$strHideAccounts     = "ユーザアカウント非表示";
$strShowAccounts     = "ユーザアカウント表示";
$strReadyDelete      = "ready to delete";
$strMailinglist      = "メーリングリスト";
$strLatestPphlVers   = "最新のPowerPhloggerのバージョン";
$strLatestVersion    = "最新バージョン";
$strReleaseDate      = "リリース日";
$strDownloadLoc      = "ダウンロード場所";
$strReloadKeywords   = "キーワードを再読込";
$strReloadKeyw1      = "キーワードのトップリストを再読込します。";
$strReloadKeyw2      = "engines-list.iniを編集したあとだけ実行してください。";

// admin/change_userprofile.php
$strMaxLoglim        = "最大ログ数:";
$strMaxPath          = "訪問者パス最大保存数:";
?>
