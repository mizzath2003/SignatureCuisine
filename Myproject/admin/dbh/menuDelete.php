<?php
// Start the session
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
include('../../dbh/connection.php');

if (isset($_POST['deleteMenu'])) {

    $menu_id = $conn->real_escape_string($_POST['deleteMenu']);

    //Double checking if user inputs valid data (and not empty values)
    if ($menu_id != "") {

        //Updating the user record to database
        $sql = "DELETE FROM `tb_menu` WHERE `menu_id`='$menu_id';";
        $results = mysqli_multi_query($conn, $sql);

        if (!$results) {
            $_SESSION['status'] = 'Could not delete user - ' . mysqli_error($con);
            header("Location: ../menu.php");
        } else {
            // e0000cho "Data entered successfully";
            $_SESSION['status'] = "User deleted successfully";
            header("Location: ../menu.php");
        }
    }
}
