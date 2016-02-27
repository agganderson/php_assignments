<!DOCTYPE html>
<html lang="en">
<head>
	<title>Survey Form</title>
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

	<div class="container">

	  <h2>Submit Your Information Below</h2>
	  <form role="form" action="result.php" method="POST">
	    <div class="form-group">
	      <label>Your Name:</label>
	      <input type="text" class="form-control" id="name" placeholder="Enter name"name="name">
	    </div>
	    <div class="form-group">
	    	<label>Your Dojo Location:</label>
			<select name="location">
			  <option value="Mountainview">Mountain View</option>
			  <option value="San Jose">San Jose</option>
			  <option value="Bellevue">Bellevue</option>
			  <option value="Los Angeles">Los Angeles</option>
			</select>
		</div>
	    <div class="form-group">
	    	<label>Your Favorite Language:</label>
			<select name="language">
			  <option value="Javascript">JavaScript</option>
			  <option value="HTML">HTML</option>
			  <option value="CSS">CSS</option>
			  <option value="Python">PYTHON</option>
			  <option value="PHP">PHP</option>
			  <option value="Ruby">RUBY</option>
			</select>
		</div>
		<div class="form-group">
	      <label>Comment(optional):</label>
	      <textarea class="form-control" id="comment" placeholder="Please comment..." name="comment"></textarea>
	    </div>
	    <button type="submit" class="btn btn-default">Submit</button>
	  </form>

	</div>

</body>
</html>