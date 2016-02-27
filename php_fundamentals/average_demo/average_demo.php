<?php

function compute_average($array){
	$number_of_values = count($array);
	$total = 0;
	foreach ($array as $value){
		$total += $value;
	}

	$average = $total/$number_of_values;

	return $average;
}

$numbers = array(numbers here);

$average = compute_average($numbers);
echo $average;


?>