@php
use App\Models\Customer;
@endphp
@extends('layout.layout')

@section('title','StudyEarth')

@section('link-home')
<li><a href="javascript:void(0)">Home</a></li>
@endsection

@section('search-LetTalks')
<div class=" d-block d-lg-none ml--40 ml_sm--10">
    @php

    if(isset($_COOKIE['device'])){
    $customerProductCount = Customer::where([['device',$_COOKIE['device']],['payment_status','unpaid']])->count();
    }
    @endphp
    <a class="cart-icon" href="{{ route('cart.view') }}"><i class="far fa-shopping-cart" style="font-size: 21px; color: #000248"></i>
        @if($customerProductCount ?? '' > 0)
        <span class="aw-cart-count">{{ $customerProductCount  }}</span>
        @endif
    </a>

</div>
<div class="ax-menubar popup-navigation-activation d-block d-lg-none pl-15 ml--0 mr-10">
    <div>
        <i></i>
    </div>
</div>
@endsection

@section('theme')
<li>
    <div id="my_switcher" class="my_switcher popup-mobile">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light active">
                    <i class="far fa-sun" style="top: 12px;"></i>
                    <span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <i class="far fa-moon" style="top:12px;"></i>
                    <span title="Dark Mode">Dark</span>
                </a>
            </li>
        </ul>
    </div>
</li>
@endsection

@section('content')
<div class="preloader">
    <img id="loader-gif" src="{{ asset('assets/images/preloader.gif') }}" alt="">
