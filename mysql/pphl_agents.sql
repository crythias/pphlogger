# --------------------------------------------------------
# Table structure for table 'pphl_agents'
# --------------------------------------------------------
#
# $Id: pphl_agents.sql,v 1.5 2002/04/24 18:54:38 cvs_iezzi Exp $

CREATE TABLE pphl_agents (
   id INT UNSIGNED NOT NULL AUTO_INCREMENT,
   agent varchar(255) NOT NULL DEFAULT '',
   browser varchar(8) NOT NULL DEFAULT '',
   version FLOAT NOT NULL DEFAULT '0',
   version_st varchar(10) DEFAULT NULL,
   system varchar(15) NOT NULL DEFAULT '',
   UNIQUE KEY ind_agt (agent),
   INDEX browsers (browser,version,system),
   PRIMARY KEY (id)
);

