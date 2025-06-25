<?php
include('./conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates | Maharishi</title>

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
                <div class="headercntnt">
                    <img data-src="./assets/images/logo_main.png" class="bg-white p-2 rounded-circle lazy mb-4" height="100px" alt="">
                    <h6 class="mb-4" data-aos="fade-up" data-aos-delay="100">Official School Compliance Certificates Archive</h6>
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="200">Access verified documents on recognition, health, and infrastructure standards.</h3>
                </div>
            </div>
        </div>

        <!-- Certificates -->
        <div class="corevalues">
            <div class="corevaluesdiv">
                <div class="corevalueshead">
                    <h3 class="m-0" data-aos="fade-down">Certificates</h3>
                </div>

                <div class="cardgrp1">
                    <a href="./assets/pdf/Recognition-Certificate.pdf" target="_blank">
                        <div class="card1 p-3 mb-4">
                            <img data-src="./assets/images/Certificate.png" class="lazy" height="100px" alt="">
                            <h5 data-aos="fade-down" data-aos-delay="100">Recognition Certificate</h5>
                        </div>
                    </a>
                    <a href="./assets/pdf/Grant-Letter.pdf" target="_blank">
                        <div class="card1 p-3 mb-4">
                            <img data-src="./assets/images/Certificate.png" class="lazy" height="100px" alt="">
                            <h5 data-aos="fade-down" data-aos-delay="100">Grant Letter</h5>
                        </div>
                    </a>
                    <a href="./assets/pdf/NOC.pdf" target="_blank">
                        <div class="card1 p-3 mb-4">
                            <img data-src="./assets/images/Certificate.png" class="lazy" height="100px" alt="">
                            <h5 data-aos="fade-down" data-aos-delay="100">NOC Certificate</h5>
                        </div>
                    </a>
                    <a href="./assets/pdf/Health-Certificate.pdf" target="_blank">
                        <div class="card1 p-3 mb-4">
                            <img data-src="./assets/images/Certificate.png" class="lazy" height="100px" alt="">
                            <h5 data-aos="fade-down" data-aos-delay="100">Health Certificate</h5>
                        </div>
                    </a>
                    <a href="./assets/pdf/Fire-Certificate.jpg" target="_blank">
                        <div class="card1 p-3 mb-4">
                            <img data-src="./assets/images/Certificate.png" class="lazy" height="100px" alt="">
                            <h5 data-aos="fade-down" data-aos-delay="100">Fire Certificate</h5>
                        </div>
                    </a>
                    <a href="./assets/pdf/Stability-Certificate.pdf" target="_blank">
                        <div class="card1 p-3 mb-4">
                            <img data-src="./assets/images/Certificate.png" class="lazy" height="100px" alt="">
                            <h5 data-aos="fade-down" data-aos-delay="100">Stability Certificate</h5>
                        </div>
                    </a>
                    <a href="./assets/pdf/Form-D-Certificate.pdf" target="_blank">
                        <div class="card1 p-3 mb-4">
                            <img data-src="./assets/images/Certificate.png" class="lazy" height="100px" alt="">
                            <h5 data-aos="fade-down" data-aos-delay="100">Form D Certificate</h5>
                        </div>
                    </a>
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