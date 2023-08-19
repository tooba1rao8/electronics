<?php
include_once("../connection/connection.php");
if(isset($_POST['add']))

{
	
	$date=$_POST['dat'];
	$pcode=$_POST['pcode'];
	$pcom=$_POST['pcom'];
	$pname=$_POST['pname'];
	
	$pprice=$_POST['pprice'];
	$sprice=$_POST['sprice'];
	
	
	
	if (file_exists("upload/".$_FILES["file"]["name"]))
      {
		  ?>
          <font style="text-decoration:blink; margin-top:20px; font-size:24px; color:#F00;"><br />
          <?php 
      echo $_FILES["file"]["name"] . " Image Name Already Exists. ";
	  ?> 
	  </font>
	  <?php 
      }
	  
    else
      {

		move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
	
	

			$pic = $_FILES['file']['name'];	
	
	
	
	$query=mysql_query("insert into products values('','$date','$pcode','$pcom','$pname','$pprice','$sprice','$pic')");
	
	if($query)
	{
	header('location:productview.php');
		
		}
		else
		{
			echo "error";
			}
	
	
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
<form action="productadd.php" method="post" enctype="multipart/form-data">
<table>
<tr>
	<td><span>Entry Date</span></td>
	<td><input type="date" name="dat" id="pcode" required></td>
</tr>
<tr>
	<td><span>Product Code</span></td>
	<td><input type="text" name="pcode" id="pcode" required></td>
</tr>
<tr>

	<td><span>Product Category</span></td>
	<td>
    <select name="pcom" id="pcode">
    <option>Choose Category</option>
    
    <?php
    $query=mysql_query("select * from categories");
	while($row=mysql_fetch_object($query))
    {
	?>
    <option><?php echo $row->name ?></option>
    
    <?php } ?>
    
    </select>
    
    </td>

</tr>
<tr>
	<td><span>Product Name</span></td>
	<td><input type="text" name="pname" id="pcode"  required></td>

<tr>
	<td><span>Purchase Price</span></td>
	<td><input type="text" name="pprice" id="pcode" required></td>
</tr>
<tr>

	<td><span>Sale Price</span></td>
	<td><input type="text" name="sprice" id="pcode" required></td>
</tr>
<tr>

	<td><span>Choose Image</span></td>
	<td><input type="file" name="file" id="pcode" required></td>

</tr>
<tr>

	<td></td>
	<td><input type="submit" value="Add" style="width:100px;height:50px; color:#FFF; background-color:#333; border-radius:7px" name="add" >
    <a href="productmain.php"><input type="button" value="cancel" style="width:100px;
    height:50px; color:#FFF; background-color:#333; border-radius:7px; margin-left:10px"></a></td>
</tr>

</table>
</form>
</div></center>
</body>
</html>