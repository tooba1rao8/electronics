<?php
include_once("../connection/connection.php");
if(isset($_POST['add']))

{
	
	$date=$_POST['dat'];
	$ename=$_POST['ename'];
	$des=$_POST['des'];
	
	$amount=$_POST['amount'];

	$query=mysql_query("insert into expense values('','$date','$ename','$des','$amount')");
	
	if($query)
	{
	header('location:expenseview.php');
		
		}
		else
		{
			echo "error";
			}
	
	
}
?>
<html>
<head>

<title>Online Shopping</title>
<style>
body{margin:0 auto;}


 h2{
	 text-align:center;
	 color:#FFF;
	 font-size:50px;
	 padding-top:30px;
	 }
	 
span{
	
font-size:24px;
color:#333;

	}
#pcode{
	width:300px;
	height:40px;
	font-size:20px
	}
table
{
	margin-top:50px;
	height:500px;
	border:3px solid #333;
border-radius:7px;
	}
	 </style>
</head>

<body background="../../img/bg.jpg">
<div style="width:100%; height:100px; background-color:#333">
<h2>Add Products</h2>
</div>
<center>
<div style="width:auto; height:auto; margin-top:5px; position:absolute; margin-left:32%">
<form action="expenseadd.php" method="post" >
<table>

	<td><span>Entry Date</span></td>
	<td><input type="date" name="dat" id="pcode" required></td>
	
</tr>
<tr>

	<td><span>Expense Name</span></td>
	<td><input type="text" name="ename" id="pcode" required></td>

</tr>
<tr>
	<td><span>Description</span></td>
	<td><input type="text" name="des" id="pcode"  required></td>

<tr>
	<td><span>Amount</span></td>
	<td><input type="text" name="amount" id="pcode" required></td>
</tr>

<tr>

	<td></td>
	<td><input type="submit" value="Add" style="width:100px;height:50px; color:#FFF; background-color:#333; border-radius:7px" name="add" >
    <a href="expensemain.php"><input type="button" value="cancel" style="width:100px;
    height:50px; color:#FFF; background-color:#333; border-radius:7px; margin-left:10px"></a></td>
</tr>

</table>
</form>
</div></center>
</body>
</html>