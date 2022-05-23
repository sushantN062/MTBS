<?php
$pattern = "/\s/";
$replacement = "";
$text = " The quick brown fox jumps over the lazy dog. ";
echo preg_replace($pattern, $replacement, $text);
echo "<br>";

