<?php

include_once "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$date=date('d-m-y');

$query="insert into emails values('','$date','$name','$email','$message')";
$result=mysql_query($query);
if($result)
{
	header('location:contact2.php');
	
	}

?>