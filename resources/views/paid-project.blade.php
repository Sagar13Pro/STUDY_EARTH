@extends('layout.layout')

@section('title','StudyEarth - Paid Projects')

@section('links')
<li><a href="{{ route('index.view') }}">Home</a></li>
<li class="has-dropdown"><a href="{{ route('projects.view') }}">Projects</a></li>
<li><a href="">About Us</a></li>
<li><a href="">Contact</a></li>
@endsection

@section('content')
<div class="main-wrapper">
    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area breadcrumb-style-2 single-service pt--170 pb--70 theme-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 mt_md--30 mt_sm--20">
                    <div class="inner">
                        <img src="{{ asset('assets/images/logo/iot.svg') }}" style="max-width: 200px;">
                        <h2 class="title">IoT - Projects</h2>
                        <!-- <p>We have list of free projects in <code style="font-size: 24px;">c++</code>. </p> -->
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
                    <!-- Start Working Process  -->
                    <div class="axil-working-process mb--100 mb_md--50 mb_sm--40">
                        <div class="thumbnail">
                            <div class="image paralax-image">
                                <img src="{{ asset('assets/images/process/9858_.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                        <!-- <img src="assets/images/process/9858.jpg" alt="Process Images"> -->
                        <div class="content">
                            <div class="inner">
                                <div class="section-title">
                                    <!-- <span class="process-step-number">1</span> -->
                                    <span class="sub-title extra04-color">IoT</span>
                                    <span class="sub-title extra04-color">Python</span>
                                    <h3 class="title">IOT based Manhole Detection and Monitoring System</h3>
                                    <p class="subtitle-2">Manholes are not monitored properly in developing countries. These accidents can lead to serious injuries and also death. Hence, here we propose a system to overcome this problem.</p>
                                    <div class="pricing-details">
                                        <h3 class="mt--20 price-text"><img src="{{ asset('assets/images/icons/rupee.svg') }}" class="rupee" /><img src="{{ asset('assets/images/icons/rupee-28.svg') }}" class="rupee-alt" />32600/-
                                    </div>
                                    <a class="axil-button btn-large btn-transparent mt--20" href="#">
                                        <span class="button-text">Purchase Now</span><span class="button-icon"></span>
                                    </a>
                                    <a class="axil-button btn-large btn-solid mt--20 more-info-btn" href="#" data-toggle="modal" data-target="#confirmation-modal">
                                        <span class="button-text">More Info</span><span class="button-icon"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Working Process  -->

                    <!-- Start Working Process  -->
                    <!-- <div class="axil-working-process mb--100 text-left mb_md--50 mb_sm--40">
                                <div class="content order-2 order-lg-1">
                                    <div class="inner">
                                        <div class="section-title">
                                            <span class="process-step-number">2</span>
                                            <span class="sub-title extra05-color">our four step
                                                process</span>
                                            <h2 class="title">Prototype</h2>
                                            <p class="subtitle-2">Donec metus lorem, vulputate at sapien
                                                sit amet, auctor
                                                iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.
                                                Aliquam
                                                tristique libero at dui sodales, et placerat orci lobortis. Maecenas
                                                ipsum
                                                neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail order-1 order-lg-2">
                                    <div class="image paralax-image">
                                        <img src="assets/images/process/process-02.jpg" alt="Process Images">
                                    </div>
                                </div>
                            </div> -->
                    <!-- End Working Process  -->

                    <!-- Start Working Process  -->
                    <!-- <div class="axil-working-process mb--100 mb_md--50 mb_sm--40">
                                <div class="thumbnail">
                                    <div class="image paralax-image">
                                        <img src="assets/images/process/process-03.jpg" alt="Process Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="inner">
                                        <div class="section-title">
                                            <span class="process-step-number">3</span>
                                            <span class="sub-title extra06-color">our four step
                                                process</span>
                                            <h2 class="title">Test</h2>
                                            <p class="subtitle-2">Donec metus lorem, vulputate at sapien
                                                sit amet, auctor
                                                iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.
                                                Aliquam
                                                tristique libero at dui sodales, et placerat orci lobortis. Maecenas
                                                ipsum
                                                neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    <!-- End Working Process  -->

                    <!-- Start Working Process  -->
                    <!-- <div class="axil-working-process text-left mb--100 mb_md--50 mb_sm--40">
                                <div class="content order-2 order-lg-1">
                                    <div class="inner">
                                        <div class="section-title">
                                            <span class="process-step-number">4</span>
                                            <span class="sub-title extra07-color">our four step
                                                process</span>
                                            <h2 class="title">Build</h2>
                                            <p class="subtitle-2">Donec metus lorem, vulputate at sapien
                                                sit amet, auctor
                                                iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.
                                                Aliquam
                                                tristique libero at dui sodales, et placerat orci lobortis. Maecenas
                                                ipsum
                                                neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail order-1 order-lg-2">
                                    <div class="image paralax-image">
                                        <img src="assets/images/process/process-04.jpg" alt="Process Images">
                                    </div>
                                </div>
                            </div> -->
                    <!-- End Working Process  -->

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
