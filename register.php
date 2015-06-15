<?php
require_once 'db.php';
$new_login = $_POST ['myusername'];
$new_password = $_POST ['mypassword'];
$new_email = $_POST ['mypassword'];
$r_newpassword = $_POST ['r_mypassword'];
$registration_date = date ( "r" );
if ($new_password === $r_newpassword) {
	$new_password = sha1 ( 'php' . $new_password );
} else {
	echo "Passwords do not match!";
	die ();
}
$registerUserConnection = new ConnectToDb ();
$sql = "INSERT INTO users(login, password, email, create_at )
		VALUES ('" . $new_login . "','" . $new_password . "', '" . $new_email . "', '" . $registration_date . "')";
$result = $registerUserConnection->sqlQuery ( $sql );
if ($result) {
	echo "You have successfully registrated!";
	echo "<br />";
	echo "<a href='index.php?'>Move to the main page</a>";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error ( $conn );
}
?>