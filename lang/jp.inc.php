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
$strByteUnits        = array('�Х���', 'KB', 'MB', 'GB');

$strOn               = "����";
$strOff              = "����";
$strEnable           = "ͭ���ˤ���";
$strEnabled          = "ͭ��";
$strDisable          = "̵���ˤ���";
$strDisabled         = "̵��";
$strDellog           = "�����";
$strTopOfPage        = "�ڡ����Υȥåפ�";
$strTotal            = "���";
$strHits             = "�ҥåȿ�";
$strUniqs            = "uniqs+";
$strUniq             = "uniq+";
$strPageimpressions  = "pageimpressions";
$strDomains          = "�ɥᥤ��";
$strConfiguration    = "����";
$strCurrConfig       = "���ߤ�����:";
$strUsername         = "�桼��̾";
$strPassword         = "�ѥ����";
$strDelete           = "���";
$strUser             = "�桼��";
$strUseraccount      = "�桼�����������";
$strUseraccounts     = "�桼�����������";
$strFrom             = "from";
$strTo               = "to";
$strTo2              = "to";
$strEdit             = "�Խ���";
$strSet              = "���å�";
$strMove             = "��ư";
$strDefault          = "�ǥե����";
$strCreateNew        = "��������";
$strSave             = "��¸";
$strUnknown          = "����";
$strUndefined        = "̤���";
$strCache            = "����å���";
$strSeconds          = "��";
$strDatabase         = "�ǡ����١���";
$strTable            = "�ơ��֥�";
$strCalc             = "�Ʒ׻���";
$strStep             = "���ƥå�";
$strSystem           = "�����ƥ�";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT-12:00) ���˥����ȥ��������������";
$loca['tz']['-11']   = "(GMT-11:00) �ߥåɥ������硢���⥢";
$loca['tz']['-10']   = "(GMT-10:00) �ϥ磻";
$loca['tz']['-9']    = "(GMT-9:00) ���饹��";
$loca['tz']['-8']    = "(GMT-8:00) ��ʿ��ɸ������ƹ񡦥��ʥ��ˡ��ƥ��ե���";
$loca['tz']['-7']    = "(GMT-7:00) ����ɸ������ƹ񡦥��ʥ���";
$loca['tz']['-6']    = "(GMT-6:00) ����ɸ������ƹ񡦥��ʥ��ˡ��ᥭ�������ƥ�";
$loca['tz']['-5']    = "(GMT-5:00) ����ɸ������ƹ񡦥��ʥ��ˡ��ܥ�������ޡ�����";
$loca['tz']['-4']    = "(GMT-4:00) ������ɸ����ʥ��ʥ��ˡ����饫������ѥ�";
$loca['tz']['-3.5']  = "(GMT-3:30) �˥塼�ե���ɥ���";
$loca['tz']['-3']    = "((GMT-3:00) �֥饸�ꥢ���֥��Υ������쥹�����硼��������";
$loca['tz']['-2']    = "(GMT-2:00) ��������Ρ�����ȥإ��";
$loca['tz']['-1']    = "(GMT-1:00) �����쥹���硢�����ܥ٥�ǽ���";
$loca['tz']['0']     = "(GMT) ����˥å�ɸ��������֥�󡢥��ɥ󡢥ꥹ�ܥ󡢥����֥��";
$loca['tz']['1']     = "(GMT+1:00) �֥��å��롢�٥��󡢥ޥɥ�åɡ��ѥꡢ���ॹ�ƥ����";
$loca['tz']['2']     = "(GMT+2:00) ���ƥ͡���������֡��롢���륵��ࡢ�������إ륷��";
$loca['tz']['3']     = "(GMT+3:00) �Х����åɡ��ʥ���ӡ����������ȡ����ɡ��⥹����";
$loca['tz']['3.5']   = "(GMT+3:30) �ƥإ��";
$loca['tz']['4']     = "(GMT+4:00) ���֥��ӡ��ޥ����åȡ��Х����ȥӥꥷ";
$loca['tz']['4.5']   = "(GMT+4:30) ���֡���";
$loca['tz']['5']     = "(GMT+5:00) ������ޥС��ɡ����������������ȡ������ƥ��С���";
$loca['tz']['5.5']   = "(GMT+5:30) �ܥ�٥������륫�å����ޥɥ饹���˥塼�ǥ꡼";
$loca['tz']['6']     = "(GMT+6:00) ����ޥƥ��������ܡ����å����Υܥ��ӥ륹��";
$loca['tz']['6.5']   = "(GMT+6:30) ��󥰡���";
$loca['tz']['7']     = "(GMT+7:00) �Х󥳥����ϥΥ������㥫�륿";
$loca['tz']['8']     = "(GMT+8:00) ���󥬥ݡ��롢�ѡ��������̡��̵����ŷġ������������";
$loca['tz']['9']     = "(GMT+9:00) �������塢���ڡ������롢�䥯���ĥ�";
$loca['tz']['9.5']   = "(GMT+9:30) ���ǥ졼�ɡ�����������";
$loca['tz']['10']    = "(GMT+10:00) ���饸�����ȥ��������٥顢���ܥ�󡢥��ɥˡ���������";
$loca['tz']['11']    = "(GMT+11:00) �ޥ����󡢥�������硢�˥塼����ɥ˥�";
$loca['tz']['12']    = "(GMT+12:00) ���������ɡ��������ȥ󡢥ե��������ޡ���������";

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
$loca['lang']['jp']  = "����";
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
$strSetup                                         = "���åȥ��å�";
$loca['setup']['header1']                         = "��������";
$loca['setup']['header2']                         = "��������";
$loca['setup']['header3']                         = "�ܺ�����";
$loca['setup']['header4']                         = "����ե��å�";
$loca['setup']['header5']                         = "�����꡿��ư���";
$loca['setup']['header6']                         = "ɽ����";
$loca['setup']['header7']                         = "ɽ������";
$loca['setup']['intro_txt']                       = "POWER PHLOGGER��ɬ�פ������Ԥ��ޤ������줾��ڡ����ǡ�POWER PHLOGGER�γ���ʬ�������ԤäƤ����ޤ���";
$loca['setup']['step0_txt']                       = "<b>�饤����</b> -- GNU ���̸������ѵ��������ʻ��͡�<a href='http://www.opensource.jp/gpl/gpl.ja.html'>��������ܸ���</a>�ˤ��ɤߤ���������POWER PHLOGGER�ϥե꡼���եȥ������Ǥ������������ۤ���Ѥˤϰ�����ѷ郎����ޤ���";
$loca['setup']['step1_txt']                       = "<b>��������</b> -- ������ι��ܤ����������ꤵ��Ƥ��뤫��ǧ�����������褯ʬ����ʤ����ϡ��ǥե�����ͤΤޤޤˤ��Ƥ���������";
$loca['setup']['step2_txt']                       = "<b>���ץ��������</b> --����������ϡ��ۤȤ�ɤξ�硢�ǥե���ȤΤޤޤ����ꤢ��ޤ��� �ܺ٤��İ���������Խ����Ƥ���������";
$loca['setup']['step3_txt_a']                     = "<b>���åȥ��åפ���λ���ޤ�����</b> -- POWER PHLOGGER�����Ѥˤʤ�ޤ���<br /><br />�������ƥ����Τ��ᡢ/admin�ǥ��쥯�ȥ���Ф���.htaccess�ե��������ˤ�륢���������¤�Ԥ�������˥ǥ��쥯�ȥ�̾�Τ��ѹ����Ƥ���������<br />�ܤ���������ˡ�ˤĤ��Ƥϡ��ʲ���ʸ�������������";
$loca['setup']['step3_txt_b']                     = "�ޤ����桼����������Ȥ����꤫�鳫�Ϥ��Ƥ���������";

