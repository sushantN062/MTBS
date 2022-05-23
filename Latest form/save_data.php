<?php
$servername = "db";
$username = "root";
$password = "root";
$dbName = 'myDB';

//create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];

$insertQry = 'insert into MyGuests (firstname, lastname, email, age) values (?,?,?,?)';
//$insertQry = 'insert into MyGuests (firstname, lastname, email, age) values(`Ahsan`,`Zameer`,`abc@gmail.com`,20)';

$insertStatement = mysqli_prepare($conn,$insertQry);

mysqli_stmt_bind_param($insertStatement,'sssi',$firstName, $lastName, $email, $age);

if (mysqli_stmt_execute($insertStatement))
{
    echo "Value is inserted successfully";
} else {
    echo "Error inserting value: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


