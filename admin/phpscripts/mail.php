<?php
//This file will load all of your php scripts

function redirect_to($location) {
	if($location != NULL){
			header("Location: {$location}");
			exit;

	}
}


//Sends email to new user with login information
function submitMessage($name, $email, $message, $direct) {
	$to = "connor.n.clark@gmail.com";
	$subj = "Message from customer submitted via connorclark.ca";
	$extra = "Reply-To:".$email;
	$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nComments: ".$message;
	mail($to,$subj,$msg,$extra);
	$direct = $direct."?name={$name}";
	redirect_to($direct);
 }

?>