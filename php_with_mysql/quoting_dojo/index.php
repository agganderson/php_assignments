<?php 
	session_start();

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
		<h1>This is Quoting Dojo~</h1>
		<form class="form-horizontal" action="process.php" method="POST" role="form">
		    <div class="form-group">
		      <label class="control-label col-sm-2">Your Name:</label>
		      <div class="col-sm-10">
		      	<input type="hidden" name="action" value="name">
		        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
		      </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2">Your Quote:</label>
		      <div class="col-sm-10">
		      	<input type="hidden" name="action" value="name">
		        <textarea class="form-control" id="quote" placeholder="Enter your quote" name="quote"></textarea>
		      </div>
		    </div>

		   	<?php 
				if(isset($_SESSION['errors'])){
					foreach($_SESSION['errors'] as $error){
						echo "<p>" . $error . "</p>";
					}
				}
			?>

		    <div class="form-group">        
		        <button type="submit" class="btn btn-default">Add My Quote!</button>
		    </div>
		</form>

		<form class="form-horizontal" action="main.php" method="POST" role="form">
			<div class="form-group">        
		        <button type="submit" class="btn btn-default">Skip To Quotes!</button>
		    </div>
		</form>
	</div>
</body>
</html>