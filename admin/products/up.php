<?php
include_once("../connection/connection.php");

$pid=$_POST['pid'];
$dat=$_POST['dat'];
$pcod=$_POST['pcode'];
$pcom=$_POST['pcom'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$sprice=$_POST['sprice'];

$sql="UPDATE products SET entrydate='$dat', pcode='$pcod', pcompany='$pcom', pname='$pname', purprice='$pprice', saleprice='$sprice' WHERE pid='$pid'";
					$sq=mysql_query($sql);					
					if($sq)
					{
					
					header('location:productview.php');
					
					}
					else
					{
						echo "error";
						}
?>