<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>GET, POST and SESSIONS</title>

</head>
<body>

	<?php

	// $userName = htmlspecialchars($_GET['username']);
	// $passWord = htmlspecialchars($_GET['password']);
	// $firstName = htmlspecialchars($_GET['firstname']);

	// echo $userName . '<br>';
	// echo $passWord . '<br>';
	// echo $firstName;

	?>

	<!-- method="GET" -> get request-->
	<form method="POST" action="lib/validate.php">

		<label for="username">Username</label>
		<input type="text" name="username" id="username">

		<label for="password">Password</label>
		<input type="password" name="password" id="password">

		<label for="firstname">Firstname</label>
		<input type="text" name="firstname" id="firstname">

		<input type="submit" name="submit" value="Submit">
	
	</form> <!-- /form -->

</body>
</html>