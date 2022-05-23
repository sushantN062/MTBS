<?php
$conn = mysqli_connect ("localhost", "root", "");
$sql = "CREATE DATABASE demo";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>

