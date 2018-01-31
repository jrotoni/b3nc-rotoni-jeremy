<?php

$id = $_POST['user_id'];

$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = floatval($_POST['price']);
$category = $_POST['category'];

// echo "$username <br> $password <br> $email <br> $role <br> $id";

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$items[$id]['name'] = $name;
$items[$id]['description'] = $description;

if ($image != null) {
$items[$id]['image'] = 'assets/image/' . $image;
} 
// else {
// $items[$id]['image'] = $image;	
// }

$items[$id]['price'] = $price;
$items[$id]['category'] = $category;

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header("location: ../item.php?id=$id");