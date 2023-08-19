
<div id="promain">

<?php
include_once("connection.php");
$query=mysql_query("select * from products ORDER By pid DESC");
while($row=mysql_fetch_object($query))
{echo "

<div id='itemdivp'>

<center>
	            
<img src='admin/products/upload/$row->image'><br>

<span>Name</span> <input type='text' value='$row->pname' readonly ><br>

<span>PKR </span> <input type='text' value='$row->saleprice' readonly ><br>

<a href='productorder.php?pid=$row->pid'><input type='button' value='Order Now' id='order'></a>
		
	</center>
	
</div>
";

	
	
	}

?>


</div>
</center>