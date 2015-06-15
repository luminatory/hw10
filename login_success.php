<?php
/*session_start();
if(!session_is_registered(myusername)){
header('Location: http://mysite/hw7/main_login.php');
}*/
session_start();
if(!isset($_SESSION['myusername'])) {
    die('You need to be logged in!!!');
} else {
    echo  'Welcome, ' . $_SESSION['myusername'] . '!';
    echo' <br />';
    echo $_SESSION["StartTime"] = date("r");
     echo' <br />';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h1><?php echo 'Welcome, ' . $_SESSION['myusername'] . '!';?></h1> 
<div class="container">
   <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <a href='index.php?'><strong><span class="glyphicon glyphicon-ok"></span> Logged in! Click to procceed</strong></a>
                </div>
  </div>

  <p><?php echo $_SESSION['StartTime'] = date("r");?></p>
  </div>
</div>
</div>
</body>
</html>