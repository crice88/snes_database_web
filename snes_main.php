<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="utf-8"  />
		<title>SNES Database</title>
		<link rel="stylesheet" type="text/css" href="snes.css" />
	</head>
	<body>
		<p><img src="img/snes_logo_trans.gif" class="img_padding" alt="Cool_logo" /></p>
		<?php 
			echo file_get_contents('form.html');
		?>
		<h2>
			<a href="snes_retrieve.php">What do I have??</a>
			<br />
			<br />
			<a href="snes_search.php">Search</a>
		</h2>
	</body>
</html>
