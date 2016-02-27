<?php

	//basic md5 encryption
	 $password = 'password';
	 $encrypted_password = md5($password); //the function md5 is native to PHP
	 echo $encrypted_password; //this will show you the encrypted value
	 //  5f4dcc3b5aa765d61d8327deb882cf99 -> nice!

	 //when the user is being put into you database/registration
	 $password = md5($_POST['password']);
	 $email = escape_this_string($_POST['email']);
	 $username = escape_this_string($_POST['username']);
	 $query = "INSERT INTO users (username, email, password, created_at, updated_at) 
	     VALUES ('{$username}', '{$email}', '{$password}', NOW(), NOW())";
	 run_mysql_query($query);

	 //when the user is logging in
	$password = md5($_POST['password']);
	$email = escape_this_string($_POST['email']);
	$query = "SELECT * FROM users where users.password = '{$password}' AND users.email = '{$email}'";
	//..etc etc
?>

