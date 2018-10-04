#!/usr/bin/php
<?php
	echo trim(preg_replace('(\s\s+|\t)', ' ', $argv[1]))."\n";
?>
