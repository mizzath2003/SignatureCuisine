<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "User | Add";
include_once("includes/header.php");
include_once('components/sidebar.php');
?>

<h1>Register User</h1>
<div class="menuBox">
    <form action="dbh/userRegister.php" class="row" method="POST">
        <div class="form-content col-4">
            <label>First Name</label>
            <input type="text" placeholder="Enter First Name" name="fname">
        </div>
        <div class="form-content col-4">
            <label>Last Name</label>
            <input type="text" placeholder="Enter Last Name" name="lname">
        </div>
        <div class="form-content col-4">
            <label>Username</label>
            <input type="text" placeholder="Enter username" name="username">
        </div>
        <div class="form-content col-6">
            <label>Email</label>
            <input type="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-content col-6">
            <label>Password</label>
            <input type="password" placeholder="Enter Password" name="password">
        </div>
        <div class="form-content col-4">
            <label>Phone</label>
            <input type="number" placeholder="Enter Phone number" name="phone" min="0700000000" max="0789999999">
        </div>
        <div class="form-content col-4">
            <label>Status</label>
            <select name="status" id="status">
                <option value="active">active</option>
                <option value="deactive">inactive</option>
            </select>
        </div>
        <div class="form-content col-4">
            <label>User Type</label>
            <select name="userType" id="userType">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btnSubmitMenu btn btn-warning" name="btnSubmitMenu">Submit</button>
    </form>
</div>

<?php include_once("includes/footer.php"); ?>