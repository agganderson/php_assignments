<?php
	session_start();
	require_once('new-connection.php');
?>


<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	
	<title>The Wall</title>

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
		<!-- begin navigation bar -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand">The Wall</a>
		    </div>
		  </div>
		</nav>

		<!-- end navigation bar -->
		<br>
		<br>
		<br>

		<h1>Hello username here!</h1>
		<!-- begin message form -->
		<div class="post_message">
			<form role="form">
			    <div class="form-group">
			      <label>Post a Message:</label>
			      <textarea class="form-control" id="message" name="message" placeholder="Say something..."></textarea>
			    </div>
			    <button type="submit" class="btn btn-primary">Post</button>
			</form>
		</div>
		<!-- end message form -->
		<br>
		<br>
		<br>

		<div class="messages">
			<p>Ali Anderson - today at ugh oclock</p>
			<p>THERE ARE GONNA BE SOME AWESOME MESSAGES HERE</p>
			
			<!-- begin comment form -->
			<form role="form">
			    <div class="form-group">
			      <label>Post a Comment:</label>
			      <textarea class="form-control" id="comment" name="comment" placeholder="Say something..."></textarea>
			    </div>
			    <button type="submit" class="btn btn-success">Comment</button>
			</form>
			<!-- end comment form -->
		</div>

		<br>
		<br>
		<br>

		<form action="process.php" method="POST">
			<input type="hidden" name="action" value="logout">
			<button type="submit" action="index.php" class="btn btn-default">Logout</button>
		</form>		   


	</div>
</body>
</html>