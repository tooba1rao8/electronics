<?php
include_once("../connection/connection.php");

    $id=$_POST['id'];
    $date=$_POST['dat'];
	$cnic=$_POST['cnic'];
	$name=$_POST['name'];
	$contact=$_POST['contact'];	
	$desig=$_POST['desig'];
	$salary=$_POST['salary'];

$query="UPDATE employee SET joindate='$date', cnic='$cnic', name='$name', contact='$contact', desig='$desig', salary='$salary' WHERE id='$id'";
					$result=mysql_query($query);					
					if($result)
					{
					
					header('location:employeeview.php');
					
					}
					else
					{
						echo "error in Updation";
						}
?>