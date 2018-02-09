<?php

require '../connect.php';

$id = $_POST['user_id'];

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = 1;
//$image = $_POST['image'];
$image = 'http://lorempixel.com/300/300';
//$role_id = 3;
$first_name = 'Juan';
$last_name = 'Dela Cruz';
$address = 'Mandaluyong City';
$contact = '09997788554';

$sql = "update users set username = '$username', password = '$password', email = '$email', role_id = '$role', image = '$image', first_name = '$first_name', last_name = '$last_name', address = '$address', contact = '$contact' where id = '$id'";

mysqli_query($conn, $sql);

// echo "$username <br> $password <br> $email <br> $role <br> $id";

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);

// $users[$id]['username'] = $username;
// if ($password != null) {
// $users[$id]['password'] = $password;
// }
// $users[$id]['email'] = $email;
// $users[$id]['role'] = $role;

// $jsonFile = fopen('users.json', 'w');
// fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
// fclose($jsonFile);

header("location: ../user.php?id=$id");
mysqli_close($conn);