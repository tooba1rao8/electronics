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
	
	}
	 </style>
</head>

<body background="../../img/bg.jpg">
<div style="width:100%; height:100px; background-color:#333">
<h2>View Products</h2>
</div>
<a href="productmain.php"><input type="button" value="Go Back" style="width:150px; height:40px; background-color:#333; color:#FFF; float:left; border-radius:8px; margin-top:20px; cursor:pointer;"></a>
<center>
<div style="width:auto; height:auto; margin-top:20px; background-color:#333;border-radius:8px; position:absolute; margin-left:12%">

<table border="1" cellpadding="5">
<tr>
    <th>Product ID</th>
	<th>Entry Date</th>
    <th>Product Code</th>
    <th>Product Category</th>
    <th>Product Name</th>
    <th>Purchase Price</th>
    <th>Sale Price</th>
    <th>Picture</th>
    
    <th colspan="2">Action</th>
   </tr>
  <?php
 include_once("../connection/connection.php");
 $query=mysql_query("select * from products ORDER By pid DESC");
 while($row=mysql_fetch_object($query))
 {
	 echo "
	 <tr>
	    <td>$row->pid</td>
	 	<td>$row->entrydate</td>
		<td>$row->pcode</td>
		<td>$row->pcompany</td>
		
		<td>$row->pname</td>
		
		<td>$row->purprice</td>
		<td>$row->saleprice</td>
		<td><img src='upload/$row->image' width='100' height='100'></td>
		
		<td><a href='productupdate.php?pid=$row->pid' style='color:red;'>edit</td>
		<td><a href='productdel.php?pid=$row->pid' style='color:red;'>delete</td></td>
		</tr>
	 
	 
	 
	 </tr>
	 
	 ";
	 
	 
	 }
  
  ?>

</div></center>
</body>
</html>