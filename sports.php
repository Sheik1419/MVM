<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports | Maharishi</title>

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
                <video autoplay muted loop>
                    <source src="./assets/videos/Sports.mp4" type="video/mp4">
                </video>
                <div class="headercntnt">
                    <img src="./assets/images/logo_main.png" class="mb-4" height="100px" alt="">
                    <h6 class="mb-4" data-aos="fade-up" data-aos-delay="100">School Sports</h6>
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="200">Team spirit, Strength, and Fun</h3>
                    <button class="headbtn mb-4" data-aos="fade-up" data-aos-delay="300">Explore Our Programs <i
                            class="fas fa-arrow-right ps-1"></i></button>
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
    AOS.init();
</script>

</html>