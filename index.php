<!DOCTYPE html>
<html>
<head>
	<title>Velkommen hos Oriental Sushi</title>
	<meta charset="UTF-8">
	<meta name="description=" content="Oriental sushi er en drøm - En drøm om at lave et japansk inspireret spisested, hvor kvalitet,
	kærlighed til håndværket, samt god stil og varme går op i en højere enhed.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="OrientalS_jquery-mobileTheme/themes/Oriental_Sushi.min.css" />
</head>
<body>

<!-- **************************************Forside***********************************  -->	
<div data-role="page" id="page1">
<?php require 'header.php'; ?>
<div data-role="content">
<div id="slidecontainer">
	<ul id="slider">
		<li class="slide"><img src="billeder/slider1img1.jpg" alt="Velkommen hos Oriental Sushi"></li>
		<li class="slide"><img src="billeder/slider1img2.jpg" alt="Vi tilbyder også Running Sushi"></li>
		<li class="slide"><img src="billeder/slider1img4.jpg" alt="Oriental Sushi er en drøm."></li>
	</ul>
</div>
<div id="blockwrap">
	<div class="ui-grid-c my-breakpoint">
		<a href="#menukort">
		<div class="ui-block-a">
			<img src="billeder/pic2ph.jpg" alt="Menukort">
			<h2>Menukort</h2>
		</a>	
		</div>
		<div class="ui-block-b">
		<a href="#bestilbord">
			<img src="billeder/bestilbord1.jpg" alt="Bestil bord">
			<h2>Bestil Bord</h2>
		</a>	
		</div>
		<div class="ui-block-c">
		<a href="#minreservation">
			<img src="billeder/reservation.jpg" alt="Min reservation">
			<h2>Min Reservation</h2>
		</a>	
		</div>
		
		<div class="ui-block-d">
			<img src="billeder/kontakt2.jpg" alt="Kontakt os">
			<h2>Kontakt</h2>
		</div>
	</div>
</div>
<div id="aboutsection">
	<p>
		Oriental sushi er en drøm om at lave et japansk inspireret spisested, hvor kvalitet,
        kærlighed til håndværket, samt god stil og varme går op i en højere enhed. 
	</p>
	<p id="deskdisplay">
		Vores kok tager ofte på inspirations-rejser for altid at kunne være med til at 
		videreudvikle det japanske køkken, og vi sætter en ære i at servere nye og 
		spændende retter for vores gæster.
	</p>
</div>

<div id="submenu">
	<div class="ui-grid-c my-breakpoint">
		
		<div class="ui-block-a">
			<h3>Information</h3>
			<ul class="sub">
				<li><a href="">Running Sushi</a></li>
				<li><a href="">Om Oriental Sushi</a></li>
				<li><a href="">Se smiley rapport</a></li>
				<li><a href="">Følg os på facebook</a></li>
			</ul>
		</div>
		<div class="ui-block-b">
			<h3>Kundeservice</h3>
			<ul class="sub">
				<li><a href="">Kontakt os</a></li>
				<li><a href="">Samhandelsbetingelser</a></li>
				<li><a href="">Bestil bord</a></li>
				<li><a href="">Find os på kort</a> </li>
			</ul>
		</div>
		<div class="ui-block-c">
			<h3>Ekstra</h3>
			<ul class="sub">
				<li><a href="">Producenter</a></li>
				<li><a href="">Gavekort</a></li>
				<li><a href="">Catering</a></li>
				<li><a href="">Tilbud</a></li>
			</ul>
		</div>
		
		<div class="ui-block-d">
			<h3>Min Konto</h3>
			<ul class="sub">
				<li><a href="">Min Konto</a></li>
				<li><a href="">Ordrehistorik</a></li>
				<li><a href="">Ønskeliste</a></li>
				<li><a href="">Nyhedsbrev</a></li>
			</ul>
		</div>
	</div>
</div>

</div>
<?php require 'footer.php'; ?>
</div>


<!-- **************************************Bestil bord***********************************  -->

<div data-role="page" id="bestilbord">
<?php require 'header.php'; ?>
<div data-role="content">
	<h2>Bestil bord hos Oriental sushi</h2>
	<form method="post" action="bestilbord.php">
    
		<label for="name">Navn:</label>
		<input type="text" id="name" name="name" required/><br />
   
		<label for="tlf">Telefon: </label>
		<input type="text" id="tlf" name="tlf" required/><br />

		<label for="email">e-mail: </label>
		<input type="email" id="email" name="email" /><br />

		<label for="pers">Antal personer: </label>
		<input type="text" id="pers" name="pers" required/><br />

		<label for="date">Dato: </label>
		<input type="date" id="date" name="date" required/><br />

		<label for="time">Tid: </label>
		<input type="time" id="time" name="time" required/><br />

		<label for="comments">Kommentar: </label><br/>
		<textarea id="comments" name="comments"></textarea><br> 		

		<button data-role="button">Bestil</button>    
	</form>
