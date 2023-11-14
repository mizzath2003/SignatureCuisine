<?php
session_start();
//If not logged in cannot access this page
if (!isset($_SESSION['userName'])) {
    $_SESSION['status'] = "Login to make a reservation";
    header("Location: login.php");
    die();
}
$pageName = "table-reservation";
include_once("includes/header.php");
include_once("includes/topbar.php");
?>
<!--RESERVATION-->

<section class="reservation">
    <div class="container">
        <div class="form reservation-form bg-black-10">
            <!--Form start-->
            <form id="reservationForm" name="myForm" class="form-left" action="dbh/reservationCreate.php" method="POST">
                <h2 class="headline-1 text-center resTital">Online Reservation</h2>
                <p class="form-text text-center resDetails">
                    Booking request
                    <a href="tel:+123 456 7890" class="link">+123 456 7890</a>
                    or fill out the reservation form
                </p>


                <div class="warning hidden" id="warning">
                    <img src="images/warning.png" alt="warning" class="warning-icon" width="35" height="35" />
                    <p class="warningDetail" id="warningDetail"></p>
                </div>


                <div class="row">
                    <div class="col-6">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field" id="name" />
                    </div>
                    <div class="col-6">
                        <label for="">Phone</label>
                        <input type="number" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" id="phone" min="0700000000" max="0789999999" />
                    </div>
                    <div class="col-4">
                        <label for="">Person count</label>
                        <select name="count" class="input-field" id="person">
                            <option selected disabled value="">Choose...</option>
                            <option value="1-person">1 Person</option>
                            <option value="2-person">2 Person</option>
                            <option value="3-person">3 Person</option>
                            <option value="4-person">4 Person</option>
                            <option value="5-person">5 Person</option>
                            <option value="6-person">6 Person</option>
                            <option value="7-person">7 Person</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="">Date</label>
                        <input type="date" name="date" class="input-field" id="date" style="max-height: 52.4px;" />
                    </div>
                    <div class="col-4">
                        <label for="">Time</label>
                        <select name="time" class="input-field" id="time">
                            <option selected disabled value="">Choose...</option>
                            <option value="09:00am">09 : 00 am</option>
                            <option value="10:00am">10 : 00 am</option>
                            <option value="11:00am">11 : 00 am</option>
                            <option value="12:00am">12 : 00 am</option>
                            <option value="01:00pm">01 : 00 pm</option>
                            <option value="02:00pm">02 : 00 pm</option>
                            <option value="03:00pm">03 : 00 pm</option>
                            <option value="04:00pm">04 : 00 pm</option>
                            <option value="05:00pm">05 : 00 pm</option>
                            <option value="06:00pm">06 : 00 pm</option>
                            <option value="07:00pm">07 : 00 pm</option>
                            <option value="08:00pm">08 : 00 pm</option>
                            <option value="09:00pm">09 : 00 pm</option>
                            <option value="10:00pm">10 : 00 pm</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Message</label>
                        <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>
                    </div>
                </div>
                <button id="submit" type="submit" value="submit" name="reserve" class="btn btn-secondary btnReservation">
                    <span class="text text-1">Reserve A Table</span>
                </button>
            </form>
        </div>
    </div>
</section>

<?php include_once("includes/footer.php"); ?>