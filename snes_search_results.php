<html>
<head>
	<meta charset="utf-8">
	<title>SNES Search Results</title>
	<link rel="stylesheet" type="text/css" href="snes.css">
</head>
<body>
<p><img src="img/snes_logo_trans.gif" class="img_padding" alt="Cool_logo" /></p>
<table class="display">
	<?php
		error_reporting(0);
		require('snes_class.php');
		$db = new Snesdb;
		if (count($_POST) > 0)
		{
			echo "<br />";
			foreach ( $db->search($_POST['action']) as $post)
			{
				echo "<tr class=\"data\">";
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
<br />
	<a href="snes_search.php">Back to Search</a>
</body>
</html>