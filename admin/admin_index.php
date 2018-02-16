<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in(); //turn on to prevent ability to login via url
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>
  <body>

<?php
  if($_SESSION['current_hour'] <= "11") {
    $greeting = "What's for breakfast ";
  }elseif($_SESSION['current_hour'] >= "12" && $_SESSION['current_hour'] <= "16") { 
    $greeting = "What's for lunch ";
  }elseif($_SESSION['current_hour'] >= "17") { 
    $greeting = "What's for dinner ";
  }
?>

<h1><?php echo $greeting; echo $_SESSION['users_fname']; ?>?</h1>

<br>
<p id="lastLogin">Last logged in: <?php echo $_SESSION['users_timestamp']; ?>.</p>
<div id="logoutButtonCont"><a href="phpscripts/caller.php?caller_id=logout" id="logoutButton">Log Out</a></div>

</body>
</html>