</div>
<main class="page-wrappper">
    <i class="fab fa-circle-notch-g"></i>
    <!-- Start Slider Area -->
    <div class="axil-slider-area axil-slide-activation">
        <!-- Start Single Slide -->
        <div class="axil-slide slide-style-4 theme-gradient-4 slider-fixed-height d-flex align-items-center">
            <div class="container pt--80 pt_sm--40 pt_md--40">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12 order-2 order-lg-1 mt_md--40 mt_sm--30">
                        <div class="content">
                            <h1 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Welcoming everyone in an experience that’s more than an education.</h1>
                            <div class="slider-button wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1300ms">
                                <a class="axil-button btn-large btn-solid btn-extra07-color" href="{{ route('projects.view') }}">
                                    <span class="button-text">See Our Projects</span>
                                    <span class="button-icon"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="thumbnail d-flex">
                            <div class="image image-one">
                                <img class="paralax-image" src="assets/images/slider/slider-01.png" alt="Slider Images">
                            </div>
                            <div class="image image-two">
                                <img class="paralax-image" src="assets/images/slider/slider-02.png" alt="Slider Images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 order-3 order-lg-3">
                        <div class="follow-us">
                            <ul class="social-share social-share-style-2">
                                <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i><span>Google+</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
    <!-- End Slider Area -->
    <!-- Start Counterup Area  -->
    <div class="axil-counterup-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="content-wrapper">
                        <div class="inner">
                            <div class="section-title text-left">
                                <span class="sub-title extra08-color wow" data-splitting>experts in field</span>
                                <h2 class="title wow" data-splitting><span>How it helps to?</span>
                                </h2>
                                <p class="layer2 wow slideFadeInUp"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card-one bg-color center">
                                <div class="icon">
                                    <img src="https://img.icons8.com/cotton/64/000000/student-male--v3.png" />
                                </div>
                                <h3>
                                    <a href="#">Engineers</a>
                                </h3>
                                <p>Engineers use our kits to upgrade their knowledge on desired software algorithms, electronics concepts & mechanical concepts to enhance their skills and open up career options for a better future.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card-one bg-color center">
                                <div class="icon">
                                    <img src="assets/images/icons/programming.svg" alt="programming_icon" style="max-width: 64px;">
                                </div>
                                <h3>
                                    <a href="#">Students</a>
                                </h3>
                                <p>Our Self learning project kits help students learn practical software, electronics and mechanical development by providing all necessary materials needed to make it themselves with detailed video tutorials and learning documents in one single kit.</p>
                                <p hidden="">Apart from this nevon projects provides free projects ideas and innovative concepts to boost student creativity and enthusiasm towards technology.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card-one bg-color center">
                                <div class="icon">
                                    <img src="https://img.icons8.com/cotton/64/000000/company.png" />
                                </div>
                                <h3>
                                    <a href="#">Companies</a>
                                </h3>
                                <p>Companies researching particular software algorithms, electronics technologies or mechanical concepts buy our kits to help in R & D. Also we offer customized R & D services, product research & prototyping as well as free technical consultation to companies.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card-one bg-color center">
                                <div class="icon">
                                    <img src="https://img.icons8.com/dusk/100/000000/student-center.png" />
                                </div>
                                <h3>
                                    <a href="#">Institutes</a>
                                </h3>
                                <p>Institutes need our kits to practically demonstrate the latest electronics concepts, mechanical motions and mechanisms while allowing students to work on our kits which enables practical hands on learning experience for students. </p>
                                <p hidden="">Also institutes order customized systems to automate various operations.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card-one bg-color center">
                                <div class="icon">
                                    <img src="assets/images/icons/coaching.svg" alt="programming_icon" style="max-width: 100px;">
                                </div>
                                <h3>
                                    <a href="#">Speakers</a>
                                </h3>
                                <p>Our kits and robotic chassis are loved by speakers to help them conduct practical workshops in schools & colleges all over the globe. Our kits and robotic chassis help make workshops more fun and interesting than ever.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card-one bg-color center">

                                <div class="icon">
                                    <img src="assets/images/icons/enthu.png" alt="programming_icon" style="max-width: 100px;">
                                </div>
                                <h3>
                                    <a href="#">Enthusiasts & Hobbyists</a>
                                </h3>
                                <p>There are many enthusiasts and hobbyists out there who wouldn’t be able to practically implement desired software, electronics and electronics systems if it weren’t for our self learning project kits. Our kits help them bring their dreams to reality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counterup Area  -->
    <!-- Start Case Study Area -->
    <div class="axil-case-study-area ax-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left">
                        <span class="sub-title extra10-color wow" data-splitting>our projects</span>
                        <h2 class="title wow"><span>Some of our finest work.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row row--45">
                <!-- Start Single Case Study  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="axil-case-study wow">
                        <div class="thumbnail">
                            <a href="{{ route('paidproject.view',['paid','iot']) }}#40">
                                <img class="w-100 paralax-image" src="assets/images/1.png" alt="Axil Case Study Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <span class="category">IOT</span>
                                <span class="category">Tiles</span>
                                <span class="category">Electricity</span>
                                <h4 class="wow title"><a href="{{ route('paidproject.view',['paid','iot']) }}#40">Electricity Generator Tiles Project</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="axil-case-study wow">
                        <div class="thumbnail">
                            <a href="{{ route('paidproject.view',['paid','iot']) }}#41">
                                <img class="w-100 paralax-image" src="assets/images/2.png" alt="Axil Case Study Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <span class="category">IOT</span>
                                <span class="category">Sorting</span>
                                <span class="category">Machine</span>
                                <h4 class="wow title"><a href="{{ route('paidproject.view',['paid','iot']) }}#41">IOT Color Based Product Sorting Machine
                                        Project</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="axil-case-study wow">
                        <div class="thumbnail">
                            <a href="{{ route('paidproject.view',['paid','iot']) }}#42">
                                <img class="w-100 paralax-image" src="assets/images/3.png" alt="Axil Case Study Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <span class="category">IOT</span>
                                <span class="category">Pollution</span>
                                <h4 class="wow title"><a href="{{ route('paidproject.view',['paid','iot']) }}#42">IOT Air &amp; Sound Pollution Monitoring
                                        System</a></h4>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Case Study  -->
                <div class="col-lg-12">
                    <div class="view-all-portfolio-button mt--60 text-center">
                        <a class="axil-button btn-large btn-transparent btn-xl" href="{{ route('projects.view').'#section2' }}"><span class="button-text">Discover More Projects</span><span class="button-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Case Study Area -->

    <!-- Course Section Start -->
    <div id=course_details class="axil-testimonial-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span class="sub-title extra05-color wow" data-splitting>Our Courses</span>
                        <h2 class="title wow" data-splitting>From getting started</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card-one bg-color center">
                        <div class="icon">
                            <img src="assets/images/portfolio/boxes-img3.png" alt="box_img_3">
                        </div>
                        <h3>
                            <a href="">Engineering Subjects </a>
                        </h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a class="explore_more mt--10 text-left" data-hover="Learn More" href="{{ route('courses.view',['paid','eng']) }}">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card-one bg-color center">
                        <div class="icon">
                            <img src="assets/images/portfolio/boxes-img1.png" alt="box_img_1">
                        </div>
                        <h3>
                            <a href="">Web Development</a>
                        </h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a class="explore_more mt--10 text-left" data-hover="Learn More" href="{{ route('courses.view',['paid','web']) }}">Explore More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card-one bg-color center">
                        <div class="icon">
                            <img src="assets/images/portfolio/boxes-img2.png" alt="box_img_2">
                        </div>
                        <h3>
                            <a href="">Mobile App Development</a>
                        </h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a class="explore_more mt--10 text-left" data-hover="Learn More" href="{{ route('courses.view',['paid','mobile']) }}">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course section end -->

