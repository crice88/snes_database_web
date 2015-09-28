<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>SNES Database</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<h1>
		<?php
			$pass = 'rice1988';
			$user = 'crice';
			$dbh = new PDO('mysql:host=localhost;dbname=mysql', $user, $pass);
			if ($dbh)
				echo "Connected to Database!";
			if(!empty($_POST['title']))
			{
				$title = $_POST['title'];
				$box = $_POST['box'];
				$instructions = $_POST['instructions'];
				$shape = $_POST['shape'];
				$year = $_POST['year'];
				$num_copies = $_POST['num_copies'];
				
				$insert = "INSERT INTO snes_col_tbl ";
				$values = "VALUES ('$title', '$box', '$instructions', '$shape', '$year', '$num_copies');";
				
				$dbq = $insert . $values;
				$dbh->query($dbq);
				echo "<br /> Added values: $title, $box, $instructions, $shape, $year, $num_copies";
				header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
			else
			{
			}
		?>
		</h1>
</html>
