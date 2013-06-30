<?php
/*  ---------------------------------------------------------------------
    $Id: upd_2.2.1-2.2.2.php,v 1.58 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.2.1 to 2.2.2
    ---------------------------------------------------------------------
*/

/******************** CONFIGURATION **********************/
// Uncomment the following line if you would like to run 
// this script from the shell (php-cgi):
//   define('UPD_CGI', 1);
/*********************************************************/

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
define('PPHL_SCRIPT_PATH', '../');
define('NO_SESS', 1);
define('NO_SETUP_REDIR', 1); // avoid redirection to /admin/setup.php
include PPHL_SCRIPT_PATH."main_location.inc";
include LIB_LOADSQL;

$prev_ver = getPPhlVersion();


/*
 * WARNING MESSAGE
 */
if (!isset($startupgrade) && !defined('UPD_CGI')) {
	$logs_rw = isWritableDir(CFG_LOG_PATH);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PowerPhlogger upgrade script 2.2.1-2.2.2</title>
<style type="text/css">
<!--
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10pt
}
H1,H2,H3,H4 {
	color : #6388ff;
	font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
}
A {
	color : #6388ff;
	font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-decoration: none;
}
A:HOVER {
	color: #000099;
	background-color: #99CCFF;
	font-weight: bolder;
}
-->
</style>
</head>
<body>
<h2>PowerPhlogger upgrade script v.2.2.1-2.2.2</h2>
<h3>step 1 - upgrading mySQL table names</h3>
In 2.2.2 mySQL table-names have changed. Make sure you have edited config.inc.php and put the correct prefix information.<br />
If you were using a prefix for your tables in a previous version of PowerPhlogger, please enter it in PPHL_DB_PREFIX_OLD.<br />
The new default prefix is PPHL_DB_PREFIX = 'pphl_'. Keep this setting if you're not sure what this is all about. The default should be good for everyone!<br />
<br />
To start the upgrade process, step 1, please click on the following link:
<a href="prefix_change.<?php echo CFG_PHPEXT; ?>" target="_blank">UPDATE TABLE NAMES</a><br /><br />
<b>WARNING:</b> While upgrading to 2.2.2 you always need to run step 1 before you're going on with step 2!<br />
(even if you've entered the same value in PPHL_DB_PREFIX and PPHL_DB_PREFIX_OLD !!!)
<br />
<h3>step 2 - main upgrade process</h3>
<b>Visitor-Paths</b><br />
This upgrade-script may take minutes up to hours to execute! This depends on your amount of useraccounts and amount of log-entries.<br />
The main bottleneck in this upgrade process is the conversion of all visitor-paths stored for each account.<br />
If you would like to keep all those visitor-paths, make sure you've checked the [ full upgrade ] option.<br />
If you don't really need to keep all your visitor-paths, uncheck it and enter an amount of logs for which the visitor-paths should be kept.<br />
If the script breaks during execution, just press the reload button and ignore all warnings that might appear.

<form action="<?php echo $PHP_SELF; ?>" method="post">
<input type="hidden" name="startupgrade" value="1" />
<input type="checkbox" name="full_upgrade" checked="checked" value="1" /> full upgrade<br /><br />
If [full upgrade] is unchecked:<br />
Keep the <input type="text" name="keep_paths" value="50" size="4" /> last visitor paths for each useraccount!<br />
<br />
<br />
<b>Upgrade Output</b><br />
If you wish to get the upgrade output in your /logs-directory instead of the standard browser output, check the following box.<br />
Use this option if you got a huge amount of useraccounts and logs and if you expect a long execution time of this script:<br />
<input type="checkbox" name="logs_outp" value="1" <?php if (!$logs_rw) echo "disabled=\"disabled\" "; ?>/> output to /logs
<?php if (!$logs_rw) echo '<br />[WARNING: please first give write-permission to your /logs-directory (chmod 666) !!]'; ?>
<br /><br />
<b>mySQL-Query Output</b><br />
For full mySQL-ouput during your upgrade, please leave this box checked. If you would like to minimize output, uncheck it:<br />
<input type="checkbox" name="mysql_outp" checked="checked" value="1" /> full mySQL-output<br />
<br /><br />
<input type="submit" value="upgrade" name="upgrade_now" onClick="upgrade_now.disabled=true; this.form.submit();" />
</form>
</body></html>
<?php
/*
 * starting with upgrade...
 */
} else {

/*
 * running from shell (php-cgi)
 * Set default values:
 */
if (defined('UPD_CGI')) {
	$full_upgrade = 1;
	if (isWritableDir(CFG_LOG_PATH)) $logs_outp    = 1;
	$mysql_outp   = 1;
}

/*
 * create logfile
 */
if (isset($logs_outp)) {
	$outp_file = CFG_LOG_PATH.'222_'.(date('YmdHis')).'.html';
	$outp_fp = fopen($outp_file, 'w');
}

/*
 * calculating total execution time
 */
$upd222_start = getmicrotime();

/*
 * remove orphaned tables (tables that don't belong to any existing user)
 */
pphl_outp("removing orphaned tables... ");
$usrIDs = getUseridArr();
$cnt_orphans = 0;
if ($usrIDs) {
	$sql = "SHOW TABLES LIKE '%_____\_logs'";
	$res = mysql_query($sql);
	while ($row = @mysql_fetch_array($res)) {
		if(eregi("([0-9]{5})",$row[0],$id_arr)) {
			$id = $id_arr[0];
			if (!isInArray($id,$usrIDs)) {
				$sql = "DROP TABLE IF EXISTS ".PPHL_DB_PREFIX_OLD.$id.$tbl_logs.", ".PPHL_DB_PREFIX_OLD.$id.$tbl_mpdl.", ".PPHL_DB_PREFIX_OLD.$id.$tbl_ipcheck;
				mysql_qry($sql, FALSE);
				$cnt_orphans++;
			}
		}
	}
}
pphl_outp("($cnt_orphans useraccounts removed!)".$br);

/*
 * load the updated pphlogger_domains table
 */
$sql = "DROP TABLE IF EXISTS ".PPHL_TBL_DOMAINS;
mysql_qry($sql);
exec_sql_lines(SQL_DOMAINS, 'pphl_domains', PPHL_TBL_DOMAINS);

/*
 * load new pphlogger_agents table
 */
exec_sql_lines(SQL_AGENTS, 'pphl_agents', PPHL_TBL_AGENTS);

/*
 * load new pphlogger_res table
 * (NOT YET USED IN 2.2.2 !!)
 */
// exec_sql_lines(SQL_RES, 'pphl_res', $tbl_res);

/*
 * pphlogger_users table updates
 */

/* Top dl-list: unite downloads on/off */
$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD dlunite TINYINT(1) DEFAULT '0' AFTER flags";
mysql_qry($sql);

/*
 * ENUM --> TINYINT conversation
 * in PPhlogger3 we're going to use the more standardized TINYINT instead
 * of ENUM. TINYINT(1) is used as a BOOL in this context.
 * (mySQL is missing the BOOL data type!)
 */
function EnumToTinyint($tbl, $column, $default = 1, $new_column = FALSE) {
	
	$new_def = "TINYINT(1) DEFAULT '".$default."'";
	
	$res=mysql_query('SHOW FIELDS FROM '.$tbl);
	while ($row = mysql_fetch_array($res)) {
		if($row['Field'] == $column) $def = $row['Type'];
	}
	if(stristr($new_def,$def)) {
		return FALSE; // break here, if table structure has been already upgraded
	}
	
	/* create a temporary column */
	$sql = "ALTER TABLE $tbl "
	     . "ADD ".$column."_tmp $new_def AFTER ".$column;
	mysql_qry($sql);
	/* move all data to the new temporary column */
	if ($default) $sql = "UPDATE $tbl SET ".$column."_tmp = 0 WHERE $column = 'N'";
	else          $sql = "UPDATE $tbl SET ".$column."_tmp = 1 WHERE $column = 'Y'";
	
	mysql_qry($sql);
	/* get rid of old column */
	$sql = "ALTER TABLE $tbl "
	     . "DROP ".$column;
	mysql_qry($sql);
	/* if new_column is not set, don't rename the column */
	if(!$new_column) $new_column = $column;
	/* move temporary column to it's original place */
	$sql = "ALTER TABLE $tbl "
	     . "CHANGE ".$column."_tmp ".$new_column." $new_def";
	mysql_qry($sql);
}

/* change all ENUM's to TINYINT's ! */
EnumToTinyint(PPHL_TBL_USERS,'admin',         0);
EnumToTinyint(PPHL_TBL_USERS,'visible',       1);
EnumToTinyint(PPHL_TBL_USERS,'demo',          0);
EnumToTinyint(PPHL_TBL_USERS,'flags',         1);
EnumToTinyint(PPHL_TBL_USERS,'dlunite',       0); // this is only needed for 2.2.2-CVS, where dlunite was already used in an early stage
EnumToTinyint(PPHL_TBL_USERS,'bg_trans',      0);
EnumToTinyint(PPHL_TBL_USERS,'conf',          0);
EnumToTinyint(PPHL_TBL_USERS,'del_usr',       0);
EnumToTinyint(PPHL_TBL_USERS,'kwspl',         0);


/*
 * pphlogger_css: convert css to cssid (INT) ----------------------------------------------------------------------------------------
 */
$sql = "ALTER TABLE ".PPHL_TBL_CSS." "
     . "DROP PRIMARY KEY, "                                       // DROP PRIMARY KEY (id, css)
     . "CHANGE id userid int(5) unsigned NOT NULL default '0', "  // id --> userid
      . "MODIFY css varchar(255) NOT NULL default '', "           // VARCHAR(60) --> VARCHAR(255)
      . "ADD id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY FIRST, "  // new CSS-id
      . "ADD UNIQUE css_ind (userid,css)";                        // UNIQUE KEY to avoid duplicates
mysql_qry($sql);

/* fix for CVS users, update iceage */
$sql = "UPDATE ".PPHL_TBL_CSS." SET color_3a = 'CCE6FF', color_1t = 'FFFFFF', color_1a = 'CCE6FF' WHERE css = 'iceage'";
mysql_query($sql);

/* new CSS: doggy, caits, iceage */
$sql = "INSERT INTO ".PPHL_TBL_CSS." VALUES (NULL, 0, 'doggy', 'FFFFFF', '000000', 'FFFFFF', 'FFFFFF', '006A35', 'FFFFFF', 'FFFFFF', '008040', 'FFFFFF', 'FFFFFF', '00974B', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF', '000000', 'FFFFFF', 'FFFFFF', 'FFFFFF', '00A85C', 'FFFFFF', 'FFFFFF', '006A35', '000000')";
mysql_qry($sql);
$sql = "INSERT INTO ".PPHL_TBL_CSS." VALUES (NULL, 0, 'caits', '000000', 'F0F0FF', '000000', '5f5f5f', 'E0E0E0', '000000', '000000', 'D0D0D0', '000000', '000000', 'F5F5F5', '222250', '6060FF', '6060FF', '222250', 'F0F0F0', '202020', 'F0F0F0', '202020', 'e8e8e8', '000000', '000000', 'F0F0F0', '000000')";
mysql_qry($sql);
$sql = "INSERT INTO ".PPHL_TBL_CSS." VALUES (NULL, 0, 'iceage', '000000', '6AA1D1', 'FFFFFF', 'CCE6FF', 'CCE6FF', '000000', '000000', '2078a8', 'FFFFFF', 'CCE6FF', '6098C8', '000000', '000000', '000000', '000000', 'AFDFFF', '000000', 'd0d0d0', '000000', 'eeeeff', '000000', 'FFFFFF', 'afdfff', '000000')";
mysql_qry($sql);
$sql = "INSERT INTO ".PPHL_TBL_CSS." VALUES (NULL, 0, 'xt-design', 'ff9900', '777777', '000000', 'ff9900', '434343', 'c0c0c0', 'ff9900', '2e2e2e', '6d6d6d', 'c0c0c0', '000000', 'ff9900', '0084ff', 'c0c0c0', '0084ff', 'ababab', '2e2e2e', 'FFFFCC', 'ff9900', '585858', '000000', 'ff9900', 'CCCCCC', 'navy')";
mysql_qry($sql);

$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD cssid INT UNSIGNED DEFAULT '0' NOT NULL AFTER css";
mysql_qry($sql);

$sql = "SELECT id, css FROM ".PPHL_TBL_USERS." WHERE cssid = 0";
$res = mysql_query($sql);
while ($row = @mysql_fetch_array($res)) {
	if (strstr($row['css'], '|')) {
		$css_arr  = explode('|',$row['css']);
		$this_css = $css_arr[0];
		$this_uid = $css_arr[1];
	} else {
		$this_css = $row['css'];
		$this_uid = 0;
	}
	$sql = "SELECT id FROM ".PPHL_TBL_CSS." WHERE userid = $this_uid AND css = '$this_css'";
	$res2 = mysql_query($sql);
	$this_cssid = mysql_result($res2,0,0);
	$sql = "UPDATE ".PPHL_TBL_USERS." SET cssid = $this_cssid WHERE id = ".$row['id']." AND css = '".$row['css']."'";
	mysql_qry($sql, FALSE);
}

$sql = "ALTER TABLE ".PPHL_TBL_USERS." DROP css";
mysql_qry($sql);


$sql = "SELECT value FROM ".PPHL_TBL_SETTINGS." WHERE setting = 'css'";
$res = mysql_query($sql);
$adm_css = @mysql_result($res,0,0);
if (strstr($adm_css, '|')) {
	$css_arr  = explode('|',$adm_css);
	$this_css = $css_arr[0];
	$this_uid = $css_arr[1];
} else {
	$this_css = $adm_css;
	$this_uid = 0;
}
$sql = "SELECT id FROM ".PPHL_TBL_CSS." WHERE userid = $this_uid AND css = '$this_css'";
$res2 = mysql_query($sql);
$this_cssid = @mysql_result($res2,0,0);
if(!$this_cssid) $this_cssid = 7;
$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET setting = 'cssid', value = '$this_cssid' WHERE setting = 'css'";
mysql_qry($sql, FALSE);

// fix for CVS-users
$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET type = 'css' WHERE setting = 'cssid'";
mysql_qry($sql, FALSE);


/* visible_style is deprecated */
$sql = "ALTER TABLE ".PPHL_TBL_USERS." DROP visible_style";
mysql_qry($sql);

/* referer blocking */
$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD refblock text AFTER ipblock";
mysql_qry($sql);

/* own referers */
$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD ownref text AFTER refblock";
mysql_qry($sql);

/* performance of admin2: create index */
$sql = "CREATE INDEX conf_del_usr ON ".PPHL_TBL_USERS." (conf,del_usr)";
mysql_qry($sql);

/* better timezone support */
$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "MODIFY gmt FLOAT DEFAULT '1' NOT NULL";
mysql_qry($sql);



/*
 * update user tables --------------------------------------------------------------------------------------------------------------
 */
$sql = "SELECT id,username,qstr,index_files FROM ".PPHL_TBL_USERS." ORDER BY id ASC";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	// get qstr and index_files for further use in pureURL()
	$qstr = (isset($row['qstr'])) ? $row['qstr'] : '';
	$index_files = (isset($row['index_files'])) ? $row['index_files'] : '';
	
	$this_tbl_mpdl    = PPHL_DB_PREFIX.$id.$tbl_mpdl;
	$this_tbl_ipcheck = PPHL_DB_PREFIX.$id.$tbl_ipcheck;
	$this_tbl_logs    = PPHL_DB_PREFIX.$id.$tbl_logs;
	
	// only perform this conversion if it hasn't been done yet!
	$sql = "SELECT * FROM ".PPHL_TBL_CACHE." WHERE id = $id AND type = 'upd_222'";
	$res2 = mysql_query($sql);
	if (!@mysql_num_rows($res2)) {
	
		/* start updating user table... */
		pphl_outp("[ upgrading $id - ".$row['username']." ... ]".$br);
		flush();
		
		/* performance of mpdl-table: create index */
		$sql = "CREATE INDEX type_hits ON $this_tbl_mpdl (type,hits)";
		mysql_qry($sql);
		
		/* this INDEX was missing in a couple of previous versions... */
		$sql = "CREATE INDEX tld_ind ON $this_tbl_logs (tld)";
		mysql_qry($sql);
		
		/* 'ok' was already dropped in 2.2.0 but was still remaining in tabledefinitions */
		$sql = "ALTER TABLE $this_tbl_logs DROP ok";
		@mysql_query($sql);
		
		/* AUTO_INCREMENT id used in new pphlogger3 DB structure */
		$sql = "ALTER TABLE $this_tbl_mpdl "
		     . "DROP PRIMARY KEY";
		mysql_qry($sql);
		$sql = "ALTER TABLE $this_tbl_mpdl "
		     . "MODIFY hits INT UNSIGNED DEFAULT '1' NOT NULL, "
		     . "ADD id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY FIRST, "
		     . "ADD enabled TINYINT(1) DEFAULT '1' AFTER id";
		mysql_qry($sql);
		
		/* pphl_xxxxx_logs
		 * new logid: AUTO_INCREMENT instead of uniqid()
		 */
		$sql = "ALTER TABLE $this_tbl_logs DROP logid";
		mysql_qry($sql);
		$sql = "ALTER TABLE $this_tbl_logs "
		     . "ADD logid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY FIRST";
		mysql_qry($sql);
		
		/* new userid: used in future pphlogger3 versions instead of pphlogger_userlog table */
		$sql = "ALTER TABLE $this_tbl_logs "
		     . "ADD userid INT(5) unsigned DEFAULT NULL AFTER logid";
		mysql_qry($sql);
		
		/* pphl_xxxxx_ipcheck
		 * new logid: AUTO_INCREMENT instead of uniqid()
		 */
		$sql = "ALTER TABLE $this_tbl_ipcheck DROP logid";
		mysql_qry($sql);
		$sql = "ALTER TABLE $this_tbl_ipcheck "
		     . "ADD logid INT UNSIGNED NOT NULL FIRST";
		mysql_qry($sql);
		$sql = "SELECT L.logid AS logid, I.ip AS ip, I.t_since as t_since "
		     . "FROM $this_tbl_logs AS L, $this_tbl_ipcheck AS I "
		     . "WHERE I.t_since = L.time AND I.ip = L.ip";
		$res2 = mysql_query($sql);
		while ($row2 = mysql_fetch_array($res2)) {
			$sql2 = "UPDATE $this_tbl_ipcheck "
			      . "SET logid = ".$row2['logid']." "
			      . "WHERE ip = '".$row2['ip']."' AND t_since = ".$row2['t_since'];
			mysql_qry($sql2, FALSE);
		}
		$sql = "ALTER TABLE $this_tbl_ipcheck "
		     . "ADD PRIMARY KEY (logid)";
		mysql_qry($sql);
		
		/*
		 * porting agent-strings over to the new pphlogger_agents table --------------------------------------------
		 */
		
		// add agentid
		$sql = "ALTER TABLE $this_tbl_logs "
		     . "ADD agentid INT UNSIGNED AFTER agent, "
		     . "ADD INDEX ind_agent(agent)"; // temporary adding index to increase speed in this upgrade script
		mysql_qry($sql);
		
		// move all agents to the pphlogger_agents table and update agentid
		$agent_convertion_start = getmicrotime();
		$sql = "SELECT agent,COUNT(agent) AS hits FROM $this_tbl_logs WHERE agent > '' AND agentid IS NULL "
		     . "GROUP BY agent ORDER BY hits DESC";
		$res2 = mysql_query($sql);
		pphl_outp("updating agent id's... ");
		while ($row2 = @mysql_fetch_array($res2)) {
			$agt_id = insert_agent(addslashes($row2['agent']), TRUE);
			$sql = "UPDATE $this_tbl_logs SET agentid = $agt_id WHERE agent = '".addslashes($row2['agent'])."'";
			//DEBUG: echo strip_tags($sql).'<br />';
			mysql_qry($sql, FALSE);
		}
		pphl_outp('('.(getmicrotime()-$agent_convertion_start).' seconds)'.$br);
		
		// remove deprecated rows
		$sql = "SELECT * FROM $this_tbl_logs WHERE agent > '' AND agentid IS NULL";
		$res2 = mysql_query($sql); // check if all agent-id's have been updated
		if (!@mysql_num_rows($res2)) {
			$sql = "ALTER TABLE $this_tbl_logs "
			     . "DROP agent, DROP browser, DROP version, DROP system";
			$res3 = mysql_qry($sql);
		}
		
		// add new INDEX
		$sql = "ALTER TABLE $this_tbl_logs "
		     . "ADD INDEX agt_ind(agentid)";
		mysql_qry($sql);
		
		/*
		 * change entrypoint (VARCHAR) to entryid (INT) in pphl_xxxxx_mpdl ------------------------------------------
		 */
		
		// add entryid
		$sql = "ALTER TABLE $this_tbl_logs "
		     . "ADD entryid INT UNSIGNED AFTER entrypoint, "
		     . "ADD INDEX ind_entrypoint(entrypoint)"; // temporary adding index to increase speed in this upgrade script
		mysql_qry($sql);
		
		// convert all entrypoints to entryid's
		$entrypoint_convertion_start = getmicrotime();
		$sql = "SELECT DISTINCT entrypoint FROM $this_tbl_logs WHERE entryid = 0 OR entryid IS NULL";
		$res2 = mysql_query($sql);
		pphl_outp("updating entrypoint id's... ");
		while ($row2 = @mysql_fetch_array($res2)) {
			$entryid_url = pureURL($row2['entrypoint']);
			$entryid = insert_mpdl($entryid_url, 'mp', $this_tbl_mpdl, '', FALSE, 0);
			$sql = "UPDATE $this_tbl_logs SET entryid = $entryid WHERE entrypoint = '".addslashes($row2['entrypoint'])."'";
			mysql_qry($sql, FALSE);
		}
		pphl_outp('('.(getmicrotime()-$entrypoint_convertion_start).' seconds)'.$br);
		
		// remove deprecated entrypoint row
		$sql = "SELECT * FROM $this_tbl_logs WHERE entrypoint > '' AND (entryid = 0 OR entryid IS NULL)";
		$res2 = mysql_query($sql); // check if all agent-id's have been updated
		if (!@mysql_num_rows($res2)) {
			$sql = "ALTER TABLE $this_tbl_logs "
			     . "DROP entrypoint";
			mysql_qry($sql);
		}
		
		/*
		 * change res VARCHAR(9) to resid INT -----------------------------------------------------------------------
		 */
		
		/*
		CREATE TABLE pphlogger_res (
		   id INT UNSIGNED AUTO_INCREMENT,
		   width INT UNSIGNED DEFAULT '0',
		   height INT UNSIGNED DEFAULT '0',
		   PRIMARY KEY (id),
		   UNIQUE KEY ind_res (width, height)
		);
		
		$sql = "ALTER TABLE $this_tbl_logs "
		     . "ADD resid INT UNSIGNED AFTER res";
		mysql_qry($sql);
		*/
		
		// add resid
		$sql = "ALTER TABLE $this_tbl_logs "
		     . "ADD res_h INT UNSIGNED DEFAULT '0' AFTER res, "
		     . "ADD res_w INT UNSIGNED DEFAULT '0' AFTER res, "
		     . "ADD INDEX res_ind(res_w,res_h), "
			 . "ADD INDEX res_old(res)";
		mysql_qry($sql);
		
		// convert all res to res_w/res_h
		$res_convertion_start = getmicrotime();
		$sql = "SELECT DISTINCT res FROM $this_tbl_logs";
		$res2 = mysql_query($sql);
		pphl_outp("updating res id's... ");
		while ($row2 = @mysql_fetch_array($res2)) {
			$res_arr = explode('x',$row2['res']);
			$w = (isset($res_arr[0])) ? (int) $res_arr[0] : 0;
			$h = (isset($res_arr[1])) ? (int) $res_arr[1] : 0;
			// $resid = insert_res($w,$h);
			// $sql = "UPDATE $this_tbl_logs SET resid = $resid WHERE res = '".$row2['res']."'";
			$sql = "UPDATE $this_tbl_logs SET res_w = $w, res_h = $h WHERE res = '".$row2['res']."'";
			mysql_qry($sql, FALSE);
		}
		pphl_outp('('.(getmicrotime()-$res_convertion_start).' seconds)'.$br);
		
		// remove deprecated res row
		$sql = "ALTER TABLE $this_tbl_logs DROP res";
		mysql_qry($sql);
		
		/*
		 * change path to ID-format in pphl_xxxxx_logs ----------------------------------------------------------------
		 */
		 
		// if [full upgrade] was unchecked, delete all old visitor paths before starting to convert the most recent ones
		if (!isset($full_upgrade)) {
			$sql = "SELECT time FROM $this_tbl_logs WHERE path > '' ORDER BY time DESC LIMIT $keep_paths,1";
			$res2 = mysql_query($sql);
			$delpath_from_time = @mysql_result($res2,0,'time');
			if ($delpath_from_time) {
				$sql = "UPDATE $this_tbl_logs SET path = NULL WHERE path >= '' AND time < $delpath_from_time";
				mysql_qry($sql);
			}
		}
		
		// load all mp's
		$mpArr = getMpArr_short($this_tbl_mpdl);
		
		/*
		 * SPEED-UP HACK for path extraction
		 * add the path_md5 column for temporary use as an index
		 */
		$sql = "ALTER TABLE $this_tbl_logs ADD path_md5 CHAR(32) AFTER path";
		mysql_qry($sql);
		$sql = "UPDATE $this_tbl_logs SET path_md5 = md5(path) WHERE path_md5 IS NULL";
		mysql_qry($sql);
		$sql = "ALTER TABLE $this_tbl_logs ADD INDEX ind_md5(path_md5)";
		mysql_qry($sql);
		
		
		// create a temporary column to store the new paths
		$sql = "ALTER TABLE $this_tbl_logs ADD path_tmp TEXT AFTER path";
		mysql_qry($sql);
		
		// convert all paths
		$path_convertion_start = getmicrotime();
		$sql = "SELECT DISTINCT path_md5, path FROM $this_tbl_logs WHERE path > '' AND path_tmp IS NULL";
		$res2 = mysql_query($sql);
		pphl_outp("updating path id's... ");
		while ($row2 = @mysql_fetch_array($res2)) {
			$old_path_md5 = $row2['path_md5'];
			$old_path = $row2['path'];
			$path_arr = explode('|',$old_path);
			$cnt_path_arr = count($path_arr);
			unset($path_ids);
			for ($i = 0; $i < $cnt_path_arr; $i++) {
				$mpArr_ind = addslashes(pureURL($path_arr[$i]));
				$path_ids[$i] = (isset($mpArr[$mpArr_ind])) ? $mpArr[$mpArr_ind] : 0;
			}
			$new_path = implode('|',$path_ids);
			$sql = "UPDATE $this_tbl_logs SET path_tmp = '$new_path' WHERE path_md5 = '".$old_path_md5."'";
			mysql_qry($sql, FALSE);
		}
		pphl_outp('('.(getmicrotime()-$path_convertion_start).' seconds)'.$br);
		
		// get rid of the old path column
		$sql = "ALTER TABLE $this_tbl_logs DROP path, DROP path_md5";
		mysql_qry($sql);
		
		
		/*
		 * mark this id as 'done' -------------------------------------------------------------------------------
		 */
		$sql = "INSERT INTO ".PPHL_TBL_CACHE." (id,type) VALUES ($id,'upd_222')";
		mysql_qry($sql, FALSE);
		
		/*
		 * OPTIMIZE user table ----------------------------------------------------------------------------------
		 */
		optimizeUsrTables($id);
	} // if (!@mysql_num_rows($res2))
	
	/* move temporary path column to it's original place */
	$sql = "ALTER TABLE $this_tbl_logs CHANGE path_tmp path TEXT";
	mysql_query($sql);
}

