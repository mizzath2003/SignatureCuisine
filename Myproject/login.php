<?php
session_start();
//If logged in cannot access this page
if (isset($_SESSION['userName'])) {
    header("Location: ./");
    die();
}
$pageName = "login";
include_once("includes/header.php");
include_once("includes/topbar.php");
?>

<!-- Login -->
<div class="toCenter">
    <div class="loginBox">
        <form action="dbh/login.php" class="loginForm" method="POST" name="myForm" id="loginForm">
            <h2 class="loginTital">Login</h2>
            <div class="form-content">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div class="form-content">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter Password">
                <small id="warning" class="loginError">
                    <?php
                    if (isset($_SESSION['status'])) {
                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    }
                    ?>
                    <p></p>
                </small>
            </div>
            <button type="submit" class="btnLogin" name="loginBtn">Login</button>
            <span class="notMemeber">Not a member ? <a href="register.php" class="notmemberLink"> &nbsp;Sign up now</a></span>
        </form>
    </div>
</div>

<!-- Login End -->

<?php include_once("includes/footer.php"); ?>