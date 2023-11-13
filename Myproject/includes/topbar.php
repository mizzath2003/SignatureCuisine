<!-- PRELOADER-->
<div class="preload" data-preaload>
    <p class="text">Signature cuisine</p>
</div>

<!-- TOP BAR-->
<div class="topbar">
    <div class="container">
        <a href="https://goo.gl/maps/n9Cj8P8PEhrttRR8A" class="topbar-item link" target="-">
            <address class="topbar-item">
                <div class="icon">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                </div>
                <span class="span">222 Hill St, Dehiwala-Mount Lavinia 10350</span>
            </address>
        </a>

        <div class="separator"></div>

        <div class="topbar-item item-2">
            <div class="icon">
                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">Daily : 9.00 am to 10.00 pm</span>
        </div>

        <!--Space-->

        <a href="tel:+123 456 7890" class="topbar-item link">
            <div class="icon">
                <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">+123 456 7890</span>
        </a>

        <div class="separator"></div>

        <a href="mailto:Signaturcuisine@gmail.com" class="topbar-item link">
            <div class="icon">
                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">Signaturcuisine@gmail.com</span>
        </a>
    </div>
</div>
<!-- TOP BAR END-->

<!--NAVBAR-->
<header class="header" data-header>
    <div class="container">
        <a href="#" class="logo">
            <img src="./images/fulllogo.png" width="150" height="30" alt="Signature cuisine - Home" />
        </a>

        <nav class="navbar">
            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="index.php" class="navbar-link hover-underline active">
                        <span class="span">Home</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="menu.php" class="navbar-link hover-underline">
                        <span class="span">Menus</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="aboutUs.php" class="navbar-link hover-underline">
                        <span class="span">About Us</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="reservation.php" class="navbar-link hover-underline">
                        <span class="span">Reservation</span>
                    </a>
                </li>
                <!-- show only if its a admin -->
                <?php
                if (isset($_SESSION['admin'])) {
                ?>
                    <li class="navbar-item">
                        <a href="admin/" class="navbar-link hover-underline">
                            <span class="span">Admin Panel</span>
                        </a>
                    </li>
                <?php
                }
                ?>

            </ul>
        </nav>

        <div class="regandlogin">
            <?php
            if (isset($_SESSION['userName'])) {
            ?>
                <a href="dbh/logout.php" class="btn btn-secondary btnlogin">
                    <span class="text text-1">Logout</span>
                </a>
            <?php
            } else {
            ?>
                <a href="register.php" class="btn btn-secondary btnregister">
                    <span class="text text-1">Register</span>
                </a>
                <a href="login.php" class="btn btn-secondary btnlogin">
                    <span class="text text-1">Sign In</span>
                </a>
            <?php
            }
            ?>

        </div>
    </div>
</header>
<!--NAVBAR END-->