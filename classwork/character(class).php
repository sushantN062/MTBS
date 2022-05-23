<?php
$string = "I am doing php ko homework aanii cat ko c panii chayoo.";
$exp = preg_match("/abc/i", $string);
if ($exp) {
    echo "A match was found";
} else {
    echo "Match not found";
}
?>
