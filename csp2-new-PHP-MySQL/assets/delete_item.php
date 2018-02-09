<?php

$id = $_POST['user_id'];

$file = file_get_contents('items.json');
$items = json_decode($file, true);

foreach ($items as $key => $item) {
	if ($items[$key]['id']==$id) {
		$id = $key;
		break;
	}
}

array_splice($items, $id, 1);

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header('location: ../catalog.php');