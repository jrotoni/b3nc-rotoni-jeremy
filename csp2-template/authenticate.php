<?php

session_start();

// $users = [
// 	['username' => 'admin', 'password' => 'abc123'],
// 	['username' => 'billy', 'password' => 'ABC*()'],
// 	['username' => 'user1', 'password' => 'abc123ABC*()']
// ];

require 'assets/users.php';

$isLoginSuccessful = false;  // monitor login status

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);

// echo $userName;
// echo $passWord;

foreach ($users as $user) {
	// echo $user['username'] . '<br>';
	// echo $user['password'] . '<br>';

	if ($user['username'] == $userName && $user['password'] == $passWord) {
		// echo $userName . ' was found.';
		// echo 'Password is correct.';
		// header('location: home.php');  // will reroute to home.php
		$isLoginSuccessful = true;
		break;
	}
}

if ($isLoginSuccessful) {
	// successful login
	// session_start();
	$_SESSION['current_user'] = $userName; 
	header('location: home.php');
}
else {
	// failed login
	header('location: login.php');
}

if (isset($_SESSION['current_user']) && $isLoginSuccessful)
	$_SESSION['message'] = 'Login was successful.';
else
	$_SESSION['message'] = 'Login was not successful.';