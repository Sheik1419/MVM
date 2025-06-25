<?php
include('./conn.php');

?>
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
                <video data-src="./assets/videos/Sports.mp4" type="video/mp4" autoplay muted loop preload="none">
                </video>
                <div class="headercntnt">
                    <img data-src="./assets/images/logo_main.png" class="lazy mb-4" height="100px" alt="">
                    <h6 class="mb-4" data-aos="fade-up" data-aos-delay="100">School Sports</h6>
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="200">Team spirit, Strength, and Fun</h3>
                    <button class="headbtn mb-4" data-aos="fade-up" data-aos-delay="300">Explore Our Programs <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- Sports -->
        <div class="corevalues">
            <div class="corevaluesdiv">
                <div class="corevalueshead">
                    <h3 class="m-0" data-aos="fade-down">Sports</h3>
                </div>

                <div id="carousel1" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/1.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/1.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/2.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/2.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/3.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/3.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/4.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/4.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/5.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/5.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/6.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/6.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/7.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/7.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/8.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/8.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="carousel2" class="splide mt-5">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/9.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/9.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/10.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/10.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/11.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/11.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/12.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/12.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/13.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/13.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/14.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/14.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/15.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/15.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div>
                                    <a href="./assets/images/Sports/16.jpg" data-fancybox="activities">
                                        <img src="./assets/images/Sports/16.jpg" loading="lazy" alt="">
                                    </a>
                                </div>
                            </li>
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
    // Carousel 1
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#carousel1', {
            type: 'loop',
            perPage: 5,
            perMove: 1,
            arrows: false,
            pagination: false,
            rewind: true,
            autoplay: true,
            interval: 1500,
            breakpoints: {
                1098: {
                    perPage: 4,
                },
                768: {
                    perPage: 3,
                },
                480: {
                    perPage: 2,
                },
                300: {
                    perPage: 1
                }
            }
        }).mount();
    });

    document.addEventListener('DOMContentLoaded', function() {
        var splide = new Splide('#carousel2', {
            type: 'loop',
            perPage: 5,
            perMove: 1,
            arrows: false,
            pagination: false,
            rewind: true,
            autoplay: false,
            interval: 2000,
            breakpoints: {
                1098: {
                    perPage: 4,
                },
                768: {
                    perPage: 3,
                },
                480: {
                    perPage: 2,
                },
                300: {
                    perPage: 1
                }
            }
        }).mount();

        // Custom reverse autoplay
        setInterval(function() {
            splide.go('<');
        }, 2000);
    });
</script>

<script>
    AOS.init({
        duration: 1000
    });
</script>

</html>