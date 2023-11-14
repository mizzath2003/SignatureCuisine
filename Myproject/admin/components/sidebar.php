<!-- Hamburger icon for sidebar toggle -->
<div class="hamburger open" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</div>

<div class="sidebar open">
    <img src="images/fulllogo.png" width="160px" alt="Logo">
    <a href="./" class="<?= ($pageName == "Home") ? "active" : ""; ?>">Home</a>
    <a href="./reservation.php" class="<?= ($pageName == "Reservations") ? "active" : ""; ?>">Reservations</a>
    <a href="./menu.php" class="<?= ($pageName == "Menu") ? "active" : ""; ?>">Menu</a>
    <a href="./users.php" class="<?= ($pageName == "Users") ? "active" : ""; ?>">Users</a>
    <!-- <button class="collapsible">Users</button>
    <div class=" content">
        <a href="#">Register</a>
        <a href="#">Update</a>
    </div>
    <button class="collapsible">Menu</button>
    <div class="content">
        <a href="menu.php">View</a>
        <a href="../menuAdd.php">Update</a>
    </div>
    <button class="collapsible">Reservation</button>
    <div class="content">
        <a href="">View</a>
        <a href="#">Update</a>
    </div> -->
    <a href="../dbh/logout.php" style="margin-top:auto" class="bottom-align-div"><i class="fa-solid fa-power-off"></i> Logout</a>
</div>
<div class="mainSec open">