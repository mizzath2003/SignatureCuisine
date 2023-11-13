<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "User | Edit";
include_once("includes/header.php");
include_once('components/sidebar.php');
include_once("../dbh/connection.php");
$userID = $conn->real_escape_string($_GET['user']);
$sql1 = "SELECT * FROM `tb_user` WHERE `user_id`='$userID'";
$results1 = mysqli_query($conn, $sql1);
if ($results1->num_rows > 0) {
    while ($row = $results1->fetch_assoc()) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $username = $row['username'];
        $email = $row['email'];
        $phone = $row['phone'];
        $status = $row['status'];
        $user_type = $row['user_type'];
    }
}
?>
<h1>Edit User</h1>
<div class="menuBox">
    <form action="dbh/userUpdate.php" class="row" method="POST">
        <div class="form-content col-4">
            <label>First Name</label>
            <input type="text" placeholder="Enter First Name" name="fname" value="<?= $fname ?>">
        </div>
        <div class="form-content col-4">
            <label>Last Name</label>
            <input type="text" placeholder="Enter Last Name" name="lname" value="<?= $lname ?>">
        </div>
        <div class="form-content col-4">
            <label>Username</label>
            <input type="text" placeholder="Enter username" name="username" value="<?= $username ?>">
        </div>
        <div class="form-content col-12">
            <label>Email</label>
            <input type="email" placeholder="Enter email" name="email" value="<?= $email ?>">
        </div>
        <div class="form-content col-4">
            <label>Phone</label>
            <input type="number" placeholder="Enter Phone number" name="phone" value="<?= $phone ?>">
        </div>
        <div class="form-content col-4">
            <label>Status</label>
            <select name="status" id="status">
                <option value="active" <?= ($status == "active") ? "selected" : "" ?>>Active</option>
                <option value="inactive" <?= ($status == "inactive") ? "selected" : "" ?>>Inactive</option>
            </select>
        </div>
        <div class="form-content col-4">
            <label>User Type</label>
            <select name="userType" id="userType">
                <option value="user" <?= ($user_type == "user") ? "selected" : "" ?>>User</option>
                <option value="admin" <?= ($user_type == "admin") ? "selected" : "" ?>>Admin</option>
            </select>
        </div>
        <button type="submit" class="btnSubmitMenu btn btn-warning" name="btnSubmitMenu" value="<?= $userID ?>">Submit</button>
    </form>
</div>

<?php include_once("includes/footer.php"); ?>