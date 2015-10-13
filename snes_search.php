<!DOCTYPE html>
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
			<form method="post" action="snes_search_results.php">
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
				<input class="btn" type="submit" value="Submit" />
				<input class="btn" type="reset" value="Reset values" />
			</form>
		</fieldset>
		<br />
		<br />
		<fieldset>
			<legend>Search by Title</legend>
				<form method="post" action="snes_title_search.php">
					<br />
					<input type="text" name="title" />
					<br />
					<br />
					<input class="btn" type="submit" value="Submit" />
					<input class="btn" type="reset" value="Reset title" />
				</form>
		</fieldset>
		<br />
		<a href="snes_main.php">Back to Database Entry</a>
	</body>
</html>