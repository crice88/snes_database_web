<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>SNES Database</title>
		<link rel="stylesheet" type="text/css" href="snes.css">
		<meta charset="utf-8" http-equiv="refresh" content="2; url=snes_main.php" />
	</head>
	<body>
	<?php 
		require('snes_class.php');
		$db = new Snesdb;
	?>
	<h2>
		<?php
			if (count($_POST) > 0) 
			{
				if ($db->addDB($_POST) == true) {
					echo "Successfully added to Database!!";
					echo "\n";
					echo "If page does not load <a href=\"javascript:history.go(-1)\">click here</a>";
					$db = null;
				} else {
					echo $db->getError();
				}
			} else {
				echo file_get_contents('form.html');
			}
		?>
	</h2>
	</body>
</html>
