<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "Users";
include_once("includes/header.php");
include_once('components/sidebar.php');
?>
<div class="header-section">
    <h1>Users</h1>
    <a href="userAdd.php"><button class="btn btn-warning">Add User</button></a>
</div>
<div class="tableDiv">
    <table class="tableSC">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th>User type</th>
            <th>Manage</th>
        </tr>
        <?php
        include_once("../dbh/connection.php");
        $i = 1;
        $sql1 = "SELECT * FROM `tb_user`";
        $results1 = mysqli_query($conn, $sql1);
        if ($results1->num_rows > 0) {
            while ($row = $results1->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['fname'] ?> </td>
                    <td><?= $row['lname'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td><?= $row['user_type'] ?></td>
                    <td>
                        <form action="dbh/userDelete.php" method="POST">

                            <button type="button" class="btn btn-info mr-1">
                                <a href="userEdit.php?user=<?= $row['user_id'] ?>">Edit</a>
                            </button>

                            <button name="deleteUser" class="btn btn-error" type="submit" value="<?= $row['user_id'] ?>" onclick="return confirm('All details and reservations relavant to this user will be deleted. Are you sure you want to delete this menu? Once deleted you cannot undo');">Delete</button>
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