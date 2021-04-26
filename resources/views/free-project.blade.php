@extends('layout.layout')

@section('title','StudyEarth - Free Projects')

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
                                                <button type="button" id="showBtn-{{ $key }}" class="btn btn-info showBtn" data-id="{{ $key }}">Show More</button>
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
                                                <button type="button" id="showBtn-{{ $key }}" class="btn btn-info showBtn" data-id="{{ $key }}">Show More</button>
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
