<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<title>PHP Programming - Expressions, Control Statements, and Loops</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>

	<?php
	for ($row=0; $row < 8; $row++) { 
		for ($col=0; $col < 8; $col++) { 
			if(($row%2==0 && $col%2==0) || ($row%2==1 && $col%2==1) ){
				echo "<span id=black></span>";
			}
			else {
				echo "<span id=white></span>";
			}
		}
		echo "<br>";
	}

	$a = 1;
	$b = 2;

	echo "Numbers before swap:";
	echo '<br>$a = ' . $a;
	echo '<br>$b = ' . $b;
	
	$c = $a;
	$a = $b;
	$b = $c;

	echo "<br>Numbers after swap:";
	echo '<br>$a = ' . $a;
	echo '<br>$b = ' . $b;

	echo "<br>";

	$a = 2;
	$b = 3;

	echo "Numbers before swap:";
	echo '<br>$a = ' . $a;
	echo '<br>$b = ' . $b;
	
	$a = $b + $a - ($b = $a);
	
	echo "<br>Numbers after swap:";
	echo '<br>$a = ' . $a;
	echo '<br>$b = ' . $b;

	echo "<br>";

	$greet = ['hello' => 35, 'hi' => 47];

	foreach ($greet as $key => $value) {
		echo "$value";
	}

	echo "<br>";

	$items = [
		['product' => 'Lenovo', 'price' => 400.50, 'quantity' => 5],
		['product' => 'Acer', 'price' => 400.50, 'quantity' => 5],
		['product' => 'HP', 'price' => 400.50, 'quantity' => 5],
		['product' => 'Dell', 'price' => 400.50, 'quantity' => 5]
	];

	foreach ($items as $key => $value) {
		echo $value['product'];
	}
	?>



</body>
</html>