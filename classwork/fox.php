<?php
$string = "The quick brown fox jumps over the lazy dog.";
$exp = preg_match("/fox/i", $string);
if($exp){
    echo "A match was found";
}else{
    echo "Match not found";
}
?>
