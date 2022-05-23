<?php

$pattern = "/[^a-zA-Z_0-9 ^, ^.]/";
$replacement = " ";
$text = " '$123,34.00A'";
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
?>
