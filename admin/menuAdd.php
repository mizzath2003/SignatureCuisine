<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "Menu | Add";
include_once("includes/header.php");
include_once('components/sidebar.php');
?>
<h1>Add Menu</h1>
<div class="menuBox">
    <form action="dbh/menuCreate.php" class="row" method="post" enctype="multipart/form-data">
        <div class="form-content col-6">
            <label for="tital">Menu Name</label>
            <input type="text" placeholder="Enter Menu Name" name="name">
        </div>
        <div class="form-content col-6">
            <label for="tital">Menu Price</label>
            <input type="number" placeholder="Enter menu price" name="price">
        </div>
        <div class="form-content col-12">
            <label for="tital">Menu Description</label>
            <!-- <input type="text" placeholder="Enter menu description"> -->
            <textarea placeholder="Enter description" name="description" id="" rows="5"></textarea>
        </div>
        <div class="form-content col-12">
            <label for="tital">Menu Image</label>
            <input type="file" placeholder="Enter Menu Tital" name="image">
        </div>
        <button type="submit" class="btnSubmitMenu btn btn-warning" name="btnSubmitMenu">Submit</button>
    </form>
</div>
<?php include_once("includes/footer.php"); ?>