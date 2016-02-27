<?php
	session_start();
	require_once('new-connection.php');

	$query = "SELECT * FROM users";
	$users = fetch_all($query);

?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Quoting Dojo</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
	</script>

</head>
<body>
	<div class="container text-center">
		<h1>The quotes you were looking for:</h1>
		<hr>
		<hr>
		<?php 
			foreach($users as $user){
				$date_added = date('g:ia F d, Y', strtotime($user['created_at']));

				echo "<p>'". $user['quote'] . "'</p>
				<p> - " . $user['name'] . " at " . $date_added . "</p><hr><hr>";		

			}
		 ?>
		 <br>
		 <a href="index.php"><button class="btn btn-primary">Go Back</button></a>
		 <br>
		 <br>
	</div>
</body>
</html>