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
color:#FFF;

	}
#pcode{
	width:300px;
	height:40px;
	font-size:20px
	}
table
{
	border:2px solid #FFF;
	border-radius:8px;
	color:#FFF;
	font-size:20px;
	text-align:center;
	
	}
	 </style>
</head>

<body background="../../img/bg.jpg">
<div style="width:100%; height:100px; background-color:#333">
<h2>View Employees</h2>
</div>
<a href="employeemain.php"><input type="button" value="Go Back" style="width:150px; height:40px; background-color:#333; color:#FFF; float:left; border-radius:8px; margin-top:20px; cursor:pointer;"></a>
<center>
<div style="width:auto; cursor:pointer; height:auto; margin-top:20px; background-color:#333;border-radius:8px; position:absolute; margin-left:12%">

<table border="1">
<tr>
	<th>ID</th>
    <th>Joining Date</th>
    <th>CNIC</th>
    <th>Name</th>
    
    <th>Contact</th>
    <th>Designation</th>
    <th>Salary</th>
    
    <th colspan="2">Action</th>
   </tr>
  <?php
 include_once("../connection/connection.php");
 $query=mysql_query("select * from employee ORDER By id DESC");
 while($row=mysql_fetch_object($query))
 {
	 echo "
	 <tr>
	 	<td>$row->id</td>
		<td>$row->joindate</td>
		<td>$row->cnic</td>
		
		<td>$row->name</td>
		
		<td>$row->contact</td>
		<td>$row->desig</td>
		<td>$row->salary</td>

		
		<td><a href='employeeupdate.php?id=$row->id' style='color:red;'>Edit</td>
		<td><a href='employeedel.php?id=$row->id' style='color:red;'>Delete</td></td>
		</tr>
	 
	 
	 
	 </tr>
	 
	 ";
	 
	 
	 }
  
  ?>
  
</div></center>
</body>
</html>