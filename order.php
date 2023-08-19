<?php session_start(); 

if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
	
?>

<style>
h2{
	text-align:center;
	
	
	}
table
{
	width:50%;
	height:500px;
	border:1px solid #000;
border-radius:4px;
	}
	span{
margin-left:25px;	
font-size:24px;
color:#000;

	}
#pcode{
	width:300px;
	height:40px;
	font-size:20px;
	padding-left:5px;
	}
textarea{
	font-size:20px;
	width:300px;
	height:100px
	}
</style>




<div>
<?php
include_once("connection.php");

$pid=$_REQUEST['pid'];

if(isset($_REQUEST['pid']))
{
	$query=mysql_query("select * from products where pid='$pid'");
	$row=mysql_fetch_object($query);
	
	
	}
	
$querya=mysql_query("select * from customers where email='$email'");
$rowa=mysql_fetch_object($querya);	
	
	

?>

<h2>Customer Information</h2>
<form action="ord.php" method="post" >
<input type="hidden" value="<?php echo $row->pid?>" name="pcod">
<input type="hidden" value="<?php echo $row->pcompany?>" name="pcom">
<input type="hidden" value="<?php echo $row->pname?>" name="pnam">
<input type="hidden" value="<?php echo $row->purprice?>" name="pp">
<input type="hidden" value="<?php echo $row->saleprice?>" name="sp">
<input type="hidden" value="<?php echo $row->image?>" name="img">

<center><table>
<tr>
	<td><span>Full Name</span></td>
	<td><input type="text" name="nam" id="pcode" value="<?php echo $rowa->name ?>" required></td>
</tr>
<tr>
	<td><span>Email Address</span></td>
	<td><input type="email" name="email" id="pcode" value="<?php echo $rowa->email ?>" readonly></td>
</tr>
<tr>

	<td><span>Contact no</span></td>
	<td><input type="text" name="cont" id="pcode" value="<?php echo $rowa->phone ?>" required></td>

</tr>
<tr>
	<td><span>Address</span></td>
	<td><textarea required cols="40" rows="10" name="address"><?php echo $rowa->address ?></textarea></td>

<tr>
	<td><span>Your Order</span></td>
	<td><input type="text" name="pprice" value=" <?php echo $row->pcompany." ".$row->pname;?>" id="pcode" required readonly style="border:none"></td>
</tr>
<tr>

	<td><span>Price</span></td>
	<td><input type="text" name="sprice" id="pcode"  value=" <?php echo $row->saleprice." PKR"?>" required readonly style="border:none"></td>
</tr>

<tr>

	<td></td>
	<td><input type="submit" value="Order" style="width:100px;height:50px; color:#FFF; background-color:#000; " name="add" >
    <a href="products.php"><input type="button" value="cancel" style="width:100px;
    height:50px; color:#FFF; background-color:#000;  margin-left:10px"></a></td>
</tr>

</table></center>

</form>
</div>


	
<?php
	
	}

else 

{

	header ('location:cuslogin.php');

}

?>

