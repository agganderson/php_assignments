<?php
	function multiply($array){
		for($i = 0; $i < count($array); $i++){
			$array[$i] = $array[$i] * 5;
		}
		return $array;
	}

	$by_five = array(1,2,3,4);

	$do_this = multiply($by_five);
	var_dump($do_this);
?>

---ANSWER---

<?php
	$by_five = array(1,2,3,4);
	$factor = 5;
	function multiply($by_five, $factor){
		$answer = array();
		foreach($by_five as $value){
			$answer[] = $value * $factor;
		}
		return $answer;
	}
	$five = multiply($by_five, $factor);
	var_dump($five);
?>