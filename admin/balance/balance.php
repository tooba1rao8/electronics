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
#btn{
	
	width:150px;
	height:40px;
	color:#FFF;
	background-color:#333;
	font-size:18px;
	margin-left:10px;
	margin-top:80px
	}
	table
{
	border:2px solid #FFF;
	border-radius:8px;
	color:#FFF;
	font-size:20px;
	height:250px;
	background-color:#333;
	margin-left:2%;
	
	}
	span{
	
font-size:24px;
color:#FFF;

	}
	
	#main{
		width:100%;
		height:auto;
		float:left;
		}
	
	#sales{
		width:50%;
		height:auto;
		float:left;
		}
		
	#expense{
		width:50%;
		height:auto;
		float:left;
		}
		
			
		
		.saleres{
			border:2px solid #FFF;
	border-radius:8px;
	color:#FFF;
	font-size:20px;
	height:auto;
	background-color:#333;
	    float:right;
			}
	 </style>
</head>

<body background="../../img/bg.jpg">

<div style="width:100%; height:100px; background-color:#333">

<h2>Welcome To Accounts Detail</h2>
</div>


<a href="../welcome.php">
<input type="button" value="Go Back" style="width:150px; height:40px; background-color:#333; color:#FFF; float:left; border-radius:8px; margin-top:20px; cursor:pointer;">
</a>

<div id="main">

<div id="sales">

<h1 style="text-align:center;">Sale Details</h1>

<table border="1" width="95%">

<tr>
	
    <th>Product Code</th>
    <th>Product Company</th>
    <th>Product Name</th>
    
    <th>Purchase Price</th>
    <th>Sale Price</th>
   
   </tr>
  <?php
  $st="recieved";
  $pp="0";
  $sp="0";
 include_once("../connection/connection.php");
 $query=mysql_query("select * from sales where status='$st'");
 while($row=mysql_fetch_object($query))
 {
	 $pp=$pp+$row->pprice;
	 $sp=$sp+$row->sprice;
	 
	 echo "
	 <tr>
	 	
		<td>$row->pcode</td>
		<td>$row->pcompany</td>
		
		<td>$row->pname</td>
		
		<td>$row->pprice</td>
		<td>$row->sprice</td>
		
		</tr>
	 
	 ";
	 }

  ?>

  <tr>
  	<td colspan="3"><span>Purchase Total / Sale Total</span></td>
    <td><?php echo $pp; ?></td>
    <td><?php echo $sp; ?></td>
  </tr>
  <tr>
  <td colspan="4"><span>Net Profit</span></td>
    <td><?php echo $sp - $pp; ?></td>
    
  </tr>
  </table>
</div> 
 
  
<div id="expense">

<h1 style="text-align:center;">Expense Details</h1>

<table border="1" width="95%">
<tr>
	
    <th>Entry Date</th>
    <th>Expense Name</th>
    <th>Description</th>
    <th>Amount</th>
   
   </tr>
  <?php
  $amt="0";
 include_once("../connection/connection.php");
 $query=mysql_query("select * from expense");
 while($row=mysql_fetch_object($query))
 {
	 $amt=$amt+ $row->amount;
	 echo "
	 <tr>
	 	
		<td>$row->edate</td>
		<td>$row->ename</td>
		<td>$row->description</td>
		<td>$row->amount</td>
		
		</tr>
	  </tr>
	 
	 ";
	 
	 
	 }
  
  ?>

  <tr>
  	<td colspan="3"> <span>Total Expense</span></td>
    <td><?php echo $amt; ?></td>
  </tr>
  
  <tr>
  <td colspan="2"> <span>Total Profit:</span></td>
  <td> <span>PKR</span></td>
  <td><?php echo $sp - $pp - $amt; ?></td>
  </tr>
  
 
  </table>

</div>

</div>


</body>
</html>