<?php
$link=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"monthly test");

if($link===false){
    die("ERROR: could not connect". mysqli_connect_error());
}

$sql="SELECT * FROM tbl_movie";
if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>movie_id</th>";
        echo"<th>movie_name</th>";
        echo"<th>total_no_of_seat</th>";
        echo"<th>images</th>";
        echo"<th>edit</th>";
        echo"<th>delete</th>";
        echo"</tr>";


        foreach($result as $row){
            echo"<tr>";
            echo"<td>".$row['movie_id']."</td>";
            echo"<td>".$row['movie_name']."</td>";
            echo"<td>".$row['total_no_of_seats']."</td>";
            echo"<td>".$row['image' ]."</td>";
            echo'<td><a href="movie_update.php?id='.$row['id'].'">Edit</a></td>';
            echo'<td><a href="movie_delete.php?id='.$row['id'].'">Delete</a></td>';
            "</tr>";

        }
        echo"</table>";

        mysqli_free_result($result);
    }else{
        echo"No records matching your query were found.";
    }
}else{
    echo"ERROR:Could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?><?php
