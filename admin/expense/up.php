<?php
include_once("../connection/connection.php");
$ei=$_POST['ei'];
$eid=$_POST['eid'];
$dat=$_POST['dat'];
$ename=$_POST['ename'];
$des=$_POST['des'];
$amount=$_POST['amount'];


$sql="UPDATE expense SET eid='$eid',edate='$dat',ename='$ename',description='$des',amount='$amount' WHERE eid='$ei'";
					$sq=mysql_query($sql);					
					if($sq)
					{
					
					header('location:expenseview.php');
					
					}
					else
					{
						echo "error";
						}
?>