$loca['setup']['pphlogger_location']['title']     = "PowerPhlogger�Υ��������";
$loca['setup']['pphlogger_location']['descr']     = "PowerPhlogger�ؤΥ롼�ȥǥ��쥯�ȥ��URL";
$loca['setup']['admin_mail']['title']             = "�����ԤΥ᡼�륢�ɥ쥹";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "�����Ԥ�̾��";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "�����ԤΥѥ����";
$loca['setup']['admin_pw']['descr']               = "�桼���Υ�������Ȥκ���˻���";
$loca['setup']['server_GMT']['title']             = "�����ƥ�Υ����ॾ����";
$loca['setup']['server_GMT']['descr']             = "�����Фλ��פ����ꤵ��Ƥ��륿���ॾ����";
$loca['setup']['admin_GMT']['title']              = "�����ԤΥ����ॾ����";
$loca['setup']['admin_GMT']['descr']              = "�����Ը�����ɽ�����륿���ॾ����";
$loca['setup']['default_lang']['title']           = "�ǥե���Ȥθ���";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "�ǥե���ȤΥ������륷����";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "�桼���Υ����󥢥åפ���ǽ";
$loca['setup']['signup_ok']['descr']              = "�桼���������󥢥åײ�ǽ�ʡ֥����󥢥åץڡ����פ�ɽ��";
$loca['setup']['master_timeout']['title']         = "�桼�����Υ����ॢ���Ȼ���";
$loca['setup']['master_timeout']['descr']         = "��ñ�̡��á˥ǥե���Ȥ�1800�á�30ʬ��";
$loca['setup']['traceroute']['title']             = "Traceroute URL";
$loca['setup']['traceroute']['descr']             = "Traceroute��Ԥ�¾�Υ����ӥ�����������Ϥ��Ƥ����������������Ф�Traceroute��Ȥ����϶���ˤ��Ƥ���������";
$loca['setup']['pass_length']['title']            = "�桼���ѥ���ɤ�Ĺ��";
$loca['setup']['pass_length']['descr']            = "���������ѥ���ɤ�ʸ��Ĺ��15�ʲ��ס�";
$loca['setup']['pw_privacy']['title']             = "�ѥ���ɤΥץ饤�Х�";
$loca['setup']['pw_privacy']['descr']             = "false�Ȥ���ȡ�ʿʸ�Υѥ���ɳ�ǧ�᡼�뤬BCC�Ǵ����ԥ��ɥ쥹�ޤ���������ޤ����ץ饤�Х����δ������顢�ǥե���ȤǤ�True�Ǥ���";
$loca['setup']['cache_calendar']['title']         = "���������Υ���å���";
$loca['setup']['cache_calendar']['descr']         = "����å�����֤��ä����ꡣ0�ʥǥե���ȡˤȤ���ȡ�advanced�ʥ���å��幹����ǽ���褦�����ʿ侩��";
$loca['setup']['mxlookup']['title']               = "MX��å����å�";
$loca['setup']['mxlookup']['descr']               = "�᡼�륢�ɥ쥹��ͭ������ǧ���ꥤ��ƥꥸ����Ȥ˹Ԥ���True�ˤ���ȡ��ɥᥤ���¸�߳�ǧ��Ԥ����ǥե���Ȥ�False��������ɥ����Ǥ�PHP�����ε�ǽ�򥵥ݡ��Ȥ��ʤ����Ȥ����뤿�ᡣ";
$loca['setup']['loopback_bug']['title']           = "�롼�ץХå��Х�";
$loca['setup']['loopback_bug']['descr']           = "IP/�ץ������������������Ǥ��ʤ�ISP����Ѥ��Ƥ������True�Ȥ��Ƥ���������";
$loca['setup']['mysqldump_on']['title']           = "MySQL�����";
$loca['setup']['mysqldump_on']['descr']           = "���٤ƤΥ桼���ˡ����꥿�����MySQL����פ��ǽ�ˤ��롣";
$loca['setup']['md5form']['title']                = "MD5������";
$loca['setup']['md5form']['descr']                = "MD5�ǰŹ沽���줿������ե��������ѡ�JavaScript���ѡ�";
$loca['setup']['mail_mod']['title']               = "�᡼��⥸�塼��";
$loca['setup']['mail_mod']['descr']               = "pphlogger.js�ե����뤬ź�դ��줿��ǧ�᡼������դ��뤿��Υ᡼��⥸�塼��������libmail��htmlmime��";
$loca['setup']['GD_enabled']['title']             = "GD�饤�֥��";
$loca['setup']['GD_enabled']['descr']             = "GD�饤�֥�꤬ͭ���Ǥʤ����ˤϡ�GD�ˤ���������Ѥ��ʤ����Ȥ��Ǥ��ޤ��������������ʤ�ε�ǽ���Ȥ��ʤ��ʤ�ޤ���";
$loca['setup']['gd_img_type']['title']            = "GD����������";
$loca['setup']['gd_img_type']['descr']            = "GD�饤�֥��������������������꤬����������ꤷ�Ƥ����������ǥե���Ȥ�auto�ʼ�ư����ˤǤ�����auto��png��gif��jpeg��";
$loca['setup']['Freetype_enabled']['title']       = "�ե꡼������";
$loca['setup']['Freetype_enabled']['descr']       = "�ե꡼�����ס��饤�֥�꤬ͭ���Ǥʤ���硢False�Ȥ��Ƥ���������TTF�ե���Ȥ򥫥��󥿡�ɽ���˻��ѤǤ��ޤ��󡣥ӥ�ȥ���Υե���Ȥϻ��ѤǤ��ޤ���";
$loca['setup']['ttf_location']['title']           = "TTF���������";
$loca['setup']['ttf_location']['descr']           = "�Х��Τ���PHP�ǥ����ȥ�ӥ塼�����ȤäƤ��ơ������󥿲�����������ɽ������ʤ����ϡ�TTF�ե���Ȥ�����ǥ��쥯�ȥ�ޤǤΥե�ѥ������Ϥ��ƤߤƤ�������������ʳ��ξ��ϡ��ѹ����ʤ��Ǥ�����������relative��/TTF�ե���Ȥ�����ǥ��쥯�ȥ�ޤǤΥե�ѥ�/��";
$loca['setup']['cleanup_lim']['title']            = "̤��ǧ�桼���Υ��꡼�󥢥åץ�ߥå�";
$loca['setup']['cleanup_lim']['descr']            = "̤��ǧ�Υ桼����������Ȥ�����������ޤǤλ������¡�ñ�̡����֡�";
$loca['setup']['cleanup_old']['title']            = "�����ѥ桼���Υ��꡼�󥢥åץ�ߥå�";
$loca['setup']['cleanup_old']['descr']            = "�Ȥ��Ƥ��ʤ��ʥ桼���ڡ����ΥҥåȤ�������ʤ��˥桼����������Ȥ���������ޤǤλ��֡�ñ�̡�����";
$loca['setup']['dellog_global']['title']          = "���桼�����̤Υ���¸��������";
$loca['setup']['dellog_global']['descr']          = "False�Ȥ���ȡ��桼�����Ȥ����꤬���Ѥ���ޤ���True�Ȥ���ȡ��ʲ������꤬���̤˻��Ѥ���ޤ���";
$loca['setup']['dellog_lim']['title']             = "��������¸����";
$loca['setup']['dellog_lim']['descr']             = "����¸������ο������Ȥ�������¤ʤ��ʥǥե���ȡ�";
$loca['setup']['dellog_lim_d']['title']           = "��������¸����";
$loca['setup']['dellog_lim_d']['descr']           = "��������������ޤǤ����������Ȥ�������¤ʤ��ʥǥե���ȡ�";
$loca['setup']['dellog_lim_prob']['title']        = "������γ�Ψ";
$loca['setup']['dellog_lim_prob']['descr']        = "���������������Ψ�ʥѡ�����ȡ�";
$loca['setup']['delpath_global']['title']         = "���桼�����̤Υѥ���¸��������";
$loca['setup']['delpath_global']['descr']         = "False�Ȥ���ȡ��桼�����Ȥ����꤬���Ѥ���ޤ���True�Ȥ���ȡ��ʲ������꤬���̤˻��Ѥ���ޤ���";
$loca['setup']['delpath_lim']['title']            = "��������¸�ѥ���";
$loca['setup']['delpath_lim']['descr']            = "����¸����ѥ��ο������Ȥ�������¤ʤ���";
$loca['setup']['delpath_lim_d']['title']          = "��������¸����";
$loca['setup']['delpath_lim_d']['descr']          = "���ѥ�����������ޤǤ����������Ȥ�������¤ʤ��ʥǥե���ȡˡ�";
$loca['setup']['delpath_lim_prob']['title']       = "������γ�Ψ";
$loca['setup']['delpath_lim_prob']['descr']       = "���ѥ������������Ψ�ʥѡ�����ȡ�";
$loca['setup']['show_cust']['title']              = "�桼��������������";
$loca['setup']['show_cust']['descr']              = "�桼����ɽ���ڡ����ǲ���Υ������ޥ���ɽ�����뤫��";
$loca['setup']['calendar_months']['title']        = "ɽ�����";
$loca['setup']['calendar_months']['descr']        = "�������ڡ����ǲ�����ʬ��ɽ�����뤫��";
$loca['setup']['topref_lim']['title']             = "�ȥå׻��ȸ�";
$loca['setup']['topref_lim']['descr']             = "";
$loca['setup']['topdomain_lim']['title']          = "�ȥåץɥᥤ��";
$loca['setup']['topdomain_lim']['descr']          = "";
$loca['setup']['topres_lim']['title']             = "�ȥåײ�����";
$loca['setup']['topres_lim']['descr']             = "";
$loca['setup']['topcolor_lim']['title']           = "�ȥå׿���";
$loca['setup']['topcolor_lim']['descr']           = "";
$loca['setup']['topkeywords_lim']['title']        = "�ȥåץ������";
$loca['setup']['topkeywords_lim']['descr']        = "";
$loca['setup']['topbrowseros_lim']['title']       = "�ȥåץ֥饦��/OS";
$loca['setup']['topbrowseros_lim']['descr']       = "";
$loca['setup']['topsearcheng_lim']['title']       = "�ȥåץ��������󥸥�";
$loca['setup']['topsearcheng_lim']['descr']       = "";
$loca['setup']['mpfront_lim']['title']            = "MP�ե���";
$loca['setup']['mpfront_lim']['descr']            = "��ɽ��������MP�ʽ��ڡ����ˤ�ɽ����";
$loca['setup']['useraccount_lim']['title']        = "�桼�����������";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "�ǿ����ȸ�";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "MP������";
$loca['setup']['width_max']['descr']              = "MP�ʽ��ڡ����˥���դκ������ʥԥ������";
$loca['setup']['width_factor']['title']           = "MPɽ����Ψ";
$loca['setup']['width_factor']['descr']           = "MP�ʽ��ڡ����˥���դ�ɽ����Ψ";
$loca['setup']['browseros_barsize']['title']      = "�֥饦��/OS����ե�����";
$loca['setup']['browseros_barsize']['descr']      = "�֥饦��/OS���פǤΥѡ�����ȥ���դκ��祵�����ʥԥ������";
$loca['setup']['extended']['title']               = "��ĥ��ɽ��";
$loca['setup']['extended']['descr']               = "False�Ȥ���ȡ������٤ȿ�����ɽ������ޤ���";
$loca['setup']['ttf_demo_size']['title']          = "TTF�ǥ⥵����";
$loca['setup']['ttf_demo_size']['descr']          = "TTF�ǥ�󥹥ȥ졼�����Υե���ȥ������ʥݥ���ȡ�";
$loca['setup']['css_show']['title']               = "CSS����ɽ��";
$loca['setup']['css_show']['descr']               = "CSS�Խ��ڡ����ǡ��ɤο���CSS�γ��פȤ���ɽ�����뤫��";

