<?php
$link=mysqli_connect(hostname:"localhost",username:"root",password:"",database:"demo");

if($link===false){
    die("ERROR: could not connect". mysqli_connect_error());
}

$sql="SELECT * FROM persons";
if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>id</th>";
        echo"<th>first_name</th>";
        echo"<th>last_name</th>";
        echo"<th>email</th>";
        echo"<th>edit</th>";
        echo"<th>delete</th>";
        echo"</tr>";


        foreach($result as $row){
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['first_name']."</td>";
            echo"<td>".$row['last_name']."</td>";
            echo"<td>".$row['email' ]."</td>";
            echo'<td><a href="update_details.php?id='.$row['id'].'">Edit</a></td>';
            echo'<td><a href="delete_details.php?id='.$row['id'].'">Delete</a></td>';
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
?>