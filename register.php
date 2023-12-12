<?php
session_start();
//If logged in cannot access this page
if (isset($_SESSION['userName'])) {
    header("Location: ./");
    die();
}
$pageName = "register";
include_once("includes/header.php");
include_once("includes/topbar.php");

?>

<div class="regContainer">
    <div class="headerReg">
        <h2 class="headline-1 regTital">Register</h2>
    </div>
    <form id="Registerform" class="Regform" action="dbh/userCreate.php" method="POST">
        <div class="form-control">
            <label for="fname">First Name </label>
            <input type="text" placeholder="Enter First Name" id="fname" name="fname" />
            <small id="fnameError"></small>
        </div>
        <div class="form-control">
            <label for="lname">Last Name </label>
            <input type="text" placeholder="Enter Last Name" id="lname" name="lname" />
            <small id="lnameError"></small>
        </div>
        <div class="form-control">
            <label for="username">Username </label>
            <input type="text" placeholder="Enter username" style="text-transform: lowercase;" id="username" name="username" />
            <small id="userNameError"></small>
        </div>
        <div class="form-control">
            <label for="phone">Phone</label>
            <input type="number" placeholder="Enter phone number" id="phone" name="phone" min="0700000000" max="0789999999" />
            <small id="phoneError"></small>
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="email" placeholder="Enter email id" id="email" name="email" />
            <small id="emailError"></small>
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" placeholder="Enter password" id="password" name="password" />
            <small id="passwordError"></small>
        </div>
        <div class="form-control">
            <label for="password2">Confirm Password</label>
            <input type="password" placeholder="Enter confirm password" id="password2" />
            <small id="password2Error"></small>
        </div>

        <button class="regSubmit" type="submit" name="sumbit" id="submit">
            Register
        </button>
    </form>
</div>
<script src="scripts/register.js"></script>
<?php include_once("includes/footer.php"); ?>