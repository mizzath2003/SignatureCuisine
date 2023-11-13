<?php
// Start the session
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
include('../../dbh/connection.php');

if (isset($_POST['deleteUser'])) {

    $userID = $conn->real_escape_string($_POST['deleteUser']);

    //Double checking if user inputs valid data (and not empty values)
    if ($userID != "") {

        //Updating the user record to database
        $sql = "DELETE FROM `tb_user` WHERE `user_id`='$userID';DELETE FROM `tb_reservation` WHERE `userID`='$userID';";
        $results = mysqli_multi_query($conn, $sql);

        if (!$results) {
            $_SESSION['status'] = 'Could not delete user - ' . mysqli_error($con);
            header("Location: ../users.php");
        } else {
            // echo "Data entered successfully";
            $_SESSION['status'] = "User deleted successfully";
            header("Location: ../users.php");
        }
    }
}
