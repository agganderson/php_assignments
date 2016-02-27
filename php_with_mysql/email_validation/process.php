<?php
	session_start();
	require_once('new-connection.php');

	// start checking if email field is empty
	if(isset($_POST['action']) && $_POST['action'] == 'enter'){

		//create a new array to hold the errors
		$errors = array();

		//check if email empty
		if(empty($_POST['email'])){
			//push error to error array
			$errors[] = "Email field cannot be empty";
			header("Location: index.php");
		}

		//check if valid email format
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == False){
			$errors[] = "That is not a valid email address";
			header("Location: index.php");
		}
		else{
			header("Location: success.php");
		}


		//test the length of $error array 
		if(count($errors)){
			$_SESSION['errors'] = $errors;
			header("Location: index.php");
		}

		//if $error array is empty then....
		//else statement to take the user to success.php
		else{

		//queries to get addresses to db
		$query = "INSERT INTO users (email, created_at, updated_at) VALUES ('{$_POST['email']}', NOW(), NOW())";

		run_mysql_query($query);

		header("Location: success.php");
		}

	}
	
?>