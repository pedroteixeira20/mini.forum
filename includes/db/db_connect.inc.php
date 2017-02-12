<?php
$username = "admin";
$password = "ciber0987";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
$db_selected = mysql_select_db("forum", $dbhandle);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>