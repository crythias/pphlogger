# --------------------------------------------------------
# Table structure for table 'pphl_xxxxx_logs'
# --------------------------------------------------------
#
# $Id: pphl_xxxxx_logs.sql,v 1.11 2002/07/28 12:47:30 cvs_iezzi Exp $

CREATE TABLE pphl_xxxxx_logs (
   logid INT UNSIGNED NOT NULL AUTO_INCREMENT,
   userid int(5) unsigned DEFAULT NULL,
   hostname varchar(150) NOT NULL DEFAULT '',
   tld varchar(8) NOT NULL DEFAULT '',
   ip varchar(39) NOT NULL DEFAULT '',
   entryid INT UNSIGNED DEFAULT NULL,
   path TEXT,
   referer varchar(512) DEFAULT NULL,
   seareng varchar(60) NOT NULL DEFAULT '',
   agentid INT UNSIGNED NOT NULL DEFAULT '0',
   res_w INT UNSIGNED NOT NULL DEFAULT '0',
   res_h INT UNSIGNED NOT NULL DEFAULT '0',
   color int(2) DEFAULT NULL,
   time int(10) UNSIGNED NOT NULL DEFAULT '0',
   t_reload int(10) UNSIGNED NOT NULL DEFAULT '0',
   online int(6) NOT NULL DEFAULT '0',
   mp int(10) unsigned NOT NULL DEFAULT '1',
   proxy varchar(255) NOT NULL DEFAULT '',
   proxy_ip varchar(15) NOT NULL DEFAULT '',
   proxy_hostname varchar(150) NOT NULL DEFAULT '',
   PRIMARY KEY (logid),
   INDEX tld_ind (tld),
   INDEX ind_seng (seareng),
   INDEX res_ind (res_w,res_h),
   INDEX agt_ind (agentid),
   INDEX time_ind(time),
   INDEX trel_ind(t_reload)
);
