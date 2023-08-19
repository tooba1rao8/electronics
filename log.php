<?php session_start();
	
include_once("connection.php");

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$query=mysql_query("select * from user where uname='$uname' AND pass='$pass' ");
if($row=mysql_fetch_array($query))

{
	$_SESSION['uname']=$uname;
	
	header ('location:admin/welcome.php');
	
}



else
{

?>


	
<div id="header"> 

 <?php
 include_once "header.php";
 ?>

 </div>

<style>
#nofound{width:100%;
height:195px;
color:#000;
	}

#nofound h1{padding-top:20px;
margin-top:150px;
}


</style>

<div id="nofound">

<center>
<h1> 

Incorrect Username or Password
</h1>
</center>

</div>

<div id="footer"> 
 
 <?php
 include_once('footer.php');
 
}

?>


 </div>