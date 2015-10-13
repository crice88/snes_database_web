<!DOCTYPE html>
<?php
	/*error_reporting(0);*/
	require('snes_class.php');
	$db = new Snesdb;
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Search SNES</title>
		<link rel="stylesheet" type="text/css" href="snes.css" />
	</head>
	<body>
	<div class="background">
		<div align="center">
		<h3>Search SNES DB</h3>
		<br />
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="checkbox" name="action[]" value="title" />Show Titles<br />
			<input type="checkbox" name="action[]" value="instructions"/>Show if they have instructions<br />
			<input type="checkbox" name="action[]" value="box" />Show if they have box<br />
			<input type="checkbox" name="action[]" value="shape" />Show the games condition<br />
			<input type="checkbox" name="action[]" value="num_of_copies" />Show number of copies owned<br />
			<input type="checkbox" name="action[]" value="year" />Show the year of the game<br /><br />
			<input type="submit" value="Submit" />
			<input type="reset" value="Reset values" />
		</form>
		<h3> Or </h3>
		<table>
		<form method="post" action="snes_title_search.php">
			<label for="title"><b>Search by Title</b></label>
			<input type="text" name="title" />
			<br />
			<br />
			<input type="submit" value="Submit" />
			<input type="reset" value="Reset title" />
		</form>
		</table>
		<table>
			<?php
				if (count($_POST > 0))
				{
					echo "<br />";
					foreach ( $db->search($_POST['action']) as $post)
					{
						echo "<tr>";
						if (!empty($post['title']))
							echo "<td>" . $post['title'] . "</td>";
						if (!empty($post['instructions']))
							echo "<td>" . $post['instructions'] . "</td>";
						if (!empty($post['box']))
							echo "<td>" . $post['box'] . "</td>";	
						if (!empty($post['shape']))
							echo "<td>" . $post['shape'] . "</td>";
						if (!empty($post['num_of_copies']))
							echo "<td>" . $post['num_of_copies'] . "</td>";
						if (!empty($post['year']))
							echo "<td>" . $post['year'] . "</td>";
						echo "</tr>";
					}
				}
			?>
		</table>
		</div>
		
	</div>
	</body>
</html>