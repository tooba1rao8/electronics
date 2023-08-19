
<?php
include_once("admin/connection/connection.php");
	$status="pending";
	$pcod=$_POST['pcod'];
		$pcom=$_POST['pcom'];
		$pnam=$_POST['pnam'];
		$pp=$_POST['pp'];
		$sp=$_POST['sp'];
		$img=$_POST['img'];
		
		$nam=$_POST['nam'];
		$email=$_POST['email'];
		$cont=$_POST['cont'];
		$address=$_POST['address'];
$quer=mysql_query("insert into sales values('','$pcod','$pcom','$pnam','$pp','$sp','$nam','$email','$cont','$address','$img','$status')");
		if($quer)
		{
			header('location:productconfirmation.php');
			}
		else
		{
			echo "error in insertion";
			}

?>