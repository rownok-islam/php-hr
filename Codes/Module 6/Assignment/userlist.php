<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>User List</title>
</head>
<body>
	<h2 style = "text-align : center;">User's List</h2>
		<table style = "margin-bottom:15px;">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// read users data from CSV file
				$file = fopen('users.csv', 'r');

				while (($data = fgetcsv($file)) !== false) {
					echo '<tr>';
					echo '<td>' . $data[0] . '</td>';
					echo '<td>' . $data[1] . '</td>';
					echo '<td><img src="uploads/' . $data[2] . '"></td>';
					echo '</tr>';
				}

				fclose($file);
			?>
		</tbody>
	</table>
	<div style="text-align:center;">
		<button type="button"; onclick="document.location='index.html'">New User Form</button>
	</div>
</body>
</html>