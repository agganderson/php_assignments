<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>Checkerboard</title>
<style>
	td{
		width:20px;
		height:20px;
		}
	.red {
		height: 50px;
		width: 50px;
		background-color: red;
	}
	.black {
		height: 50px;
		width: 50px;
		background-color: black;
	}
</style>
</head>
<body>
	<div class="container">
		<table>
			<thead>
			</thead>
			<tbody>
				<?php 
					for($i = 0; $i < 10; $i++){

						echo "<tr>";
						for($k = 0; $k < 10; $k++){
							if($k%2 == $i%2){
								echo "<td class='red'>";
							}
							else{
								echo "<td class='black'>";
							}
						}
					echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</html>


