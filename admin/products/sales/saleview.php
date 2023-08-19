<html>

<head>

<title>Online Shopping</title>
<style>
body{margin:0 auto;
	}


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
	height:250px;
	text-align:center;
	
	}
	 </style>
</head>

<body background="../../../img/bg.jpg">
<div style="width:100%; height:100px; background-color:#333">
<h2>View Sales</h2>
</div>
<a href="../../welcome.php"><input type="button" value="Go Back" style="width:150px; height:40px; background-color:#333; color:#FFF; float:left; border-radius:8px; margin-top:20px; cursor:pointer;"></a><br><br><br><br>
<center>
<div style="width:auto; height:auto; margin-top:20px; background-color:#333;border-radius:8px; position:absolute; ">

<table border="1">
<tr>
	
    <th>Product ID</th>
    <th>Product Company</th>
    <th>Product Name</th>
    
    <th>Purchase Price</th>
    <th>Sale Price</th>
    <th>Customer Name</th>
    <th>Contact No</th>
    <th>Email</th>
    <th>Address</th>
    <th>Image</th>
    <th>Status</th>
    
    <th>Action</th>
   </tr>
  <?php
 include_once("../../connection/connection.php");
 
 $query=mysql_query("select * from sales ORDER By sid DESC");
 while($row=mysql_fetch_object($query))
 {
	 echo "
	 <tr>
	 	
		<td>$row->sid</td>
		<td>$row->pcompany</td>
		
		<td>$row->pname</td>
		
		<td>$row->pprice</td>
		<td>$row->sprice</td>
		<td>$row->cusname</td>
		<td>$row->phone</td>
		<td>$row->email</td>
		<td>$row->address</td>
		<td><img src='../upload/$row->img' height='100px' width='100px'></td>
		<td>$row->status</td>
		
		
		<td><a href='updatestatus.php?sid=$row->sid' style='color:red;'>Update status</td>
		
		</tr>
	 
	 
	 
	 </tr>
	 
	 ";
	 
	 
	 }
  
  ?>
  
</div></center>
</body>
</html>