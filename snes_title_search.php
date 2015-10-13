<html>
	<head>
		<meta charset="utf-8" />
		<title>SNES Title Search</title>
		<link rel="stylesheet" type="text/css" href="snes.css" />
	</head>
	<body>
		<p><img src="img/snes_logo_trans.gif" class="img_padding" alt="Cool_logo" /></p>
		<table>
			<tr>
				<th>Title</th>
				<th>Box</th>
				<th>Instructions</th>
				<th>Shape</th>
				<th>Year</th>
				<th>Number of Copies</th>
			</tr>
				<?php
					require('snes_class.php');
					$db = new SnesDB;
					if (count($_POST) > 0)
					{
						$title = $db->titleSearch($_POST);
						if ($title == true)
						{
							foreach ($title as $row)
							{
								echo "<tr>";
								echo "<td><b>" . $row['title'] . "</b></td>";
								echo "<td>" . $row['box'] . "</td>";
								echo "<td>" . $row['instructions'] . "</td>";
								echo "<td>" . $row['shape'] . "   </td>";
								echo "<td>" . $row['year'] . "   </td>";
								echo "<td>" . $row['num_of_copies'] . "</td>";
								echo "</tr>";
							}
						}
						else
						{
							echo "Something went wrong!!";
						}
					}
					else
					{}
				?>
			</table>
			<h2>
				<a href="snes_search.php">Back to SNES Search</a>
			</h2>
	</body>
</html>
