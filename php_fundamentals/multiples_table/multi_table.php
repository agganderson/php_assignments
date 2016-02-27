
-WHAT I DID-
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Mulitplication Table</title>
	<style>
		table, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<table>
	<?php
		for($i = 1; $i < 10; $i++){
	?>
	  <tr>
	  	<td><?php echo $i ?></td>
	  	<td><?php echo $i * 2 ?></td>
	  	<td><?php echo $i * 3 ?></td>
	  	<td><?php echo $i * 4 ?></td>
	  	<td><?php echo $i * 5 ?></td>
	  	<td><?php echo $i * 6 ?></td>
	  	<td><?php echo $i * 7 ?></td>
	  	<td><?php echo $i * 8 ?></td>
	  	<td><?php echo $i * 9 ?></td>
	  </tr>
	  <?php } ?>
	</table>
	
</body>
</html>



-ANSWER/OBV BETTER WAY-



<!doctype html>
<html>
<head>
  <title>Multiplication Table</title>
  <style type="text/css">
    td {
      border: 1px solid black;
      padding: 10px;
      text-align: center;
    }
    table {
      border-collapse: collapse;
    }
    .bold {
      font-weight: bolder;
    }

  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <td></td>
<?php
          for ($col = 1; $col <= 9; $col++)
          {
            echo "<td class='bold'>" . $col . "</td>";
          }
?>        
      </tr>
    </thead>
    <tbody>
<?php
      for ($i = 1; $i <= 9; $i++)
      {
        echo "<tr><td class='bold'>" . $i . "</td>";
        for ($j=1; $j <= 9; $j++)
        {
          echo "<td>". $i * $j . "</td>";
        }
        echo "</tr>";
      }
?>      
    </tbody>
  </table>
</body>
</html>

