<?php
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
<link rel="stylesheet" href="css/app.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	<h2 id="welcomeTitle">Delete User</h2>
	<?php
		while($row = mysqli_fetch_array($users)){
			echo "{$row['user_fname']} <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\" class=\"deleteButton\">Delete</a><br>";
		}
	?>
</body>
</html>