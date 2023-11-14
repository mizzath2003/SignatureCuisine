<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "Menu | Edit";
include_once("includes/header.php");
include_once('components/sidebar.php');

include_once("../dbh/connection.php");
$menu_id = $conn->real_escape_string($_GET['menu']);
$sql1 = "SELECT * FROM `tb_menu` WHERE `menu_id`='$menu_id'";
$results1 = mysqli_query($conn, $sql1);
if ($results1->num_rows > 0) {
    while ($row = $results1->fetch_assoc()) {
        $name = $row['menu_name'];
        $price = $row['price'];
        $description = $row['description'];
    }
}
?>
<h1>Add Menu</h1>
<div class="menuBox">
    <form action="dbh/menuUpdate.php" class="row" method="post" enctype="multipart/form-data">
        <div class="form-content col-6">
            <label for="tital">Menu Title</label>
            <input type="text" placeholder="Enter Menu Tital" name="name" value="<?= $name ?>">
        </div>
        <div class="form-content col-6">
            <label for="tital">Menu Price</label>
            <input type="number" placeholder="Enter menu price" name="price" value="<?= $price ?>">
        </div>
        <div class="form-content col-12">
            <label for="tital">Menu Description</label>
            <!-- <input type="text" placeholder="Enter menu description"> -->
            <textarea placeholder="Enter description" id="" rows="5" name="description"><?= $description ?></textarea>
        </div>
        <div class="form-content col-12">
            <label for="tital">Menu Image</label>
            <input type="file" placeholder="Enter Menu Tital" name="image">
        </div>
        <button type="submit" class="btnSubmitMenu btn btn-warning" name="btnSubmitMenu" value="<?= $menu_id ?>">Submit</button>
    </form>
</div>
<?php include_once("includes/footer.php"); ?>