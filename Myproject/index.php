<?php
session_start();
$pageName = "home";
include_once("includes/header.php");
include_once("includes/topbar.php");
?>
<!--HERO-->
<section class="hero text-center" aria-label="home" id="home">
    <ul class="hero-slider" data-hero-slider>
        <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg"></div>

            <p class="label-2 section-subtitle slider-reveal">
                delightful experience
            </p>

            <h1 class="display-1 hero-title slider-reveal">
                For the love of <br />
                delicious food
            </h1>

            <p class="body-2 hero-text slider-reveal">
                Come with family & feel the joy of mouthwatering food
            </p>
        </li>
    </ul>
</section>
<?php include_once("includes/footer.php"); ?>