<!DOCTYPE html>
<html>
<head>
	<title>Ny Reservation hos Oriental Sushi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="OrientalS_jquery-mobileTheme/themes/Oriental_Sushi.min.css" />
</head>
<body>
<div data-role="page" id="opdater">
<?php require 'header.php'; ?>
<div data-role="content">
<div class ="notebest">
<p>
<?php
$name = trim($_POST['name']);
$tlf =  trim($_POST['tlf']);
$email = trim($_POST['email']);
$pers = trim($_POST['pers']);
$date = trim($_POST['date']);
$time = trim($_POST['time']);
$comments = trim($_POST['comments']);

$display_time= split(':', $time)[0].':'.split(':', $time)[1];
$display_date = date('d-m-y', strtotime($date));
$bestnr = $_POST['bestnr'];
$subject = 'Du har ændret din reservation';

if($name == '' || $tlf == '' || $pers == '' || $date == '' || $time == '')
{
	echo "You did not fill out the required fields.";
}
else{

	$dbc = mysqli_connect('localhost', 'root', 'root', 'Bestil_Bord') // connect to database
	or die('Error connecting to MySQL server.');

	$query = 'UPDATE `reservationer` SET name =?, tlf=?, email=?, pers=?, dato=?, `time`=?, comments=? WHERE `best_nr`= ?';
	$statement = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param(
		$statement,
		'ssssssss',
		$name, $tlf, $email, $pers, $date, $time, $comments, $bestnr
	);
	$result = mysqli_stmt_execute($statement);
	$msg = 'Du har ændret din reservation til'.$pers.' d. '.$display_date.' kl. '.$display_time.'. Dit bestillings-nymmer er stadig '.$bestnr;

	//mail(/*$email*/'paulajoannasobczak@gmail.com', $subject, $msg, 'From: OrientalSushi@mail.dk');
	mysqli_close($dbc);

	?>
		Hej <?= $name; ?>, Du har ændret din reservation hos Oriental Sushi.
		Du har bestilt bord til <?= $pers; ?> personer d. <?= $display_date; ?> kl. <?= $display_time ?>.
		Dit reservationsnummer er stadig <strong><?= $bestnr ?>.</strong>
		Du vil modtage en bekræftigelse på din ændring via mail.
<?php
}
?>
</p>
<a href="/index.php">Til Forsiden</a>
</div>
</div>
<?php require 'footer.php'; ?>
</div>
</body>
</html>
