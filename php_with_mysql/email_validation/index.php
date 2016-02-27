<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Email Validation</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container text-center">
		<h1>Please enter your email address</h1>
		 <form class="form-inline" action="process.php" method="POST" >
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="hidden" name="action" value="enter">
		    <input type="text" class="form-control" id="email" name="email">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<br>
		<?php 
			if(isset($_SESSION['errors'])){
				foreach($_SESSION['errors'] as $error){
					echo "<p>" . $error . "</p>";
				}
			}
		?>
	</div>
</body>
</html>