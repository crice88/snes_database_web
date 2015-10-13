<!DOCTYPE html>
<?php
	require('snes_class.php');
	$db = new Snesdb;
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SNES Game Retrieve</title>
		<link rel="stylesheet" type="text/css" href="snes.css">
	</head>
	<body>
		<p><img src="img/snes_logo_trans.gif" alt="cool image"></p>
		<table class="display">
			<tr class="header">
				<th>Title</th>
				<th>Box</th>
				<th>Instructions</th>
				<th>Shape</th>
				<th>Year</th>
				<th>Number of Copies</th>
			</tr>
			<?php
				foreach($db->getDB() as $row)
				{
					echo "<tr class=\"data\">";
					echo "<td><b>" . $row['title'] . "</b></td>";
					echo "<td>" . $row['box'] . "</td>";
					echo "<td>" . $row['instructions'] . "</td>";
					echo "<td>" . $row['shape'] . "   </td>";
					echo "<td>" . $row['year'] . "   </td>";
					echo "<td>" . $row['num_of_copies'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	<br />
	<a href="snes_main.php">Back to DB Entry</a>
	</body>
</html>