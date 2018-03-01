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
	}

	function editUser($id, $fname, $username, $password, $email) {
		include('connect.php');
		
		$updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_name='{$username}', user_pass='{$password}', user_email='{$email}' WHERE user_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			redirect_to("admin_index.php");
		}else{
			$message = "Woops! There was an error";
			return $message;
		}

		mysqli_close($link);
	}

	function deleteUser($id) {
		include('connect.php');
		$delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
		$delquery = mysqli_query($link, $delstring);
		if($delquery) {
			redirect_to("../admin_index.php");
		}else{
			$message = "Unable to delete user.";
			return $message;
		}
		mysqli_close($link);
	}


?>