<?php
// $Id: db_dump.php,v 1.10 2002/10/02 22:00:02 cvs_iezzi Exp $

define('PPHL_SCRIPT_PATH' , '../');
include PPHL_SCRIPT_PATH."main_location.inc";
include INC_GETUSERDATA;
include INC_HEADSTUFF;
include MOD_DBDUMPLIB;


@set_time_limit(600);
$crlf="\n";
if(empty($asfile))
{
	?>
<html>
<head>
<title>Power Phlogger mySQL-dump</title>
<META HTTP-EQUIV="Expires" CONTENT="Fri, Jun 12 1981 08:20:00 GMT">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
</head>
<body bgcolor="#F5F5F5" text="#000000">
	<?php
    echo "<div align=left><pre>\n";
} 
else 
{
    header("Content-disposition: filename=$id.sql");
    header("Content-type: application/octetstream");
    header("Pragma: no-cache");
    header("Expires: 0");
}

function my_handler($sql_insert)
{
    global $crlf, $asfile;
    
    if(empty($asfile)) 
    {
        echo htmlspecialchars("$sql_insert;$crlf");
    }
    else
    {
        echo "$sql_insert;$crlf";
    }
}

$tables = mysqli_list_tables(PPHL_DB_NAME);

$num_tables = @mysqli_numrows($tables);

$i = 0;
print "# PPhlogger ".PPHLOGGER_VERSION." MySQL-Dump".CRLF_C;
print "# $pphlogger_location".CRLF_C;
print "#".CRLF_C;
print "# Host: ".PPHL_DB_HOST." Database: ".PPHL_DB_NAME.CRLF_C;

while($i < $num_tables)
{ 
	$table = mysqli_tablename($connected,$tables, $i);

	if (strstr($table,$id)) {
		print $crlf;
		print "# --------------------------------------------------------".CRLF_C;
		print "#".CRLF_C;
		print "# Table structure for table '$table'".CRLF_C;
		print "#".CRLF_C.CRLF_C;
	
		echo get_table_def($table, $crlf).";".CRLF_C.CRLF_C;
	        
		if($what == "data") {
			print "#".CRLF_C;
			print "# Dumping data for table '$table'".CRLF_C;
			print "#".CRLF_C.CRLF_C;
	        
			get_table_content($table, "my_handler", "");
		}
	}
	
	$i++;
}


if(empty($asfile))
{
    print "</pre></div>\n";
    echo $myfooter;
}

?>