//email stuff
$strAccActivation    = "���������ͭ����";

// pages
$strUsrPage[0]       = "������/��������";
$strUsrPage[1]       = "��";
$strUsrPage[2]       = "����";
$strUsrPage[3]       = "������";
$strUsrPage[4]       = "�֥饦��/OS";
$strUsrPage[5]       = "����";
$strUsrPage[6]       = "�桼���ץ�ե�����";
$strAdminPage[0]     = "������˥塼";
$strAdminPage[1]     = "�桼���κ���/���";
$strAdminPage[2]     = "�桼�����������";
$strAdminPage[3]     = "�ǿ���������";
$strAdminPage[4]     = "CSS���ǥ���";
$strAdminPage[5]     = "����";
$strAdminPage[6]     = "�᡼��󥰥ꥹ��";

// functions.lib.php
$strPrev             = "����";
$strNext             = "����";

// headfoot.inc.php
$strTrackedSite      = "���оݥ�����:";
$strCurrentTime      = "���߻���";
$strHeadDateFormat   = "M d, <b>h:iA</b>";
$strYourHits         = "�ҥåȿ�:";
$strSlogan           = "...�ǹ�Υ��󥰥ġ���";
$strLogs             = "��";
$strStats1           = "����";
$strStats2           = "����2";
$strStats3           = "����3";
$strStats4           = "����4";
$strStats5           = "����5";
$strSettings         = "����";
$strChUserprofile    = "�桼���ץ�ե�����";
$strLoginLogout      = "������/��������";

