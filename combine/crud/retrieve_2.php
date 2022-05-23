<html>
<body>
<a href="create.php" method="post">Create</a>
<form action="search.php" method="post">
    <input type="text" name="search_keyword" required>
    <select name="search_field"required>
        <option value="first_name"selected>First Name</option>
        <option value="last_name">Last Name</option>
        <option value="email">Email</option>
    </select>
    <input type="submit" value="search">
</form>
</body>
</html>



<?php
/* Attempt Mysql server connection. Assuming you are running MySQL
server with default setting  (user 'root' with no password)*/
$link=mysqli_connect("localhost","root", "", "combine");
if($link===false){
    die("ERROR: could not connect". mysqli_connect_error());
}


$sql="SELECT * FROM persons";
if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo '<a href="create.php">Create</a>';
        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>id</th>";
        echo"<th>Image</th>";
        echo"<th>First Name</th>";
        echo"<th>Last Name</th>";
        echo"<th>Email</th>";
        echo"<th>Edit</th>";
        echo "<th>Delete</th>";

        echo"</tr>";
        foreach ($result as $row){
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td><img src="."upload/".$row['image']." height= 100% width=100%></td>";
            echo"<td>".$row['first_name']."</td>";
            echo"<td>".$row['last_name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo '<td><a href="update_details.php?id=' . $row['id']. '">Edit</a></td>';
            echo '<td><a href="delete_details.php? id=' . $row['id'] .'">Delete</a> </td>';
            echo"</tr>";

        }
        echo"</table>";
        //Free Result Set

        mysqli_free_result($result);
    }else{
        echo"ERROR:Could not able to execute $sql.".mysqli_error($link);
    }
    mysqli_close($link);

}
?>