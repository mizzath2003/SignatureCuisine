<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    die();
}
$pageName = "Reservations";
include_once("includes/header.php");
include_once('components/sidebar.php');
?>
<!-- Search Bar -->
<div class="searchAlign">
    <h1>Reservations</h1>
    <input class="searchBar" type="text" id="myInput" placeholder="Search...">
</div>
<div class="tableDiv">
    <table class="tableSC">
        <tr class="table-head">
            <th>No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Count</th>
            <th>Date</th>
            <th>Time</th>
            <th>Message</th>
        </tr>

        <?php
        include_once("../dbh/connection.php");
        $i = 1;
        $sql1 = "SELECT * FROM `tb_reservation`";
        $results1 = mysqli_query($conn, $sql1);
        if ($results1->num_rows > 0) {
            while ($row = $results1->fetch_assoc()) {
        ?>

                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['reservation_name'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['count'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td><?= $row['time'] ?></td>
                    <td style="max-width:250px"><?= $row['message'] ?></td>
                </tr>

        <?php
            }
        }
        ?>

    </table>
</div>


<?php include_once("includes/footer.php"); ?>