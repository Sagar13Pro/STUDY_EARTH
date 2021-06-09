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
                                by the awesome team at StudyEarth.</p>
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
                    <div class="col-12">
                        <div class="axil-service text-left axil-control paralax-image active">
                            <div class="contact-form-wrapper">
                                <!-- Start Contact Form -->
                                <div class="axil-contact-form contact-form-style-1 w-100">
                                    <form id="contact-form" method="POST" action="{{ route('custom-project-form') }}">
                                        @csrf
                                        <div class="row ml-3">
                                            <div class="form-group col-12 col-md-6 {{ !is_null(old('full_nameInput')) ? 'focused' : '' }}">
                                                <input type="text" name="full_nameInput" value="{{ old('full_nameInput') }}">
                                                <label>Full Name<span class="asterik">*</span></label>
                                                <span class="focus-border"></span>
                                                <x-alert type="full_name_error" />
                                            </div>
                                            <div class="form-group col-12 col-md-6 {{ !is_null(old('emailInput')) ? 'focused' : '' }}">
                                                <input type="email" name="emailInput" value="{{ old('emailInput') }}">
                                                <label>Email<span class="asterik">*</span></label>
                                                <span class="focus-border"></span>
                                                <x-alert type="email_error" />
                                            </div>
                                        </div>
                                        <div class="row ml-3">
                                            <div class="form-group col-12 col-md-6 {{ !is_null(old('mobile_numberInput')) ? 'focused' : '' }}">
                                                <input type="text" name="mobile_numberInput" value="{{ old('mobile_numberInput') }}">
                                                <label>Contact Number<span class="asterik">*</span></label>
                                                <span class="focus-border"></span>
                                                <x-alert type="contact_no_error" />
                                            </div>
                                            <div class="form-group col-12 col-md-6">
                                                <select name="project_platformInput" id="">
                                                    <option value="">Custom Project Platform</option>
                                                    <option value="Andriod" {{ old('project_platformInput') == 'Andriod' ? 'selected' : '' }}>Andriod</option>
                                                    <option value="PHP" {{ old('project_platformInput') == 'PHP' ? 'selected' : '' }}>PHP</option>
                                                    <option value="Machine Learning" {{ old('project_platformInput') == 'Machine Learning' ? 'selected' : '' }}>Machine Learning</option>
                                                    <option value="IOT" {{ old('project_platformInput') == 'IOT' ? 'selected' : '' }}>IOT</option>
                                                    <option value="AR/VR" {{ old('project_platformInput') == 'AR/VR' ? 'selected' : '' }}>AR/VR</option>
                                                    <option value="iOS" {{ old('project_platformInput') == 'iOS' ? 'selected' : '' }}>iOS</option>
                                                    <option value="DotNet" {{ old('project_platformInput') == 'DotNet' ? 'selected' : '' }}>DotNet</option>
                                                    <option value="Python" {{ old('project_platformInput') == 'Python' ? 'selected' : '' }}>Python</option>
                                                    <option value="Artificial Intelligence" {{ old('project_platformInput') == 'Artificial Intelligence' ? 'selected' : '' }}>Artificial Intelligence</option>
                                                    <option value="Information Security" {{ old('project_platformInput') == 'Information Security' ? 'selected' : '' }}>Information Security</option>
                                                    <option value="Cloud Computing" {{ old('project_platformInput') == 'Cloud Computing' ? 'selected' : '' }}>Cloud Computing</option>
                                                    <option value="Blockchain" {{ old('project_platformInput') == 'AndrBlockchainiod' ? 'selected' : '' }}>Blockchain</option>
                                                    <option value="Matlab" {{ old('project_platformInput') == 'Matlab' ? 'selected' : '' }}>Matlab</option>
                                                    <option value="Data Science" {{ old('project_platformInput') == 'Data Science' ? 'selected' : '' }}>Data Science</option>
                                                    <option value="Others" {{ old('project_platformInput') == 'Others' ? 'selected' : '' }}>Others</option>
                                                </select>
                                                <span class="focus-border"></span>
                                                <x-alert type="select_platform_error" />
                                            </div>
                                        </div>
                                        <div class="row ml-3">
                                            <div class="form-group col-12 {{ !is_null(old('project_requirementsInput')) ? 'focused' : '' }}">
                                                <Textarea rows="2" cols="12" name="project_requirementsInput">{{ old('project_requirementsInput') }}</Textarea>
                                                <label for="">Describe your requirements specifications<span class="asterik">*</span></label>
                                                <span class="focus-border"></span>
                                                <x-alert type="project_req_error" />
                                            </div>
                                        </div>
                                        <div class="row ml-3">
                                            <div class="form-group col-8 col-md-4">
                                                <button class="btn btn-outline-success w-50" type="submit">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service  -->
            </div>
            <!-- End Service Wrapper  -->
        </div>
    </div>
    </div>
    <!-- End Navigation Content  -->

    <!--Modal -->
    <div class="modal fade  {{ session()->has('custom_message') ? 'show' : '' }}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" {{ session()->has('custom_message') ? 'style=display:block' : 'style=display:none' }} style="display:block">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    @if(session()->has('custom_message'))
                    <div class="">{{ session('custom_message') }}</div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>
                </div>
                <script>
                    $('.btn-close').click(function() {
                        $('#exampleModal').fadeOut(1000);
                    })

                </script>
            </div>
        </div>
    </div>
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
