<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in(); //turn on to prevent ability to login via url

//Redirect to edit user if first time logging in. (If ip = 'no' = first time)
if(isset($user_ip['no'])){
    header('Location: admin_edituser.php');
  }else{
    header('Location: admin_index.php');
  }



//INITIAL VISIT REDIRECT WORKS FOR THE FIRST TIME, BUT WON'T WORK AFTER INITIAL VISIT. LOCAL HOST STARTS CONTINUOUS LOOP OF REDIRECT
//Check if first time login in - if so, redirect to edit user
/*if(isset($_COOKIE['page_viewed'])){
    header('Location: admin_index.php'); //if not initial visit, remain on admin_index.php
    exit();
} else { 
    setcookie('page_viewed', true, EXPIRE); //switch cookie to page_viewed after initial visit.
    header('Location: admin_edituser.php'); //redirect to admin_edituser.php page on initial visit
    exit();
}*/

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
<div>
  <div id="createuserButtonCont"><a href="admin_createuser.php" id="createuserButton">Create User</a></div>
  <div id="createuserButtonCont"><a href="admin_edituser.php" id="createuserButton">Edit User</a></div>
  <div id="createuserButtonCont"><a href="admin_deleteuser.php" id="createuserButton">Delete User</a></div>
  <div id="createuserButtonCont"><a href="phpscripts/caller.php?caller_id=logout" id="createuserButton">Log Out</a></div>
</div>
</body>
</html>