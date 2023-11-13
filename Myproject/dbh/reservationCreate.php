<?php
// Start the session
session_start();
include('connection.php');

if (isset($_POST['reserve'])) {

    //initializing user inputs   //(real_escape_string)->  used to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $count = $conn->real_escape_string(($_POST['count'])); //converting the username enetered to lowercase
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    $message = $conn->real_escape_string($_POST['message']);

    //Double checking if user inputs valid data (and not empty values)
    if ($name != "" and $phone != "" and $count != "" and $date != "" and $time != "" and $message != "") {

        //Inserting the new user record to database
        $sql2 = "INSERT INTO `tb_reservation`(`reservation_name`, `phone`, `count`, `date`, `time`, `message`) VALUES ('$name','$phone','$count','$date','$time','$message')";
        $results2 = mysqli_query($conn, $sql2);

        if (!$results2) {
            die('Could not Enter Data' . mysqli_error($conn));
        } else {
            // echo "Data entered successfully";
            $_SESSION['status'] = "Reservation successfully";
            header("Location:../index.php");
        }
    }
}
