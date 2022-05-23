<?php
$myfile = fopen("webdictionary.txt", "r")or die("unable to open file");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>




