<?php

	//THIS IS FOR LOGIN REGISTRATION DO NOT MESS WITH

	session_start();
	require_once('new-connection.php');

	//----functions begin
	if(isset($_POST['action']) && $_POST['action'] == 'register'){
		register_user();
	}

	if(isset($_POST['action']) && $_POST['action'] == 'login'){
		login_user();
	}

	if(isset($_POST['action']) && $_POST['action'] == 'logout'){
		logout_user();
	}
	//----functions end

	//--begin register_user function
	function register_user(){
		$errors = array();
		//checking if fields are empty
		if(empty($_POST['first_name'])){
			$errors[] = "First name field cannot be empty";
		}
		if(empty($_POST['last_name'])){
			$errors[] = "Last name field cannot be empty";
		}
		if(empty($_POST['email'])){
			$errors[] = "Email field cannot be empty";
		}
		if(empty($_POST['password'])){
			$errors[] = "Password field cannot be empty";
		}
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == False){
			$errors[] = "That is not a valid email address";
		}
		if($_POST['password'] != $_POST['confirm_password']){
			$errors[] = "Your passwords need to match";
		}
		
		if(count($errors)){
			$_SESSION['errors'] = $errors;
			header("Location: index.php");
		}		

		//checking if email is already in the db
		if(empty($errors)){
			$check_email_query = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' ";
			$check_email = fetch_record($check_email_query);

			//if email is not in db already...
			if(!$check_email){
		// 		//encrypt password
				$password = md5($_POST['password']);
		// 		//insert user into db
				$insert_user_query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
		 							  VALUES ('". $_POST['first_name'] ."', '". $_POST['last_name'] ."', '". $_POST['email'] ."', '". $password ."', NOW(), NOW())";
		
				//save/run sql query into a seperate variable
				$insert_user_result = run_mysql_query($insert_user_query);	

				//if you've run the query for insert_user_result
				if($insert_user_result){
					//save user information into an array
					$user = array(
						"first_name" => $_POST['first_name'],
						"last_name" => $_POST['last_name'],
						"email" => $_POST['email'],
						"logged_in" => True
						);

					$_SESSION['user'] = $user;
					header("Location: wall.php");
					exit();
				}	
				else{
					$_SESSION['errors'][] = "Error! Please check database connection";
				}			  

			}
			else{
				$_SESSION['errors'][] = "That email address already exists. Use a different email.";
			}
		}
		else{
			header("Location: index.php");
		}
	}
	//----end register function

	//----user login function begin
	function login_user(){
		//check if email field is empty
		if(empty($_POST['email'])){
			$errors[] = "Email field cannot be empty";
		}
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == False){
			$errors[] = "Please enter a valid email";
		}
		//check if password field is empty
		if(empty($_POST['password'])){
			$errors[] = "Password field cannot be empty";
		}

		//if no errors check if email and password are in the db
		if(empty($errors)){
			$user_check_query = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND password = '" . md5($_POST['password']) . "' ";
			$user = fetch_record($user_check_query);

			// if not a user
			if(!$user){
				$errors[] = "Not a valid email and password pair";
			}
			else{
				$user += array(
					"logged_in" => True
					);

				$_SESSION['user'] = $user;
				header("Location: wall.php");
			}

		}
		else{
			if(count($errors)){
				$_SESSION['errors'] = $errors;
				header("Location: index.php");
			}
		}

	}
	//end log in user function

	//begin log out function
	function logout_user(){
		session_destroy();
		header("Location: index.php");
	}
	//end log out function

?>