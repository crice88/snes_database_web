<!DOCTYPE html>
<?php
	require('snes_scraper_class.php');
	require('snes_class.php');
	$db = new Snesdb;
	$info = new SnesInfo;
?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SNES Game Info</title>
		<link rel="stylesheet" type="text/css" href="snes.css" />
	</head>
	<body>
		<p><img src="img/snes_logo_trans.gif" class="image_padding" alt="Cool Logo" /></p>
		<form method="post" action="">
			<label for="title"><h1>Title you'd like information on</h1></label>
			<input type="text" name="title" list="title_list" />
			<datalist id="title_list">
				<?php
					$db->retrieveAllTitles();
				?>
			</datalist>
				<input class="btn" type="submit" value="Search" />
			</form>
		<h3>
			<?php
				if (count($_POST) > 0)
				{
					$url = $info->construct_url($_POST);
					echo $info->scraper($url);
				}
				else
				{
					return false;
				}
			?>
		</h3>
	</body>
</html>