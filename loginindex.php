<?php session_start(); 

if(isset($_SESSION['uname']))
{
	
	header ('location:admin/welcome.php');
	
	
	
	}
else 

{
	
	?>	
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Shopping</title>

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div id="login">
<center>
<h1>Login Your Account</h1>

<form action="log.php"  method="post">
 
<input type="text" name="uname" id="uname" required ><br><br>
<input type="password" name="pass" id="uname" required ><br><br>

<input type="submit" name="submit" id="submit" value="LOGIN">

</form>
</center>

</div>


</body>
</html>

<?php  } ?>