<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  require_once("phpscripts/config.php");

  $ip = $_SERVER["REMOTE_ADDR"];
  //echo $ip;

  if(isset($_POST['submit'])) {
    //echo "Thanks for clicking...";
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username != "" && $password != "") {
      $result = logIn($username, $password, $ip);
      $message = $result;
    }else{
      $message = "Please fill in the required fields.";
    }
  }
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../admin/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>
  <body>
  <div id="loginCont">
      <img src="images/logo.svg" id="logo">
      <h1 id="welcomeTitle">Welcome!</h1>
      <p class="errorTxt"><?php if(!empty($message)){echo $message;} ?></p>
      <form action="admin_login.php" method="post">
        <input type="text" name="username" value="" placeholder="Username" id="username">
        <input type="password" name="password" value="" placeholder="Password" id="password">
        <input type="submit" name="submit" value="Login" id="submit">
      </form>
</div>

  </body>
</html>