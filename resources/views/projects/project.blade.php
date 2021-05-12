@extends('layout.layout')

@section('title','StudyEarth - Projects')

{{-- <body> PARAMETERS START --}}
@section('class','class=position-relative')
@section('data-offset','data-offset=100')
@section('data-spy','data-spy=scroll')
@section('data-target','data-target=.navbar-example2')
{{-- <body> PARAMETERS END --}}


{{-- MAIN CONTENT SECTION START--}}
@section('content')
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
                            <span class="sub-title extra04-color wow" data-splitting>Free Projects</span>
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
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <p class="no-project-text wow">No Projects Available</p>
                    </div>
                    @endif
                    <!-- End Single Service  -->
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
                            <span class="sub-title extra04-color wow" data-splitting>Paid Projects</span>
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
                                    <a class="axil-button" data-hover="Learn More" href="{{ route('paidproject.view',[$paid->Type, $paid->Language]) }}">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <p class="no-project-text wow">No Projects Available</p>
                    </div>
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
                            <span class="sub-title extra04-color wow" data-splitting>Custom Project</span>
                            <h2 class="title wow" data-splitting>Custom Projects</h2>
                        </div>
                    </div>
                </div>
                <!-- Start Service Wrapper  -->
                <div class="row">
                    <!-- Start Single Service CUSTOM -->
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
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <p class="no-project-text wow">No Projects Available</p>
                    </div>
                    @endif
                    <!-- End Single Service  -->
                </div>
                <!-- End Service Wrapper  -->
            </div>
        </div>
    </div>
    <!-- End Navigation Content  -->

    <!-- Axil Scroll Navigation Area  -->

    

</main>
<!-- End Page Wrapper -->
<script src="{{ asset('assets/js/stickysidebar.js') }}"></script>
<script>
    var sidebar = new StickySidebar('.axil-scroll-nav', {
        topSpacing: 0
        , bottomSpacing: 0
        , containerSelector: '.axil-scroll-navigation'
        , innerWrapperSelector: '.sidebar__inner'
    });

</script>

@endsection
{{-- MAIN CONTENT SECTION END --}}
