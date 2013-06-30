# --------------------------------------------------------
# Table structure for table 'pphl_xxxxx_mpdl'
# --------------------------------------------------------
#
# $Id: pphl_xxxxx_mpdl.sql,v 1.8 2002/04/25 11:48:37 cvs_iezzi Exp $

CREATE TABLE pphl_xxxxx_mpdl (
   id INT UNSIGNED NOT NULL AUTO_INCREMENT,
   enabled TINYINT(1) NOT NULL DEFAULT '1',
   type enum('mp','dl','kw') NOT NULL DEFAULT 'mp',
   url varchar(255) NOT NULL DEFAULT '',
   hits INT UNSIGNED NOT NULL DEFAULT '1',
   since int(10) UNSIGNED NOT NULL DEFAULT '0',
   title varchar(255) DEFAULT NULL,
   INDEX type_hits (type,hits),
   PRIMARY KEY (id)
);
