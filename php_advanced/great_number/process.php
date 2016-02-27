<?php
	
	session_start();

	if(!isset($_SESSION['number'])){
		$_SESSION['number'] = rand(1, 100);
	}

	if(isset($_POST['guess'])){

		if($_POST['guess'] == $_SESSION['number']){
			$_SESSION['correct'] = "<div class='green'><h2>" . $_SESSION['number'] . 
									" was the number.</h2>
									<form action='process.php' method='POST'>
									<input type='hidden' name='reset' value='reset'>
									</form>
									</div>
									<br>
									<br>
									<button type='submit' class='btn btn-primary'>Replay</button>";
		}

		elseif($_POST['guess'] < $_SESSION['number']){
			$_SESSION['low'] = "<div class='red'>
								<h2>Too Low!</h2>
								</div>";
		}

		else{
			$_SESSION['high'] = "<div class='red'>
								<h2>Too High!</h2>
								</div>";
		}
	}

	if(isset($_POST['reset']) && $_POST['reset'] == 'reset'){
		session_destroy();
		header('Location: index.php');
	}

	header('Location: index.php');

?>