</main>
@endsection

@section('footer')
<footer class="axil-footer footer-default footer-style-3 bg-color-extra09">
    <!-- Start Footer Top Area -->
    <div class="footer-top ax-section-gap">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget -->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="footer-widget-item d-flex flex-column justify-content-between position-relative" style="top:-60px">
                        <div class="logo my-5">
                            <a href="{{ route('index.view') }}">
                                <svg width="281px" height="60px" viewBox="0 0 281 60" version="1.1">
                                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-315.000000, -40.000000)">
                                            <g>
                                                <g id="logo" transform="translate(315.000000, 40.000000)">
                                                    <text id="Keystroke-Startup-la" font-family="DMSans-Bold, DM Sans" font-size="24" font-weight="bold" fill="#ffffff">
                                                        <tspan x="75" y="35">StudyEarth</tspan>
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
                        <div class="axil-ft-address">
                            <div class="address">
                                <p>Vadodara, Gujarat</p>
                                <p><a href="tel:940-846-3208">940-846-3208</a></p>
                                <p><a href="mailto:info@studyearth.co.in">info@studyearth.co.in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->
                <div class="col-2 col-md-2 col-lg-2 mb-1"></div>
                <!-- Start Single Widget -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer-widget-item">
                        <h6 class="title">Services</h6>
                        <div class="footer-menu-container">
                            <ul class="ft-menu liststyle link-hover">
                                <li><a href="#">Website Development</a></li>
                                <li><a href="#">Mobile App Development</a></li>
                                <li><a href="#">Product design</a></li>
                                <li><a href="#">Product development</a></li>
                                <li><a href="#">Internet of things</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->
                <div class="col-2 col-md-1 col-lg-2 mb-5"></div>
                <!-- Start Single Widget -->
                <div class="col-12 col-md-2 col-lg-2">
                    <div class="footer-widget-item widget-support">
                        <h6 class="title">Support</h6>
                        <div class="footer-menu-container">
                            <ul class="ft-menu liststyle link-hover">
                                <li><a href="{{ route('contact.view') }}">Contact</a></li>
                                <li><a href="{{ route('privacy_policy.view') }}">Privacy Policy</a></li>
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
                <div class="col-12">
                    <div class="inner text-center">
                        <p>© {{ date('Y') }}. All rights reserved by Your StudyEarth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
@endsection
<script type="text/javascript">
    function generate() {
        window.location.href = '#course_details';
    }

    function getCookie(name) {
        var cookieValue = null;
        if (document.cookie && document.cookie !== '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].trim();
                if (cookie.substring(0, name.length + 1) === (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }

    function uuidv4() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16 | 0
                , v = c == 'x' ? r : (r & 0x3 | 0x8);
            return encodeURIComponent(v.toString(16));

        });
    }

    let device = getCookie('device');
    if (device == null && device == undefined) {
        device = uuidv4();
    }
    let CookieExpireDate = new Date();
    CookieExpireDate.getMonth() == 11 ? CookieExpireDate.setMonth(0) : CookieExpireDate.setMonth(CookieExpireDate.getMonth() + 1);
    document.cookie = 'device=' + device + ';expires=' + CookieExpireDate.toUTCString() + ';domain;path=/'
    setTimeout(function() {
        let dark = $('body').hasClass('active-dark-mode')
        console.log(dark);
        if (dark) {
            $("#loader-gif").attr('src', "{{ asset('assets/images/preloader-dark.gif') }}")
            $('.preloader').css('background-color', '#000000ff');
        }
    }, 95);
    setTimeout(function() {
        $('.preloader').fadeOut(2000);
    }, 4000)

</script>
