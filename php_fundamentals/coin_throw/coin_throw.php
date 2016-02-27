<?php
	echo "Starting the program...";
	echo "<br>";

	$head_count = 0;
	$tail_count = 0;

	$number = range(1, 5000);

	for($i = 0; $i < count($number); $i++){
		$toss = rand(1, 2);
		if($toss == 1){
			$face = 'head';
			$head_count += 1;
		}
		else{
			$face = 'tail';
			$tail_count += 1;
		}

	echo "<br>";	
	echo "Coin tossed! You tossed a " . $face . "...! You've tossed a head " . $head_count . "time(s).... You've tossed a tail " . $tail_count . " time(s).";
	echo "<br>";

	}

	echo "<br>";
	echo "Ending the program...";

?>