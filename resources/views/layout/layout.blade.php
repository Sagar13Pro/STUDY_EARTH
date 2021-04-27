<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body @yield('class') @yield('data-spy') @yield('data-target') @yield('data-offset')>

    <div class="main-content">
        {{-- HEADER SECTION START --}}
        @section('header')
        <header class="ax-header haeder-default light-logo-version header-transparent axil-header-sticky">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-8 header-left">
                            <div class="logo">
                                <a href="home-01.html">
                                    <svg width="281px" height="60px" viewBox="0 0 281 60" version="1.1">
                                        <!-- Generator: Sketch 60.1 (88133) - https://sketch.com -->
                                        <title>Logo</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-315.000000, -40.000000)">
                                                <g>
                                                    <g id="logo" transform="translate(315.000000, 40.000000)">
                                                        <text id="Keystroke-Startup-la" font-family="DMSans-Bold, DM Sans" font-size="20" font-weight="bold" fill="#000248">
                                                            <tspan x="75" y="24">Keystroke</tspan>
                                                            <tspan x="175.14" y="24.5001221" font-family="DMSans-Regular, DM Sans" font-weight="normal"></tspan>
                                                            <tspan x="76.16" y="49.5001221" font-family="DMSans-Regular, DM Sans" font-size="18" font-weight="normal">Startup template</tspan>
                                                        </text>
                                                        <g id="Favicon">
                                                            <rect id="Base" fill="#702FFF" x="0" y="0" width="60" height="60" rx="14"></rect>
                                                            <g id="Group-3" transform="translate(15.000000, 11.000000)">
                                                                <circle id="icon-oval-lg" class="icon-oval-lg" stroke="#FFFFFF" stroke-width="7" cx="15" cy="15" r="11.5"></circle>
                                                                <circle id="icon-oval-sm" class="icon-oval-sm" fill="#FFFFFF" cx="4" cy="34" r="4"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-6 col-4 header-right">
                            <div class="mainmenu-wrapepr">
                                <!-- Start Mainmanu Nav -->
                                <nav class="mainmenu-nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        @section('links')
                                        @show
                                    </ul>
                                </nav>
                                <!-- End Mainmanu Nav -->
                                @section('search-LetTalks')
                                <div class="axil-header-extra d-flex align-items-center">
                                    <!-- Start Search Area -->
                                    <div class="ax-search-area ml--40 ml_sm--10">
                                        <a class="search-trigger" href="#"><i class="fas fa-search"></i></a>
                                    </div>
                                    <!-- End Search Area -->
                                    <!-- Start Menu Bar  -->
                                    <div class="ax-menubar popup-navigation-activation d-block d-lg-none ml_sm--20 ml_md--20">
                                        <div>
                                            <i></i>
                                        </div>
                                    </div>
                                    <!-- End Menu Bar  -->
                                    <!-- Start Search Area  -->
                                    <div class="axil-search-area">
                                        <form action="#" class="axil-searchbar w-100">
                                            <div class="search-field">
                                                <input type="text" placeholder="Search Here...">
                                                <button class="navbar-search-btn" type="button"><i class="fal fa-search"></i></button>
                                            </div>
                                            <a href="#" class="navbar-search-close"><i class="fal fa-times"></i></a>
                                        </form>
                                    </div>
                                    <!-- End Search Area  -->
                                </div>
                                @show
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @show
        {{-- HEADER SECTION END --}}

        {{-- MOBILE NAV SECTION START --}}
        @section('mobile-section')
        <div class="popup-mobile-manu">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="home-01.html">
                            <img src="{{ asset('assets/images/logo/keystoke.svg') }}" alt="Logo images">
                        </a>
                    </div>
                    <a class="close-menu" href="#"></a>
                </div>
                <div class="menu-item">
                    <ul class="mainmenu-item">
                        <li><a href="">Home</a></li>
                        <li class="has-children"><a href="#">Services</a>
                            <ul class="submenu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="service-two.html">Services Two</a></li>
                                <li><a href="single-service.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="has-children"><a href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="blog-list-two.html">Blog List Two</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @show
        {{-- MOBILE NAV SECTION END --}}

        {{-- MAIN CONTENT START--}}
        @section('content')
        @show
        {{-- MAIN CONTENT END --}}

        {{-- FOOTER SECTION START --}}
        @section('footer')
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
        @show
        {{-- FOOTER SECTION END --}}
    </div>

    <!-- JS ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.js') }}"></script>
    <script src="{{ asset('assets/js/anime.js') }}"></script>
    <script src="{{ asset('assets/js/tweenmax.js') }}"></script>
    <script src="{{ asset('assets/js/slipting.js') }}"></script>
    <script src="{{ asset('assets/js/scrollmagic.js') }}"></script>
    <script src="{{ asset('assets/js/addindicators.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/youtube.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/stickysidebar.js') }}"></script>
    <script src="{{ asset('assets/js/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/contactform.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        //Show More And Less Content
        $(document).ready(function() {
            $('.showBtn').click(function() {
                let id = $(this).data('id');
                //console.log(id);
                if (id != " " || id == 0) {
                    if ($('#' + id).hasClass('show-less')) {
                        $('#' + id).removeClass('show-less');
                        $('#showBtn-' + id).html('Read Less');
                    } else {
                        $('#' + id).addClass('show-less');
                        $('#showBtn-' + id).html('Read More');
                    }
                }
            });
        });

    </script>

    <script>
        var sidebar = new StickySidebar('.axil-scroll-nav', {
            topSpacing: 0
            , bottomSpacing: 0
            , containerSelector: '.axil-scroll-navigation'
            , innerWrapperSelector: '.sidebar__inner'
        });

    </script>

</body>
</html>
