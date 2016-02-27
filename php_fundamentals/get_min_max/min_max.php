<?php
	function find_min_max($array){
		$min = 0;
		$max = 0;

		for($counter = 0; $counter < count($array); $counter++){

			$current_value = $array[$counter];

			if($counter == 0 OR $max < $current_value){
				$max = $current_value;
			}

			if($counter == 0 OR $min > $current_value){
				$min = $current_value;
			}
		}

		$min_max = array('min' => $min, 'max' => $max);
		return $min_max;
	}

	$thearray = array(3, 6, 10, 9);

	$output = find_min_max($thearray);

	var_dump($output);




// $array = array(1, 3, 6, 10);
// $max = $temp1 = 0;
// $min = $temp2 = 0;
// for ($i = 0 ; $i < count($array); $i++) {
//    if ($i == 0) {
//         $max = $temp1 = $array[$i];
//    }
//    if ($i > 0) {
//        if ($array[$i] > $temp1) {
//              $max = $array[$i];

//        }
//    }

//    if ($i < 0){
//    		if ($array[$i] < $temp2){
//    			$min = $array[$i];
//    		}
//    }
// }
// echo $max;
// echo "<br>";
// echo $min;


?>