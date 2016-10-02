<?php
 /* ---------------------------------------------------------
    Power Phlogger  (c)2000-2003 Philip Iezzi
    $Id: load_sql.lib.php,v 1.6 2003/06/19 20:42:39 cvs_iezzi Exp $
    
    load_sql.php - function library used to load sql files
    
    ---------------------------------------------------
    complete rewrite in PowerPhlogger 2.1.4d
    ported from phpMyAdmin 2.2.0rc1 [www.phpwizard.net]
    --------------------------------------------------------- */



/*--------------------------------------------------
  remove_remarks()
  Remove # type remarks from large sql files
  --------------------------------------------------*/
function remove_remarks($sql) {
	$i = 0;
	while ($i < strlen($sql)) {
		if ($sql[$i] == "#" and ($i==0 or $sql[$i-1] == "\n")) { 
			$j=1;
			while ($sql[$i+$j] != "\n") {
				$j++;
				if ($j+$i > strlen($sql)) break;
			}
			$sql = substr($sql,0,$i) . substr($sql,$i+$j);
		}
		$i++;
	}
	return($sql);
}

/*--------------------------------------------------
  split_sql_file()
  Split up a large sql file into individual queries
  --------------------------------------------------*/
function split_sql_file($sql, $delimiter) {
	$sql = trim($sql);
	$char = "";
	$last_char = "";
	$ret = array();
	$in_string = true;
	for($i=0; $i<strlen($sql); $i++) {
		$char = $sql[$i];
		
		/* if delimiter found, add the parsed part to the returned array */
		if($char == $delimiter && !$in_string) {
			$ret[] = substr($sql, 0, $i);
			$sql = substr($sql, $i + 1);
			$i = 0;
			$last_char = "";
		}
		
		if($last_char == $in_string && $char == ")")  $in_string = false;
		if($char == $in_string && $last_char != "\\") $in_string = false;
		elseif(!$in_string && ($char == "\"" || $char == "'") && ($last_char != "\\")) $in_string = $char;
		$last_char = $char;
	}
	
	if (!empty($sql)) $ret[] = $sql;
	return($ret);
}




/*--------------------------------------------------
  exec_sql_lines()
  takes a file and executes all its sql-queries
  uses remove_remark() and split_sql_file()
  --------------------------------------------------*/
function exec_sql_lines($sql_file, $old_string = '', $new_string = '') {
	global $connected;
	$sql_query = isset($sql_query) ? $sql_query : "";
	
	if(!empty($sql_file) && $sql_file != "none") {
		$sql_query = fread(fopen($sql_file, "r"), filesize($sql_file));
		/* If magic_quotes_runtime is enabled, most functions that return data from any sort of external source 
		   including databases and text files will have quotes escaped with a backslash.
		*/
		if (get_magic_quotes_runtime() == 1) $sql_query = stripslashes($sql_query);
		/* replace old_string with new_string if they are set */
		if($old_string != '') {
			$sql_query = preg_replace('/'.$old_string.'/',$new_string,$sql_query);
		}
	}
	$sql_query = trim($sql_query);
	
	if($sql_query != "") {
		$sql_query   = remove_remarks($sql_query);
		$pieces      = split_sql_file($sql_query,";");
		$cnt_pieces  = count($pieces);
		/* run multiple queries */
		for ($i=0; $i<$cnt_pieces; $i++) {
			$sql = trim($pieces[$i]);
			if (!empty($sql) and $sql[0] != "#") $result = mysqli_query($connected,$sql);
		}
	}
	return true;
}
?>