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
	
	<div id="tableID">
		
	<?php
	//declare variables
	$counter = 0;
	$totalAmount = 0;

	if( $carts == null) {
		echo'	
		<h3>Your cart is empty</h3>';
	} else {

		echo '
		<table style="text-align: center;">
		<thead>
		<th>Number</th>
		<th>Image</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Amount</th>
		<th>Remove</th>
		</thead>
		<tbody>';
			

	
		
		foreach ($carts as $id => $cartQuantity) {
			$counter = $counter + 1;

			foreach ($items as $key => $item) {
				if ($items[$key]['id']==$id) {
					echo '
								<tr id="item'.$id.'">
									<td>'.$counter.'</td>
									<td><img src="'.$items[$key]['image'].'"></td>
									<td>'.$items[$key]['name'].'</td>
									<td>PHP '.number_format($items[$key]['price']).'</td>
									<td><input type="number" value="'.$cartQuantity.'" oninput="updateSubtotal('.$id.',this.value)"></td>
									<td class="subtotal" id="price'.$id.'">PHP '.number_format($items[$key]['price'] * $cartQuantity).'</td>
									<td><button style="width: 50px; height: 50px;" onclick="deleteCart('.$id.')"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
								<tr>
								';

								$totalAmount = $totalAmount + $items[$key]['price'] * $cartQuantity;
					break;
				}
			} 

		} 

		echo '
		</tbody>
		</table>

		<h3 id="computeAmount";>Total Amount: PHP '.number_format($totalAmount).'</h3>
		';
} //end of else		

?>
	</div>
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';
?>

<script type="text/javascript">
	function deleteCart(deleteItem) {
		//console.log(deleteItem);
		var id = deleteItem;
		$('#item'+ id).remove();
		
		$.post('assets/delete_cart.php',
		{

			item_id: id,
			//item_quantity: quantity
		},
		function(data, status) {
			//console.log(data);

			//$('#tableID').html(data);
			$('a[href="cart.php"]').html(data);
		}


		);
		compute();
	}

	function compute() {
		var totalAmount = 0;
		var subtotalAmount = document.querySelectorAll(".subtotal");
		var count = subtotalAmount.length;
		var price = '';
		for (x=0; x<count; x++){
			price = subtotalAmount[x].innerHTML;
			price = price.split("PHP ");
			price = price[1];
			price = price.replace(",", "");
			price = parseInt(price);
			totalAmount += price;
		}
		//console.log(count);


		$('#computeAmount').html("Total Amount: PHP " + totalAmount.toLocaleString());
		if(totalAmount == 0) {
			location.reload();
		}
	}

	function updateSubtotal(changeSubtotal, valueQuantity) {
		var id = changeSubtotal;
		//var valueQuantity = $(this).val();
		//alert(valueQuantity);
		$('#price'+ id).html("PHP " + valueQuantity);
	}
</script>

</body>
</html>