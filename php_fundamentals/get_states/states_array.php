<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>States</title>
</head>
<body>
	<form>
		<label for="states">States</label>

		<select name="states">

		<?php
			$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

			for($i = 0; $i < count($states); $i++){

				echo "<option value='" . $states[$i] . "'>" . $states[$i] . "</option>";
			}
		?>

		</select>
	</form>

	<form>
		<label for="states">States</label>

		<select name="states">
			<?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

				foreach($states as $state){
					echo "<option value='" . $state . "'>" . $state . "</option>";
				}

			?>
		</select>
	</form>

	<form>
		<label for="states">States</label>

		<select name="states">
			<?php

				array_push($states, 'NJ', 'NY', 'DE');

				foreach($states as $state){
					echo "<option value='" . $state . "'>" . $state . "</option>";
				} 

			?>
		</select>
	</form>
</body>
</html>
















