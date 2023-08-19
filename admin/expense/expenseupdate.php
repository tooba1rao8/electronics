<?php
include_once("../connection/connection.php");
$eid=$_REQUEST['eide'];
if(isset($_REQUEST['eide']))
{	
$query=mysql_query("select * from expense where eid='$eid'");
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
<h2>Update Expense</h2>
</div>
<center>
<div style="width:auto; height:auto; margin-top:20px; position:absolute; margin-left:32%">
<form method="post" action="up.php">
<input type="hidden" value="<?php echo $row->eid; ?>" name="ei" >
<table>
<tr>
<td><span>Expense ID</span></td>
	<td><input type="text" name="eid" value=" <?php echo $row->eid; ?>" id="pcode" readonly></td>
	
</tr>
<tr>
	<td><span>Entry Date</span></td>
	<td><input type="date" name="dat" value=" <?php echo $row->edate; ?>" id="pcode" required></td>
</tr>
<tr>

	<td><span>Expense Name</span></td>
	<td><input type="text" name="ename"  value=" <?php echo $row->ename; ?>" id="pcode" required></td>

</tr>


<tr>
	<td><span>Description</span></td>
	<td><input type="text" name="des"  value=" <?php echo $row->description; ?>" id="pcode" required></td>
</tr>
<tr>

	<td><span>Amount</span></td>
	<td><input type="text" name="amount"  value=" <?php echo $row->amount; ?>" id="pcode" required></td>
</tr>

<tr>

	<td></td>
	<td><input type="submit" value="Update" style="width:100px;height:50px; color:#FFF; background-color:#333; border-radius:7px"  >
    <a href="expenseview.php"><input type="button" value="cancel" style="width:100px;
    height:50px; color:#FFF; background-color:#333; border-radius:7px; margin-left:10px"></a></td>
</tr>

</table>
</form>
</div></center>
</body>
</html>