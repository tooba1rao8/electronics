<?php
include_once("../connection/connection.php");
$pid=$_REQUEST['pid'];
if(isset($_REQUEST['pid']))
{
	$query= mysql_query("delete from products where pid='$pid'");
	if($query)
	{
		header('location:productview.php');
		
		}
		else
		{
			echo "error";
			}
	
	}
?>