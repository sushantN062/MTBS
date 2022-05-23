<?php
$url =
    "https://classroom.google.com/c/NDI4NzUxMDYzODE3/a/NDQ5NDEwMjM2NjQz/details"
;// Sample website url
// Remove all illegal characters from url
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
// Validate website url
if($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)){
    echo "The $url is a valid website url";
} else{
    echo "The $url is not a valid website url";
}?><?php
