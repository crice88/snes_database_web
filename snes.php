<?php
	require('Snesdb.php');
	$db = new Snesdb;
?>

<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>SNES Database</title>
		<link rel="stylesheet" type="text/css" href="snes.css">
	</head>
	<body>
	<h1>
		<?php 
		if ($db->connected) {
			echo "Connected to Database!!";
		}
		?>
	</h1>
		<?php
			if ($_POST > 0) 
			{
				if ($db->addDB($_POST) == true) {
					echo "Successfully added to Database!!";
				} else {
					echo $db->getError();
				}
			} else {
				echo file_get_contents('form.html');
			}
		?>
	</body>
</html>
