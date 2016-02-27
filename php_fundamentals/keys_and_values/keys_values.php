<?php
	$users = array("first_name" => "Michael", "last_name" => "Choi");

	function keysvalues($users){
		$table_header = "";
		$result_row = "";

		foreach($users as $key => $value){
			$table_header .= $key . " ";
			$result_row .= "<tr>
								<td>The value in the key " . $key . " is " . $value . ".</td>
							</tr>";
		}

		$result = "<table>
					<thead>
						<th>There are two keys in this array, " . $table_header . ".</th>
					</thead>
					<tbody>
						" . $result_row . "
					</tbody>
				   </table>";
		return $result;
	}

	echo keysvalues($users);
?>



