<?php
session_start();
$pageName = "menu";
include_once("includes/header.php");
include_once("includes/topbar.php");
?>

<!-- menue -->
<section style="min-height: 100vh;">
    <h1 class="head-1">Menu</h1>
    <?php

    include_once("dbh/connection.php");
    $i = 1;
    $sql1 = "SELECT * FROM `tb_menu`";
    $results1 = mysqli_query($conn, $sql1);
    if ($results1->num_rows > 0) {
        while ($row = $results1->fetch_assoc()) {
    ?>
            <div class="menu-item">
                <div class="menu-img">
                    <img src="admin/dbh/<?= $row['image'] ?>" alt="<?= $row['menu_name'] ?>">
                </div>
                <div class="menu-context">
                    <div class="row">
                        <div class="menu-title col-8">
                            <?= $row['menu_name'] ?>
                        </div>
                        <div class="menu-price col-4">
                            <?= "LKR " . $row['price'] ?>
                        </div>
                    </div>
                    <div class="menu-description">
                        <?= $row['description'] ?>
                    </div>
                </div>
            </div>
    <?php
        }
    }


    ?>
</section>
<!-- End menue -->

<?php include_once("includes/footer.php"); ?>