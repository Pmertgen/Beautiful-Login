<!DOCTYPE html>
<html>
<head>
	<title>Beautiful Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
</head>
<body>

<div class="card bg-primary mx-auto">
	<div class="card-header text-center text-light">You are now logged in</div>
	<div class="card-body mx-auto">
		<?php 

if (isset($_POST["submit"])) {

	$email = $_POST["email"];
	$pw = password_hash($_POST["pw"], PASSWORD_DEFAULT);

	echo "Mail: " . $email . "</br>" . "Password: " . $pw;

}


//very useful:
// https://stackoverflow.com/questions/30279321/how-to-use-password-hash
?>
	</div>
</div>

</body>
</html>