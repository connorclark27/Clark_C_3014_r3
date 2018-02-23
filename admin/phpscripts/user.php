<?php

	function createUser($fname, $username, $hashed, $email, $lvllist) {
		include('connect.php');
		$userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$hashed}', '{$email}', '{$lvllist}', 'no', 'no')";
		echo $userstring;

		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
			redirect_to('admin_index.php');
		}else{
			$message = "Please try again.";
			return $message;
		}

		//hash $password (scramble it up)
		$hashed = hash('sha512', $password);
	}


?>