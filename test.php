<?php
	require('snes_scraper_class.php');
	$info = new SnesInfo;

	$url = $info->construct_url('Super Mario World');
	echo $info->scraper($url);
?>