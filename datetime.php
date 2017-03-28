<?php
$host = "localhost"; 
$dbname = "food"; 
$dbuser = "coleman"; 
$dbpass = "redhat"; 
$connection = mysql_connect($host, $dbuser, $dbpass) or die("Could not connect to database server"); 
mysql_select_db($dbname, $connection) or die("Could not select database"); 

$result = mysql_query ("SELECT CURDATE();", $connection);
	$row = mysql_fetch_row($result);$date = $row[0];
   
	$result = mysql_query ("SELECT CURTIME();", $connection);
	$row = mysql_fetch_row($result);$time = $row[0];
echo "$date $time <br>"; 
?>




