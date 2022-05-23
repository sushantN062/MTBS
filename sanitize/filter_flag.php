<?php

// Sample IP address
$ip = "172.16.254.1";

//Validate sample IP address
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "The <b>$ip</b> is a valid IPv6 address";
} else {
    echo "The <b>$ip</b> is not valid IPv6 address";
}

