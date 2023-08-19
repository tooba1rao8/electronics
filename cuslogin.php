<?php session_start(); 

if(isset($_SESSION['email']))
{
	
	header ('location:useraccount.php');
	
	
	
	}
else 

{?>
	

<div id="header"> 

 <?php
 include_once('header.php');
 ?>

 </div>


 <div id="proright"> 
 
 <?php
 include_once('proright.php');
?>

 </div>

<div id="create">

<h1>Login Your Account</h1>

<form action="cuslog.php" method="post">

<input type="email" placeholder="Email" id="fname" name="email">
<input type="password" placeholder="Password" id="fname" name="pass">
<input type="submit" value="Sign In" id="submit">

</form>




</div>


<div id="footer"> 
 
 <?php
 include_once('footer.php');
?>

 </div>


<?php } ?>