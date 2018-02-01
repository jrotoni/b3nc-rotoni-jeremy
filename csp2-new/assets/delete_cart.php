<?php

session_start();

$id = $_POST['item_id'];
//$deleteCart = $_SESSION['cart'];
//$quantity = $_POST['item_quantity'];

// echo $id. ' '.$quantity;

// update the items for session cart variable

//$_SESSION['cart'][$id] = $quantity;
// $_SESSION['item_count'] = $_SESSION['item_count'] + $quantity;

//$_SESSION['item_count'] = array_sum($_SESSION['cart']);

//echo 'The ID is = ' .$id.' ';

unset($_SESSION['cart'][$id]);
$_SESSION['item_count'] = array_sum($_SESSION['cart']);

// array_splice($_SESSION['cart'], $id, 1);

//var_dump($_SESSION['cart']);
echo 'My Cart <strong style="color:red;">( '.$_SESSION['item_count'].' )</strong>';

