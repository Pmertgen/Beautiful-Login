<!DOCTYPE html>
<html>
<head>
	<title>Beautiful Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
</head>
<body>

<div class="card bg-primary mx-auto">
	<div class="card-header text-center text-light">Beautiful Login</div>
	<div class="card-body mx-auto">
		<?php 

if (isset($_POST["submit"]) && !empty($_POST["email"])) {

		$email = $_POST["email"];
		$pw = password_hash($_POST["pw"], PASSWORD_DEFAULT);

	echo "You are logged in</br>";
	echo "Mail: " . $email . "</br>" . "Password: " . $pw;

}

else{

	echo "You are not logged in, please go back";
}


//very useful:
// https://stackoverflow.com/questions/30279321/how-to-use-password-hash
?>
	</div>
</div>

</body>
</html>