<!DOCTYPE html>
<html>
<head>
	<title>Bestil bord hos Oriental Sushi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description=" content="Her kan du bestille bord hos Oriental Sushi">
	<link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="OrientalS_jquery-mobileTheme/themes/Oriental_Sushi.min.css" />
</head>
<body>
<div data-role="page" id="bestilbordform">
<?php require 'header.php'; ?>
<div data-role="content">
<div class="notebest">
<p>
<?php
$name = trim($_POST['name']);
$tlf =  trim($_POST['tlf']);
$email =trim($_POST['email']);
$pers = trim($_POST['pers']);
$date = trim($_POST['date']);
$time = trim($_POST['time']);
$comments = trim($_POST['comments']);

$display_time= split(':', $time)[0].':'.split(':', $time)[1];
$display_date = date('d-m-y', strtotime($date));

$a = chr(97 + mt_rand(0, 25));
$b = chr(97 + mt_rand(0, 25));
$c = chr(97 + mt_rand(0, 25));
$d = chr(97 + mt_rand(0, 25));

$bestillings_nummer = "$a$b$c$d";

if($name === '' || $tlf === '' || $pers === '' || $date === '' || $time === '')
{
   echo "You did not fill out the required fields.";
}
else{
	$dbc = mysqli_connect('localhost', 'root', 'root', 'Bestil_Bord');

	$query = 'INSERT INTO reservationer (name, tlf, email, pers, dato, `time`, comments, best_nr)' .
	' VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
	$statement = mysqli_prepare($dbc , $query);
	mysqli_stmt_bind_param(
		$statement,
		'ssssssss',
		$name,$tlf,$email,$pers,$date,$time,$comments,$bestillings_nummer
	);
	mysqli_stmt_execute($statement);


	$subject = 'Du har bestilt bord hos Oriental Sushi';

	$msg = 'Du har bestilt bord hos Oriental Sushi til '.$pers.' personer d. '.$display_date.' kl. '.$display_time.'. Dit bestillings-nummer er '.$bestillings_nummer;

	//mail(/*$email*/'paulajoannasobczak@gmail.com', $subject, $msg, 'From: OrientalSushi@mail.dk');

	mysqli_close($dbc);

	?>
	Hej <?= $name ?>. Tak for din bestilling hos Oriental Sushi.
	Du har bestilt bord til <?= $pers ?> personer d. <?= $display_date ?> kl. <?= $display_time ?>.
	Dit reservationsnummer er <strong> <?= $bestillings_nummer ?> </strong>, og kan benyttes til at se, ændre eller aflyse din
	reservation på <a href="/#minreservation">Min Reservation</a> Du vil modtage info om din reservation via mail.
<?php
}
?>

</p>
<a href="/">Til Forsiden</a>
</div>
</div>
<?php require 'footer.php'; ?>
</div>
</body>
</html>
