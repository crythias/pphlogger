# --------------------------------------------------------
# Table structure for table 'pphl_userlog'
# --------------------------------------------------------
#
# $Id: pphl_userlog.sql,v 1.6 2002/04/28 19:29:16 cvs_iezzi Exp $

CREATE TABLE pphl_userlog (
   id int(5) unsigned NOT NULL DEFAULT '0',
   ip varchar(15) NOT NULL DEFAULT '',
   hostname varchar(150) NOT NULL DEFAULT '',
   t_reload int(10) UNSIGNED NOT NULL DEFAULT '0',
   t_since int(10) UNSIGNED NOT NULL DEFAULT '0',
   online int(6) NOT NULL DEFAULT '0',
   ok enum('Y','N') NOT NULL DEFAULT 'N'
);