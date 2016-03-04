<?php 
	echo "is this working?";

	$values = array();
	for($i = 0; $i < 10; $i++){
		$num = rand(0, 100);
		array_push($values, $num);
	}

	var_dump($values);


 ?>