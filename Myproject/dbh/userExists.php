<?php

include('connection.php');

if (isset($_POST['username'])) {

    //initializing user inputs   //(real_escape_string)->  used to prevent SQL injection
    $username = $conn->real_escape_string(strtolower($_POST['username'])); //converting the username enetered to lowercase

    $sql1 = "SELECT `username` FROM `tb_user` WHERE `username`='$username'";
    $results1 = mysqli_query($conn, $sql1);
    if ($results1->num_rows > 0) {
        echo ('Username exists');
    } else {
        echo ('success');
    }
}
