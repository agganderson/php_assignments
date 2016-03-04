<?php 

	for($i = 0; $i < 20; $i++){

			$score = rand(50, 100);

			if($score < 70){
				$grade = "D";
			}
			elseif($score >= 70 and $score < 80){
				$grade = "C";
			}
			elseif($score >= 80 and $score < 90){
				$grade = "B";
			}
			else{
				$grade = "A";
			}

			echo "<h1>Your score is: " . $score . "/100.</h1>";
			echo "<h2>Your frade is " . $grade . ".</h2>";
		}

 ?>