// index.php
$strEnterUsernPw     = "�桼��̾�ȥѥ���ɤ�����";
$strLostPw           = "�ѥ���ɤ�˺�줿?";
$strLinkNewPw        = "�����ѥ���ɺ���";
$strGetFreeAccount   = "�����������Ͽ";
$strSignUpUseracc    = "�桼����������Ȥ���Ͽ���Ǥ��ޤ���";
$strMsgWrongPw       = "<b>�ѥ���ɤ��桼��̾���ְ�äƤ��ޤ�</b><br />�⤦���ٹԤäƤ�������...";
$strMsgNewPw         = "<b>�������ѥ���ɤ���������ޤ���</b><br />���Ϥ����᡼�륢�ɥ쥹���������줿�Τǡ���ǧ���Ƥ�������";

// dspNewPw.php
$strForVerification  = "�桼��̾�ȥ᡼�륢�ɥ쥹�����Ϥ��Ƥ���������";
$strGetIt            = "����";
$strMsgNoValidUser   = "<b>�᡼�륢�ɥ쥹���桼��̾���ְ�äƤ��ޤ�</b><br />�⤦���ٹԤäƤ�������...";

// signup.php
$strSignUp           = "�����桼����������ȤΥ����󥢥å�:";
$strHtmlCode         = "HTML������";
$strAddHtmlCode      = "�ʲ���HTML�����ɤ򡢥���Ͽ�������ե�������ɲä��Ƥ�������:";
$strJsFile           = "pphlogger.js��̵���������ϡ��ʲ������������ɤ��Ƥ�������:";
$strInstructions     = "��갷������:";
$strConfLogin        = "�᡼������դ����ѥ���ɤǥ����󤹤�ȡ����ʤ��Υ桼����������Ȥ�ͭ���ˤʤ�ޤ���";
$strConfLogin2       = "ͭ�����򤷤ʤ��Ǥ���ȡ�".$cleanup_lim."��˥桼����������Ȥ��������ޤ���";
$strUploadJs         = "ź�դ���pphlogger.js�ե�����򤢤ʤ��Υ����Ȥإ��åץ��ɤ��Ƥ���������";
$strNoSignUp         = "���ߡ��桼����������Ȥο�����Ͽ�ϤǤ��ޤ���";
$strReturnToLogin    = "��������̤�";

