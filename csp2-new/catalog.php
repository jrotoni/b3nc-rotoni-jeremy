<?php

session_start();

function getTitle() {
	echo 'Catalog';
}

include 'partials/head.php';

// import JSON file
$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

// retrieve all categories
$categories = array_column($items, 'category');
// var_export($categories);

// Filter unique entry of category
$categories = array_unique($categories);
sort($categories);

$result = array();

if (isset($_GET['category']) && $_GET['category']!='All') {
$cat = $_GET['category'];
// echo $cat;

// Filter items based on category chosen
foreach ($items as $item) {
	if ($item['category'] === $cat) {

		array_push($result, $item);
	}
}


} else {
	// show all items

	$result = $items;
	// var_dump($result);
}


?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Catalog Page</h1>

		<!-- add new item page -->
		<?php
		if (isset($_SESSION['current_user'])){
		  if ($_SESSION['role'] == 'admin') {
		    echo '<a href="create_new_item.php">
		    	<button class="btn btn-primary">Add New Item</button>	
		    </a>';
		  }
		}
		?>

		<form method="GET" id="myForm">	
			<select class="form-control" name="category" onchange="myForm()">
				<option>All</option>
				<?php

				foreach ($categories as $category) {
					if ($category==$_GET['category']) {
						echo '<option selected>'.$category.'</option>';
					} else {
					echo '<option>'.$category.'</option>';
						
					}
				}

				?>
			</select>
			
			<!-- <button class="btn btn-primary" type="submit" name="search">Search</button> -->
		</form>
		
		<div class="items-wrapper">
			<?php

			foreach ($result as $key => $item) {
				echo '
				<div class="item-parent-container form-group">
				<a href="item.php?id=' . $item['id'] . '" style="text-decoration: none;">
				<div class="item-container">
				<h3>' . $item['name'] . '</h3>
				<img src="'. $item['image'] .'" alt="">
				<p>PHP '. $item['price'] .'</p>
				<p>'. $item['description'].'</p>
				</div> <!-- /.item-container -->
				</a>
				<input id="itemQuantity'.$item['id'].'" type="number">
				<button class="btn btn-primary form-control" value="0" min="0" onclick="addToCart('.$item['id'].')">Add to Cart</button>

				</div>
			';
			}

			?>
			
		</div>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';
?>

<script type="text/javascript">
	function myForm(){
		document.getElementById('myForm').submit();
	}

	function addToCart(itemID) {
		// console.log(itemID);
		var id = itemID;
		var quantity = $('#itemQuantity' + id).val();
		// console.log(quantity);

		// create a post request to update session cart variable

		$.post('assets/add_to_cart.php',
		{

			item_id: id,
			item_quantity: quantity
		},
		function(data, status) {
			// console.log(data);

			$('a[href="cart.php"]').html(data);
		}
		);
	}
</script>

</body>
</html>