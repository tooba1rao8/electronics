<?php  session_start();

if(isset($_SESSION['email']))
{
  
session_destroy();

header('Location: cuslogin.php');


}

else{
	
	header('Location: index.php');
	
	
	}

   ?>