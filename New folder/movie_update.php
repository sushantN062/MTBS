<?php

//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$sql='SELECT * FROM tbl_movie WHERE id=$id';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>
    <html>
<head>
    <title>Edit data</title>
</head>
<body>

<form method="post" action="">
    <input type="text" name="movie_name" value ="<?php echo $row['movie_name']; ?>"><br>
    <input type="text" name="total_no_of_seat" value ="<?php echo $row['total_no_of_seat']; ?>"><br>
    <input type="text" name="images" value ="<?php echo $row['images']; ?>"><br>
    <input type="submit" value="Update">
</form>
</body>
    </html>
<?php
