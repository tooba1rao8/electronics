<?php
include_once("../connection/connection.php");

$id=$_REQUEST['id'];
if(isset($_REQUEST['id']))
{
	$query= mysql_query("delete from employee where id='$id'");
	if($query)
	{
		header('location:employeeview.php');
		
		}
		else
		{
			echo "error in DEletion";
			}
	
	}
?>