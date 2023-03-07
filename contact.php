<?php

$naam = $_POST['naam'];
$email = $_POST['email'];
$onderwerp = $_POST['onderwerp'];
$bericht = $_POST['bericht'];

$mailheader = "Van:" .$naam. " " .$email. " \r\n";

$ontvanger = "damianfonville04@gmail.com";

mail($ontvanger, $onderwerp, $bericht, $mailheader) or die("Error!");
// mail($email, $onderwerp, $bericht, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="website1.css">
<title>Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


</style>
</head>
<body>

<div class="header">
  <h1>Contact</h1> 
  <p><b>Alles over cybersecurity</b></p>
</div>

<div class="navbar">
  <a href="file:///C:/xampp/htdocs/website1/homepage.html">Home</a>
  <a href="file:///C:/xampp/htdocs/website1/biometrie.html">Biometrie</a>
  <a href="file:///C:/xampp/htdocs/website1/praktijk.html">Praktijk</a>
  <a href="file:///C:/xampp/htdocs/website1/certificaten.html">Certificaten</a>
  <a href="file:///C:/xampp/htdocs/website1/diginotar.html">DigiNotar</a>
  <a href="file:///C:/xampp/htdocs/website1/beveiliging.html">Beveiliging</a>  
  <div class="dropdown">
  <button class="dropbtn">Extra functies &#8964;
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
	<a href="file:///C:/xampp/htdocs/website1/contact.html" class="active">Contact</a>
	<a href="file:///C:/xampp/htdocs/website1/aboutme.html">About Me</a>
	<a href="file:///C:/xampp/htdocs/website1/bronnen.html">Bronnen</a>
  </div>
</div>
  <a href="file:///C:/xampp/htdocs/website1/faq.html" class="right">FAQ</a>
</div>

<div class="supportbutton">
<a href="file:///C:/xampp/htdocs/website1/contact.html">
 <img class="supportbuttonimg" src="images\bubble-chat.png" style="width:25px;height:25px"></a>
</div>

<div class="row">
  <div class="side">
    <h2>Articles</h2>
    <h5></h5> <br>
	<hr>
    <div class="artbox" style="height:60px;"><a>Nieuwsbericht</a>
	<div class="artboxpic"></div>
	</div><hr>
    <div class="artbox" style="height:60px;"><a>5 Tips Om Uw Online <br>Privacy Te Beschermen</a>
	<div class="artboxpic"></div>
	</div><hr>
    <div class="artbox" style="height:60px;"><a>Video</a>
	<div class="artboxpic"></div>
	</div><hr>
	<div class="artbox" style="height:60px;"><a>Video</a>
	<div class="artboxpic"></div>
	</div><hr>
	<hr class="sidecolor">
	
  </div>
  
  <div class="main">
  <div class="section">
    <h2>Contact</h2>
    <p>Neem contact op</p>
	<form action="contact.php" method="POST">
		<label for="naam">Naam:</label>
		<input type="text" name="naam" id="naam">
		<label for="email">Email:</label>
		<input type="text" name="email" id="email">
		<label for="onderwerp">Onderwerp:</label>
		<input type="text" name="onderwerp" id="onderwerp">
		<label for="bericht">Bericht:</label>
		<textarea name="bericht" cols="30" rows="10"></textarea>
		<input type="submit">
	</form>
    

<!-- <form action="contact.php" method="post"> -->
  <!-- <div class="elem-group"> -->
    <!-- <label for="name">Naam: </label> -->
    <!-- <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required> -->
  <!-- </div> -->
  <!-- <div class="elem-group"> -->
    <!-- <label for="email">E-mail:</label> -->
    <!-- <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required> -->
  <!-- </div> -->
  <!-- <div class="elem-group"> -->
    <!-- <label for="department-selection">Reden voor contact: </label> -->
    <!-- <select id="department-selection" name="concerned_department" required> -->
        <!-- <option value="">Select een reden</option> -->
        <!-- <option value="vraag">Vraag</option> -->
        <!-- <option value="klacht">Klacht</option> -->
        <!-- <option value="hulp">Hulp</option> -->
    <!-- </select> -->
  <!-- </div> -->
  <!-- <div class="elem-group"> -->
    <!-- <label for="title">Onderwerp:</label> -->
    <!-- <input type="text" id="title" name="email_title" required placeholder="Onderwerp van bericht..." pattern=[A-Za-z0-9\s]{8,60}> -->
  <!-- </div> -->
  <!-- <div class="elem-group"> -->
    <!-- <label for="message">Bericht: </label> -->
    <!-- <textarea id="message" name="visitor_message" placeholder="Schrijf hier uw bericht..." required></textarea> -->
  <!-- </div> -->
  <!-- <div class="popup" onclick="myFunction()"> -->
  <!-- <contactbtn type="submit">Verstuur bericht</contactbtn> -->
  <!-- <span class="popuptext" id="myPopup">Bedankt!</span> -->

  <!-- </div> -->
<!-- </form> -->


    <br>
  </div>
 </div>
</div>

<div class="footer">
<div class="row">
	<div class="footerleft">
	 <ul class="list-inline">
                <li class="list-inline-item"><h3>Overview</h3></li>
                <li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/homepage.html">Home</a></li>
                <li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/biometrie.html">Biometrie</a></li>
                <li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/praktijk.html">Praktijk</a></li>
                <li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/certificaten.html">Certificaten</a></li>
				<li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/diginotar.html">DigiNotar</a></li>
				<li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/beveiliging.html">Beveiliging</a></li>
	</ul>
	</div>
	<div class="footerright">
	 <ul class="list-inline">
                <li class="list-inline-item"><h3>Services</h3></li>
                <li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/contact.html" class="active">Contact</a></li>
				<li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/aboutme.html">About Me</a></li>
                <li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/bronnen.html">Bronnen</a></li>
				<li class="list-inline-item"><a href="file:///C:/xampp/htdocs/website1/faq.html">FAQ</a></li>                
	</ul>
	</div>
	</div>
  <p class="copyright">Damian Fonville © 2022</p>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

</body>
</html>
';
?>