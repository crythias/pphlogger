<?php
// $Id: db_dump_lib.php,v 1.3 2002/01/03 17:24:56 cvs_iezzi Exp $

$myfooter = "</td>\n</tr>\n</table>\n</body>\n</html>";

// Return $table's CREATE definition
// Returns a string containing the CREATE statement on success
function get_table_def($table, $crlf)
{
    global $drop, $connected;

    $schema_create = "";
    if(!empty($drop))
        $schema_create .= "DROP TABLE IF EXISTS $table;$crlf";

    $schema_create .= "CREATE TABLE $table ($crlf";

    $result = mysqli_query($connected,"SHOW FIELDS FROM $table") or mysql_die();
    while($row = mysqli_fetch_array($result))
    {
        $schema_create .= "   $row[Field] $row[Type]";

        if(isset($row["Default"]) && (!empty($row["Default"]) || $row["Default"] == "0"))
            $schema_create .= " DEFAULT '$row[Default]'";
        if($row["Null"] != "YES")
            $schema_create .= " NOT NULL";
        if($row["Extra"] != "")
            $schema_create .= " $row[Extra]";
        $schema_create .= ",$crlf";
    }
    $schema_create = preg_replace("/,".$crlf."$/", "", $schema_create);
    $result = mysqli_query($connected,"SHOW KEYS FROM $table") or mysql_die();
    while($row = mysqli_fetch_array($result))
    {
        $kname=$row['Key_name'];
        if(($kname != "PRIMARY") && ($row['Non_unique'] == 0))
            $kname="UNIQUE|$kname";
         if(!isset($index[$kname]))
             $index[$kname] = array();
         $index[$kname][] = $row['Column_name'];
    }

    while(list($x, $columns) = @each($index))
    {
         $schema_create .= ",$crlf";
         if($x == "PRIMARY")
             $schema_create .= "   PRIMARY KEY (" . implode($columns, ", ") . ")";
         elseif (substr($x,0,6) == "UNIQUE")
            $schema_create .= "   UNIQUE ".substr($x,7)." (" . implode($columns, ", ") . ")";
         else
            $schema_create .= "   KEY $x (" . implode($columns, ", ") . ")";
    }

    $schema_create .= "$crlf)";
    return (stripslashes($schema_create));
}

// Get the content of $table as a series of INSERT statements.
function get_table_content($table, $handler, $where)
{
    $result = mysqli_query($connected,"SELECT * FROM $table $where") or mysql_die();
    $i = 0;
    while($row = mysqli_fetch_row($result))
    {
        //set_time_limit(60); // HaRa - DISABLED BY PHILIPPO
        $table_list = "(";

        for($j=0; $j<mysqli_num_fields($connected,$result);$j++)
            $table_list .= mysqli_field_name($result,$j).", ";

        $table_list = substr($table_list,0,-2);
        $table_list .= ")";

        if(isset($GLOBALS["showcolumns"]))
            $schema_insert = "INSERT INTO $table $table_list VALUES (";
        else
            $schema_insert = "INSERT INTO $table VALUES (";

        for($j=0; $j<mysqli_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= " NULL,";
            elseif($row[$j] != "")
                $schema_insert .= " '".addslashes($row[$j])."',";
            else
                $schema_insert .= " '',";
        }
        $schema_insert = preg_replace("/,$/", "", $schema_insert);
        $schema_insert .= ")";
        $handler(trim($schema_insert));
		$i++;
    }
    return (true);
}


function mysql_die($error = "")
{
    global $strError,$strSQLQuery, $strMySQLSaid, $strBack, $sql_query;

    echo "<b> $strError </b><p>";
    if(isset($sql_query) && !empty($sql_query))
    {
        echo "$strSQLQuery: <pre>$sql_query</pre><p>";
    }
    if(empty($error))
        echo $strMySQLSaid.mysql_error();
    else
        echo $strMySQLSaid.$error;
    echo "<br /><a href=\"javascript:history.go(-1)\">$strBack</a>";
	echo $myfooter;
    exit;
}


?>