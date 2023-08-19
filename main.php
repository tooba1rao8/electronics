
<div>


<div id="brand">

<img src="img/b1.jpg">
<img src="img/b2.jpg">
<img src="img/b3.jpg">
<img src="img/b4.jpg">
<img src="img/b5.jpg">

<img src="img/b6.jpg">
<img src="img/b7.jpg">
<img src="img/b8.jpg">
<img src="img/b9.jpg">
<img src="img/b10.jpg">

<img src="img/b11.jpg">
<img src="img/b12.jpg">
<img src="img/b13.jpg">
<img src="img/b14.jpg">
<img src="img/b15.jpg">

</div>



<?php

include_once("connection.php");

$query=mysql_query("select * from products ORDER By pid DESC LIMIT 8");
while($row=mysql_fetch_object($query))
{echo "

<div id='itemdiv'>

<center>
	            
<img src='admin/products/upload/$row->image'>

<span>Name</span> <input type='text' value='$row->pname' readonly ><br>

<span>PKR </span> <input type='text' value='$row->saleprice' readonly ><br>

<a href='productorder.php?pid=$row->pid'><input type='button' value='Order Now' id='order'></a>


		
	</center>
	
</div>
";

	
	
	}

?>

</div>