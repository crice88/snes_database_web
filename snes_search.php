<!DOCTYPE html>
<?php
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
			<input type="checkbox" name="action" id="title" />Show Titles<br />
			<input type="checkbox" name="action" id="instructions" />Show if they have instructions<br />
			<input type="checkbox" name="action" id="box" />Show if they have box<br />
			<input type="checkbox" name="action" id="shape" />Show the games condition<br />
			<input type="checkbox" name="action" id="num_copies" />Show number of copies owned<br />
			<input type="checkbox" name="action" id="year" />Show the year of the game<br />
			<input type="submit" value="Submit" />
			<input type="reset" value="Reset values" />
		</form>
		<table>
			<?php
				if (count($_POST > 0))
				{
					foreach ($db->search($_POST) as $postArray)
					{
						echo "<tr>";
						foreach ($postArray as $post)
						{
							switch ($post) {
								case 'title':
									echo "<td>" . $post['title'] . "</td>";
									break;
								case 'instructions':
									echo "<td>" . $post['instructions'] . "</td>";
									break;
								case 'box':
									echo "<td>" . $post['box'] . "</td>";
									break;
								case 'shape':
									echo "<td>" . $post['shape'] . "</td>";
									break;
								case 'num_copies':
									echo "<td>" . $post['num_copies'] . "</td>";
									break;
								case 'year':
									echo "<td>" . $post['year'] . "</td>";
									break;
								default:
									echo "Error!!";	
									break;
							}
						}
						echo "</tr>";
					}
				}
			?>
		</table>
		</div>
		
	</div>
	</body>
</html>