<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MRS</title>

    <!-- Style CDN -->
    <?php include('./cdn_style.php'); ?>

    <link rel="stylesheet" href="./assets/css/home.css">

</head>

<body>

    <div class="main">

        <?php include('./navbar.php'); ?>

        <!-- Header -->
        <div class="header">
            <div class="headerdiv">
                <video data-src="./assets/videos/Maharishi_School_2.mp4" type="video/mp4" autoplay muted loop
                    preload="none">
                </video>
                <div class="headercntnt">
                    <img data-src="./assets/images/logo_main.png" class="lazy mb-4" height="100px" alt="">
                    <h6 class="mb-4" data-aos="fade-up" data-aos-delay="200">Journeys of Growth, Discovery, and
                        Friendship</h6>
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="400">A Different School Of Thought</h3>
                    <button class="headbtn mb-4" data-aos="fade-up" data-aos-delay="300">Explore Our Programs <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- About -->
        <div class="about">
            <div class="aboutdiv pb-2">
                <div class="aboutleft">
                    <h2 class="m-0" data-aos="fade-right">Building Confidence Since 1977</h2>
                </div>
                <div class="aboutright">
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="200">
                        We believe in guiding our students on a transformative journey, where they first 'emerge' as
                        curious learners, then 'evolve' into critical thinkers and compassionate individuals, ultimately
                        poised to 'excel' in both their academic pursuits and personal development.
                    </h6>
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="300">
                        Our comprehensive approach ensures that each student's potential is not just
                        realized, but maximized, empowering them to become accomplished leaders of tomorrow. Join us in
                        this remarkable journey of growth, where success is not just a destination, but a way of life.
                    </h6>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="400">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>

            <hr>

            <div class="aboutcard row">
                <div class="col-sm-12 col-md-3 col-xl-3 px-3">
                    <h3 class="mb-3" data-aos="fade-down">Innovative</h3>
                    <h6 class="m-0" data-aos="fade-down" data-aos-delay="100">Igniting the spirit of innovation, turning
                        curiosity into creative breakthroughs.
                    </h6>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3 px-3">
                    <h3 class="mb-3" data-aos="fade-down">Compassionate</h3>
                    <h6 class="m-0" data-aos="fade-down" data-aos-delay="100">Where empathy meets action. Guiding
                        heartfelt actions and community connections.
                    </h6>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3 px-3">
                    <h3 class="mb-3" data-aos="fade-down">Well Rounded</h3>
                    <h6 class="m-0" data-aos="fade-down" data-aos-delay="100">Crafting multifaceted excellence, diverse
                        talents and balanced perspectives.</h6>
                </div>
                <div class="col-sm-12 col-md-3 col-xl-3 px-3">
                    <h3 class="mb-3" data-aos="fade-down">Courageous</h3>
                    <h6 class="m-0" data-aos="fade-down" data-aos-delay="100">Bold hearts, brave pursuits. Empowering
                        students to lead with confidence and
                        boldness.</h6>
                </div>
            </div>
        </div>

        <!-- Life On Campus -->
        <div class="life">
            <div class="lifehead">
                <h3 class="m-0" data-aos="fade-down">Life On Campus</h3>
            </div>
            <div class="lifeimg w-100 h-100">
                <video autoplay muted loop width="100%" height="100%">
                    <source src="./assets/videos/Maharishi_School_3.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- Beyond -->
        <div class="beyond">
            <div class="beyonddiv">
                <img data-src="./assets/images/logo_white.png" class="lazy rounded-2 mb-4" height="100px" alt="">
                <h3 class="mb-3" data-aos="fade-down" data-aos-delay="100">Emerge, Evlove, Excel</h3>
                <h6 class="mb-4" data-aos="fade-down" data-aos-delay="200">GSIS isn't just a school - we are a community
                    where student residences transform into
                    homes, and classmates become lifelong friends. Our top-tier education programs unlock student
                    potential through transformative learning experiences. Learn more about our academic programs.</h6>
                <button class="headbtn" data-aos="fade-down" data-aos-delay="300">Beyond Academics <i
                        class="fas fa-arrow-right ps-1"></i></button>
            </div>
        </div>

        <!-- Lerning Cards -->
        <div class="learning">
            <div class="learningdiv">

                <div class="learningcards">
                    <div class="learningimg">
                        <img data-src="./assets/images/Academic_3.png" width="85%" class="lazy d-flex mx-auto" alt="">
                    </div>
                    <div class="learningct">
                        <h5 class="mb-3" data-aos="fade-down">Learning</h5>
                        <h3 class="mb-3" data-aos="fade-down" data-aos-delay="100">Academic Excellence</h3>
                        <h6 class="m-0" data-aos="fade-down" data-aos-delay="200">Our commitment to excellence in
                            education challenges students to realize their
                            full potential. Here, learning transcends textbooks.</h6>
                    </div>
                </div>

                <div class="learningcards">
                    <div class="learningct">
                        <h5 class="mb-3" data-aos="fade-down">Creative</h5>
                        <h3 class="mb-3" data-aos="fade-down" data-aos-delay="100">Arts</h3>
                        <h6 class="m-0" data-aos="fade-down" data-aos-delay="200">Beyond aesthetics, our arts program
                            nurtures creative intelligence and emotional
                            expression, challenging students to discover their artistic potential.</h6>
                    </div>
                    <div class="learningimg">
                        <img data-src="./assets/images/Arts_3.png" width="85%" class="lazy d-flex mx-auto" alt="">
                    </div>
                </div>

                <div class="learningcards">
                    <div class="learningimg">
                        <img data-src="./assets/images/Athletics_3.png" width="85%" class="lazy d-flex mx-auto" alt="">
                    </div>
                    <div class="learningct">
                        <h5 class="mb-3" data-aos="fade-down">Sports</h5>
                        <h3 class="mb-3" data-aos="fade-down" data-aos-delay="100">Athletics</h3>
                        <h6 class="m-0" data-aos="fade-down" data-aos-delay="200">GSIS champions a diverse athletic
                            program featuring archery, basketball, soccer,
                            swimming, track and field, and more. Each promotes physical health and strategic thinking.
                        </h6>
                    </div>
                </div>

                <div class="learningcards">
                    <div class="learningct">
                        <h5 class="mb-3" data-aos="fade-down">Spirit</h5>
                        <h3 class="mb-3" data-aos="fade-down" data-aos-delay="100">Going Beyond</h3>
                        <h6 class="m-0" data-aos="fade-down" data-aos-delay="200">More than an institution, we are a
                            launching pad for personal growth. Find out
                            how learning here goes beyond textbooks.</h6>
                    </div>
                    <div class="learningimg">
                        <img data-src="./assets/images/Beyond_3.png" width="85%" class="lazy d-flex mx-auto" alt="">
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <!-- Cards -->
        <div class="cards">
            <div class="cardsdiv">
                <div class="card-1">
                    <h3 class="mb-3" data-aos="fade-down">AP Test Center Registration</h3>
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="200">College Board's Advanced Placement
                        Program® is recognized by universities around
                        the world as a standard of academic excellence.</h6>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="300">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
                <div class="brdr"></div>
                <div class="card-1">
                    <h3 class="mb-3" data-aos="fade-down">Summer School</h3>
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="200">Discover, Learn, and Grow this summer at
                        Good Shepherd International School's
                        highly anticipated STEP BEYOND Summer Camp.</h6>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="300">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
                <div class="brdr"></div>
                <div class="card-1">
                    <h3 class="mb-3" data-aos="fade-down">IB Manthan 2024</h3>
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="200">Inspiring Tomorrow, Shaping Futures: Our
                        Vision For The Future Of Education.</h6>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="300">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- Message -->
        <div class="message">
            <div class="messagediv">
                <div class="messageleft">
                    <img data-src="./assets/images/Rectangle.png" class="lazy d-flex mx-auto" height="600px" width="78%"
                        alt="">
                </div>
                <div class="messageright">
                    <h5 class="mb-4" data-aos="fade-down">School Leadership</h5>
                    <h4 class="mb-4" data-aos="fade-down" data-aos-delay="300">Message From The Headmistress</h4>
                    <h6 class="mb-4" data-aos="fade-down" data-aos-delay="400">
                        At Good Shepherd International School, our students are at the heart of everything we do. We
                        believe in going the extra mile to provide them with the best possible care, ensuring that they
                        thrive not just academically, but as well-rounded individuals.
                    </h6>
                    <h6 class="mb-4" data-aos="fade-down" data-aos-delay="500">
                        Our motto, 'Truth, Trust, and Triumph,' serves as the foundation of every student's journey
                        here. It guides our commitment to nurturing a community of progressive, lifelong learners who
                        view education as a holistic instrument for personal growth and not merely a means to achieve
                        academic success.
                    </h6>
                    <h5 class="mb-2" data-aos="fade-down" data-aos-delay="600">Deepa Suresh</h5>
                    <h5 class="mb-3" data-aos="fade-down" data-aos-delay="700">Headmistress</h5>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="800">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- News & Events -->
        <div class="newscards">
            <div class="newscardshead">
                <h3 class="m-0" data-aos="fade-down">News & Events</h3>
            </div>
            <div class="newscardsdiv">
                <div class="newscard">
                    <img data-src="./assets/images/News_1.png" width="90%" class="lazy d-flex mx-auto mb-4" alt="">
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="200">
                        GSIS: A Google Reference School Leading the Digital Revolution
                    </h6>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="300">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
                <div class="newscard">
                    <img data-src="./assets/images/News_2.png" width="90%" class="lazy d-flex mx-auto mb-4" alt="">
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="200">
                        Guide to Curriculum Options at Good Shepherd International School
                    </h6>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="300">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
                <div class="newscard">
                    <img data-src="./assets/images/News_3.png" width="90%" class="lazy d-flex mx-auto mb-4" alt="">
                    <h6 class="mb-3" data-aos="fade-down" data-aos-delay="200">
                        Healthy Bodies, Healthy Minds: Promoting Fitness and Sports for All
                    </h6>
                    <button class="headbtn" data-aos="fade-down" data-aos-delay="300">Read More <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- Awards -->
        <div class="awards">
            <div class="awardshead">
                <h3 class="m-0" data-aos="fade-down">Awards & Accreditations</h3>
            </div>
            <div class="awardsdiv">
                <div id="carousel2" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="awardsimg">
                                    <img data-src="./assets/images/Ellipse.png" class="lazy" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="awardsimg">
                                    <img data-src="./assets/images/Ellipse.png" class="lazy" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="awardsimg">
                                    <img data-src="./assets/images/Ellipse.png" class="lazy" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="awardsimg">
                                    <img data-src="./assets/images/Ellipse.png" class="lazy" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="awardsimg">
                                    <img data-src="./assets/images/Ellipse.png" class="lazy" alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="awardsimg">
                                    <img data-src="./assets/images/Ellipse.png" class="lazy" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Campus Says -->
        <div class="campussays">
            <div class="campussaysdiv">
                <div class="campussaysleft">
                    <img data-src="./assets/images/Campus_Says.png" class="lazy" width="90%" alt="">
                </div>
                <div class="campussaysright">
                    <h3 class="mb-4" data-aos="fade-down">What Our Campus Says</h3>
                    <h6 class="mb-4" data-aos="fade-down" data-aos-delay="200">
                        "Leaving home for school can be daunting, but GSIS made it feel like a second home.
                        It's not just about academics; it's about personal growth. The experiences I've had here have
                        molded me into a better individual, preparing me for the challenges ahead."
                    </h6>
                    <h6 class="mb-2" data-aos="fade-down" data-aos-delay="300">Dev Desai</h6>
                    <h6 class="m-0" data-aos="fade-down" data-aos-delay="400">Grade 12</h6>
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
    // Header Carousel
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#carousel1', {
            type: 'fade',
            perPage: 1,
            rewind: true,
            autoplay: true,
            interval: 2000,
        }).mount();
    });
</script>

<script>
    // Awards Carousel
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#carousel2', {
            type: 'loop',
            perPage: 6,
            perMove: 1,
            rewind: true,
            autoplay: true,
            interval: 2000,
            breakpoints: {
                1098: {
                    perPage: 6,
                },
                768: {
                    perPage: 3,
                },
                600: {
                    perPage: 2,
                },
                300: {
                    perPage: 1
                },
            }
        }).mount();
    });
</script>

</html>