// dspLogs.php
$strShowLogs         = "��ɽ����:";
$strSelect           = "����";
$strUnselect         = "������";
$strAll              = "All";
$strTurnShowref      = "���ȸ�ɽ��";
$strFullAgt          = "����������Ⱦܺ�";
$strDemoMode         = "�ǥ�⡼��";
$strGuestMsg1        = "�����ȥ桼���ϥ������Ǥ��ޤ���";
$strGuestMsg2        = "�������ǽ��ͭ���ˤ��Ƥ���������";
$strViewLogs         = "��ɽ��";
$strHostIP           = "�ۥ���/IP";
$strReferrer         = "���ȸ�";
$strReferrers        = "���ȸ�";
$strAgent            = "�����������";
$strRes              = "������";
$strColor            = "����";
$strTimestamp        = "����";
$strProxy            = "�ץ���";

// dspStats.php
$strVisPerDay        = "Visitors per day"; // keep english
$strPerDay           = "per day";
$strVisPerHour       = "Visitors per hour"; // keep english
$strLast             = "Last";
$strMonth            = "Month";
$strMonths           = "Months";
$strToday            = "Today";
$strAverage          = "ʿ��";
$strAverageAbbr      = "ʿ��";
$strDay              = "��";
$strDays             = "��";
$strCurrOnlUsers     = "���ߥ���饤��Υ桼��";
$strIPkept           = "IP��¸����:";
$strIPkept2          = "ʬ";
$strOnline           = "����饤��";
$strEntryTime        = "���ϻ���";
$strLastReload       = "�ǽ����ɹ�";
$strLastUrl          = "�ǽ�URL";
$strSince            = "�в����";
$strMultipage        = "ʣ���ڡ���";
$strKeywords         = "�������";
$strSingleWords      = "1ñ��";
$strWholeStrings     = "��ʸ����";
$strDownloads        = "���������";
$strTerritories      = "territories";
$str_arrMonths       = Array(1 => "1��", "2��", "3��", "4��", "5��", "6��", "7��", 
                                    "8��", "9��", "10��", "11��", "12��");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
