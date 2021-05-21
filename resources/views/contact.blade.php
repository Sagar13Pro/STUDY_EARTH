@extends('layout.layout')

@section('content')


<!-- Start Breadcrumb Area -->
<div class="axil-breadcrumb-area breadcrumb-style-default pt--170 pb--70 theme-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner">
                    <ul class="axil-breadcrumb liststyle d-flex">
                        <li class="axil-breadcrumb-item"><a href="home-01.html">Home</a></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                    <h1 class="axil-page-title">Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-images">
        <i class="shape shape-1 icon icon-bcm-01"></i>
        <i class="shape shape-2 icon icon-bcm-02"></i>
        <i class="shape shape-3 icon icon-bcm-03"></i>
    </div>
</div>
<!-- End Breadcrumb Area -->

<main class="main-wrapper">

    <!-- Start Contact Area  -->
    <div class="axil-contact-area axil-shape-position ax-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-5 col-12">
                    <div class="contact-form-wrapper">
                        <!-- Start Contact Form -->
                        <div class="axil-contact-form contact-form-style-1">
                            <h3 class="title">Get a free Keystroke quote now</h3>

                            <form id="contact-form" method="POST" action="http://axilthemes.com/demo/template/keystroke/mail.php">
                                <div class="form-group">
                                    <input name="con_name" type="text">
                                    <label>Name</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input name="con_email" type="email">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text">
                                    <label>Phone</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <textarea name="con_message"></textarea>
                                    <label>Your message</label>
                                    <span class="focus-border"></span>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Send message">
                                    <p class="form-messege"></p>
                                </div>
                            </form>

                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 offset-xl-1 col-12 mt_md--40 mt_sm--40">
                    <div class="axil-address-wrapper">
                        <!-- Start Single Address  -->
                        <div class="axil-address wow move-up">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone</h4>
                                    <p>Our customer care is open from Mon-Fri, 10:00 am to 6:00 pm</p>
                                    <p><a class="axil-link" href="tel:1234567890">(123) 456 7890</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->
                        <!-- Start Single Address  -->
                        <div class="axil-address wow move-up mt--60 mt_sm--30 mt_md--30">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email</h4>
                                    <p>Our support team will get back to in 48-h during standard business hours.
                                    </p>
                                    <p><a class="axil-link" href="mailto:example@gmail.com">example@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape shape-01">
                <i class="icon icon-contact-01"></i>
            </div>
            <div class="shape shape-02">
                <i class="icon icon-contact-02"></i>
            </div>
            <div class="shape shape-03">
                <i class="icon icon-contact-03"></i>
            </div>
        </div>
    </div>
    <!-- End Contact Area  -->

    <!-- Start Office Location  -->
    <div class="axil-office-location-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra04-color wow" data-splitting>who we are</span>
                        <h2 class="title wow mb--0" data-splitting>Our office</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30">

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Virginia-HQ</h4>
                            <p>435 Pouros Locks <br /> United States</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-02.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Nevada</h4>
                            <p>46 Watsica Creek Suite 071 <br /> United States</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Columbia</h4>
                            <p>7140 Wehner Tunnel <br /> Washington, D.C</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">New Mexico</h4>
                            <p>10 Maggie Valleys , <br /> United States</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->
            </div>
        </div>
    </div>
    <!-- End Office Location  -->


</main>

<!-- Start Footer Area -->
<footer class="axil-footer footer-default theme-gradient-2">
    <div class="bg_image--2">
        <!-- Start Social Icon -->
        <div class="ft-social-icon-wrapper ax-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="ft-social-share d-flex justify-content-center liststyle flex-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Social Icon -->
        <!-- Start Footer Top Area -->
        <div class="footer-top ax-section-gap">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget-item axil-border-right">
                            <h2>Get in touch!</h2>
                            <p>Fusce varius, dolor tempor interdum tristique, dui urna <br /> bibendum magna, ut ullamcorper purus</p>
                            <div class="axil-newsletter">
                                <form class="newsletter-form" action="#">
                                    <input type="email" placeholder="Email">
                                    <a class="axil-button btn-transparent" href="#"><span class="button-text">Subscribe</span><span class="button-icon"></span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                        <div class="footer-widget-item">
                            <h6 class="title">Services</h6>
                            <div class="footer-menu-container">
                                <ul class="ft-menu liststyle link-hover">
                                    <li><a href="#">Logo & Branding</a></li>
                                    <li><a href="#">Website Development</a></li>
                                    <li><a href="#">Mobile App Development</a></li>
                                    <li><a href="#">Search Engine Optimization</a></li>
                                    <li><a href="#">Pay-Per-Click</a></li>
                                    <li><a href="#">Social Media Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-12 mt_lg--30 mt_md--30 mt_sm--30">
                        <div class="footer-widget-item">
                            <h6 class="title">Resourses</h6>
                            <div class="footer-menu-container">
                                <ul class="ft-menu liststyle link-hover">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="case-study.html">Case Studies</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div class="col-xl-1 col-lg-6 col-md-6 col-sm-6 col-12 mt_lg--30 mt_md--30 mt_sm--30">
                        <div class="footer-widget-item widget-support">
                            <h6 class="title">Support</h6>
                            <div class="footer-menu-container">
                                <ul class="ft-menu liststyle link-hover">
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area -->
        <!-- Start Copyright -->
        <div class="copyright copyright-default">
            <div class="container">
                <div class="row row--0 ptb--20 axil-basic-thine-line">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="inner text-center text-md-left">
                            <p>© 2020. All rights reserved by Your Company.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="quick-contact">
                            <ul class="link-hover d-flex justify-content-center justify-content-md-end liststyle">
                                <li><a data-hover="Privacy Policy" href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="#">Terms of Use</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
    </div>
</footer>
<!-- End Footer Area -->
</div>


@endsection
