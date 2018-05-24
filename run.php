<?php
error_reporting(0);
ini_set('max_execution_time',0);
ini_set('output_buffering',0);
require('fungsi.php');
$cookies = base64_decode('X3RybWNkaXNhYmxlZDI9LTE7IF9faXNfbG9naW5fc3NvPTE7IGx3dGw9cyUzQTYyVmx6bzZ4U3FyOGlHb1dERWV0SnJXcmUwMW1OVUMzLkNGUjhLU2Y1Y3ZiZlB5M2N5UCUyQmlXNXdBZG5EdEF6VjJyYmRlUkU5bFg5TTsgX2dhPUdBMS4yLjE2NjYzMTk0OTEuMTUyMzcwNTE0ODsgX2dpZD1HQTEuMi4xOTMxMTEyMS4xNTI2NjM4MzQ2OyBfX3RyeV9fPTE1MjY2NDQ5ODQ3NzI7IF90cm1jY2lkPTA1NGJjMDlkZmJkNjVkYjE7IF90cm1jcGFnZT0vOyBfdHJtY3VzZXI9e1wiaWRcIjpcIlwifTsgX3RybWNzZXNzaW9uPXtcImlkXCI6XCIyMDY5YTc2YmYwNzAzOWQ3XCIsXCJwYXRoXCI6XCIvXCIsXCJxdWVyeVwiOlwiXCIsXCJwYXJhbXNcIjp7fSxcInRpbWVcIjoxNTI2NjQ0OTg0ODA4fTsgX2dhdD0x');
$line    = new lineTimeline($cookies);
$run     = $line->validCookies();
$ret     = $run->message;
if(!$ret == 'success'){
	echo "Failed Cookies Mati.";
} else {
	$run  = $line->getTimeline();
	preg_match_all('~(href="/post/(.*?)")~', $run, $hasil);
	if ($limit < 10) {
		$limit = 10;
	}
	for ($i = 0; $i < $limit; $i++) {
		$ex    = explode("/", $hasil[2][$i]);
		$mid   = $ex[0];
		$post  = $ex[1];
		$react = 0;
		$share = 'false';
		$like = $line->likePost($mid, $post, $react, $share);
		echo "https://timeline.line.me/post/".$mid."/".$post." | ";
		echo $like->message;
		echo "<br>";
	}
  }
