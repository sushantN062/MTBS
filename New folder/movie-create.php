<?php
require_once "config_demo.php";

// Define variables and initialize with empty values
$movie_name= $total_no_of_seats = $images = "";
$movie_name_err = $total_no_of_seats = $images = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Validate first name
    $input_movie_name = trim($_POST["movie_name"]);
    if (empty($input_movie_name)) {
        $movie_name_err = "Please enter a movie name.";
        echo "Please enter a movie name.";

    } elseif (!filter_var($input_movie_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $movie_name_err = "Please enter a valid movie name.";
        echo "Please enter a valid movie name.";

    } else {
        $movie_name = $input_movie_name;
    }

    
// Validate last name
    $total_no_of_seats = trim($_POST["total_no_of_seats"]);
    if (empty($total_no_of_seats)) {
        $total_no_of_seats_err = "Please enter total number of seats.";
        echo "Please enter total number of seats.";
    } elseif (!filter_var($total_no_of_seats, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $total_no_of_seats_err = "Please enter valid total number of seats.";
        echo "Please enter valid total number of seats.";
    } else {
        $total_no_of_seats = $total_no_of_seats;
    }



    if (empty($images) && empty($images)) {
// Prepare an insert statement

        $temp_name=$_FILES['image']['tmp_name'];
        $filename=$_FILES['image']['name'];
        $folder = "upload/".$filename;
        if (move_uploaded_file($temp_name, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }

        $sql = "INSERT INTO tbl_movie (movie_name, total_no_of_seats, image) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $movie_name, $total_no_of_seats, $filename);

            // Set parameters
            $movie_name = trim($_POST['movie_name']);
            $total_no_of_seats = trim($_POST['total_no_of_seats']);
            $filename=$_FILES['image']['name'];

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header("location: retrieve_to.php");
            } else {
                echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
            }
        } else {
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
        }

// Close statement
        mysqli_stmt_close($stmt);

// Close connection
        mysqli_close($conn);
    }
}
?>


    <!doctype html>
    <html lang="en">
    <head>
        <title>Form</title>
    </head>
    <body>
    <form action="" method="post" enctype="multipart/form-data">
        First name: <input type="text" placeholder="Enter First name here" name="movie_name" > <br>
        Last Name: <input type="text" placeholder="Enter Last name here" name="total_no_of_seats"> <br>
        Upload Image: <input type="file" placeholder="Upload Image" name="image" required>
        <input type="submit" value="Submit">
    </form>

    </body>
    </html><?php
