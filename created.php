<?php

include_once "connection.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$date=date('d-m-y');

$query="insert into customers values('','$date','$name','$phone','$address','$email','$pass')";
$result=mysql_query($query);
if($result)
{
	header('location:acountcreated.php');
	
	}
	
else{
	?>
	
	
	<div id="create">

<h1>Invalid Email</h1>
<h1>Email already Registered</h1>


</div>
	
	<?php
	}	

?>