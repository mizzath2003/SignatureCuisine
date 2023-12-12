<?php
session_start();
$pageName = "aboutus";
include_once("includes/header.php");
include_once("includes/topbar.php");
?>

<!--About us content-->
<section class="section about" aria-labelledby="about-label" id="about">
    <div class="container">
        <div class="about-content">
            <p class="label-2 section-subtitle aboutustital" id="about-label">
                About Us
            </p>


            <div class="row">
                <div class="col-6 section-text">
                    <h2 class="headline-1 section-title story ">
                        Every Flavor Tells a Story
                    </h2>
                    <p style="text-align:justify">
                        Welcome to Signature Cuisine - serving exceptional food since 1998
                        in multiple Colombo locations, with our first branch in Dehiwala
                        Mount Lavinia.<br /><br />
                        At Signature Cuisine, we take pride in our commitment to offering a
                        memorable dining experience, combining exquisite flavors, warm
                        hospitality, and a vibrant ambiance. From the moment you step into
                        any of our locations, you embark on a gastronomic adventure like no
                        other. At Signature Cuisine, we're devoted to crafting a memorable dining
                        experience. Our menu is an artistic blend of traditional recipes and
                        contemporary flair, prepared by passionate chefs who use only the
                        finest and freshest ingredients to ensure unrivaled quality.<br /><br />
                        As a token of our gratitude for your loyalty, we offer regular
                        promotions and rewards. Join us for moments of celebration, family
                        gatherings, and friendly get-togethers, as we continually innovate
                        and exceed expectations. Thank you for being part of our story. Embrace the essence of
                        Signature Cuisine, where passion meets perfection on a plate. We
                        look forward to creating cherished memories with you through our
                        flavorsome offerings and warm hospitality.
                    </p>
                </div>
                <div class="col-4">
                    <img style="padding:7rem" src="images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner" class="" data-parallax-item data-parallax-speed="1" />
                </div>
            </div>


        </div>
        <img src="images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape" />
    </div>
</section>
<!--About us content end-->

<!-- Our strength-->
<section class="section features text-center ourStrength" aria-label="features">
    <div class="container">
        <h2 class="headline-1 section-title textStrength">Our Strength</h2>

        <ul class="grid-list">
            <li class="feature-item">
                <div class="feature-card">
                    <div class="card-icon">
                        <img src="images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon" />
                    </div>

                    <h3 class="title-2 card-title">Hygienic Food</h3>
                </div>
            </li>

            <li class="feature-item">
                <div class="feature-card">
                    <div class="card-icon">
                        <img src="images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon" />
                    </div>

                    <h3 class="title-2 card-title">Fresh Environment</h3>
                </div>
            </li>

            <li class="feature-item">
                <div class="feature-card">
                    <div class="card-icon">
                        <img src="images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon" />
                    </div>

                    <h3 class="title-2 card-title">Skilled Chefs</h3>
                </div>
            </li>

            <li class="feature-item">
                <div class="feature-card">
                    <div class="card-icon">
                        <img src="images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon" />
                    </div>

                    <h3 class="title-2 card-title">Event & Party</h3>
                </div>
            </li>
        </ul>

        <img src="images/shape-8.png" width="120" height="115" loading="lazy" alt="shape" class="shape shape-8 newshape" />
    </div>
</section>

<?php include_once("includes/footer.php"); ?>