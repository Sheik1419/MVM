<?php
include('./conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core Values | Maharishi</title>

    <!-- Style CDN -->
    <?php include('./cdn_style.php'); ?>

    <link rel="stylesheet" href="./assets/css/core_values.css">

</head>

<body>

    <div class="main">

        <?php include('./navbar.php'); ?>

        <!-- Header -->
        <div class="header">
            <div class="headerdiv">
                <!-- <video data-src="./assets/videos/Maharishi_School_2.mp4" type="video/mp4" autoplay muted loop preload="none">
                </video> -->
                <div class="headercntnt">
                    <img data-src="./assets/images/logo_main.png" class="bg-white p-2 rounded-circle lazy mb-4" height="100px" alt="">
                    <h6 class="mb-4" data-aos="fade-up" data-aos-delay="100">Yearly Learning Program</h6>
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="200">Growth, Goals, and Great learning</h3>
                    <button class="headbtn mb-4" data-aos="fade-up" data-aos-delay="300">Explore Our Programs <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- Core Values -->
        <div class="corevalues">
            <div class="corevaluesdiv">
                <div class="corevalueshead">
                    <h3 class="m-0" data-aos="fade-down">Curriculum</h3>
                </div>

                <div class="cardgrp1">
                    <div class="card1 pt-2 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <img data-src="./assets/images/Icon_1.png" class="lazy" height="50px" alt="">
                        <h5>KinderGarten</h5>
                        <ul class="ps-0" style="height: 150px; overflow: auto;">
                            <li>Brandemics</li>
                            <li>Karadipath</li>
                            <li>3H Worksheets</li>
                        </ul>
                    </div>
                    <div class="card1 pt-2 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <img data-src="./assets/images/Icon_2.png" class="lazy" height="50px" alt="">
                        <h5>Primary</h5>
                        <ul class="ps-0" style="height: 150px; overflow: auto;">
                            <li>Orient Blackswan</li>
                            <li>Eduvate</li>
                            <li>Whitehat Jr</li>
                            <li>WriteWiz</li>
                            <li>Learn Basics</li>
                            <li>Extra Marks</li>
                            <li>Matific</li>
                            <li>WordsWorth</li>
                            <li>xQ Lab</li>
                        </ul>
                    </div>
                    <div class="card1 pt-2 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <img data-src="./assets/images/Icon_3.png" class="lazy" height="50px" alt="">
                        <h5>Middle</h5>
                        <ul class="ps-0" style="height: 150px; overflow: auto;">
                            <li>Tamil</li>
                            <li>English</li>
                            <li>Maths</li>
                            <li>Hindi</li>
                            <li>Science</li>
                            <li>Social Science</li>
                            <li>Whitehat Jr</li>
                            <li>Eduvate</li>
                            <li>WriteWiz</li>
                            <li>Learn Basics</li>
                            <li>Extra Marks</li>
                            <li>Matific</li>
                            <li>WordsWorth</li>
                            <li>xQ Lab</li>
                        </ul>
                    </div>
                    <div class="card1 pt-2 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <img data-src="./assets/images/Icon_4.png" class="lazy" height="50px" alt="">
                        <h5>Secondary</h5>
                        <ul class="ps-0" style="height: 150px; overflow: auto;">
                            <li>Tamil</li>
                            <li>English (NCERT)</li>
                            <li>Maths (NCERT)</li>
                            <li>Hindi (NCERT)</li>
                            <li>Science</li>
                            <li>Social Science</li>
                            <li>Whitehat Jr</li>
                            <li>Eduvate</li>
                            <li>WriteWiz</li>
                            <li>Learn Basics</li>
                            <li>Extra Marks</li>
                            <li>Matific</li>
                            <li>xQ Lab</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php include('./footer.php'); ?>

    </div>

    <!-- Script CDN -->
    <?php include('./cdn_script.php'); ?>

</body>

<script>
    AOS.init({
        duration: 1000
    });
</script>

</html>