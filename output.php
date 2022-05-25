<?php
$filename = "./userdata.csv";
$file = fopen($filename,"r");
$content = fread($file,filesize($filename));
print_r("$content")."<br>";
fclose($file);
?>