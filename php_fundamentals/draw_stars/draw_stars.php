<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Stars</title>
</head>
<body>
	<?php
		function draw_stars($array){
			foreach($array as $value){
				if(is_numeric($value)){
					echo str_repeat("*", $value) . "<br>";
				}
				else{
					$letter = strtolower(substr($value, 0, 1));

					$letter_count = strlen($value);

					echo str_repeat($letter, $letter_count) . "<br>";
				}
			}
		}

		$array = array(3, 5, 1);

		$output = draw_stars($array);

		$words_array = array('Ben', 'George', 'Kathy');

		$outoutput = draw_stars($words_array);

		echo $output;
		echo $outoutput;

	?>
</body>
</html>