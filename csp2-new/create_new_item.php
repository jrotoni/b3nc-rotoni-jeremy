<?php

session_start();

function getTitle() {
	echo 'Create New Item Page';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Create New Item Page</h1>

	<form id= "registerForm" method="POST" action="assets/createnewitem.php" class="form-group">
		<label for="name">Product Name</label>
		<input type="text" name="name" id="name" placeholder="Enter product name" class="form-control" required>

		<label for="image">Image</label>
		<input type="file" name="image" id="image" placeholder="Upload image" class="form-control">

		<label for="price">Price</label>
		<input type="number" name="price" id="price" placeholder="Enter price" class="form-control" required>

		<label for="description">Description</label>
		<textarea style="resize:none;" placeholder="Type product description here" name="description" id="description" class="form-control" required></textarea>

		<label for="category">Category</label>
		<select class="form-control" name="category">
			<option value="Category 1">Category 1</option>
			<option value="Category 2">Category 2</option>
			<option value="Category 3">Category 3</option>
			<option value="Category 4">Category 4</option>
			<option value="Category 5">Category 5</option>
			<option value="Category 6">Category 6</option>
		</select>

		<input type="submit" name="submit" id="submit" value="Create Item" class="btn btn-primary">
	</form>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';
?>
<!-- 
	<script type="text/javascript">
		$('#username').on('input', function(){
			var usernameText = $(this).val();
			// console.log(usernameText);
			$.post('assets/username_validation.php', 
				{username: usernameText}, 
				function(data, status) {
					// console.log('Processed ' + data);
					$('[for="username"]').html(data);
				});
		});

		$('#password').on('input', function(){
			if($('#password').val() == ""){
				$('#confirmPassword').prop('disabled', true);
			} else {
				$('#confirmPassword').prop('disabled', false);
			}
		});

		$('#confirmPassword').on('input', matchPassword);
		
		function matchPassword() {
				if ($('#password').val() == $(this).val()) {
					// console.log("conffeeeerrrmmm!!");
					$('[for="confirmPassword"]').html('Password <span class="green-message">match!</span>');	
				} else {
					$('[for="confirmPassword"]').html('Password <span class="red-message">not match!</span>');	
					// console.log("wrong");
				}	
		}

		$('#email').on('input', function() {
			var emailText = $(this).val();
			// console.log(usernameText);

			$.post('assets/email_address_validation.php',
				{ email: emailText },
				function(data, status) {
					// console.log('Processed: ' + data);
					$('[for="email"]').html(data);
				});
		});

	</script> -->

</body>
</html>