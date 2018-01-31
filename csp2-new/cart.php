<?php

session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
}

function getTitle() {
	echo 'Welcome to Kraff Beeer Philippines!';
}

include 'partials/head.php';

// create session variable
// $_SESSION['cart'] = array();

// create session variable for item counter (quantity)
// $_SESSION['item_count'] = 0;

$carts = $_SESSION['cart'];

$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>My Cart Page</h1>
	<?php
	$counter = 0;
	$totalAmount = 0;
		if( $carts == null) {
		echo'	
		<h3>Your cart is empty</h3>';
	} else {

		echo '
		<table>
		<thead>
		<th>Number</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Amount</th>
		<th>Remove</th>
		</thead>
		<tbody>';
			
	
		
		foreach ($carts as $key => $cartQuantity) {
			$counter = $counter + 1;

			echo '
			<tr>
				<td>'.$counter.'</td>
				<td>'.$items[$key]['name'].'</td>
				<td>'.$items[$key]['price'].'</td>
				<td>'.$cartQuantity.'</td>
				<td>'.$items[$key]['price'] * $cartQuantity.'</td>
				<td><i class="fa fa-trash" aria-hidden="true"></i></td>
			<tr>
			';

			$totalAmount = $totalAmount + $items[$key]['price'] * $cartQuantity;
		}

		echo '
		</tbody>
		</table>

		<h3>Total Amount: '.$totalAmount.'</h3>
		';
} //end of else		

?>
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';
?>

</body>
</html>