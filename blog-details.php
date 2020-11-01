<?php
include "config.php";
include_once('header.php');
if(isset($_POST['blog_send'])){

    $full_name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $blog = mysqli_real_escape_string($con,$_POST['message']);

    if ($full_name != "" && $email != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$_SESSION['uname']."' and email='".$email."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){

            $sql_query = "INSERT INTO `blog_prispevok` (`id`, `id_user`, `cele_meno`, `email`, `prispevok`)
                                      VALUES (NULL, '".$_SESSION['user_id']."','".$full_name."','".$email."','".$blog."')";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);

            header('Location: blog-details.php');
        }else{
                echo "Invalid username and password";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<!-- Header End -->

<!-- Blog Details Hero Section Begin -->
<section class="blog-details-hero set-bg" data-setbg="img/blog/blog-detail-hero.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bd-hero-text">
                    <span>CAMERA</span>
                    <h2>10 States At Risk of Rural Hospital<br /> Closures</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero Section End -->


<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="bd-text">
                    <div class="bd-title">
                        <p>Your clients would like to see optimal results for minimal work. For this reason, it can
                            be difficult to convince them that a website redesign enhances SEO strategies. However,
                            if you try to redesign a site without taking SEO into account, you are going to face
                            bigger problems down the road.</p>
                        <p>Start off by explaining to clients what will happen if you ignore SEO in your redesign.
                            Explain to them how a website redesign enhances SEO strategies across the board. A
                            redesign is essential and should be part of your client’s budget. There are a couple of
                            risks to point out.</p>
                    </div>
                    <div class="bd-pic">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="img/blog/bd-1.jpg" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="img/blog/bd-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bd-more-text">
                        <div class="bm-item">
                            <h4>1. You May Have to Redo All Your Content</h4>
                            <p>It is impossible to create effective content without taking SEO into consideration.
                                If you create content without thinking about SEO, you may need to go back and redo
                                all the new content you made for your website when you start your SEO strategy.
                                There are a few reasons for this.</p>
                            <p>First, you’ll be unsure as to what keyword terms you want to rank for. If you write
                                content that doesn’t include appropriate keywords, it will be difficult to go back
                                and include the terms naturally. Second, you may be unclear as to who makes up your
                                target audience. The content you write for the wrong audience is useless and will
                                need replacing.</p>
                        </div>
                        <div class="bm-item">
                            <h4>2. You May Have Technical Mistakes</h4>
                            <p>Technical mistakes may mean you require a site migration in the near future. This is
                                a huge waste of time. Taking the technical side of SEO into account now will allow
                                you to decide on</p>
                        </div>
                    </div>
                    <div class="bd-quote">
                        <samp>"</samp>
                        <p>“We need to stop interrupting what people are interested in and be what people are
                            interested in.”</p>
                        <div class="quote-author">
                            <h5>Steven Jobs</h5>
                            <span>CEO-DeerCreative</span>
                        </div>
                    </div>
                    <div class="bd-last-para">
                        <p>All the above assumes that a client is willing to create a website in the first place.
                            Some clients may believe that they can forgo a website entirely. However, without a
                            website, it is impossible for a business to grow. You need to explain why having an
                            SEO-optimized website is necessary for being found online. Of course, businesses can
                            find customers using other means, such as through social media, but these methods are
                            slower. Plus, users will still expect the business to have a website — to obtain more
                            information about products, services, and the brand as a whole.</p>
                    </div>
                    <div class="tag-share">
                        <div class="tags">
                            <a href="#">Camera</a>
                            <a href="#">Photography</a>
                            <a href="#">Tips</a>
                        </div>
                        <div class="social-share">
                            <span>Share:</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <div class="blog-author">
                        <?php include_once('blog_entry.php') ?>
                    </div>

                    <div class="leave-comment">
                        <h3>Leave A Comment</h3>
                        <form method="post" action="">
                            <div class="row">
                                <?php if(!isset($_SESSION['uname'])) { ?>
                                    <div class="col-lg-6">
                                        <input type="text" name="name" id="name" placeholder="Full Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" id="email" placeholder="Email">
                                    </div>
                                <?php } else { ?>
                                    <div class="col-lg-6">
                                        <input type="text" name="name" id="name" value="<?php echo $_SESSION['full_name'];?>">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" id="email" value="<?php echo $_SESSION['email'];?>">
                                    </div>
                                <?php } ?>
                                <div class="col-lg-12">
                                    <textarea placeholder="Messages" name="message" id="message" ></textarea>
                                    <button type="submit" name="blog_send" id="blog_send">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog-section recommend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Recommended</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-blog-item">
                    <img src="img/blog/blog-1.jpg" alt="">
                    <div class="blog-widget">
                        <div class="bw-date">February 17, 2019</div>
                        <a href="#" class="tag">#Gym</a>
                    </div>
                    <h4><a href="#">10 States At Risk of Rural Hospital Closures</a></h4>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-blog-item">
                    <img src="img/blog/blog-2.jpg" alt="">
                    <div class="blog-widget">
                        <div class="bw-date">February 17, 2019</div>
                        <a href="#" class="tag">#Sport</a>
                    </div>
                    <h4><a href="#">Diver who helped save Thai soccer team</a></h4>
                </div>
            </div>
            <div class="col-lg-4">
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
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-option">
                    <span>Phone</span>
                    <p>(123) 118 9999 - (123) 118 9999</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-option">
                    <span>Address</span>
                    <p>72 Kangnam, 45 Opal Point Suite 391</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-option">
                    <span>Email</span>
                    <p>contactcompany@Gutim.com</p>
                </div>
            </div>
        </div>
        <div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
            <div class="so-text">
                <h4>Subscribe To Our Mailing List</h4>
                <p>Sign up to receive the latest information </p>
            </div>
            <form action="#" class="subscribe-form">
                <input type="text" placeholder="Enter Your Mail">
                <button type="submit"><i class="fa fa-send"></i></button>
            </form>
        </div>
        <div class="copyright-text">
            <ul>
                <li><a href="#">Term&Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
            <p>&copy;<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
            <div class="footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>