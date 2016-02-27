<?php
	$a = array(1, 3, 'Hi');
	function print_lists($a){
		$answer = "";
		foreach($a as $values){
			$answer .= "<li>" . $values . "</li>";
		}
		return $answer;
	}

	echo "<ul>" . print_lists($a) . "</ul>";
?>

--ANSWER--

<?php
	$a = array(2, 3, "hello");
	
	function print_lists($a)
	{
		$result = "";
		foreach($a as $values)
		{
			$result .= "<li>" . $values . "</li>";
		}
		return $result;
	}
	
	echo "<ul>" . print_lists($a) . "</ul>";
?>