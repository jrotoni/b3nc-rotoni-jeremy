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

	// Activity 1

	$lyrics = array("stars", "shine", "yellow");

	echo "\"Look at the  $lyrics[0], look how they $lyrics[1] for you, and everything you do. <br>";
	echo "Yeah, they were all $lyrics[2].\"";

	// Activity 2

	echo "<ul>
		<li>$lyrics[0]</li>
		<li>$lyrics[1]</li>
		<li>$lyrics[2]</li>
	</ul>";

	// Activity 3

	$x = 0;

	$fname = array("Steph", "Russell", "LeBron");
	$lname = array("Curry", "Westbrook", "James");
	$team = array("Warriors", "Thunders", "Cavaliers");
	$jersey = array(30, 0, 23);

	while($x <= 2) {
		echo "Player: $fname[$x] $lname[$x] <br>";
		echo "Team: $team[$x] <br>";
		echo "Jersey: $jersey[$x] <br>";
		echo "<br>";	
		$x++;
	}

	// Activity 4

	$x = 0;
	
	echo "<table>";
	echo "<tr>";
	echo "<th>Players</th>";
	echo "<th>Team</th>";
	echo "<th>Jersey</th>";
	echo "</tr>";

	while($x <= 2) {
		echo "<tr>
				<td>$fname[$x] $lname[$x]</td>
				<td>$team[$x]</td>
				<td>$jersey[$x]</td>
			</tr>";
		$x++;
	}

	echo "</table>";
	
	?>

</body>
</html>