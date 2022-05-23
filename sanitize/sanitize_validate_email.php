<?php
$email="someone@example.com";//sample email address

//remove all illegal characters from email
$sanitizedEmail=filter_var($email,FILTER_SANITIZE_EMAIL);
//validate email address
if($email==$sanitizedEmail && filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo"the $email is a valid email address";
}
else{
    echo"the $email is not a valid address";
}
?>