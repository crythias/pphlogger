<?php
/*  --------------------------------------------------------------------
    upd_2.1.4d-2.2.0.php
    $Id: upd_2.1.4d-2.2.0.php,v 1.37 2003/08/18 19:15:10 cvs_iezzi Exp $
    
    Just use this file if you update Power Phlogger
    from version 2.1.4d to 2.2.0
    --------------------------------------------------------------------
*/

@set_time_limit(0);
define('PPHL_DB_LOCK', FALSE);
define('NO_SESS', 1);
define('PPHL_SCRIPT_PATH', '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include LIB_LOADSQL;

/* In v. 2.2.0 we start to work with standard GMT time... */
function convert_to_GMT($tbl,$column,$gmt,$upd_special = '') {
	
	$gmt = (int)$gmt;
	$new_def = "int(10) UNSIGNED NOT NULL";
	
	$res=mysql_query('SHOW FIELDS FROM '.$tbl);
	while ($row = mysql_fetch_array($res)) {
		if($row['Field'] == $column) $def = $row['Type'];
	}
	// break here, if table structure has been already upgraded
	if(stristr($new_def,$def)) {
		echo "$tbl.$column has been already upgraded!".BR;
		return false;
	}
	
	/* create a temporary time column */
	$sql = "ALTER TABLE $tbl "
	     . "ADD ".$column."_tmp $new_def AFTER ".$column;
	mysql_qry($sql);
	/* move all data from time to time_tmp and convert it to gmt UNIX-time */
	$sql = "UPDATE $tbl "
	     . "SET ".$column."_tmp = UNIX_TIMESTAMP(".$column.")-(".$gmt."*3600)";
		 if($upd_special > '') $sql .= ','.$upd_special;
	mysql_qry($sql);
	/* get rid of column time */
	$sql = "ALTER TABLE $tbl "
	     . "drop ".$column;
	mysql_qry($sql);
	/* move time_tmp to time */
	$sql = "ALTER TABLE $tbl "
	     . "CHANGE ".$column."_tmp ".$column." $new_def";
	mysql_qry($sql);
}


/* load the updated pphlogger_domains table */
$sql = "DROP TABLE IF EXISTS ".PPHL_TBL_DOMAINS;
mysql_qry($sql);
exec_sql_lines(SQL_DOMAINS, 'pphl_domains', PPHL_TBL_DOMAINS);

/* convert timestamps to GMT UNIX-timestamp */
convert_to_GMT(PPHL_TBL_USERS,'last_access',$server_GMT);
convert_to_GMT(PPHL_TBL_USERS,'date_start',0);
convert_to_GMT(PPHL_TBL_USERLOG,'t_reload',$server_GMT,'t_since=t_since');
convert_to_GMT(PPHL_TBL_USERLOG,'t_since',$server_GMT);

/* changed language codes: ge->de, sp->es */
$sql = "UPDATE ".PPHL_TBL_USERS." SET lang = 'de' WHERE lang = 'ge'";
mysql_qry($sql);
$sql = "UPDATE ".PPHL_TBL_USERS." SET lang = 'es' WHERE lang = 'sp'";
mysql_qry($sql);

/* css styles no longer refer to files, so we don't use the file-extensions anymore... */
$sql = "UPDATE ".PPHL_TBL_USERS." SET css = TRIM(TRAILING '.css' FROM css)";
mysql_qry($sql);
$sql = "UPDATE ".PPHL_TBL_USERS." SET css='iceage' WHERE css NOT IN ('cartesia','lila','phloggstyle','phpeestyle','pink','sahara','metal','iceage')";
mysql_qry($sql);

$sql = "ALTER TABLE ".PPHL_TBL_USERS." "
     . "ADD limh_p int(6) unsigned DEFAULT '500' NOT NULL AFTER limh,"
	 . "ADD limd_p int(3) unsigned DEFAULT '0' NOT NULL AFTER limd,"
     . "ADD index_files text AFTER ipblock,"
	 . "ADD qstr text AFTER ipblock,"
	 . "ADD access_diff int(5) unsigned NOT NULL AFTER last_access,"
     . "ADD flags enum('Y','N') DEFAULT 'Y' NOT NULL AFTER demo,"
     . "ADD stats_cache int(7) unsigned DEFAULT '900' NOT NULL AFTER loglim,"
	 . "ADD tblsize int(11) unsigned DEFAULT '0' NOT NULL,"
	 . "CHANGE css css varchar(30) DEFAULT 'metal' NOT NULL";
mysql_qry($sql);

/* convert the pphlogger_cache table to the new format */
convert_to_GMT(PPHL_TBL_CACHE,'time',$server_GMT);
$sql = "ALTER TABLE ".PPHL_TBL_CACHE." "
     . "ADD yyyymm int(6) unsigned DEFAULT '0' NOT NULL AFTER type,"
	 . "CHANGE id id int(5) unsigned DEFAULT '0' NOT NULL";
mysql_qry($sql);

/* load the new pphlogger_css table */
$sql = "DROP TABLE IF EXISTS ".PPHL_TBL_CSS;
mysql_qry($sql);
exec_sql_lines(SQL_CSS, 'pphl_css', PPHL_TBL_CSS);

/* update the userlog table */
$sql = "ALTER TABLE ".PPHL_TBL_USERLOG." ADD hostname varchar(150) NOT NULL AFTER ip";
mysql_qry($sql);

/* update logs table */
$sql = "SELECT id,username,gmt,your_url FROM ".PPHL_TBL_USERS;
$res = mysql_query($sql);
while ($row = mysql_fetch_array($res)) {
	$id = $row['id'];
	echo "upgrading <b>$id - ".$row['username']." ...</b>".$br;
	flush();
	$this_tbl_logs    = PPHL_DB_PREFIX.$id.$tbl_logs;
	$this_tbl_ipcheck = PPHL_DB_PREFIX.$id.$tbl_ipcheck;
	$this_tbl_mpdl    = PPHL_DB_PREFIX.$id.$tbl_mpdl;
	
	/* we need some more columns for additional data... */
	$sql = "ALTER TABLE $this_tbl_logs "
	     . "ADD path blob AFTER entrypoint,"
		 . "ADD proxy varchar(255) NOT NULL,"
		 . "ADD proxy_ip varchar(15) NOT NULL,"
		 . "ADD proxy_hostname varchar(150) NOT NULL,"
		 . "DROP ok";
	mysql_qry($sql);
	
	$this_gmt = $row['gmt'];
	convert_to_GMT($this_tbl_logs,'time',$this_gmt);
	convert_to_GMT($this_tbl_mpdl,'since',$this_gmt);
	convert_to_GMT($this_tbl_ipcheck,'t_reload',$this_gmt);
	convert_to_GMT($this_tbl_ipcheck,'t_since',$this_gmt);
	
	/* change mpdl table for new title string - [2.2.0-rc2 > 2.2.0]
	 * fix: PRIMARY KEY now spans over type & url !!!
	 */
	$sql = "ALTER TABLE $this_tbl_mpdl "
	     . "ADD title varchar(255),"
		 . "DROP PRIMARY KEY,"
		 . "ADD PRIMARY KEY (type,url)";
	mysql_qry($sql);
	
	/* extend all URLs in the usersettings by a 'http://' */
	$urls = explode("\n",trim($row['your_url']));
	for ($i = 0; $i < count($urls); $i++) { $urls[$i] = addHTTP(trim($urls[$i])); }
	$sql = "UPDATE ".PPHL_TBL_USERS." SET your_url='".implode("\n",$urls)."' WHERE id=$id";
	mysql_qry($sql);
	
	
	/* import the old cache-data for the calendar */
	$sql = "SELECT type,cache,time FROM ".PPHL_TBL_CACHE." WHERE id=$id AND yyyymm=0";
	$res_cache = mysql_query($sql);
	while ($row_cache = mysql_fetch_array($res_cache)) {
		$cache_arr = explode("\n",$row_cache['cache']);
		for ($i=0; $i < count($cache_arr); $i++) {
			$yyyymm = substr($cache_arr[$i],0,6);
			$cache  = substr($cache_arr[$i],7);
			$sql_n = "INSERT INTO ".PPHL_TBL_CACHE." (id,type,yyyymm,cache,time) "
			       . "VALUES ($id,'".$row_cache['type']."',$yyyymm,'$cache',".$row_cache['time'].")";
			mysql_query($sql_n);
		}
	}
	/* remove the user's old cache-data */
	$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE yyyymm=0 AND id=$id";
	mysql_query($sql);
}

/* remove all old cache-data or messed up data in the cache table */
$sql = "DELETE FROM ".PPHL_TBL_CACHE." WHERE yyyymm=0";
mysql_qry($sql);
$sql = "ALTER TABLE ".PPHL_TBL_CACHE." ADD PRIMARY KEY (id,type,yyyymm)";
mysql_qry($sql);


echo $br."<b>Your upgrade to v.2.2.0 was successful!</b>";
echo $br."Now, please run the next upgrade script: <a href='upd_2.2.0-2.2.1.".CFG_PHPEXT."'>upd_2.2.0-2.2.1.".CFG_PHPEXT."</a>";
?>