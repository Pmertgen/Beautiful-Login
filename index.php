<?php 

if (isset($_POST["submit"])) {

	$email = $_POST["email"];
	$pw = password_hash($_POST["pw"], PASSWORD_DEFAULT);

	echo $email . "</br>" . $pw;

}

//very useful:
// https://stackoverflow.com/questions/30279321/how-to-use-password-hash