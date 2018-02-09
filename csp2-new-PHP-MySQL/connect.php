<?php

// Define required connection parameters
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'kraffbeer2';


// Create a connection to database
$conn = mysqli_connect($hostname, $username, $password, $db_name);


// Test if connection was succesfull
if($conn) {
	echo 'Database connection was succesfull';
} else {
	die('Connection failed: ' . mysqli_error($conn));
}