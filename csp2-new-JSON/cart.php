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

	//var_dump(array_unique($_SESSION['cartID']));

	if( $carts == null) {
		echo '	
		<h3>Your cart is empty!</h3> 
		';
	} else {

		echo '
		<table style="text-align: center;">
		<thead>
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
					$computedSubtotal = number_format($items[$key]['price'] * $cartQuantity);
					//$_SESSION['cartID'][$counter] = $id;
					echo '
								<tr id="item'.$id.'">
									<td><img src="'.$items[$key]['image'].'"></td>
									<td>'.$items[$key]['name'].'</td>
									<td>PHP <span id="itemPrice'.$id.'">'.number_format($items[$key]['price']).'</span></td>
									<td><input type="number" value="'.$cartQuantity.'" oninput="updateSubtotal('.$id.',this.value)"></td>
									<td>PHP <span class="subtotal" id="price'.$id.'">'.$computedSubtotal.'</span></td>
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
		//alert(deleteItem);
		var id = deleteItem;

		$('#item'+ id).remove();
		
		// $.post('assets/delete_cart.php',
		// {

		// 	item_id: id,
		// },
		// function(data, status) {
		// 	alert(data);
		// }
		// );

		$.ajax({
		    type: "POST",
		    url: 'assets/delete_cart.php',
		    dataType: "json",
		    data: { item_id: id},
		    success: function(data) {
		        // console.log(data);
		        // alert(data[0]);

		    $('a[href="cart.php"]').html(data[1]);
		    
	    	// console.log(data);
		    // for (x=1; x<=data[0]; x++) {
		    // 	//$('.counterClass').html(x);
		    // }
		    }
		});

		compute();
		//$("#counterID").load(window.location.href + " #counterID" );
	}

	function compute() {
		var totalAmount = 0;
		var subtotalAmount = document.querySelectorAll(".subtotal");
		var count = subtotalAmount.length;
		var price = '';
		for (x=0; x<count; x++){
			price = subtotalAmount[x].innerHTML;
			//price = price.replace(",", "");
			price = price.replace(/,/g , "");
			price = parseInt(price);
			totalAmount += price;
		}

		$('#computeAmount').html("Total Amount: PHP " + totalAmount.toLocaleString());
		if(totalAmount == 0) {
			$( "#tableID" ).load(window.location.href + " #tableID" );
		}
	}

	function updateSubtotal(changeSubtotal, valueQuantity) {
		var id = changeSubtotal;
		var itemQuantity = valueQuantity;
		var amount = $('#itemPrice' + id).html();
		amount = amount.replace(",", "");
		$('#price'+ id).html((valueQuantity*amount).toLocaleString());

		$.post('assets/update_cart.php',
		{

			item_id: id,
			item_quantity: itemQuantity
		},
		function(data, status) {
			//console.log(data);

			$('a[href="cart.php"]').html(data);
		}
		);

		compute();
	}

</script>

</body>
</html>