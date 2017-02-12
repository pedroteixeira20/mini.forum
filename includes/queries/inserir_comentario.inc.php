<?php

if ((isset($_POST['com_name'])) && (isset($_POST['com_email'])) && (isset($_POST['comment'])))
{
	$com_name = $_POST['com_name'];
	$com_email = $_POST['com_email'];
	$comment = $_POST['comment'];

$ic_SQL = "INSERT INTO comment (comment_name, comment_email, comment) VALUES ('$com_name', '$com_email', '$comment')";
$result = mysql_query($ic_SQL) or die(mysql_error());
	
header('Location: index.php');

}

?>