/* TTF-fonts absolute path setting */
$sql = "INSERT INTO ".PPHL_TBL_SETTINGS." VALUES ('ttf_location', 'C22', 'relative', 'text', 'If you\'re not able to see the counter image and you\'re using GD 2.x, try to set an absolute path to your ttf_fonts directory. Otherwise DO NOT CHANGE THIS! [relative|/your/absolute/path/to/ttf_fonts/]')";
mysql_qry($sql);

/* CFG_PHPEXT moved to main_location.inc */
$sql = "DELETE FROM ".PPHL_TBL_SETTINGS." WHERE setting = 'phpExt'";
mysql_qry($sql);

/* change all calendar-cache to the new serialized format */
$sql = "SELECT * FROM ".PPHL_TBL_CACHE." WHERE type IN ('log_day_mo','log_impr_day_mo')";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	// only convert to serialized data if this hasn't been done yet
	if (!@unserialize($row['cache'])) {
		$cache_arr = explode('|',$row['cache']);
		$cnt_cache = count($cache_arr);
		for ($i=0; $i<$cnt_cache; $i++) {
			if ($cache_arr[$i] == '') $cache_arr[$i] = 0;
		}
		$sCache = serialize($cache_arr);
		$ser_sql = "UPDATE ".PPHL_TBL_CACHE." SET cache='".$sCache."' WHERE id=".$row['id']." AND type='".$row['type']."' AND yyyymm=".$row['yyyymm'];
		mysql_qry($ser_sql, FALSE);
	}
}

