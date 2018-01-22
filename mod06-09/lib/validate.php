<?php

// $_GET -> super global variable
// $userName = htmlspecialchars($_GET['username']);
// $passWord = htmlspecialchars($_GET['password']);
// $firstName = htmlspecialchars($_GET['firstname']);

// $_POST -> super global variable
$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);
$firstName = htmlspecialchars($_POST['firstname']);

echo "
	<h3>Username: $userName</h3>
	<h3>Password: $passWord</h3>
	<h3>$firstName Welcome to PHP world!</h3>
";