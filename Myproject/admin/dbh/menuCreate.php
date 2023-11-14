<?php
// Start the session
session_start();
include('../../dbh/connection.php');

if (isset($_POST['btnSubmitMenu'])) {

    //initializing user inputs   //(real_escape_string)->  used to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);
    $description = $conn->real_escape_string($_POST['description']);
    //image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . uniqid() . "-" . basename($_FILES["image"]["name"]); //uniqid()-> preventing overriting of the image


    //Double checking if user inputs valid data (and not empty values)
    if ($name != "" and $price != "" and $description != "" and $target_file != "") {

        //Double checking if userName already exists in database
        $sql1 = "INSERT INTO `tb_menu`(`menu_name`, `price`, `description`, `image`) VALUES ('$name','$price','$description','$target_file')";

        $results1 = mysqli_query($conn, $sql1);

        if (!$results1) {
            die('Could not Enter Data' . mysqli_error($conn));
        } else {
            //The move_uploaded_file() function is used to move an uploaded file from the temporary directory to a permanent location.
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // echo "Data entered successfully";
                $_SESSION['status'] = "menu added successfully";
                header("Location: ../menu.php");
            } else {
                $_SESSION['status'] = "failed to upload image";
                header("Location: ../menuAdd.php");
            }
        }

        // //The move_uploaded_file() function is used to move an uploaded file from the temporary directory to a permanent location.
        // if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        //     $_SESSION['status'] = "image added successfully";
        //     //print_r($_FILES);
        // } else {
        //     $_SESSION['status'] = "failed to upload image";
        // }
    } else {
        $_SESSION['status'] = "Field's cant be blank";
        header("Location: ../menuAdd.php");
    }
}