/*
 * extract agent information
 */
$sql = "SELECT id,agent FROM ".PPHL_TBL_AGENTS." WHERE browser IS NULL";
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$new_agt = extract_agent($row['agent']);
	if (is_array($new_agt)) {
		$sql = "UPDATE ".PPHL_TBL_AGENTS." "
		     . "SET browser = '".$new_agt[0]."', version = ".$new_agt[1].", "
		     . "version_st = '".$new_agt[2]."', system = '".$new_agt[3]."' "
		     . "WHERE id = ".$row['id'];
		mysql_qry($sql, FALSE);
	}
}

/*
 * remove the unneccessary rows in pphl_settings 
 */
$sql = "ALTER TABLE ".PPHL_TBL_SETTINGS." "
     . "DROP cat, DROP description";
mysql_qry($sql);

$sql = "UPDATE ".PPHL_TBL_SETTINGS." SET type = 'mta' WHERE setting = 'mail_mod'";
mysql_qry($sql);

/*
 * set current version string
 */
$sql = "INSERT INTO ".PPHL_TBL_CACHE." (type,cache) VALUES ('curr_ver','2220')";
mysql_qry($sql, FALSE);

/*
 * OPTIMIZE user table
 */
optimizeAdmTables();


pphl_outp('[ total execution time: '.(getmicrotime()-$upd222_start).' seconds]', TRUE);
pphl_outp($br.$br."<b>Your upgrade to v.2.2.2 was successful!</b>", TRUE);
pphl_outp($br."Now, please run the next upgrade script: <a href=\"upd_2.2.2-2.2.2a.".CFG_PHPEXT."\">upd_2.2.2-2.2.2a.".CFG_PHPEXT."</a>", TRUE);
if (isset($logs_outp)) {
	fclose($outp_fp);
	echo $br."Please see the <a href=\"$outp_file\">upgrade log</a>.";
}
} // if(!isset($startupgrade))
?>