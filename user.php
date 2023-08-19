<?php session_start();

if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
	
	}

?>



<div id="promain">

<h1 style="text-align:center; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Your Wishlist Products</h1>


<?php
include_once("connection.php");

$querya=mysql_query("select * from sales where email='$email' ORDER By sid DESC");
while($rowa=mysql_fetch_object($querya))
{echo "

<div id='itemdivp'>

<center>
	            
<img src='admin/products/upload/$rowa->img'>

<span>Name</span> <input type='text' value='$rowa->pname' readonly ><br>

<span>PKR </span> <input type='text' value='$rowa->sprice' readonly ><br>

<span>Status </span> <input type='text' value='$rowa->status' readonly ><br>
		
	</center>
	
</div>
";

	
	
	}

?>


</div>
</center>