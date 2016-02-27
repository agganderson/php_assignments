<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Great Number Game</title>
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

	<style type="text/css">
		.container {
			height: 700px;
			width: 650;
			margin: 0 auto;
			display: inline-block;
		}

		.green {
			height: 200px;
			width: 200px;
			background-color: green;
			display: inline-block;
		}

		.red {
			height: 200px;
			width: 200px;
			text-align: center;
			background-color: red;
			display: inline-block;
		}

	</style>

</head>
<body>
	<div class="container text-center">

		<div id="top">
			<h2>Welcome to the Great Number Game!</h2>
			<h4>I'm thinking of a number between 1 and 100</h4>
			<h4>Take a guess!</h4>
		</div>

		<?php
			if(isset($_SESSION['low'])){
				echo $_SESSION['low'];
				unset($_SESSION['low']);
			}

			if(isset($_SESSION['high'])){
				echo $_SESSION['high'];
				unset($_SESSION['high']);
			}

			if(!isset($_SESSION['correct'])){
		?>

		<div id="bottom">
			<br>
			<form action="process.php" method="post">
			<input type="text" name="guess">
			<br>
			<br>
			<button type="submit" class="btn btn-primary">Guess</button>
			</form>
		</div>

			<?php
				}

				else{
					echo $_SESSION['correct'];
					unset($_SESSION['correct']);
				}

			?>

	</div>
</body>
</html>