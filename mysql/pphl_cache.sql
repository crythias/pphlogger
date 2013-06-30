# --------------------------------------------------------
# Table structure for table 'pphl_cache'
# --------------------------------------------------------
#
# $Id: pphl_cache.sql,v 1.6 2002/05/04 16:41:06 cvs_iezzi Exp $

CREATE TABLE pphl_cache (
   id int(5) unsigned NOT NULL DEFAULT '0',
   type varchar(20) NOT NULL DEFAULT '',
   yyyymm int(6) unsigned NOT NULL DEFAULT '0',
   cache text,
   time int(10) UNSIGNED NOT NULL DEFAULT '0',
   PRIMARY KEY (id,type,yyyymm)
);

#
# Dumping data for table `pphlogger_cache`
#

INSERT INTO pphl_cache (type, cache) VALUES ('curr_ver', '2221');
