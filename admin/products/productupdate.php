<?php
include_once("../connection/connection.php");



if(isset($_REQUEST['pid']))
{	

$pid=$_REQUEST['pid'];

$query=mysql_query("select * from products where pid='$pid'");
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
<h2>Update Products</h2>
</div>
<center>
<div style="width:auto; height:auto; margin-top:20px; position:absolute; margin-left:32%">

<form action="up.php" method="post" >
<input type="hidden" value="<?php echo $row->pid; ?>" name="pid">
<table>
<tr>
	<td><span>Entry Date</span></td>
	<td><input type="date" name="dat" value=" <?php echo $row->entrydate; ?>" id="pcode" required></td>
</tr>
<tr>
	<td><span>Product Code</span></td>
	<td><input type="text" name="pcode" value=" <?php echo $row->pcode; ?>" id="pcode" required></td>
</tr>
<tr>

	<td><span>Product Category</span></td>
	<td>
    <select name="pcom" id="pcode">
    <option>Choose Category</option>
    
    <?php
    $querya=mysql_query("select * from categories");
	while($rowa=mysql_fetch_object($querya))
    {
	?>
    <option><?php echo $rowa->name ?></option>
    
    <?php } ?>
    
    </select>
    
    </td>

</tr>
<tr>
	<td><span>Product Name</span></td>
	<td><input type="text" name="pname"  value=" <?php echo $row->pname; ?>" id="pcode"  required></td>
</tr>

<tr>
	<td><span>Purchase Price</span></td>
	<td><input type="text" name="pprice"  value=" <?php echo $row->purprice; ?>" id="pcode" required></td>
</tr>
<tr>

	<td><span>Sale Price</span></td>
	<td><input type="text" name="sprice"  value=" <?php echo $row->saleprice; ?>" id="pcode" required></td>
</tr>

<tr>

	<td></td>
	<td><input type="submit" value="Update" style="width:100px;height:50px; color:#FFF; background-color:#333; border-radius:7px"  >
    <a href="productview.php"><input type="button" value="cancel" style="width:100px;
    height:50px; color:#FFF; background-color:#333; border-radius:7px; margin-left:10px"></a></td>
</tr>

</table>
</form>
</div></center>
</body>
</html>