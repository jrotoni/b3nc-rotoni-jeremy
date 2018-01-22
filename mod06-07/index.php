<?php

include_once 'assets/lib/hello_world.php';

require_once 'assets/lib/a_simple_require_file.php';

// prints a 2x3 table

function printTable($rows, $cols){
	echo "<table border=1>";

	for ($i=0; $i < $rows; $i++) { 
		echo "<tr>";
		for ($j=0; $j < $cols; $j++) { 
			echo "<td> Content </td>";
		}

		echo "</tr>";

	}

	echo "</table>";
};

	echo "<hr>";


	function add($a,$b){
		$sum = $a + $b;
		return $sum;
	}

	$number1 = 20;
	$number2 = 12;
	$total = add($number1,$number2);



	function longdate($timestamp)
	{
		
		return date("l F jS Y", $timestamp);

	}


	function fix_names($n1, $n2, $n3)
	{
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));
		return $n1 . " " . $n2 . " " . $n3;
	}
 ?>

 <?php 
 		$a1 = "BILLY"; $a2 = "peejay"; $a3 = "aLLaN";

 		function fix_names2()
 		{

 			global $a1; $a1 = ucfirst(strtolower($a1));
 			global $a2; $a2 = ucfirst(strtolower($a2));
 			global $a3; $a3 = ucfirst(strtolower($a3));
 		
 		}

  ?>

  <?php 

  		function solve_rectangle_area($length,$width){
  			return $length*$width;
  		}

   ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 <?php printTable(1,1);  
 		echo "<br>";
 		printTable(3,5);
 ?>
 <hr>

<?php 

	echo "<h2> Total is  $total </h2>";

 ?>

 <?php 

 	echo longdate(time());

  ?>

  <hr>

  <?php 

  	echo fix_names("BILLY", "peejay", "AlLaN");

   ?>

<hr>

<?php 

	echo $a1 . " " . $a2 . " " . $a3 . "<br>";
	fix_names2();
	echo $a1 . " " . $a2 . " " . $a3;

 ?>

<hr>

<?php 

echo solve_rectangle_area(4,10);

iAmRequired();

?>

</body>
</html>
