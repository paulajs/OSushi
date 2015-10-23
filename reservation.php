<!DOCTYPE html>
<html>
<head>
	<title>Din reservation hos Oriental Sushi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description=" content="Her kan du se, aflyse eller lave en ny reservation hos Oriental Sushi">
	<link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="OrientalS_jquery-mobileTheme/themes/Oriental_Sushi.min.css" />
</head>
<body>
<div data-role="page" id="dinreservationform">
<?php require 'header.php'; ?>
<div data-role="content">
<div class="notebest">
<p>
<?php
$mail = $_POST['mail'];
$bestnr = $_POST['bestnr'];
$subject = 'Du har lavet en reservation hos Oriental Sushi';

$dbc = mysqli_connect('localhost', 'root', 'root', 'Bestil_Bord')
or die('Error connecting to MySQL server.');


if (isset($_POST['submit'])){

	$query = 'SELECT `name`, `pers`, `dato`, `time` FROM reservationer WHERE `best_nr` = ?';
	$statement = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param(
		$statement,
		's',
		$bestnr
	);
	mysqli_stmt_execute($statement);
	mysqli_stmt_bind_result($statement, $name, $pers, $date, $time);
	mysqli_stmt_fetch($statement);

	$display_time= split(':', $time)[0].':'.split(':', $time)[1];
	$display_date = date('d-m-y', strtotime($date));
	$comments = $row['comments'];

	?>
	Hej <?= $name ?> Du har reserveret bord hos Oriental Sushi til <?= $pers ?> personer d.
	<?= $display_date ?> kl. <?= $display_time ?>. Vi glæder os til dit besøg.
	<?php

} else if(isset($_POST['delete_button'])) {
	$query = 'DELETE FROM  reservationer WHERE  `best_nr` =  ?';
	$statement = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param(
		$statement,
		's',
		$bestnr
	);
	$x = mysqli_stmt_execute($statement);
	var_dump($x);
 	echo "Du har du aflyst dit besøg";
} else if(isset($_POST['update_button'])){

	$query = 'SELECT `name`, `pers`, `dato`, `time`, `tlf`, `email` FROM reservationer WHERE `best_nr` = ?';
	$statement = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param(
		$statement,
		's',
		$bestnr
	);
	mysqli_execute($statement);
	mysqli_stmt_bind_result($statement, $name, $pers, $date, $time, $tlf, $email);
	mysqli_stmt_fetch($statement);
	$display_time= split(':', $time)[0].':'.split(':', $time)[1];
	$display_date = date('d-m-Y', strtotime($date));
	$comments = $row['comments'];
?>
</p>
<script type="text/javascript">
	$( ".notebest p" ).css( "display", "none" );
</script>
<form method="post" action="opdater.php">

    <label for="name">Navn:</label>
    <input type="text" id="name" name="name" value="<?php echo $name ?>" /><br />

    <label for="tlf">Telefon: </label>
    <input type="text" id="tlf" name="tlf" value="<?php echo $tlf ?>"/><br />

    <label for="email">e-mail: </label>
    <input type="email" id="email" name="email" value="<?php echo $email ?>"/><br />

    <label for="pers">Antal personer: </label>
    <input type="text" id="pers" name="pers" value="<?php echo $pers ?>"/><br />

    <label for="date">Dato: </label>
    <input type="date" id="date" name="date" value="<?php echo $display_date ?>"/><br />

    <label for="time">Tid: </label>
    <input type="time" id="time" name="time" value="<?php echo $time ?>"/><br />

    <label for="bestnr">Bestillings-nummer: </label><br/>
    <input type="text" id="bestnr" name="bestnr" readonly="readonly" value="<?php echo $bestnr ?>"/><br />

    <label for="comments">Kommentar: </label><br/>
    <textarea id="comments" name="comments" ><?php echo $comments ?></textarea><br />

     <input type="submit" value="Bekræft" name="submit" id="update" /><br/>
</form>
<a href="/">Til Forsiden</a>
<?php
}
mysqli_close($dbc);
?>
</div>
</div>
<?php require 'footer.php'; ?>
</div>
</body>
</html>
