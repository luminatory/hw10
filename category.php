<?php
require_once 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php echo $_SERVER['HTTP_USER_AGENT'];   ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
html, body {
	height: 100%;
}

#footer {
	background-color: black;
	color: white;
	clear: both;
	text-align: center;
	padding: 5px;
}
</style>
</head>
<body>
	<div class="full-width-div">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><p class="text-danger">Home</p></a>
				</div>
				<div>
    <?php
				
				$mainMenu = new MenuCreate ();
				$categories = $mainMenu->getAllCategories ();
				$mainMenu->createMainMenu ( $categories );
				?>
      </div>
			</div>
		</nav>
		<div class="container alert alert-success" id="content">
			<div class="span5 fill">
	<?php
	$getCat = new MenuCreate ();
	$getCat->getCategories ();
	
	?>
	</div>

		</div>
	</div>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js">
	</script>
	<div id="footer">Copyright © Sergey Grigorov</div>
</body>
</html>