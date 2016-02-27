<?php
	$users = array(
		array('user' => '1', 'first_name' => 'Chloe', 'last_name' => 'Uce'),
		array('user' => '2', 'first_name' => 'Michael', 'last_name' => 'Choi'),
		array('user' => '3', 'first_name' => 'Peggy', 'last_name' => 'Carter'),
		array('user' => '4', 'first_name' => 'Melissa', 'last_name' => 'Johnson'),
		array('user' => '5', 'first_name' => 'Andrea', 'last_name' => 'Dude'),
		array('user' => '6', 'first_name' => 'David', 'last_name' => 'Blasts'),
		array('user' => '7', 'first_name' => 'Heather', 'last_name' => 'Georgeson'),
		array('user' => '8', 'first_name' => 'Steve', 'last_name' => 'Rogers'),
		array('user' => '9', 'first_name' => 'Natasha', 'last_name' => 'Romanov'),
		array('user' => '10', 'first_name' => 'Frodo', 'last_name' => 'Baggins'),
		array('user' => '11', 'first_name' => 'Gandalf', 'last_name' => 'Gray'),
		array('user' => '12', 'first_name' => 'Blue', 'last_name' => 'Sargent'),
		array('user' => '13', 'first_name' => 'Don', 'last_name' => 'Doug'),
		array('user' => '14', 'first_name' => 'Maverick', 'last_name' => 'McClintock'),
		array('user' => '15', 'first_name' => 'Brad', 'last_name' => 'Bartlett'),
		)
	
?>

<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>HTML TABLE</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style>
		#five {
			background-color: black;
			color: white;
		}
	</style>

</head>
<body>

	<div class="container">
	  <table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>User #</th>
	        <th>First Name</th>
	        <th>Last Name</th>
	        <th>Full Name</th>
	        <th>Full Name in Upper Case</th>
	        <th>Length of Full Name (w/o spaces)</th>
	      </tr>
	    </thead>
	    <tbody>
	   	  <?php foreach($users as $person){

			 ?>

	      <tr>
	        <td><?= $person['user'] ?></td>
	        <td><?= $person['first_name'] ?></td>
	        <td><?= $person['last_name'] ?></td>
	        <td><?= $person['first_name'] . " " . $person['last_name'] ?></td>
	        <td><?= strtoupper($person['first_name'] . " " . $person['last_name'])  ?></td>
	        <td><?= strlen("{$person['first_name']}") + strlen("{$person['last_name']}") ?></td>
	      </tr>
	      <?php } ?>
	    </tbody>
	  </table>
	</div>

</body>
</html>