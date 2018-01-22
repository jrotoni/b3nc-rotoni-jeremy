<?php

session_start();

session_destroy();

function getTitle() {
	echo 'Logout';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Logout Page</h1>

		<h3>User was succesfully log-out</h3>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';
?>

</body>
</html>