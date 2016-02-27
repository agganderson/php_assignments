<!DOCTYPE html>
<html lang="en">
<head>
	<title>Your Information</title>
</head>
<body>
	<h1>Submitted Information</h1>
	<h3>Name: <?= $_POST['name']; ?></h3>
	<h3>Location: <?= $_POST['location']; ?></h3>
	<h3>Favorite Language: <?= $_POST['language']; ?></h3>
	<h3>Comment: <?= $_POST['comment']; ?></h3>
	<a href="/"><button type="submit" class="btn btn-default">Go Back</button></a>
</body>
</html>