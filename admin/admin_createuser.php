<?php
	require_once('phpscripts/config.php');
	//confirm_logged_in();

//Creates a new user
if(isset($_POST['submit'])){

	$fname = trim($_POST['fname']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);
	$lvllist = $_POST['lvllist'];
	if(empty($lvllist)){
		$message = "Please select a user level.";
	}else{
		$result = createUser($fname, $username, $password, $email, $lvllist);
		$message = $result;
	}
}

//Sends email with username and password to newly created user
if(isset($_POST['fname'])){
		$fname = $_POST['fname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$direct = "admin_usercreated.php";

				$sendMail = submitMessage($fname, $username, $password, $email, $direct);
				echo "Street is empty";

	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<h2 id="welcomeTitle">Create User</h2>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post">
		<label class="createLabel">First Name:</label>
		<input type="text" name="fname" value=""><br><br>

		<label class="createLabel">Username:</label>
		<input type="text" name="username" value=""><br><br>

		<label class="createLabel">Password:</label>
		<input type="text" name="password" value=""><br><br>

		<label class="createLabel">Email:</label>
		<input type="text" name="email" value=""><br><br>

		<select name="lvllist" class="createLevel">
			<option value="">Select User Level</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select><br><br>

		<input type="submit" name="submit" value="Create User">

	</form>
</body>
</html>