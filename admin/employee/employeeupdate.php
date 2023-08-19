<?php
include_once("../connection/connection.php");

$id=$_REQUEST['id'];
if(isset($_REQUEST['id']))
{	
$query=mysql_query("select * from employee where id='$id'");
$row=mysql_fetch_object($query);
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
	 padding-top:20px;
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
<h2>Update Employees</h2>
</div>
<center>
<div style="width:auto; height:auto; margin-top:20px; position:absolute; margin-left:32%">

<form method="post" action="up.php">

<input type="hidden" value="<?php echo $row->id; ?>" name="id">
<table>
<tr>
	<td><span>Joining Date</span></td>
	<td><input type="date" name="dat" value=" <?php echo $row->joindate; ?>" id="pcode" required></td>
</tr>
<tr>
	<td><span>CNIC</span></td>
	<td><input type="text" name="cnic" value=" <?php echo $row->cnic; ?>" id="pcode" required></td>
</tr>
<tr>

	<td><span>Name</span></td>
	<td><input type="text" name="name"  value=" <?php echo $row->name; ?>" id="pcode" required></td>

</tr>
<tr>
	<td><span>Contact</span></td>
	<td><input type="text" name="contact"  value=" <?php echo $row->contact; ?>" id="pcode"  required></td>
</tr>

<tr>
	<td><span>Designation</span></td>
	<td><input type="text" name="desig"  value=" <?php echo $row->desig; ?>" id="pcode" required></td>
</tr>
<tr>

	<td><span>Salary</span></td>
	<td><input type="text" name="salary"  value=" <?php echo $row->salary; ?>" id="pcode" required></td>
</tr>

<tr>

	<td></td>
	<td><input type="submit" value="Update" style="width:100px;height:50px; color:#FFF; background-color:#333; border-radius:7px"  >
    <a href="employeeview.php"><input type="button" value="cancel" style="width:100px;
    height:50px; color:#FFF; background-color:#333; border-radius:7px; margin-left:10px"></a></td>
</tr>

</table>
</form>
</div></center>
</body>
</html>