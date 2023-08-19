<?php
include_once("../connection/connection.php");
if(isset($_POST['add']))

{
	
	$date=$_POST['dat'];
	$cnic=$_POST['cnic'];
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	
	$desig=$_POST['desig'];
	$salary=$_POST['salary'];
	
		
		
	
	
	$query=mysql_query("insert into employee values('','$date','$cnic','$name','$contact','$desig','$salary')");
	
	if($query)
	{
	header('location:employeeview.php');
		
		}
		
		else
		{
			echo "<h1>"."CNIC Already Exists"."</h1>";
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
<h2>Add Employees</h2>
</div>
<center>
<div style="width:auto; height:auto; margin-top:5px; position:absolute; margin-left:32%">
<form method="post" action="employeeadd.php">
<table>
<tr>
	<td><span>Joining Date</span></td>
	<td><input type="date" name="dat" id="pcode" required></td>
</tr>
<tr>
	<td><span>CNIC</span></td>
	<td><input type="text" name="cnic" id="pcode" required></td>
</tr>
<tr>

	<td><span>Name</span></td>
	<td><input type="text" name="name" id="pcode" required></td>

</tr>
<tr>
	<td><span>Contact No.</span></td>
	<td><input type="text" name="contact" id="pcode"  required></td>

<tr>
	<td><span>Designation</span></td>
	<td><input type="text" name="desig" id="pcode" required></td>
</tr>
<tr>

	<td><span>Salary</span></td>
	<td><input type="text" name="salary" id="pcode" required></td>
</tr>

<tr>

	<td></td>
	<td><input type="submit" value="Add" style="width:100px;height:50px; color:#FFF; background-color:#333; border-radius:7px; cursor:pointer;" name="add" >
    <a href="employeemain.php"><input type="button" value="Cancel" style="width:100px;
    height:50px; color:#FFF; background-color:#333; border-radius:7px; margin-left:10px;cursor:pointer;"></a></td>
</tr>

</table>
</form>
</div></center>
</body>
</html>