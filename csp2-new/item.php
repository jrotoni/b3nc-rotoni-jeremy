<?php

session_start();

if (isset($_SESSION['current_user'])) {
	// if ($_SESSION['role'] != 'admin') {
	// 	header('location: home.php');
	// }
} 

function getTitle() {
	echo 'Item';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Item Page</h1>

		<?php

		$id = $_GET['id'];
		$file = file_get_contents('assets/items.json');
		$items = json_decode($file, true);

		/*foreach ($users as $key => $user) {
			if ($key==$id) {
				break;
			}
		} <?php 
		echo $user['username']; ?>*/

		?>
			
		<table>
			<tr>
				<td>Product Name</td>
				<td><?php echo $items[$id]['name']; ?></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><img src="<?php echo $items[$id]['image']; ?>" alt="Image of Beer"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><?php echo $items[$id]['price']; ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $items[$id]['description']; ?></td>
			</tr>			
			<tr>
				<td>Category</td>
				<td><?php echo $items[$id]['category']; ?></td>
			</tr>
		</table>

		<a href="catalog.php"><button class="btn btn-default">Back</button></a>

		<?php
		if (isset($_SESSION['current_user'])) {
		if ($_SESSION['role'] == 'admin') {
			echo '
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editItemModal" data-index="'.$id.'" id="editItem">Edit</button>

			<button id="deleteItem" class="btn btn-danger" data-index="<?php echo $id; ?>" data-toggle="modal" data-target="#deleteItemModal">Delete</button>
			';
		} else {
			echo '<button class="btn btn-primary">Add to Cart</button>';
		}
	} else {
		echo '<button class="btn btn-primary">Add to Cart</button>';
	}
		?>


	</main>

	<!-- Edit Modal -->
	<div id="editItemModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	  		
	    <!-- Modal content-->
	  	<form method="POST" action="assets/update_item.php">
	  	<input hidden name="user_id" value="<?php echo $id; ?>">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Edit Item Details</h4>
	      </div>
	      <div id="editItemModalBody" class="modal-body">
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">Save</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>
	  	</form>

	  </div>
	</div>

	<!-- Edit Modal -->
	<div id="deleteItemModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	  		
	    <!-- Modal content-->
	  	<form method="POST" action="assets/delete_item.php">
	  	<input hidden name="user_id" value="<?php echo $id; ?>" style="display: none;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Delete Item</h4>
	      </div>
	      <div id="deleteUserModalBody" class="modal-body">
	      	<p>Do you really want to delete <?php echo $items[$id]['name']; ?>?</p>
	      	<img src="<?php echo $items[$id]['image']; ?>" alt="Image of Beer">
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-danger">Yes</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
	      </div>
	    </div>
	  	</form>

	  </div>
	</div>
	

	

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';
?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#editItem').on('click',function(){
			var userID = $(this).data('index');
			$.get('assets/edit_item.php',
				{
					id: userID
				},
				function(data, status) {
					$('#editItemModalBody').html(data);
					// console.log(data);
				});
		});
		});
</script>

</body>
</html>