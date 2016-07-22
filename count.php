<?php
$file = fopen("word.txt", "r") or die("Unable to open file!");
$content = fread($file,filesize("word.txt"));
$word = "UCanUup";
$count = substr_count($content,$word);
echo $count;
fclose($file);
?>