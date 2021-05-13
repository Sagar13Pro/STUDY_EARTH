@php
use App\Models\Customer;
@endphp
@extends('layout.layout')

@section('title','StudyEarth')

@section('link-home')
<li><a href="javascript:void(0)">Home</a></li>
@endsection

@section('search-LetTalks')
<div class="ax-search-area ml--40 ml_sm--10">
    @php
        
    if(isset($_COOKIE['device'])){
    $customerProductCount = Customer::where([['device',$_COOKIE['device']],['payment_status','unpaid']])->count();
    }
    @endphp
    <a href="{{ route('cart.view') }}"><i class="far fa-shopping-cart" style="font-size: 21px;"></i>
        @if($customerProductCount ?? '' > 0)
        <span class="aw-cart-count">{{ $customerProductCount  }}</span>
        @endif
    </a>
</div>
<div class="ax-menubar popup-navigation-activation d-block d-lg-none ml_sm--20 ml_md--20">
    <div>
        <i></i>
    </div>
</div>
<div class="ax-header-button ml--40 ml_lg--10 d-none d-sm-block">
    <a class="axil-button btn-solid btn-extra02-color" href="#"><span class="button-text">Let's Talk</span><span class="button-icon"></span></a>
</div>
@endsection

@section('content')
<main class="page-wrappper">

    <!-- Start Slider Area -->
    <div class="axil-slider-area axil-slide-activation">
        <!-- Start Single Slide -->
        <div class="axil-slide slide-style-4 theme-gradient-4 slider-fixed-height d-flex align-items-center">
            <div class="container pt--80 pt_sm--40 pt_md--40">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12 order-2 order-lg-1 mt_md--40 mt_sm--30">
                        <div class="content">
                            <h1 class="axil-display-1 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Think the design, design the thinking.</h1>
                            <p class="layer2 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">
                                Create live segments and target the right people for messages based on
                                their
                                behaviors.</p>
                            <div class="slider-button wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1300ms">
                                <a class="axil-button btn-large btn-solid btn-extra07-color" href="javascrit:void(0)">
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
                                <li><a href="#"><i class="fab fa-twitter"></i><span>twitter</span></a></li>
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
                            <a href="single-case-study.html">
                                <img class="w-100 paralax-image" src="assets/images/portfolio/20944158_.jpg" alt="Axil Case Study Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <span class="category">Lifestyle</span>
                                <span class="category">Lifestyle</span>
                                <span class="category">Lifestyle</span>
                                <h4 class="wow"><a href="single-case-study.html">IoT - Projects</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Case Study  -->

                <!-- Start Single Case Study  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="axil-case-study wow">
                        <div class="thumbnail">
                            <a href="single-case-study.html">
                                <img class="w-100 paralax-image" src="assets/images/portfolio/case-stydy-02.jpg" alt="Axil Case Study Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <span class="category wow" data-splitting>ios, design</span>
                                <h4 class="wow title" data-splitting><a href="single-case-study.html">Android- Projects</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Case Study  -->

                <!-- Start Single Case Study  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="axil-case-study wow">
                        <div class="thumbnail">
                            <a href="single-case-study.html">
                                <img class="w-100 paralax-image" src="assets/images/portfolio/case-stydy-07.jpg" alt="Axil Case Study Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <span class="category wow" data-splitting>web design</span>
                                <span class="category wow" data-splitting>CMS</span>
                                <h4 class="wow title" data-splitting><a href="single-case-study.html">PHP - Projects</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Case Study  -->

                <!-- Start Single Case Study  -->
                <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="axil-case-study move-up wow">
                                <div class="thumbnail">
                                    <a href="single-case-study.html">
                                        <img class="w-100 paralax-image" src="assets/images/portfolio/case-stydy-08.jpg" alt="Axil Case Study Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="inner">
                                        <span class="category wow" data-splitting>ios, design</span>
                                        <h4 class="wow title" data-splitting><a href="single-case-study.html">Papr-Online
                                                platform and website design</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                <!-- End Single Case Study  -->
                <div class="col-lg-12">
                    <div class="view-all-portfolio-button mt--60 text-center">
                        <a class="axil-button btn-large btn-transparent btn-xl" href="services.html"><span class="button-text">Discover More Projects</span><span class="button-icon"></span></a>
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
                        <!-- <p class="subtitle-2 wow" data-splitting>In vel varius turpis, non dictum sem. Aenean in
                            efficitur ipsum, in
                            egestas ipsum. Mauris in mi ac tellus.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card-one bg-white center">
                        <div class="icon">
                            <!-- <i class="bx bx-conversation"></i>
                            <i class='bx bxs-badge-check check-icon'></i> -->
                            <img src="assets/images/portfolio/boxes-img3.png" alt="box_img_3">
                        </div>
                        <h3>
                            <a href="single-services.html">Engineering Subjects </a>
                        </h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a class="explore_more mt--10 text-left" data-hover="Learn More" href="{{ route('courses.view',['paid','eng']) }}">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card-one bg-white center">
                        <div class="icon">
                            <img src="assets/images/portfolio/boxes-img1.png" alt="box_img_1">
                        </div>
                        <h3>
                            <a href="single-services.html">Web Development</a>
                        </h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a class="explore_more mt--10 text-left" data-hover="Learn More" href="{{ route('courses.view',['paid','web']) }}">Explore More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card-one bg-white center">
                        <div class="icon">
                            <img src="assets/images/portfolio/boxes-img2.png" alt="box_img_2">
                        </div>
                        <h3>
                            <a href="single-services.html">Mobile App Development</a>
                        </h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <a class="explore_more mt--10 text-left" data-hover="Learn More" href="{{ route('courses.view',['paid','mobile']) }}">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="view-all-portfolio-button mt--60 text-center">
                    <a class="axil-button btn-large btn-transparent btn-xl" href="services.html">
                        <span class="button-text">Discover More Courses</span>
                        <span class="button-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Course section end -->

    <!-- Start Blog Area -->
    <div class="axil-blog-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra04-color">what's going on</span>
                        <h2 class="title">Latest stories</h2>
                        <p class="subtitle-2">In vel varius turpis, non dictum sem. Aenean in efficitur ipsum,
                            in
                            egestas ipsum. Mauris in mi ac tellus.</p>
                    </div>
                </div>
            </div>
            <div class="row blog-list-wrapper mt--20">
                <!-- Start Blog Area -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="axil-blog axil-control mt--40 active move-up wow">
                        <div class="content">
                            <div class="content-wrap paralax-image">
                                <div class="inner">
                                    <span class="category">Lifestyle</span>
                                    <h5 class="title"><a href="blog-details.html">Choosing the right features
                                            for
                                            your custom</a></h5>
                                    <p>Quisque eget erat augue. Cras gravida enim nulla, a dictum erat fringilla
                                        at.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <div class="image">
                                <img src="assets/images/blog/blog-01.jpg" alt="Blog images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Area -->

                <!-- Start Blog Area -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="axil-blog axil-control mt--40 move-up wow">
                        <div class="content">
                            <div class="content-wrap paralax-image">
                                <div class="inner">
                                    <span class="category">Lifestyle</span>
                                    <h5 class="title"><a href="blog-details.html">Choosing the right features
                                            for
                                            your custom</a></h5>
                                    <p>Quisque eget erat augue. Cras gravida enim nulla, a dictum erat fringilla
                                        at.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <div class="image">
                                <img src="assets/images/blog/blog-02.jpg" alt="Blog images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Area -->
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
</main>
@endsection

