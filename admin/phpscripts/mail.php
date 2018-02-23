<?php
//This file will load all of your php scripts


//Sends email to new user with login information
function submitMessage($fname, $username, $password, $email, $direct) {
	$to = $email;
	$subj = "Your new Username + Password";
	$extra = "Reply-To:".$email;
	$msg = 
		"Name: ".$fname.
		"\n\nUsername: ".$username.
		"\n\nPassword: ".$password.
		"\n\nEmail: ".$email;
	mail($to,$subj,$msg,$extra);
	$direct = $direct."?fname={$fname}";
	redirect_to($direct);
 }

?>