<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ninja Gold Game</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style type="text/css">
		.form-group {
			border: solid black 2px;
			height: 200px;
			width: 200px;
			margin: 15px;
		}

		#activities {
			height: 200px;
			width: 700px;
			display: inline-block;
			border: solid black 2px;
		}
	</style>

</head>
<body>
	<div class='container text-center'>

			<?php 	
				if (isset($_SESSION['error']))
				{ 
			?>
			<div class="error">
			<?php 		
				foreach($_SESSION['error'] as $name => $message)
			{ 

			?>
				<p><?= $message; ?></p>

			<?php 		
				} 
			?>
			</div>
			<?php   
				}
			 ?>

		<h1>Your Gold: </h1>
		<input type="text" name="your-gold" value="<?php echo isset($_SESSION['gold_count']) ? $_SESSION['gold_count'] : '' ?>" disabled>

		<div class="boxes">

			<form id="restart-form" action="process.php" method="post">
				<input type="hidden" name="action" value="restart_form" />
				<button type="submit" class="btn btn-primary">Start Over</button>
			</form>

			<form action="process.php" method="POST">
				<div class="form-group col-md-4">
					<h2>Farm</h2>
					<p>(earns 10-20 golds)</p>
					<input type="hidden" name="building" value="farm">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>

			<form action="process.php" method="POST">
				<div class="form-group col-md-4">
					<h2>Cave</h2>
					<p>(earns 5-10 golds)</p>
					<input type="hidden" name="building" value="Cave">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>

			<form action="process.php" method="POST">
				<div class="form-group col-md-4">
					<h2>House</h2>
					<p>(earns 2-5 golds)</p>
					<input type="hidden" name="building" value="House">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>

			<form action="process.php" method="POST">
				<div class="form-group col-md-4">
					<h2>Casino</h2>
					<p>(earns/takes 0-50 golds)</p>
					<input type="hidden" name="building" value="Casino">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>
		</div>

		<div id="activities">
			<h3>Activities:</h3>
			<div id="log"><?php echo isset($_SESSION['activity']) ? implode('', array_reverse($_SESSION['activity'])) : ''; ?></div>	
		</div>

	</div>
</body>
</html>