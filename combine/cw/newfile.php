<?php
$myfile = fopen("newfile.txt","w")or die("unable to open file");
$txt = "Donald Duck\n";
fwrite($myfile,$txt);
$txt = "Goofy Goof"