<?php

require_once 'assets/lib/twelve_days.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php echo getTitle(); ?> Lyrics</title>

	<link rel="stylesheet" type="text/css" href="">

</head>
<body>

	<?php

	echo getLyrics();

	?>

	<script type="text/javascript">
		// get all day containers
		var days = document.querySelectorAll('[id^="day"]'); // array

		// hide all day containers except first day
		days.forEach(function(value, index) {
			if (index > 0)
				document.getElementById('day' + index).style.display = 'none';
		});
	</script>

	<script type="text/javascript" src="assets/lib/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="assets/js/animate_days.js"></script>

</body>
</html>