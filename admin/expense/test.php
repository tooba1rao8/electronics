<html>
<head>

<title>Untitled Document</title>
<style>
 h2{
	 text-align:center;
	 color:#FFF;
	 font-size:50px;
	 
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

<body background="../../images/bg.jpg">
<div style="width:100%; height:100px; background-color:#096">
<h2>View Products</h2>
</div>
<div style="width:620px; height:auto">
<?php
include_once("../connection/connection.php");
$query=mysql_query("select * from products");
while($row=mysql_fetch_object($query))
{echo "
<div style='width:200px; height:340px; border:2px solid black; border-radius:8px; float:left;'><center>
	<img src='upload/$row->image' width='180px' height='240px'>
	<p>$row->pname</p>
	<p>$row->saleprice</p>
	<p>booknow</p></center>
</div>
";

	
	
	}


?>
</div></div>
</html>