$str_area            = Array(
                         'EU'   => '�衼��å�',
                         'AM'   => '����ꥫ',
                         'AF'   => '���եꥫ',
                         'AS'   => '������',
                         'OZ'   => '�������˥�',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "ˬ��Կ���ɽ��";
$strShowPageimpress  = "���ڡ�������ץ�å�������ɽ��";
$strReload           = "���ɹ�";

// edSettings.php
$strCookieTxt        = "�桼�����Ȥ�ˬ���";
$strCountMe          = "������Ȥ���";
$strDontCountMe      = "������Ȥ��ʤ�";
$strEnableDellog     = "�����ͭ��";
$strDisableDellog    = "�����̵��";
$strEnableDellog2    = "�������ǽ��ͭ���ˤ���:";
$strResetHits        = "�ҥåȿ�������";
$strResHitsTxt       = "�ҥåȿ������꤬�Ԥ��ޤ������ͤ����Ϥ��Ƥ���������";
$strMysqlDump        = "mySQL�����(��������)ɽ��";
$strStructOnly       = "��¤�Τ�";
$strAddDropTbl       = "'drop table'���ɲ�";
$strStructData       = "��¤�ȥǡ���";
$strSend             = "����";
$strComplInserts     = "������insertsʸ";
$strDiskSpace        = "�ǥ��������ڡ���";
$strAvailSpace       = "���ǥ��������ڡ���";
$strUsedSpace        = "���Ѻѥǥ��������ڡ���";
$strDbSpace          = "���Ѻѥǡ����١����ڡ���";
$strFreeSpace        = "̤���ѥǥ��������ڡ���";
$strFileUpload       = "ʣ���ե����륢�åץ���";
$strMaxFilesize      = "����ե����륵����";
$strErrUpload        = "���åץ��ɻ��˥��顼��ȯ�����ޤ������⤦���ٹԤäƤ���������";
$strUploadOk         = "���åץ��ɤ���ޤ�����";
$strFilename         = "�ե�����̾";
$strSize             = "������";
$strYourLast         = "your last";
$strCustomers        = "customers";
$strYourTimeout      = "�����ॢ����:";
$strMinutes          = "ʬ";
$strBlocking         = "�ˤ������";
$strShortQuery       = "���硼�ȥ�����";
$strOwnReferrers     = "���Ȥλ��ȸ�";

// edUserprofile.php
$strUserprofile      = "�桼���ץ�ե�������ѹ�";
$strEditProfile      = "������Խ�������¸�ܥ���򥯥�å����Ƥ�������:";
$strUrl1Txt          = "�����Ȥ�URL";
$strUrl2Txt          = "ʣ����URL������Ȥ��ϡ����Ԥ��Ƥ��٤����Ϥ��Ƥ�������:";
$strEmail            = "�᡼�륢�ɥ쥹:";
$strTimezone         = "�����ॾ����:";
$strUserLang         = "����:";
$strVisible          = "������ɽ��:";
$strVisibleStyle     = "ɽ����������:";
$strTimeout          = "�����ॢ����:";
$strEmailNotif       = "�᡼������Ρʰʲ���ˬ��Ԥ��ȡ�:";
$strDefLogNo         = "�ǥե���ȤΥ�ɽ����:";
$strKwListMode       = "������ɰ���:";
$strAllowDemo        = "�ǥ�⡼�ɵ���:";
$strTTF              = "�ե����̾:";
$strAvailFonts       = "���Ѳ�ǽ�ե����";
$strFontSize         = "�ե���ȥ�����:";
$strFontColor        = "�ե���ȿ�:";
$strBgColor          = "�طʿ�:";
$strTransBg          = "Ʃ�����ط�:";
$strSample           = "����ץ����:";
$strChangePw         = "�ѥ�����ѹ�:";
$strOldPw            = "��ѥ����:";
$strNewPw            = "���ѥ����:";
$strReenterPw        = "������:";
$strLoadCSS          = "�������륷����:";
$strView4Msg1        = "�桼���ץ�ե����뤬��������ޤ�����";
$strView4Msg2        = "�桼���ץ�ե�����򹹿��Ǥ��ޤ���";
$strView4Msg3        = "�����Ȥϰ��ڤ��ѹ���Ԥ����Ȥ��Ǥ��ޤ���";
$strPwChanged        = "�ѥ���ɤ��ѹ�����ޤ�����";
$strWrongPw          = "�ѥ���ɤ��ְ�äƤ��ޤ���";

// admin/index.php
$strAdmin            = "������˥塼";
$strMaintenance      = "���ƥʥ�";
$strCheckNewVer      = "�������С�����������å�";
$strCreate           = "�����桼����������Ȥκ���:";
$strAdminMsg1        = "���Υ桼��̾�ϴ�����Ͽ����Ƥ��ޤ���";
$strAdminMsg2        = "�桼����������Ȥ���������ޤ�����";
$strAdminMsg3        = "�᡼�륢�ɥ쥹�������Ǥ���";
$strAdminMsg4        = "�桼��̾��Ⱦ�ѥ���ե��٥åȤ�<br />.,-,_,��ʸ�����������ѤǤ��ޤ����ޤ�30ʸ���ʲ��Ȥ��Ƥ���������";
$strAdminErr1        = "�桼����������Ⱥ������˥��顼��ȯ�����ޤ�����";
$strDelUser          = "�桼�����:";
$strDelErr           = "���꤬ȯ�����ޤ�����";
$strDelOk            = "���٤ƤΥ桼�����������ޤ�����";
$strWrongPwUser      = "�ѥ���ɤ��桼��̾���ְ�äƤ��ޤ���";
$strAdminCookie      = "�����ԥ��å��������";
$strNetcheck         = "enable netcheck";
$strHideAccounts     = "�桼�������������ɽ��";
$strShowAccounts     = "�桼�����������ɽ��";
$strReadyDelete      = "ready to delete";
$strMailinglist      = "�᡼��󥰥ꥹ��";
$strLatestPphlVers   = "�ǿ���PowerPhlogger�ΥС������";
$strLatestVersion    = "�ǿ��С������";
$strReleaseDate      = "��꡼����";
$strDownloadLoc      = "��������ɾ��";
$strReloadKeywords   = "������ɤ���ɹ�";
$strReloadKeyw1      = "������ɤΥȥåץꥹ�Ȥ���ɹ����ޤ���";
$strReloadKeyw2      = "engines-list.ini���Խ��������Ȥ����¹Ԥ��Ƥ���������";

// admin/change_userprofile.php
$strMaxLoglim        = "�������:";
$strMaxPath          = "ˬ��ԥѥ�������¸��:";
?>
