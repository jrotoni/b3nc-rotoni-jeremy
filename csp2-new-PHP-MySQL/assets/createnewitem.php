<?php

$name = $_POST['name'];
$image = $_POST['image'];
$price = floatval($_POST['price']);
$description = $_POST['description'];
$category = $_POST['category'];

if ($image != null) {
$appendImage = 'assets/image/' . $image;
} else {
	$appendImage = 'https://lorempixel.com/300/300/';
}

// echo $appendImage;
// echo $userName. ' ' . $passWord . ' ' . $email;

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$elementCount = abs( crc32( uniqid() ) );

$newItem = array('id' => $elementCount,
				'name' => $name, 
				'image' => $appendImage, 
				'price' => $price, 
				'description' => $description,
				'category' => $category);

array_push($items, $newItem);

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header('location: ../catalog.php');