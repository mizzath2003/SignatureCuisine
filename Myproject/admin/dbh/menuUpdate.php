<?php
// Start the session
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
include('../../dbh/connection.php');

if (isset($_POST['btnSubmitMenu'])) {

    //initializing user inputs   //(real_escape_string)->  used to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);
    $description = $conn->real_escape_string($_POST['description']);

    $menu_id = $conn->real_escape_string($_POST['btnSubmitMenu']);


    //Double checking if user inputs valid data (and not empty values)
    if ($name != "" and $price != "" and $description != "") {
        // Check if there is a file uploaded
        if ($_FILES["image"]["size"] > 0) {
            //image
            $target_dir = "uploads/";
            $target_file = $target_dir . uniqid() . "-" . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $sql = "UPDATE `tb_menu` SET `menu_name`='$name',`price`='$price',`description`='$description',`image`='$target_file' WHERE `menu_id`='$menu_id'";
            }
        } else {
            $sql = "UPDATE `tb_menu` SET `menu_name`='$name',`price`='$price',`description`='$description' WHERE `menu_id`='$menu_id'";
        }
        //Updating the user record to database
        $results = mysqli_query($conn, $sql);
        if (!$results) {
            $_SESSION['status'] = 'Could not update menu' . mysqli_error($con);
            header("Location: ../menu.php");
        } else {
            $_SESSION['status'] = "Menu updated successfully";
            header("Location: ../menu.php");
        }
    }
}
