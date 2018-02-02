<?php

session_start();

$id = $_POST['item_id'];
$quantity = $_POST['item_quantity'];

$_SESSION['cart'][$id] = $quantity;

$_SESSION['item_count'] = array_sum($_SESSION['cart']);
echo 'My Cart <strong style="color:red;">( '.$_SESSION['item_count'].' )</strong>';