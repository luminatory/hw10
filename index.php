<?php
echo "<br />";
echo "<br />";
echo "<br />";
session_start ();
if (! isset ( $_SESSION ['myusername'] )) {
	echo '<div class="alert alert-danger fade in">';
	echo '<p class="text-center">' . '<strong>' . 'You need to be logged in!!!' . '</strong>' . '</p>';
	echo '</div>';
} else {
	echo '<div class="alert alert-success fade in">';
	echo '<button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">' . 'Welcome, ' . ($_SESSION ['myusername'] != '' ? $_SESSION ['myusername'] : 'Guest') . '!' . '</button>';
	echo ' <br />';
	echo $_SESSION ["StartTime"] = date ( "r" );
	echo '</div>';
	echo ' <br />';
}
require_once 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php echo $_SERVER['PHP_SELF'] ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
html, body {
	height: 100%;
}

#footer {
	background-color: black;
	bottom: 0;
	width: 100%;
	color: white;
	clear: both;
	text-align: center;
	padding: 5px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php" data-toggle="tooltip"
					title="Return Home"><p class="text-danger">Home</p></a>

			</div>
    <?php
				$mainMenu = new MenuCreate ();
				$categories = $mainMenu->getAllCategories ();
				$mainMenu->createMainMenu ( $categories );
				
				?>
     <a data-toggle="modal" href="login.php?"
				class="btn btn pull-right btn-link btn-lg">Login</a>
		</div>
		</div>
	</nav>
	<br />
	<br />
	<div class="container" id="content">
		<!--login modal-->
		<br />

	</div>
	</div>
	</div>
	</div>

	<div class="container">
		<h2>5 lastest posts</h2>
		<img
			src="http://img2.wikia.nocookie.net/__cb20120912061448/oldschool/ru/images/9/94/Yoba.png"
			alt="This is blog" width="250" height="280" />
   <?php
			$lastPosts = new MenuCreate ();
			$lastPosts->getLastPosts ();
			?>
    </div>
	</div>

	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
$('#openBtn').click(function(){
  $('#myModal').modal({show:true})
});

  </script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
    $('#openBtn').click(function(){
  $('#myModal').modal({show:true})
});
    </script>
	<div id="footer">Copyright © Sergey Grigorov</div>
</body>
</html>