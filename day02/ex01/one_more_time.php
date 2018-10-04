#!/usr/bin/php
<?php

if ($argc < 2)
   exit;

$french= array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
$english = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$newdate = preg_split('/[\s]+/', $argv[1]);
if(sizeof($newdate) < 5)
{
   echo "Wrong format\n";
   exit;
}
$year = $newdate[3];
$month = $newdate[2];
$date2 = $newdate[1];
$date = str_replace($french, $english, strtolower($date.' '.$month.' '.$year.' '.$newdate[4]));
$datearr = preg_split('/[\s]+/', $date);
$pmonth = date_parse($datearr[1]);
$cmonth = $pmonth['month'];
if($cmonth == NULL)
{
   echo "Wrong format\n";
   exit;
}
date_default_timezone_set("Europe/Paris");
echo strtotime("$year/$cmonth/$date2 $datearr[3]");


?>
