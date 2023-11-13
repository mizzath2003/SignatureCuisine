<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "Menu";
include_once("includes/header.php");
include_once('components/sidebar.php');
?>
<div class="header-section">
    <h1>Menu</h1>
    <a href="menuAdd.php"><button class="btn btn-warning">Add Menu</button></a>
</div>
<div class="tableDiv">
    <table class="tableSC">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Manage</th>
        </tr>

        <?php
        include_once("../dbh/connection.php");
        $i = 1;
        $sql1 = "SELECT * FROM `tb_menu`";
        $results1 = mysqli_query($conn, $sql1);
        if ($results1->num_rows > 0) {
            while ($row = $results1->fetch_assoc()) {
        ?>

                <tr>
                    <td><?= $i++ ?></td>
                    <td style="width:100px;"><img src="dbh/<?= $row['image'] ?>" width="98px" alt="menu-img"></td>
                    <td><?= $row['menu_name'] ?></td>
                    <td>LKR <?= $row['price'] ?></td>
                    <td style="max-width:250px"><?= $row['description'] ?></td>
                    <td>
                        <form action="dbh/menuDelete.php" method="POST">

                            <button type="button" class="btn btn-info mr-1">
                                <a href="menuEdit.php?menu=<?= $row['menu_id'] ?>">Edit</a>
                            </button>

                            <button name="deleteMenu" class="btn btn-error" type="submit" value="<?= $row['menu_id'] ?>" onclick="return confirm('Are you sure you want to delete this menu? Once deleted you cannot undo');">Delete</button>
                        </form>
                    </td>
                </tr>

        <?php
            }
        }
        ?>

    </table>
</div>

<?php
include_once("includes/footer.php");
?>