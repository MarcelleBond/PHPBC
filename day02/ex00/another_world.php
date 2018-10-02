<?php
	$output = preg_replace('(\s\s+|\t|\r)', ' ', $argv[1]);
	$output = trim($output);
	echo $output;
?>