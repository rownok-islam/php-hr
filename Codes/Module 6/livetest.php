<?php
$myfile = fopen("ostad.txt", "a+");
$content = fread($myfile, filesize("ostad.txt"));
echo($content);

date_default_timezone_set('Asia/Dhaka');
$date_data =  date("Y-m-d h:i:sa");
echo $date_data;

file_put_contents("ostad.txt",$date_data,FILE_APPEND);

?>