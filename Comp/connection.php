<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
echo "Connected successfully";
?>