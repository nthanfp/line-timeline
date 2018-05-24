<?php
error_reporting(0);
ini_set('max_execution_time',0);
ini_set('output_buffering',0);
require('fungsi.php');
$cookies = ''; //insert your cookies here
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
