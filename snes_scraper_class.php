<?php
	class SnesInfo
	{
		private $web_data;
		private $title;
		private $final_url;

		public function get_string_between($string, $start, $end)
		{
		    $string = " ".$string;
		    $ini = strpos($string,$start);
		    if ($ini == 0) return "";
		    $ini += strlen($start);     
		    $len = strpos($string,$end,$ini) - $ini;
		    return substr($string,$ini,$len);
		}
		public function construct_url($title)
		{
			$base_url = "http://nintendo.wikia.com/wiki/";
			$mod_game_title = str_replace(" ", "_", $title);
			$this->final_url = $base_url . $mod_game_title['title'];
			return $this->final_url;
		}
		public function scraper($url)
		{
			$contents = file_get_contents($url);
			$parsed_string = $this->get_string_between($contents, "\"og:description\" content=\"", "\"");
			$link_url = "<a href=\"$url\">" . "Nintendo Wiki" . "</a>";
			$parsed_string .= "     more information availble at " . $link_url;
			return $parsed_string;
		}
	}
?>