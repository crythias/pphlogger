# --------------------------------------------------------
# Table structure for table 'pphl_users'
# --------------------------------------------------------
#
# $Id: pphl_users.sql,v 1.24 2002/08/19 20:40:03 cvs_iezzi Exp $

CREATE TABLE pphl_users (
   id int(5) unsigned NOT NULL DEFAULT '0',
   username varchar(30) NOT NULL DEFAULT '',
   hits INT unsigned NOT NULL DEFAULT '0',
   admin TINYINT(1) NOT NULL DEFAULT '0',
   pw char(32) NOT NULL DEFAULT '',
   email varchar(70) NOT NULL DEFAULT '',
   visible TINYINT(1) NOT NULL DEFAULT '1',
   timeout int(5) NOT NULL DEFAULT '1800',
   timeout_onl int(5) NOT NULL DEFAULT '300',
   date_start int(10) UNSIGNED NOT NULL DEFAULT '0',
   last_access int(10) UNSIGNED NOT NULL DEFAULT '0',
   access_diff int(5) UNSIGNED NOT NULL DEFAULT '0',
   hit_mail int(5) NOT NULL DEFAULT '100',
   loglim int unsigned NOT NULL DEFAULT '50',
   stats_cache int(7) unsigned NOT NULL DEFAULT '900',
   your_url text,
   ipblock text,
   refblock text,
   ownref text,
   qstr text,
   index_files text,
   demo TINYINT(1) DEFAULT '0' NOT NULL,
   flags TINYINT(1) DEFAULT '1' NOT NULL,
   dlunite TINYINT(1) DEFAULT '0' NOT NULL,
   ttf_file varchar(30) DEFAULT 'arialbd.ttf' NOT NULL,
   gd_font int(2) NOT NULL DEFAULT '3',
   ttf_size int(2) NOT NULL DEFAULT '14',
   bg_c varchar(30) DEFAULT 'black',
   fg_c varchar(30) DEFAULT 'lightgrey',
   bg_trans TINYINT(1) NOT NULL DEFAULT '0',
   cssid INT UNSIGNED NOT NULL DEFAULT '13',
   gmt FLOAT NOT NULL DEFAULT '1',
   lang char(2) NOT NULL DEFAULT 'en',
   conf TINYINT(1) NOT NULL DEFAULT '0',
   del_usr TINYINT(1) NOT NULL DEFAULT '0',
   limh int(6) unsigned NOT NULL DEFAULT '0',
   limh_p int(6) unsigned NOT NULL DEFAULT '1000',
   limd int(3) unsigned NOT NULL DEFAULT '0',
   limd_p int(3) unsigned NOT NULL DEFAULT '0',
   kwspl TINYINT(1) NOT NULL DEFAULT '0',
   tblsize int(11) unsigned NOT NULL DEFAULT '0',
   INDEX conf_del_usr (conf,del_usr),
   PRIMARY KEY (id)
);

