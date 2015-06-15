<?php
ob_start ();
require_once 'db.php';

$myusername = $_POST ['myusername'];
$mypassword = $_POST ['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes ( $myusername );
$mypassword = stripslashes ( $mypassword );
$myusername = mysql_real_escape_string ( $myusername );
$mypassword = mysql_real_escape_string ( $mypassword );
$loginUserConnection = new ConnectToDb ();
$sql = "SELECT * FROM users WHERE login = '$myusername' and password= '$mypassword'";
$result = $loginUserConnection->sqlQuery ( $sql );
$count = mysqli_num_rows ( $result );

if ($count == 1) {
	session_start ();
	$_SESSION ['myusername'] = $myusername;
	$_SESSION ['mypassword'] = $mypassword;
	$cookie_name = $myusername;
	$cookie_value = "Cookie set!";
	setcookie ( $cookie_name, $cookie_value, time () + (86400 * 30), "/" );
	header ( "location: index.php" );
} else {
	echo "Wrong Username or Password";
	echo "<h2> <a href='index.php?'>Return to login page</a> </h2>";
	echo "<h2> <a href='login.php?'>Register</a> </h2>";
}
ob_end_flush ();
