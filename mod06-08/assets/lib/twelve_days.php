<?php

function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics() {

	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eigth', 'ninth', 'tenth', 'elevent', 'twelfth');

	$gifts = array(
		'A partride in a pear tree',
		'Two turtle doves',
		'Three French hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eight maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming'
	);

	for ($i = 0; $i < count($days); $i++) {

		if ($i != 11)
			echo '<div id="day' . $i . '" onclick="hideShowDays(this.id)">';
		else
			echo '<div id="day' . $i . '">';

		echo 'On the ' . $days[$i] . ' day of Christmas my true love gave to me<br>';

		if ($i == 0)  // first day
			echo $gifts[$i] . '<br>';
		else // days 2 to 12
			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo 'And ' . $gifts[$j] . '<br>';
				else
					echo $gifts[$j] . '<br>';
			}

		echo '</div>';
	}
}