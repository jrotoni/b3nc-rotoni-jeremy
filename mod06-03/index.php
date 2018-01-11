<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<title>PHP Programming - Syntax, Printing, and Variables</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php
	
	// $companyName = "";

	// $companyName = "Tuitt Coding Bootcamp";

	// echo $companyName;

	// echo $counter = 0;
	// echo "<br>";

	// $counter += 1;

	// echo $counter += 150;

	$bankBalance = 100;
	$deposit = 1000;

	if ($bankBalance < 100)
		$bankBalance = $bankBalance + $deposit;
	else
		echo "Your bank balance is greater than 100<br>";

	echo $bankBalance;

	?>

</body>
</html>