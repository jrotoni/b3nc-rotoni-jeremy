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

	for ($counter=1; $counter <= 10; $counter++) { 
		echo $counter;
		if($counter < 10) 
			echo "-";

	}

	echo "<div style='text-align: center;'>";
	for($counter = 1; $counter <= 10; $counter++) {
		
		for($x = 1; $x <= $counter; $x++){	
			if($x%2==0){
				echo "<span class='animated flash infinite'>*</span> ";	
			}
			echo "* ";
		}

		echo "<br>";
	}

	echo "</div>";

	echo "<table>";
	for($row=1; $row <= 11; $row++){
		echo "<tr>";
		for($col=1; $col <= 11; $col++) {
			if($col%2==0 || $row%2==0){
			echo "<td style='background-color: lightgrey;'>";
			echo $row * $col . " ";
			echo "</td>";
			} else if ($col%2==1){
			echo "<td>";
			echo $row * $col . " ";
			echo "</td>";	
				
			}
		}
		// echo "<br>";
		echo "</tr>";
	}
	echo "</table>";

	for ($col=1; $col <=10; $col++) { 
		for ($row=10; $row >= $col ; $row--) { 
			echo "* ";
		}
		echo "<br>";
	}

	for($num=1; $num<=50; $num++){
		if($num%3==0)
			echo "$num Fizz <br>";
		if($num%5==0)
			echo "$num Buzz <br>";
		if($num%3==0 AND $num%5==0)
			echo "$num FizzBuzz <br>";

	}

	?>



</body>
</html>