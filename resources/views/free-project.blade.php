@extends('layout.layout')

@section('title','StudyEarth - Free Projects')

@section('content')
<div class="main-content">
    <!-- Start Header -->
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
                                    <li><a href="{{ route('index.view') }}">Home</a></li>
                                    <li><a href="{{ route('projects.view') }}">Projects</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>

                            </nav>
                            <!-- End Mainmanu Nav -->
                            <div class="axil-header-extra d-flex align-items-center">

                                <!-- Start Search Area -->
                                <div class="ax-search-area ml--40 ml_sm--10">
                                    <a class="search-trigger" href="#"><i class="fas fa-search"></i></a>
                                </div>
                                <!-- End Search Area -->

                                <!-- Start Hamburger -->
                                <div class="ax-hamburger ml--40 ml_sm--10 d-none d-lg-block">
                                    <a class="axil-menuToggle ax-hamburger-trigger" id="side-nav-toggler" href="#">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                                <!-- End Hamburger -->

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Start Header -->

    <!-- Start Popup Mobile Menu -->
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
                    <li><a href="{{ route('index.view') }}">Home</a></li>
                    <li class="no-dropdown"><a href="{{ route('projects.view') }}">Projects</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- End Popup Mobile Menu -->

    <div class="main-wrapper">
        <!-- Start Breadcrumb Area -->
        <div class="axil-breadcrumb-area breadcrumb-style-2 single-service pt--170 pb--70 theme-gradient">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1 mt_md--30 mt_sm--20">
                        <div class="inner">
                            <h2 class="title">{{ $name }} Free Projects</h2>
                            <p>We have list of free projects in <code style="font-size: 24px;">{{ $name }}</code>. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnail text-left text-lg-right">
                            <div class="image-group">
                                <img class="image-1 paralax-image" src="{{ asset('assets/images/slider/single-service-02.png') }}" alt="Slider images">

                                <img class="image-2 paralax-image" src="{{ asset('assets/images/slider/single-service-01.svg') }}" alt="Slider images">

                            </div>
                            <div class="shape-group">
                                <div class="shape shape-1">
                                    <i class="icon icon-breadcrumb-1"></i>
                                </div>
                                <div class="shape shape-2">
                                    <i class="icon icon-breadcrumb-2"></i>
                                </div>
                                <div class="shape shape-3 customOne">
                                    <i class="icon icon-breadcrumb-3"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->



        <!-- Start Working Process  -->
        <div class="axil-working-process-area ax-section-gap theme-gradient-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @if(count($getProjectDetails) > 0)
                        @foreach ($getProjectDetails as $key => $project)
                        <?php if ($key % 2 == 0) { ?>
                        <div class="axil-working-process mb--100 mb_md--50 mb_sm--40">
                            <div class="thumbnail">
                                <div class="image paralax-image">
                                    <img src="{{ asset('assets/images/process/9858_.jpg') }}" alt="Process Images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="inner">
                                    <div class="section-title">
                                        <span class="sub-title extra04-color">OpenCV</span>
                                        <span class="sub-title extra04-color">Face Detection</span>
                                        <h3 class="title">{{ $project->projectTitle }}</h3>
                                        <div id="description">
                                            <p class="subtitle-2 show-less" id={{ $key }}>
                                                {{ $project->projectContent }}
                                                <div class="show-more-btn">
                                                    <h6 type="button" id="showBtn-{{ $key }}" class="showBtn" data-id="{{ $key }}">Read More</h6>
                                                </div>
                                            </p>    
                                        </div>
                                        <a class="axil-button btn-large btn-transparent mt--20" href="#">
                                            <span class="button-text">Download Now</span><span class="button-icon"></span>
                                        </a>
                                        <a class="axil-button btn-large btn-solid mt--20 more-info-btn" href="#" data-toggle="modal" data-target="#confirmation-modal">
                                            <span class="button-text">More Info</span><span class="button-icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } 
                            else{ ?>
                        <div class="axil-working-process mb--100 text-left mb_md--50 mb_sm--40">
                            <div class="content order-2 order-lg-1">
                                <div class="inner">
                                    <div class="section-title">
                                        <span class="sub-title extra04-color">OpenCV</span>
                                        <span class="sub-title extra04-color">Face Detection</span>
                                        <h3 class="title">{{ $project->projectTitle }}</h3>
                                        <div id="description">
                                            <p class="subtitle-2 show-less" id="{{ $key }}">
                                                {{ $project->projectContent }}
                                                <div class="show-more-btn">
                                                    <h6 type="button" id="showBtn-{{ $key }}" class="showBtn" data-id="{{ $key }}">Read More</h6>
                                                </div>
                                            </p>
                                        </div>

                                        <a class="axil-button btn-large btn-transparent mt--20" href="#">
                                            <span class="button-text">Download Now</span><span class="button-icon"></span>
                                        </a>
                                        <a class="axil-button btn-large btn-solid mt--20 more-info-btn" href="#" data-toggle="modal" data-target="#confirmation-modal">
                                            <span class="button-text">More Info</span><span class="button-icon"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="thumbnail order-1 order-lg-2">
                                <div class="image paralax-image">
                                    <img src="{{ asset('assets/images/process/9858_.jpg') }}" alt="Process Images">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- End Working Process  -->
                        @endforeach
                        @else
                        <div>No Projects Avaiable for {{ $name }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End Working Process  -->

        <!-- Start Call To Action -->
        <div class="axil-call-to-action-area shape-position ax-section-gap theme-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-call-to-action">
                            <div class="section-title text-center">
                                <span class="sub-title extra04-color wow" data-splitting>Let's work together</span>
                                <h2 class="title wow" data-splitting>Need a successful project?</h2>
                                <a class="axil-button btn-large btn-transparent" href="#"><span class="button-text">Estimate Project</span><span class="button-icon"></span></a>
                                <div class="callto-action">
                                    <span class="text wow" data-splitting>Or call us now</span>
                                    <span class="wow" data-splitting><i class="fal fa-phone-alt"></i> <a href="#">(123)
                                            456 7890</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-group">
                <div class="shape shape-01">
                    <i class="icon icon-shape-14"></i>
                </div>
                <div class="shape shape-02">
                    <i class="icon icon-shape-09"></i>
                </div>
                <div class="shape shape-03">
                    <i class="icon icon-shape-10"></i>
                </div>
                <div class="shape shape-04">
                    <i class="icon icon-shape-11"></i>
                </div>
            </div>
        </div>
        <!-- End Call To Action -->
    </div>
    <!-- End Main Wrapper -->

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


<!-- Model Area Start-->
<div class="modal fade bs-example-modal-lg" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">C++ Program for Face Detection using OpenCV</h4>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Requirements for running the program:</h5>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /Model Area End -->
@endsection
