#!/usr/bin/php
<?php
$file;
if ($argc > 1)
{
    $file = file_get_contents($argv[1]);
    $file = preg_replace_callback("/(title=\")([a-z |\\s|A-Z]+)(\")/",
        function ($matches)
        {
            return($matches[1].strtoupper($matches[2]).$matches[3]);
        }, $file);

    $file = preg_replace_callback("/(<\s*a[^>]*>)(.*?)(<)/",
        function($matches)
        {
            return($matches[1].strtoupper($matches[2]).$matches[3]);
        }, $file);
    echo $file;
}
?>
