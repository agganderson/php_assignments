<?php
	session_start();

	require_once('new-connection.php');

	//checking if quote and name field are empty
	if(isset($_POST['action']) && $_POST['action'] == 'name'){

		//array for errors
		$errors = array();

		if(empty($_POST['name'])){
			$errors[] = "Name field cannot be empty";
			header("Location: index.php");
		}

		if(empty($_POST['quote'])){
			$errors[] = "You need to enter a quote";
			header("Location: index.php");
		}
		else{
			header("Location: main.php");
		}

		//test the length of $error array 
		if(count($errors)){
			$_SESSION['errors'] = $errors;
			header("Location: index.php");
		}

		//if $error array is empty then....
		//else statement to take the user to main.php
		else{
			//queries for db
			$query = "INSERT INTO users (name, quote, created_at, updated_at) VALUES ('{$_POST['name']}', '{$_POST['quote']}', NOW(), NOW())";
			run_mysql_query($query);

			header("Location: main.php");
		}
	}




?>