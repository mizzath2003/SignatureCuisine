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
    $fname = $conn->real_escape_string($_POST['fname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $username = $conn->real_escape_string(strtolower($_POST['username'])); //converting the username enetered to lowercase
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $status = $conn->real_escape_string($_POST['status']);
    $userType = $conn->real_escape_string($_POST['userType']);
    $userID = $conn->real_escape_string($_POST['btnSubmitMenu']);


    //Double checking if user inputs valid data (and not empty values)
    if ($fname != "" and $lname != "" and $username != "" and $email != "" and  $status != ""  and  $userType != "") {


        //Updating the user record to database
        $sql = "UPDATE `tb_user` SET `fname`='$fname',`lname`='$lname',`username`='$username',`phone`='$phone',`email`='$email',`status`='$status',`user_type`= '$userType' WHERE `user_id`='$userID'";
        $results = mysqli_query($conn, $sql);

        if (!$results) {
            $_SESSION['status'] = 'Could not update user' . mysqli_error($con);
            header("Location: ../users.php");
        } else {
            // echo "Data entered successfully";
            $_SESSION['status'] = "User updated successfully";
            header("Location: ../users.php");
        }
    }
}
