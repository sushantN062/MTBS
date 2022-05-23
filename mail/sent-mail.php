<?php
$to_email = "utsavgautam16@gmail.com";
$subject = "Email test";
$body = "yo tutti, why are you gayyyyy";
$headers = "From: sender email";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}




