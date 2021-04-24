@extends('layout.layout')

@section('title','StudyEarth - Projects')
@section('class','class=position-relative')

@section('data-offset','data-offset=100')
@section('data-spy','data-spy=scroll')
@section('data-target','data-target=.navbar-example2')

@section('content')
<div class="main-content">

    <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <img src="assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <img src="assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                    </a>
                </li>
            </ul>
        </div>
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
                                    <li class="has-dropdown"><a href="javascript:void(0)">Projects</a>
                                        <ul class="axil-submenu">
                                            <li><a href="#section1">Free Projects</a></li>
                                            <li><a href="#section2">Paid Projects</a></li>
                                            <li><a href="#section3">Custom Projects</a></li>
                                        </ul>
                                    </li>
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
                        <img src="assets/images/logo/keystoke.svg" alt="Logo images">
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
    <!-- End Popup Mobile Menu -->

    <!-- Start Sidebar Area  -->
    <div class="side-nav">
        <div class="side-nav-inner">
            <!-- Start Search Bar  -->
            <form action="#" class="side-nav-search-form">
                <div class="form-group search-field">
                    <input type="text" class="search-field" name="search-field" placeholder="Search...">
                    <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- End Search Bar  -->

            <!-- Start Side Content  -->
            <div class="side-nav-content">
                <div class="row ">
                    <!-- Start Left Bar  -->
                    <div class="col-lg-5 col-xl-6 col-12">
                        <ul class="main-navigation">
                            <li><a href="home-01.html">Home One</a></li>
                            <li><a href="home-02.html">Home Two</a></li>
                            <li><a href="home-03.html">Home Three</a></li>
                            <li><a href="home-04.html">Home Four</a></li>
                            <li><a href="home-05.html">Home Five</a></li>
                        </ul>
                    </div>
                    <!-- End Left Bar  -->

                    <!-- Start Right Bar  -->
                    <div class="col-lg-7 col-xl-6 col-12">
                        <div class="axil-contact-info-inner">

                            <!-- Start Single Address  -->
                            <div class="axil-contact-info">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/ 7. Call Now.</span>
                                    <p><a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                            456-2790</a></p>
                                    <p><a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                            255-53333</a></p>
                                </address>
                            </div>
                            <!-- End Single Address  -->

                            <!-- Start Single Address  -->
                            <div class="axil-contact-info">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share d-flex align-items-center">
                                    <ul class="social-share style-rounded">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <!-- End Single Address  -->
                        </div>
                    </div>
                    <!-- End Right Bar  -->
                </div>
            </div>
            <!-- End Side Content  -->
            <!-- End of .side-nav-inner -->
            <div class="close-sidenav" id="close-sidenav">
                <button class="close-button"><i class="fal fa-times"></i></button>
            </div>
        </div>
    </div>
    <!-- End Sidebar Area  -->
    <!-- Start Page Wrapper -->
    <main class="page-wrappper">

        <!-- Start Breadcrumb Area -->
        <div class="axil-breadcrumb-area breadcrumb-style-2 pt--170 pb--70 theme-gradient">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1 mt_md--30 mt_sm--30">
                        <div class="inner">
                            <div class="content">
                                <h1 class="page-title mb--20">Best solutions for your business</h1>
                                <p class="subtitle-2">A quick view of industry specific problems solved with design
                                    by the awesome team at Keystroke.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="breadcrumb-thumbnail-group with-image-group text-left text-lg-right">
                            <div class="thumbnail">
                                <img class="paralax-image" src="assets/images/others/keystoke-image-1.png" alt="Keystoke Images">
                            </div>
                            <div class="image-group">
                                <img class="paralax-image" src="assets/images/others/keystoke-image-2.svg" alt="Keystoke Images">
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


        <!-- Axil Scroll Navigation Area  -->
        <div class="axil-scroll-navigation-area axil-scroll-navigation position-relative bg-color-white">
            <!-- Start Navigation Nav  -->
            <nav class="axil-scroll-nav navbar navbar-example2">
                <ul class="nav nav-pills justify-content-center sidebar__inner">
                    <li class="nav-item"><a class="nav-link smoth-animation active nav-text" href="#section1">Free Projects</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation nav-text" href="#section2">Paid Projects</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation nav-text" href="#section3">Custom Projects</a>
                    </li>
                </ul>
            </nav>
            <!-- End Navigation Nav  -->

            <!-- Start Navigation Content  -->
            <div id="section1" class="section axil-service-area bg-color-white ax-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-left">
                                <span class="sub-title extra04-color wow" data-splitting>service</span>
                                <h2 class="title wow" data-splitting>Free Projects</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Start Service Wrapper  -->
                    <div class="row">
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="axil-service text-left axil-control paralax-image active">
                                <div class="inner">
                                    <!-- <div class="icon">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/c++.png" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/c++.png" alt="Shape Images"></div>
                                            </div>
                                        </div> -->
                                    <img src="assets/images/icons/c_plus_plus.png" alt="C++ logo" class="logo_ic">
                                    <div class="content">
                                        <h4 class="title"><a href="single-service.html">C++ Projects</a></h4>
                                        <p>We design professional looking yet simple websites. Our designs are
                                            search engine
                                            and user friendly. </p>
                                        <a class="axil-button" data-hover="Learn More" href="{{ route('freeproject.view',['free','c++']) }}">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="axil-service text-left axil-control paralax-image">
                                <div class="inner">
                                    <!-- <div class="icon gradient-color-02">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-02.svg" alt="Shape Images"></div>
                                            </div>
                                        </div> -->
                                    <img src="assets/images/icons/python.png" alt="Icon Images" class="logo_ic">
                                    <div class="content">
                                        <h4 class="title"><a href="single-service.html">Python Projects</a></h4>
                                        <p>We design professional looking yet simple websites. Our designs are
                                            search engine
                                            and user friendly. </p>
                                        <a class="axil-button" data-hover="Learn More" href="{{ route('freeproject.view',['free','python']) }}">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <!--  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="axil-service text-left axil-control paralax-image">
                                    <div class="inner">
                                        <div class="icon gradient-color-03">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-01.svg" alt="Shape Images"></div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="single-service.html">Mobile app design</a></h4>
                                            <p>We design professional looking yet simple websites. Our designs are
                                                search engine
                                                and user friendly. </p>
                                            <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        <!-- End Single Service  -->
                    </div>
                    <!-- End Service Wrapper  -->
                </div>
            </div>
            <!-- End Navigation Content  -->

            <!-- Start Navigation Content  -->
            <div id="section2" class="section axil-service-area bg-color-lightest ax-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-left">
                                <span class="sub-title extra04-color wow" data-splitting>services</span>
                                <h2 class="title wow" data-splitting>Paid Projects</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Start Service Wrapper  -->
                    <div class="row">
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="axil-service text-left axil-control paralax-image active">
                                <div class="inner">
                                    <!-- <div class="icon">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-04.svg" alt="Shape Images"></div>
                                            </div>
                                        </div> -->
                                    <img src="assets/images/icons/icon-iot.png" alt="Icon Images" class="logo_ic">
                                    <div class="content">
                                        <h4 class="title"><a href="paid-project.html">IoT Projects</a></h4>
                                        <p>We design professional looking yet simple websites. Our designs are
                                            search engine
                                            and user friendly. </p>
                                        <a class="axil-button" data-hover="Learn More" href="{{ route('paidproject.view') }}">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="axil-service text-left axil-control paralax-image">
                                <div class="inner">
                                    <!-- <div class="icon gradient-color-02">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-02.svg" alt="Shape Images"></div>
                                            </div>
                                        </div> -->
                                    <img src="assets/images/icons/Android-Logo.png" alt="Icon Images" class="logo_ic">
                                    <div class="content mt--10">
                                        <h4 class="title"><a href="single-service.html">Android Projects</a></h4>
                                        <p>We design professional looking yet simple websites. Our designs are
                                            search engine
                                            and user friendly. </p>
                                        <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="axil-service text-left axil-control paralax-image">
                                <div class="inner">
                                    <!-- <div class="icon gradient-color-03">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-01.svg" alt="Shape Images"></div>
                                            </div>
                                        </div> -->
                                    <img src="assets/images/icons/php.svg" alt="Icon Images" class="logo_ic">
                                    <div class="content mt--30">
                                        <h4 class="title"><a href="single-service.html">PHP Projects</a></h4>
                                        <p>We design professional looking yet simple websites. Our designs are
                                            search engine
                                            and user friendly. </p>
                                        <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                    </div>
                    <!-- End Service Wrapper  -->
                </div>
            </div>
            <!-- End Navigation Content  -->

            <!-- Start Navigation Content  -->
            <div id="section3" class="section axil-service-area bg-color-white ax-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-left">
                                <span class="sub-title extra04-color wow" data-splitting>services</span>
                                <h2 class="title wow" data-splitting>Custome Projects</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Start Service Wrapper  -->
                    <div class="row">
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="axil-service text-left axil-control paralax-image active">
                                <div class="inner">
                                    <div class="icon">
                                        <div class="icon-inner">
                                            <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                            <div class="image-2"><img src="assets/images/icons/icon-04.svg" alt="Shape Images"></div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="single-service.html">SEO</a></h4>
                                        <p>We design professional looking yet simple websites. Our designs are
                                            search engine
                                            and user friendly. </p>
                                        <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->

                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="axil-service text-left axil-control paralax-image">
                                <div class="inner">
                                    <div class="icon gradient-color-02">
                                        <div class="icon-inner">
                                            <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                            <div class="image-2"><img src="assets/images/icons/icon-02.svg" alt="Shape Images"></div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="single-service.html">Pay-per click</a></h4>
                                        <p>We design professional looking yet simple websites. Our designs are
                                            search engine
                                            and user friendly. </p>
                                        <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->
                    </div>
                    <!-- End Service Wrapper  -->
                </div>
            </div>
            <!-- End Navigation Content  -->

            <!-- Start Navigation Content  -->
            <!-- <div id="section4" class="section axil-service-area bg-color-lightest ax-section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-left">
                                    <span class="sub-title extra04-color wow" data-splitting>services</span>
                                    <h2 class="title wow" data-splitting>Business</h2>
                                </div>
                            </div>
                        </div> -->
            <!-- Start Service Wrapper  -->
            <!-- <div class="row"> -->
            <!-- Start Single Service 
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="axil-service text-left axil-control paralax-image active">
                                    <div class="inner">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-04.svg" alt="Shape Images"></div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="single-service.html">Digital strategy</a></h4>
                                            <p>We design professional looking yet simple websites. Our designs are
                                                search engine
                                                and user friendly. </p>
                                            <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div-->
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="axil-service text-left axil-control paralax-image">
                                    <div class="inner">
                                        <div class="icon gradient-color-02">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-02.svg" alt="Shape Images"></div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="single-service.html">Business consulting</a></h4>
                                            <p>We design professional looking yet simple websites. Our designs are
                                                search engine
                                                and user friendly. </p>
                                            <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="axil-service text-left axil-control paralax-image">
                                    <div class="inner">
                                        <div class="icon gradient-color-03">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-01.svg" alt="Shape Images"></div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="single-service.html">Content writing</a></h4>
                                            <p>We design professional looking yet simple websites. Our designs are
                                                search engine
                                                and user friendly. </p>
                                            <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="axil-service text-left axil-control paralax-image">
                                    <div class="inner">
                                        <div class="icon gradient-color-02">
                                            <div class="icon-inner">
                                                <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                                <div class="image-2"><img src="assets/images/icons/icon-02.svg" alt="Shape Images"></div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="single-service.html">Reporting</a></h4>
                                            <p>We design professional looking yet simple websites. Our designs are
                                                search engine
                                                and user friendly. </p>
                                            <a class="axil-button" data-hover="Learn More" href="single-service.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
            <!-- End Single Service  -->

            <!-- </div> -->
            <!-- End Service Wrapper  -->
            <<!-- /div>
        </div> -->
        <!-- End Navigation Content  -->
</div>
<!-- Axil Scroll Navigation Area  -->

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

</main>
<!-- End Page Wrapper -->

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
@endsection
