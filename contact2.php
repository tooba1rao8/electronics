
<script>



	 alert("Your Message Has been Sent Thanks For Contacting Us." );
    
</script>

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



<div id="cont">
<h1>Contact Us:</h1>


<div id="imgz">
<img src="img/home.png" id="home">

<img src="img/email.png" id="home">

<img src="img/phone.png" id="home">

<img src="img/cell.png" id="home">
</div>


<div id="contacts"><br>
<h2>Khayam Chowk, University Road Sargodha</h2>

<h2>info@mail.com</h2>

<h2>0454-35555555</h2>

<h2>0300-5555555555</h2>
</div>

<div id="dropmsg">

    <h2>Drop us a Message:</h2>

	<form action="email.php" method="post">
									
	<input type="text" name="name" id="contname" placeholder="Enter your Name" required><br><br>
									
									
	<input type="email" name="email" id="contname" placeholder="Enter your Email" required><br><br>
									
									
	<textarea id="message" name="message" cols="33" placeholder="Your Message" rows="6" required></textarea><br><br><br>
									
	<button type="submit" id="subbtn">Send Message</button>
								</form>
							</div>



</div>


<div id="footer"> 
 
 <?php
 include_once('footer.php');
?>

 </div>
