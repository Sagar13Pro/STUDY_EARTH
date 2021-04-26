@extends('layout.layout')

@section('title','StudyEarth - Projects')

{{-- <body> Paramaters --}}
@section('class','class=position-relative')
@section('data-offset','data-offset=100')
@section('data-spy','data-spy=scroll')
@section('data-target','data-target=.navbar-example2')

@section('links')
<li><a href="{{ route('index.view') }}">Home</a></li>
<li class="has-dropdown">
    <a href="javascript:void(0)">Projects</a>
    <ul class="axil-submenu">
        <li><a href="#section1">Free Projects</a></li>
        <li><a href="#section2">Paid Projects</a></li>
        <li><a href="#section3">Custom Projects</a></li>
    </ul>
</li>
<li><a href="">About Us</a></li>
<li><a href="">Contact</a></li>
@endsection

@section('content')
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

        <!-- Start Navigation Content FREE -->
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
                    @if(count($Projects) > 0)
                    @foreach ($Projects as $key => $free )
                    @if($free->Type == 'free')
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="axil-service text-left axil-control paralax-image active">
                            <div class="inner">
                                <img src="assets/images/icons/{{ $free->ImageName }}" alt="C++ logo" class="logo_ic">
                                <div class="content">
                                    <h4 class="title"><a href="{{ route('freeproject.view',[$free->Type,$free->Language]) }}">{{ $free->Title }}</a></h4>
                                    <p>{{ $free->Content }}</p>
                                    <a class="axil-button" data-hover="Learn More" href="{{ route('freeproject.view',[$free->Type,$free->Language]) }}">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                    <div>No Projects THERE</div>
                    @endif
                    <!-- End Single Service  -->
                </div>
            </div>
        </div>
    </div>

    <!-- End Service Wrapper  -->
    <!-- End Navigation Content  -->

    <!-- Start Navigation Content PAID -->
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
                @if(count($Projects) > 0)
                @foreach ($Projects as $key => $paid )
                @if($paid->Type == 'paid')
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="axil-service text-left axil-control paralax-image active">
                        <div class="inner">
                            <img src="assets/images/icons/{{ $paid->ImageName }}" alt="Icon Images" class="logo_ic">
                            <div class="content">
                                <h4 class="title"><a href="">{{ $paid->Title }}</a></h4>
                                <p>{{ $paid->Content }}</p>
                                <a class="axil-button" data-hover="Learn More" href="{{ route('paidproject.view') }}">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @else
                <div>No Projects THERE</div>
                @endif
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
                        <h2 class="title wow" data-splitting>Custom Projects</h2>
                    </div>
                </div>
            </div>
            <!-- Start Service Wrapper  -->
            <div class="row">
                <!-- Start Single Service  -->
                @if(count($Projects))
                @foreach ($Projects as $key => $custom )
                @if ($custom->Type === 'custom')
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="axil-service text-left axil-control paralax-image active">
                        <div class="inner">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img src="assets/images/icons/layer.svg" alt="Icon Images">
                                    <div class="image-2"><img src="assets/images/icons/{{ $custom->ImageName }}" alt="Shape Images"></div>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-service.html">{{ $custom->Title }}</a></h4>
                                <p>{{ $custom->Content }}</p>
                                <a class="axil-button" data-hover="Learn More" href="javascript:void(0)">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @else
                <div>No Projects THERE</div>
                @endif
                <!-- End Single Service  -->
            </div>
            <!-- End Service Wrapper  -->
        </div>
    </div>
    <!-- End Navigation Content  -->

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
@endsection
