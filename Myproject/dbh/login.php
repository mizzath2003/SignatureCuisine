<?php
// Start the session
session_start();
include('connection.php');

if (isset($_POST['loginBtn'])) {
    $username = $conn->real_escape_string(strtolower($_POST['username'])); //converting the username enetered to lowercase
    $hashedPassword = $conn->real_escape_string(sha1($_POST['password']));

    //Double checking if user inputs valid data (and not empty values)
    if ($username != "" and $_POST['password'] != "") {

        $sql1 = "SELECT `username`,`user_type` FROM `tb_user` WHERE `username`='$username' AND `password`='$hashedPassword'";
        $results1 = mysqli_query($conn, $sql1);

        if ($results1->num_rows > 0) {

            while ($row = $results1->fetch_assoc()) {
                if ($row['user_type'] == "admin") {
                    $_SESSION['admin'] = $row['username'];
                    header("Location: ../admin/");   //if its a admin  go to admin page

                } else {
                    header("Location: ../reservation.php"); //else direct the normal users to reservation
                }
                $_SESSION['userName'] = $row['username'];
            }
        } else {
            $_SESSION['status'] = "Incorrect username or password";
            header("Location: ../login.php");
        }
    }
}
