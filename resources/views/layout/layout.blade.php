@php
use App\Models\Customer;
@endphp
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','StudyEarth')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


    <script src="https://unpkg.com/feather-icons"></script>
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
                                <a href="{{ route('index.view') }}">
                                    <svg width="281px" height="60px" viewBox="0 0 281 60" version="1.1">
                                        <title>Logo</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-315.000000, -40.000000)">
                                                <g>
                                                    <g id="logo" transform="translate(315.000000, 40.000000)">
                                                        <text id="Keystroke-Startup-la"
                                                            font-family="DMSans-Bold, DM Sans" font-size="24"
                                                            font-weight="bold" fill="#000248">
                                                            <tspan x="75" y="35">StudyEarth</tspan>
                                                        </text>
                                                        <g id="Favicon">
                                                            <rect id="Base" fill="#702FFF" x="0" y="0" width="60"
                                                                height="60" rx="14"></rect>
                                                            <g id="Group-3" transform="translate(15.000000, 11.000000)">
                                                                <circle id="icon-oval-lg" class="icon-oval-lg"
                                                                    stroke="#FFFFFF" stroke-width="7" cx="15" cy="15"
                                                                    r="11.5"></circle>
                                                                <circle id="icon-oval-sm" class="icon-oval-sm"
                                                                    fill="#FFFFFF" cx="4" cy="34" r="4"></circle>
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
                                        @section('link-home')
                                        <li><a href="{{ route('index.view') }}">Home</a></li>
                                        @show
                                        <li class="has-dropdown">
                                            <a href="{{ route('projects.view') }}">Projects</a>
                                            <ul class="axil-submenu">
                                                <li><a href="{{ route('projects.view') }}#section1">Free Projects</a>
                                                </li>
                                                <li><a href="{{ route('projects.view') }}#section2">Paid Projects</a>
                                                </li>
                                                <li><a href="{{ route('projects.view') }}#section3">Custom Projects</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="{{ route('index.view') }}#course_details "
                                                onclick="generate();">Courses</a>
                                        </li>
                                        <li><a href="{{ route('contact.view') }}">
                                                Contact</a></li>
                                        <li><a href="{{ route('interest.view') }}">Interest</a></li>
                                        {{-- DARK/LIGHT MODE --}}
                                        <li>
                                            <div id="my_switcher" class="my_switcher">
                                                <ul>
                                                    <li>
                                                        <a href="javascript: void(0);" data-theme="light"
                                                            class="setColor light">
                                                            <i class="far fa-sun"></i>
                                                            <span title="Light Mode"> Light</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);" data-theme="dark"
                                                            class="setColor dark">
                                                            <i class="far fa-moon"></i>
                                                            <span title="Dark Mode"> Dark</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            @php

                                            if(isset($_COOKIE['device'])){
                                            $customerProductCount =
                                            Customer::where([['device',$_COOKIE['device']],['payment_status','unpaid']])->count();
                                            }
                                            @endphp

                                            <a href="{{ route('cart.view') }}"><i class="far fa-shopping-cart"
                                                    style="font-size: 22px;"></i>
                                                @if($customerProductCount ?? '' > 0)
                                                <span class="aw-cart-count">{{ $customerProductCount }}</span>
                                                @endif
                                            </a>
                                        </li>

                                        <li class="has-dropdown">
                                            <a class="login-btn"><i data-feather="user"></i></a>
                                            <ul class="axil-submenu">
                                                @if (!session()->has('session_email'))
                                                <li><a class="login-btn" href="javascript:void(0)"
                                                        data-backdrop="static" data-toggle="modal"
                                                        data-target="#login-modal">Login </a></li>
                                                @endif
                                                @if (session()->has('session_email'))
                                                <li><a class="login-btn" href="{{ route('user.purchases') }}">My
                                                        Purchase</a></li>
                                                <li><a class="login-btn" href="javascript:void(0)"
                                                        data-backdrop="static" data-toggle="modal"
                                                        data-target="#logout-modal"> Logout </a></a></li>
                                                @endif
                                            </ul>
                                        </li>
                                        <li>
                                            @if(session()->has('session_email'))
                                            {{ session('session_email')}}
                                            @endif
                                        </li>
                                    </ul>
                                </nav>
                                @section('search-LetTalks')
                                <div class=" d-block d-lg-none ml--40 ml_sm--10">
                                    @php

                                    if(isset($_COOKIE['device'])){
                                    $customerProductCount =
                                    Customer::where([['device',$_COOKIE['device']],['payment_status','unpaid']])->count();
                                    }
                                    @endphp
                                    <a class="cart-icon" href="{{ route('cart.view') }}"><i class="far fa-shopping-cart"
                                            style="font-size: 21px; color: #000248"></i>
                                        @if($customerProductCount ?? '' > 0)
                                        <span class="aw-cart-count">{{ $customerProductCount }}</span>
                                        @endif
                                    </a>
                                </div>
                                <div class="ax-menubar popup-navigation-activation d-block d-lg-none pl-15 ml--0 mr-10">
                                    <div>
                                        <i></i>
                                    </div>
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
                        <a href="{{ route('index.view') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo images">
                        </a>
                    </div>
                    <a class="close-menu" href="#"></a>
                </div>
                <div class="menu-item">
                    <ul class="mainmenu-item">
                        <li class="has-children">
                            <a class="login-btn"><i data-feather="user" stroke="#fff"></i>User</a>
                            <ul class="submenu">
                                @if (!session()->has('session_email'))
                                <li><a class="login-btn user" href="{{ route('user.login') }}" data-backdrop="static"
                                        data-toggle="modal" data-target="#login-modal"> Login</a></li>
                                @endif
                                @if (session()->has('session_email'))
                                <li><a class="login-btn user" href="{{ route('user.purchases') }}"
                                        data-backdrop="static" data-toggle="modal" data-target="#-modal">My purchase
                                    </a></li>
                                <li><a class="login-btn user" href="{{ route('user.logout') }}" data-backdrop="static"
                                        data-toggle="modal" data-target="#logout-modal"> Logout </a></a></li>
                                @endif
                            </ul>
                        </li>
                        @section('link-home')
                        <li><a href="{{ route('index.view') }}">Home</a></li>
                        @show
                        <li class="has-children">
                            <a href="{{ route('projects.view') }}">Projects</a>
                            <ul class="submenu">
                                <li><a href="{{ route('projects.view') }}#section1">Free Projects</a></li>
                                <li><a href="{{ route('projects.view') }}#section2">Paid Projects</a></li>
                                <li><a href="{{ route('projects.view') }}#section3">Custom Projects</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="{{ route('index.view') }}#course_details" onclick="generate();">Courses</a>
                        </li>
                        <li><a href="{{ route('contact.view') }}">Contact</a></li>
                        <li><a href="{{ route('interest.view') }}">Interest</a></li>
                        @section('theme')
                        <li>
                            <div id="my_switcher" class="my_switcher popup-mobile">
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="light" class="setColor light active">
                                            <i class="far fa-sun"></i>
                                            <span title="Light Mode"> Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <i class="far fa-moon"></i>
                                            <span title="Dark Mode"> Dark</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @show
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

        @section('Modal')
        <!-- Login Modal -->
        <div class="modal fade {{ session()->has('login_failed') ? 'show' : '' }}" id="login-modal" tabindex="-1"
            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" {{ session()->has('login_failed') ?
            'style=display:block' : 'style=display:none' }}>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content mr-15">
                    <a data-dismiss="modal" aria-hidden="true" class="close-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" id="login-cancel-btn-image" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 Z M7.29325,7.29325 C7.65417308,6.93232692 8.22044527,6.90456361 8.61296051,7.20996006 L8.70725,7.29325 L12.00025,10.58625 L15.29325,7.29325 C15.68425,6.90225 16.31625,6.90225 16.70725,7.29325 C17.0681731,7.65417308 17.0959364,8.22044527 16.7905399,8.61296051 L16.70725,8.70725 L13.41425,12.00025 L16.70725,15.29325 C17.09825,15.68425 17.09825,16.31625 16.70725,16.70725 C16.51225,16.90225 16.25625,17.00025 16.00025,17.00025 C15.7869167,17.00025 15.5735833,16.9321944 15.3955509,16.796662 L15.29325,16.70725 L12.00025,13.41425 L8.70725,16.70725 C8.51225,16.90225 8.25625,17.00025 8.00025,17.00025 C7.74425,17.00025 7.48825,16.90225 7.29325,16.70725 C6.93232692,16.3463269 6.90456361,15.7800547 7.20996006,15.3875395 L7.29325,15.29325 L10.58625,12.00025 L7.29325,8.70725 C6.90225,8.31625 6.90225,7.68425 7.29325,7.29325 Z" />
                        </svg>
                    </a>
                    <div class="login-box bg-color border-radius-10">
                        <h3 class="title text-center">Login To StudyEarth</h3>
                        <x-alert type="login" />
                        <form action="{{ route('user.login') }}" method="POST" class="mt--30">
                            @csrf
                            <div class="form-group {{ is_null(old('login_emailInput')) ? '' : 'focused' }}">
                                <input type=" email" name="login_emailInput" value="{{ old('login_emailInput') }}"
                                    class="pl-15">
                                <label>Email</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="login_passwordInput" class="pl-15">
                                <label>Password</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-button btn-medium btn-transparent w-100">
                                    <span class="button-text">Submit</span><span class="button-icon"></span>
                                </button>
                            </div>
                        </form>
                        <div style="display: flex;justify-content:center;">
                            <a href="javascript:void(0)" class="font-weight-500 forget_password_model"
                                data-backdrop="static" data-toggle="modal" data-target="#forget-modal">Forgot
                                Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logout Modal -->
        <div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content mr-15">
                    <a data-dismiss="modal" aria-hidden="true" class="close-btn"><svg xmlns="http://www.w3.org/2000/svg"
                            id="login-cancel-btn-image" width="24" height="24" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 Z M7.29325,7.29325 C7.65417308,6.93232692 8.22044527,6.90456361 8.61296051,7.20996006 L8.70725,7.29325 L12.00025,10.58625 L15.29325,7.29325 C15.68425,6.90225 16.31625,6.90225 16.70725,7.29325 C17.0681731,7.65417308 17.0959364,8.22044527 16.7905399,8.61296051 L16.70725,8.70725 L13.41425,12.00025 L16.70725,15.29325 C17.09825,15.68425 17.09825,16.31625 16.70725,16.70725 C16.51225,16.90225 16.25625,17.00025 16.00025,17.00025 C15.7869167,17.00025 15.5735833,16.9321944 15.3955509,16.796662 L15.29325,16.70725 L12.00025,13.41425 L8.70725,16.70725 C8.51225,16.90225 8.25625,17.00025 8.00025,17.00025 C7.74425,17.00025 7.48825,16.90225 7.29325,16.70725 C6.93232692,16.3463269 6.90456361,15.7800547 7.20996006,15.3875395 L7.29325,15.29325 L10.58625,12.00025 L7.29325,8.70725 C6.90225,8.31625 6.90225,7.68425 7.29325,7.29325 Z" />
                        </svg></a>

                    <div class="login-box bg-color border-radius-10">
                        <h3 class="title text-center">Are you sure</h3>
                        <div class="row sp-margin mt--30">
                            <div class="form-group pl-15">
                                <button type="button" data-dismiss="modal"
                                    class="axil-button btn-small btn-transparent">
                                    <span class="button-text">Cancel</span><span class="button-icon"></span>
                                </button>
                            </div>
                            <div class="form-group pl-15">
                                <a href="{{ route('user.logout') }}" class="axil-button btn-small btn-transparent ">
                                    <span class="button-text">Logout</span><span class="button-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forget Password Modal -->
        <div class="modal fade {{ session()->has('validation_error') ? 'show' : '' }}" id="forget-modal" tabindex="-1"
            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" {{ session()->has('validation_error') ?
            'style=display:block;' : 'style=display:none;' }}>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content mr-15">
                    <a data-dismiss="modal" aria-hidden="true" class="close-forget-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" id="login-cancel-btn-image" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 Z M7.29325,7.29325 C7.65417308,6.93232692 8.22044527,6.90456361 8.61296051,7.20996006 L8.70725,7.29325 L12.00025,10.58625 L15.29325,7.29325 C15.68425,6.90225 16.31625,6.90225 16.70725,7.29325 C17.0681731,7.65417308 17.0959364,8.22044527 16.7905399,8.61296051 L16.70725,8.70725 L13.41425,12.00025 L16.70725,15.29325 C17.09825,15.68425 17.09825,16.31625 16.70725,16.70725 C16.51225,16.90225 16.25625,17.00025 16.00025,17.00025 C15.7869167,17.00025 15.5735833,16.9321944 15.3955509,16.796662 L15.29325,16.70725 L12.00025,13.41425 L8.70725,16.70725 C8.51225,16.90225 8.25625,17.00025 8.00025,17.00025 C7.74425,17.00025 7.48825,16.90225 7.29325,16.70725 C6.93232692,16.3463269 6.90456361,15.7800547 7.20996006,15.3875395 L7.29325,15.29325 L10.58625,12.00025 L7.29325,8.70725 C6.90225,8.31625 6.90225,7.68425 7.29325,7.29325 Z" />
                        </svg></a>

                    <div class="login-box bg-color border-radius-10">
                        <h3 class="title text-center">Forget Password</h3>
                        <form action="{{ route('user.forget_password') }}" method="POST" class="mt--30">
                            @csrf
                            <div class="form-group {{ is_null(old('forget_emailInput')) ? '' : 'focused' }}">
                                <input type=" email" name="forget_emailInput" value="{{ old('forget_emailInput') }}"
                                    class="pl-15">
                                <label>Email</label>
                                <span class="focus-border"></span>
                                <x-alert type="forget_password" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-button btn-medium btn-transparent w-100">
                                    <span class="button-text">Submit</span><span class="button-icon"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @show

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
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>

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
                            <div class="col-12 col-md-3 col-lg-3">
                                <div class="footer-widget-item d-flex flex-column justify-content-between position-relative"
                                    style="top:-60px">
                                    <div class="logo my-5">
                                        <a href="{{ route('index.view') }}">
                                            <svg width="281px" height="60px" viewBox="0 0 281 60" version="1.1">
                                                <title>Logo</title>
                                                <desc>Created with Sketch.</desc>
                                                <g id="Symbols" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g transform="translate(-315.000000, -40.000000)">
                                                        <g>
                                                            <g id="logo" transform="translate(315.000000, 40.000000)">
                                                                <text id="Keystroke-Startup-la"
                                                                    font-family="DMSans-Bold, DM Sans" font-size="24"
                                                                    font-weight="bold" fill="#000248">
                                                                    <tspan x="75" y="35">StudyEarth</tspan>
                                                                </text>
                                                                <g id="Favicon">
                                                                    <rect id="Base" fill="#702FFF" x="0" y="0"
                                                                        width="60" height="60" rx="14"></rect>
                                                                    <g id="Group-3"
                                                                        transform="translate(15.000000, 11.000000)">
                                                                        <circle id="icon-oval-lg" class="icon-oval-lg"
                                                                            stroke="#FFFFFF" stroke-width="7" cx="15"
                                                                            cy="15" r="11.5"></circle>
                                                                        <circle id="icon-oval-sm" class="icon-oval-sm"
                                                                            fill="#FFFFFF" cx="4" cy="34" r="4">
                                                                        </circle>
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
            </div>
        </footer>
        @show
        {{-- FOOTER SECTION END --}}
    </div>

    <!-- JS ============================================ -->
    <script>
        feather.replace({
            'stroke-width': 2
            , 'stroke': '#000248'
        })
        $('.close-btn').click(function() {
            $('#login-modal').fadeOut(1000);
        });
        $('.forget_password_model').click(function() {
            $("#login-modal").fadeOut(1000);
        });
        $('.close-forget-btn').click(function() {
            $('#forget-modal').remove();
            location.reload()
        });

    </script>
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
    <script src="{{ asset('assets/js/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @section('scripts')
    @show
    <x-alert type="toastr" />
</body>

</html>