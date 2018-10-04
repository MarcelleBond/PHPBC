#!/usr/bin/php
<?php
$newstack = array();
$handle = fopen("/var/run/utmpx", 'r');
$new = array();
while($data = fread($handle, 628))
{
   $new = unpack("a256ut_user/a4ut_id/a32ut_line/iut_pid/iut_type/I2ut_time",$data);
   if($new['ut_type'] == 7)
   {
       array_push($newstack, $new);
   }
}
date_default_timezone_set("Africa/Johannesburg");
foreach($newstack as $st)
{
   echo $st['ut_user'].' '.$st['ut_line'].' '.date('M j H:i',$st['ut_time1'])."\n";
}
fclose($handle);
?>
