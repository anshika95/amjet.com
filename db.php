<?php
$hostname = "localhost";
$username = "root";
$password = "";
 
//connection to the mysql
$con = mysql_connect($hostname, $username, $password) ;
if (!$con){ die('Could not connect: '. mysql_error());}
//echo "</h6>Connected to MySQL<br>";

//connection to the database
$dbName="airways";
$db = @mysql_select_db($dbName,$con) or die(mysql_error());
//echo "Connected to database<br></h6>";
?>