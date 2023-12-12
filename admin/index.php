<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "Home";
include_once("includes/header.php");
include_once('components/sidebar.php');
?>

<h1>Dashboard</h1>

<?php include_once("includes/footer.php"); ?>