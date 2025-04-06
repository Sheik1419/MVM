<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Maharishi</title>

    <!-- Style CDN -->
    <?php include('./cdn_style.php'); ?>

    <link rel="stylesheet" href="./assets/css/about.css">

</head>

<body>

    <div class="main">

        <?php include('./navbar.php'); ?>

        <!-- Header -->
        <div class="header">
            <div class="headerdiv">
                <!-- <video autoplay muted loop>
                    <source src="./assets/videos/Maharishi_School_2.mp4" type="video/mp4">
                </video> -->
                <div class="headercntnt">
                    <img src="./assets/images/logo_main.png" class="mb-4" height="100px" alt="">
                    <h6 class="mb-4" data-aos="fade-up" data-aos-delay="100">About Our School</h6>
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="200">Inspiring minds, Shaping futures</h3>
                    <button class="headbtn mb-4" data-aos="fade-up" data-aos-delay="300">Explore Our Programs <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- Message -->
        <div class="message m-0">
            <div class="messagediv">
                <div class="messageleft">
                    <img src="./assets/images/Founder.png" class="d-flex mx-auto"
                        style="object-fit: contain; object-position: center;" height="500px" width="78%" alt="">
                </div>
                <div class="messageright">
                    <h5 class="mb-4" data-aos="fade-down" data-aos-delay="100">Our Founder</h5>
                    <h4 class="mb-4" data-aos="fade-down" data-aos-delay="300">Maharishi Mahesh Yogi</h4>
                    <h6 class="mb-4" data-aos="fade-down" data-aos-delay="400">
                        Founder of Maharishi school of the Age of Enlightenment, who introduced the Transcendental
                        Meditation program to the world 50 years ago for systematically developing higher states of
                        consciousness, Maharishi is now offering every school consciousness-based education so that all
                        students everywhere can enliven total brain functioning, unfold their full creative potential to
                        enjoy healthy, happy and successful lives.
                    </h6>
                    <h6 class="mb-4" data-aos="fade-down" data-aos-delay="500">
                        The signature standard of educators, collaborating with the finest campus facility, we at
                        Maharishi Vidya Mandir located in Rakkipatty, Salem, Tamil Nadu, render education in its
                        smartest and exalted form. We believe education to be two fold - academic and moral. Thus, our
                        educational methodology nurtures and develops the body and mind of our students enrolled. The
                        vision behind such an approach is to prepare a strong foothold of the growing generation's mind
                        and character.
                    </h6>
                </div>
            </div>
        </div>

        <!-- Motto -->
        <div class="motto">
            <div class="mottohead">
                <h3 class="m-0" data-aos="fade-down" data-aos-delay="200">School Motto</h3>
            </div>
            <div class="mottodiv">

                <div class="servicescslmain">
                    <div id="carousel2">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide card1">
                                    <div class="card-content" data-aos="fade-up" data-aos-delay="200">
                                        <div class="cardimg">
                                            <img src="./assets/images/founder.png" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h5>Motto</h5>
                                            <p>
                                                "Knowledge is structured in Consciousness" means Consciousness
                                                constitutes Knowledge
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide card1">
                                    <div class="card-content" data-aos="fade-up" data-aos-delay="300">
                                        <div class="cardimg">
                                            <img src="./assets/images/logo_white.png" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h5>Emblem</h5>
                                            <p>
                                                School Emblem which acquaints life of a human. The tree here is of the
                                                Knowledge with varied branches of diversified faculties and the roots
                                                denote the consciousness. The ultimate source of life. "Water the root
                                                and enjoy the fruit" - His holiness Maharishi's Priniciple.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide card1">
                                    <div class="card-content" data-aos="fade-up" data-aos-delay="400">
                                        <div class="cardimg">
                                            <img src="./assets/images/Our_Mission.png" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h5>Our Mission</h5>
                                            <p>
                                                The school strives to create a learning environment for students to get
                                                into top international universities. It ensures students well being
                                                through Transcendental Meditation, Yoga & Pranayama.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide card1">
                                    <div class="card-content" data-aos="fade-up" data-aos-delay="500">
                                        <div class="cardimg">
                                            <img src="./assets/images/Our_Vision.png" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h5>Our Vision</h5>
                                            <p>
                                                School Offers consciousness-based education which ensures students total
                                                brain functioning to unfold both creative & logical intelligence and
                                                promotes stress free, happy & successful journey ahead.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
    AOS.init();
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#carousel2', {
            type: 'loop',
            perPage: 4,
            perMove: 1,
            autoplay: true,
            interval: 5000,
            rewind: true,
        }).mount();
    });
</script>

</html>