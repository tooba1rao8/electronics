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
<h2>View Expense</h2>
</div>
<a href="expensemain.php"><input type="button" value="Go Back" style="width:150px; height:40px; background-color:#333; color:#FFF; float:left; border-radius:8px; margin-top:20px; cursor:pointer;"></a>
<center>
<div style="width:auto; height:auto; margin-top:20px; background-color:#333;border-radius:8px; position:absolute; margin-left:12%">

<table border="1">
<tr>
	<th>Expense ID</th>
    <th>Entry Date</th>
    <th>Expense Name</th>
    <th>Description</th>
    <th>Amount</th>
    <th>Action</th>
   </tr>
  <?php
 include_once("../connection/connection.php");
 $query=mysql_query("select * from expense");
 while($row=mysql_fetch_object($query))
 {
	 echo "
	 <tr>
	 	<td>$row->eid</td>
		<td>$row->edate</td>
		<td>$row->ename</td>
		<td>$row->description</td>
		<td>$row->amount</td>
		<td><a href='expenseupdate.php?eide=$row->eid' style='color:red;'>Edit</td>
		</tr>
	  </tr>
	 
	 ";
	 
	 
	 }
  
  ?>
  
</div></center>
</body>
</html>