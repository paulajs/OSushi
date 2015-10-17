<!DOCTYPE html>
<html>
<head>
	<title>Din reservation</title>
</head>
<body>
<h2>Din Reservation</h2>
<form method="post" action="reservation.php">
    
    <label for="mail">email:</label>
    <input type="text" id="mail" name="mail" /><br />
   
    <label for="bestnr">Reservations-nummer: </label>
    <input type="text" id="bestnr" name="bestnr" /><br />

     <input type="submit" value="reservation" name="submit" />
     <input type="submit" name="update_button" value="Update" />
	 <input type="submit" name="delete_button" value="Delete" />
</body>
</html>