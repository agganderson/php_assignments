<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login and Register</title>
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
	<div class="container">
		<h2>Login</h2>
		<?php 
			if(isset($_SESSION['errors'])){
				foreach($_SESSION['errors'] as $error){
					echo "<p>" . $error . "</p>";
				}
				unset($_SESSION['errors']);
			}
		?>
		 <form role="form" action="process.php" method="POST">
		 	<input type="hidden" name="action" value="login">
		  <div class="form-group">
		    <label>Email Address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label>Password:</label>
		    <input type="password" class="form-control" id="password" name="password">
		  </div>
		  <button type="submit" class="btn btn-default" value="login">Login</button>
		</form>

		<br>
		<hr>
		<br>

		<h2>Register</h2>
		<?php 
			if(isset($_SESSION['errors'])){
				foreach($_SESSION['errors'] as $error){
					echo "<p>" . $error . "</p>";
				}
				unset($_SESSION['errors']);
			}
		?>

		 <form role="form" action="process.php" method="POST">
		 	<input type="hidden" name="action" value="register">
		  <div class="form-group">
		    <label>First Name:</label>
		    <input type="text" class="form-control" id="first_name" name="first_name">
		  </div>
		  <div class="form-group">
		    <label>Last Name:</label>
		    <input type="text" class="form-control" id="last_name" name="last_name">
		  </div>
		  <div class="form-group">
		    <label>Email Address:</label>
		    <input type="text" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label>Password:</label>
		    <input type="password" class="form-control" id="password" name="password">
		  </div>
		  <div class="form-group">
		    <label>Confirm Password:</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
		  </div>
		  <button type="submit" class="btn btn-default" value="register">Register</button>
		</form>
		<br>
		<br>
	</div>
</body>
</html>