</div>
<?php require 'footer.php'; ?>
</div>


<!-- **************************************Min reservation***********************************  -->


<div data-role="page" id="minreservation">
<?php require 'header.php'; ?>
<div data-role="content">
<h2>Din Reservation</h2>
	<form method="post" action="reservation.php">
    	<label for="mail">email:</label>
    	<input type="text" id="mail" name="mail" /><br />
   
    	<label for="bestnr">Reservations-nummer: </label>
    	<input type="text" id="bestnr" name="bestnr" required/><br />

    	<h3>Vil du:</h3>

     	<input type="submit" value="Se Reservation" name="submit" />
     	<input type="submit" name="update_button" value="Ændre Reservation"/>
	 	<input type="submit" name="delete_button" value="Aflyse dit besøg" />
	</form>
</div>
<?php require 'footer.php'; ?>
</div>




<!-- **************************************Menukort***********************************  -->

<div data-role="page" id="menukort">
<?php require 'header.php'; ?>
<div data-role="content">
<h2>Menukort</h2>
<div id="menuwrap">
	<div class="ui-grid-c my-breakpoint">
		<div class="ui-block-a">
			<img src="menubilleder/pb-500x500.jpg" alt="Menuer">
			<h3>Menuer</h3>
		</div>
		<div class="ui-block-b">
			<img src="menubilleder/wraps-500x500.jpg" alt="Starters">
			<h3>Starters</h3>
		</div>
		<div class="ui-block-c">
			<img src="menubilleder/laksspecial-500x500.jpg" alt="Nigiri">
			<h3>Nigiri</h3>
		</div>
		<div class="ui-block-d">
			<img src="menubilleder/hosotun-500x500.jpg" alt="Hosomaki">
			<h3>Hosomaki</h3>
		</div>
		<div class="ui-block-a">
			<img src="menubilleder/futomanhaten-500x500.jpg" alt="Futomaki">
			<h3>Futomaki</h3>
		</div>
		<div class="ui-block-b">
			<img src="menubilleder/uramakimantahen-500x500.jpg" alt="Uramaki">
			<h3>Uramaki</h3>
		</div>
		<div class="ui-block-c">
			<img src="menubilleder/kmaki5-500x500.jpg" alt="Kaburi Maki">
			<h3>Kaburi Maki</h3>
		</div>
		<div class="ui-block-d">
			<img src="menubilleder/tun-500x500.jpg" alt="Sashimi">
			<h3>Sashimi</h3>
		</div>
		<div class="ui-block-a">
			<img src="menubilleder/rispapir2-500x500.jpg" alt="Rispapirruller">
			<h3>Rispapirruller</h3>
		</div>
		<div class="ui-block-b">
			<img src="menubilleder/sticks5-500x500.jpg" alt="Sticks">
			<h3>Sticks</h3>
		</div>
		<div class="ui-block-c">
			<img src="menubilleder/dessert.jpg" alt="Desserter">
			<h3>Desserter</h3>
		</div>
		<div class="ui-block-d">
			<img src="menubilleder/019-500x500.jpg" alt="Drikkevarer">
			<h3>Drikkevarer</h3>
		</div>
	</div>
</div>
</div>
<?php require 'footer.php'; ?>
</div>


<!-- **************************************Mobil/tablet menu***********************************  -->

<div data-role="page" id="pagemenu">
<header data-role="header" data-position="fixed">
	<img class="logoimg" src="logo.png" alt="logo">
	<a href="javascript:history.back()">&cross;</a>
</header>
<div data-role="content">
	<ul data-role="listview" data-inset="false" data-filter="false" id="menu1">
    	<li data-icon="false"><a href="#page1">Forside</a></li>
    	<li data-icon="false"><a href="#menukort">Menukort</a></li>
    	<li data-icon="false"><a href="#">Catering</a></li>
    	<li data-icon="false"><a href="#">Om Os</a></li>
    	<li data-icon="false"><a href="#bestilbord">Bestil bord</a></li>
    	<li data-icon="false"><a href="#">Kontakt</a></li>
	</ul>
	
</div>
<footer data-role="footer" >
	<ul data-role="listview" data-inset="false" data-filter="false" id="menu2">
    	<li data-icon="false"><a href="#">Information</a></li>
    	<li data-icon="false"><a href="#">Kundeservice</a></li>
    	<li data-icon="false"><a href="#">Ekstra</a></li>
    	<li data-icon="false"><a href="#">Min Konto</a></li>
    	
	</ul>
</footer>
</div>
</body>
</html>