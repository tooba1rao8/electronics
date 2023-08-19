

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

<h1>Create Your Account</h1>

<form action="created.php" method="post">

<input type="text" placeholder="Full Name" id="fname" name="name">
<input type="number" placeholder="Phone" id="fname" name="phone">
<input type="text" placeholder="Address" id="fname" name="address">
<input type="email" placeholder="Email" id="fname" name="email">
<input type="password" placeholder="Password" id="fname" name="pass">
<input type="submit" value="Create Account" id="submit">

</form>




</div>


<div id="footer"> 
 
 <?php
 include_once('footer.php');
?>

 </div>
