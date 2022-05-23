<?php
require_once"config_demo.php";
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$sql='SELECT * FROM persons WHERE id=$id';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>
<html>
<head>
    <title>Edit data</title>
</head>
<body>
<a href = "retrieve.php">Home</a>
<form method="post" action="">
    <input type="text" name="first_name" placeholder="Fname" value ="<?php echo $row['first_name']; ?>"><br>
    <input type="text" name="last_name" placeholder="Lname" value ="<?php echo $row['last_name']; ?>"><br>
    <input type="email" name="email" placeholder="Email" value ="<?php echo $row['email']; ?>"><br>
    <input type="submit" value="Update">
</form>
</body>
</html>