@section('footer')
<footer class="axil-footer footer-default footer-style-3 bg-color-extra09">
    <!-- Start Call To Action  -->
    <div class="axil-call-to-action callaction-style-2 pt--110 pt_sm--60 pt_md--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner">
                        <div class="text">
                            <h2 class="title">Interested in collaborations?</h2>
                        </div>
                        <div class="button-wrapper">
                            <a class="axil-button btn-large btn-solid bgextra07-color" href="#"><span class="button-text">Let's Talk</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call To Action  -->

    <!-- Start Footer Top Area -->
    <div class="footer-top ax-section-gap">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget -->
                <div class="col-xl-5 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget-item">
                        <div class="logo">
                            <a href="home-01.html">
                                <svg width="247px" height="72px" viewBox="0 0 247 72" version="1.1">
                                    <!-- Generator: sketchtool 57.1 (101010) - https://sketch.com -->
                                    <title>EAB575CA-61F4-4E68-97E4-378387DEE1D0</title>
                                    <desc>Created with sketchtool.</desc>
                                    <defs>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%">
                                            <stop stop-color="#FFFFFF" stop-opacity="0.5" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" stop-opacity="0" offset="100%"></stop>
                                        </linearGradient>
                                        <rect x="0" y="0" width="60" height="60" rx="14"></rect>
                                        <filter x="-18.3%" y="-11.7%" width="136.7%" height="136.7%" filterUnits="objectBoundingBox">
                                            <feOffset dx="0" dy="4" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                            <feGaussianBlur stdDeviation="3" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.05 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                            <feOffset dx="0" dy="1" in="SourceAlpha" result="shadowOffsetOuter2"></feOffset>
                                            <feGaussianBlur stdDeviation="1.5" in="shadowOffsetOuter2" result="shadowBlurOuter2"></feGaussianBlur>
                                            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.1 0" type="matrix" in="shadowBlurOuter2" result="shadowMatrixOuter2"></feColorMatrix>
                                            <feMerge>
                                                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                                <feMergeNode in="shadowMatrixOuter2"></feMergeNode>
                                            </feMerge>
                                        </filter>
                                        <filter x="-10.8%" y="-4.2%" width="121.7%" height="121.7%" filterUnits="objectBoundingBox">
                                            <feOffset dx="0" dy="1" in="SourceAlpha" result="shadowOffsetInner1"></feOffset>
                                            <feComposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
                                            <feColorMatrix values="0 0 0 0 1   0 0 0 0 1   0 0 0 0 1  0 0 0 0.1 0" type="matrix" in="shadowInnerInner1"></feColorMatrix>
                                        </filter>
                                    </defs>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-309.000000, -6452.000000)">
                                            <g transform="translate(0.000000, 5918.000000)">
                                                <g transform="translate(315.000000, 536.000000)">
                                                    <g class="logo">
                                                        <text font-family="DMSans-Bold, DM Sans" font-size="20" font-weight="bold" fill="#FFFFFF">
                                                            <tspan x="75" y="24">Keystroke</tspan>
                                                            <tspan x="175.14" y="24.5001221" font-family="DMSans-Regular, DM Sans" font-weight="normal"></tspan>
                                                            <tspan x="76.16" y="49.5001221" font-family="DMSans-Regular, DM Sans" font-size="18" font-weight="normal">Small agency studio</tspan>
                                                        </text>
                                                        <g>
                                                            <g>
                                                                <use fill="black" fill-opacity="1" filter="url(#filter-3)" xlink:href="#path-2"></use>
                                                                <use fill="#FF8A5B" fill-rule="evenodd" xlink:href="#path-2"></use>
                                                                <use fill-opacity="0.100000001" fill="url(#linearGradient-1)" fill-rule="evenodd" style="mix-blend-mode: overlay;" xlink:href="#path-2"></use>
                                                                <use fill="black" fill-opacity="1" filter="url(#filter-4)" xlink:href="#path-2"></use>
                                                            </g>
                                                            <g class="Group-3" transform="translate(15.000000, 11.000000)">
                                                                <circle class="icon-oval-lg" stroke="#FFFFFF" stroke-width="7" cx="15" cy="15" r="11.5"></circle>
                                                                <circle class="icon-oval-sm" fill="#FFFFFF" cx="4" cy="34" r="4"></circle>
                                                            </g>
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
                                <p><span>A.</span>3078 Simpson Square, Clinton, Oklahoma, <br /> 73601, Londan</p>
                                <p><span>T.</span><a href="#">+123 4567 8901</a></p>
                                <p><span>E.</span><a href="#">contact@Keystroke.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->

                <!-- Start Single Widget -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mt_mobile--30">
                    <div class="footer-widget-item">
                        <h6 class="title">Services</h6>
                        <div class="footer-menu-container">
                            <ul class="ft-menu liststyle link-hover color-var--2">
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
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mt_md--30 mt_sm--30">
                    <div class="footer-widget-item">
                        <h6 class="title">Resourses</h6>
                        <div class="footer-menu-container">
                            <ul class="ft-menu liststyle link-hover color-var--2">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->

                <!-- Start Single Widget -->
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mt_md--30 mt_sm--30">
                    <div class="footer-widget-item">
                        <h6 class="title">Support</h6>
                        <div class="footer-menu-container">
                            <ul class="ft-menu liststyle link-hover color-var--2">
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
                        <ul class="link-hover color-var--2 d-flex justify-content-md-end justify-content-center liststyle">
                            <li><a data-hover="Privacy Policy" href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
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
    console.log(CookieExpireDate.toUTCString());
    document.cookie = 'device=' + device + ';expires=' + CookieExpireDate.toUTCString() + ';domain;path=/'

</script>
