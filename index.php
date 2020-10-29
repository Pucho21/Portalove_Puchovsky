<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include_once ("header.php");
    session_start();
    //echo $_SESSION['uname'];
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->

    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-text">
                        <span>FITNESS ELEMENTS</span>
                        <h1>BMI CALCULATOR</h1>
                        <p>Gutim comes packed with the user-friendly BMI Calculator<br /> shortcode which lets</p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="img/about-pic.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="img/play.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Story About Us</h2>
                        <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium
                            sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate
                            cursus a amet.</p>
                        <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida
                            quam semper libero sit amet. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                            rhoncus, gravida quam semper libero sit amet.</p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-pic">
                        <img src="img/services/service-pic.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-items">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-item bg-gray">
                                    <img src="img/services/service-icon-1.png" alt="">
                                    <h4>Strategies</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item bg-gray pd-b">
                                    <img src="img/services/service-icon-3.png" alt="">
                                    <h4>Workout</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-item">
                                    <img src="img/services/service-icon-2.png" alt="">
                                    <h4>Yoga</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item pd-b">
                                    <img src="img/services/service-icon-4.png" alt="">
                                    <h4>Weight Loss</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>UNLIMITED CLASSES</h2>
                    </div>
                </div>
            </div>
            <?php include_once ("unlimited_class.php"); ?>
        </div>
    </section>
    <!-- Classes Section End -->

    <!-- Trainer Section Begin -->
    <?php include_once ("expert_trainers.php"); ?>
    <!-- Trainer Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>success stories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-slider owl-carousel">
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <div class="ti-pic">
                                <img src="img/testimonial/testimonial-1.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Patrick Cortez</h4>
                                <span>Leader</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <div class="ti-pic">
                                <img src="img/testimonial/testimonial-1.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Patrick Cortez</h4>
                                <span>Leader</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Register Section Begin -->

    <!-- Register Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">February 17, 2019</div>
                            <a href="#" class="tag">#Gym</a>
                        </div>
                        <h4><a href="#">10 States At Risk of Rural Hospital Closures</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-2.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">February 17, 2019</div>
                            <a href="#" class="tag">#Sport</a>
                        </div>
                        <h4><a href="#">Diver who helped save Thai soccer team</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">February 17, 2019</div>
                            <a href="#" class="tag">#Body</a>
                        </div>
                        <h4><a href="#">Man gets life in prison for stabbing</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <?php include_once("footer.php"); ?>
    </footer>
</body>
</html>