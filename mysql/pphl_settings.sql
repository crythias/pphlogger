# --------------------------------------------------------
# Table structure for table `pphlogger_settings`
# --------------------------------------------------------
#
# $Id: pphl_settings.sql,v 1.30 2003/06/19 20:21:30 cvs_iezzi Exp $

CREATE TABLE pphl_settings (
  setting varchar(50) NOT NULL default '',
  value varchar(255) default NULL,
  type varchar(20) NOT NULL default 'text',
  PRIMARY KEY (setting)
);

#
# Dumping data for table `pphl_settings`
#

INSERT INTO pphl_settings VALUES ('pphlogger_location', 'http://www.example.com/pphlogger/', 'text');
INSERT INTO pphl_settings VALUES ('admin_mail', 'webmaster@your-host.com', 'text');
INSERT INTO pphl_settings VALUES ('admin_name', 'Your Name', 'text');
INSERT INTO pphl_settings VALUES ('admin_pw', '', 'pw');
INSERT INTO pphl_settings VALUES ('server_GMT', '1', 'gmt');
INSERT INTO pphl_settings VALUES ('admin_GMT', '1', 'gmt');
INSERT INTO pphl_settings VALUES ('default_lang', 'en', 'lang');
INSERT INTO pphl_settings VALUES ('cssid', '12', 'css');
INSERT INTO pphl_settings VALUES ('signup_ok', 'false', 'bool');
INSERT INTO pphl_settings VALUES ('cleanup_lim', '24', 'int');
INSERT INTO pphl_settings VALUES ('cleanup_old', '60', 'int');
INSERT INTO pphl_settings VALUES ('calendar_months', '12', 'int');
INSERT INTO pphl_settings VALUES ('topref_lim', '30', 'int');
INSERT INTO pphl_settings VALUES ('topdomain_lim', '30', 'int');
INSERT INTO pphl_settings VALUES ('topres_lim', '10', 'int');
INSERT INTO pphl_settings VALUES ('topcolor_lim', '5', 'int');
INSERT INTO pphl_settings VALUES ('topkeywords_lim', '40', 'int');
INSERT INTO pphl_settings VALUES ('topbrowseros_lim', '40', 'int');
INSERT INTO pphl_settings VALUES ('topsearcheng_lim', '20', 'int');
INSERT INTO pphl_settings VALUES ('mpfront_lim', '20', 'int');
INSERT INTO pphl_settings VALUES ('dellog_global', 'true', 'bool');
INSERT INTO pphl_settings VALUES ('dellog_lim', '0', 'int');
INSERT INTO pphl_settings VALUES ('dellog_lim_d', '0', 'int');
INSERT INTO pphl_settings VALUES ('dellog_lim_prob', '30', 'int');
INSERT INTO pphl_settings VALUES ('delpath_global', 'true', 'bool');
INSERT INTO pphl_settings VALUES ('delpath_lim', '500', 'int');
INSERT INTO pphl_settings VALUES ('delpath_lim_d', '0', 'int');
INSERT INTO pphl_settings VALUES ('delpath_lim_prob', '20', 'int');
INSERT INTO pphl_settings VALUES ('useraccount_lim', '15', 'int');
INSERT INTO pphl_settings VALUES ('useraccount_ord', 'id', 'text');
INSERT INTO pphl_settings VALUES ('useraccount_ord_desc', 'false', 'bool');
INSERT INTO pphl_settings VALUES ('lastref_lim', '30', 'int');
INSERT INTO pphl_settings VALUES ('master_timeout', '1800', 'int');
INSERT INTO pphl_settings VALUES ('show_cust', '30', 'int');
INSERT INTO pphl_settings VALUES ('traceroute', 'http://www.getnet.com/cgi-bin/trace?', 'text');
INSERT INTO pphl_settings VALUES ('pass_length', '8', 'int');
INSERT INTO pphl_settings VALUES ('pw_privacy', 'true', 'bool');
INSERT INTO pphl_settings VALUES ('cache_calendar', '0', 'int');
INSERT INTO pphl_settings VALUES ('width_max', '26', 'int');
INSERT INTO pphl_settings VALUES ('width_factor', '2', 'int');
INSERT INTO pphl_settings VALUES ('browseros_barsize', '200', 'int');
INSERT INTO pphl_settings VALUES ('extended', 'true', 'bool');
INSERT INTO pphl_settings VALUES ('ttf_demo_size', '24', 'int');
INSERT INTO pphl_settings VALUES ('mxlookup', 'false', 'bool');
INSERT INTO pphl_settings VALUES ('gd_img_type', 'auto', 'text');
INSERT INTO pphl_settings VALUES ('GD_enabled', 'true', 'bool');
INSERT INTO pphl_settings VALUES ('css_show', 'color_bg,color_1,color_2,color_3', 'text');
INSERT INTO pphl_settings VALUES ('loopback_bug', 'false', 'bool');
INSERT INTO pphl_settings VALUES ('mysqldump_on', 'true', 'bool');
INSERT INTO pphl_settings VALUES ('md5form', 'false', 'bool');
INSERT INTO pphl_settings VALUES ('Freetype_enabled', 'true', 'bool');
INSERT INTO pphl_settings VALUES ('mail_mod', 'libmail', 'mta');
INSERT INTO pphl_settings VALUES ('ttf_location', 'relative', 'text');
