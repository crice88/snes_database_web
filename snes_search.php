<!DOCTYPE html>
<?php
	error_reporting(0);
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
		<p><img src="img/snes_logo_trans.gif" alt="Cool_logo" /></p>
		<br />
		<fieldset>
			<legend>Please select how you want your DB to be displayed</legend>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<table class="naked_table">
					<tr>
						<td><input type="checkbox" name="action[]" value="title" /></td>
						<td><label>Show Titles</label></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="action[]" value="instructions"/></td>
						<td><label>Show if they have instructions</label></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="action[]" value="box" /></td>
						<td><label>Show if they have box</label></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="action[]" value="shape" /></td>
						<td><label>Show the games condition</label></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="action[]" value="num_of_copies" /></td>
						<td><label>Show number of copies owned</label></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="action[]" value="year" /></td>
						<td><label>Show the year of the game</label></td>
					</tr>
				</table>
				<br />
				<input type="submit" value="Submit" />
				<input type="reset" value="Reset values" />
			</form>
		</fieldset>
		<br />
		<br />
		<fieldset>
			<legend>Search by Title</legend>
				<form method="post" action="snes_title_search.php">
					<input type="text" name="title" />
					<br />
					<br />
					<input type="submit" value="Submit" />
					<input type="reset" value="Reset title" />
				</form>
		</fieldset>
		<table>
			<?php
				if (count($_POST) > 0)
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
		<h2>
			<a href="snes_main.php">Back to Database Entry</a>
		</h2>	
	</body>
</html>