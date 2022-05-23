<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE countries ( 
	country_id INT UNIQUE,
	country_name VARCHAR(255),
	region_id INT
)";

if (mysqli_query($conn, $sql)) {
  echo "Table countries created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>