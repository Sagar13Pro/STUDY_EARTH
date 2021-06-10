<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StuyEarth | Reset Password</title>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
    <header class="ax-header haeder-default light-logo-version header-transparent axil-header-sticky">
        <div class="header-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8 justify-content-center">
                        <div class="logo">
                            <a href="{{ route('index.view') }}">
                                <svg width="281px" height="60px" viewBox="0 0 281 60" version="1.1">
                                    <title>Logo</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-315.000000, -40.000000)">
                                            <g>
                                                <g id="logo" transform="translate(315.000000, 40.000000)">
                                                    <text id="Keystroke-Startup-la" font-family="DMSans-Bold, DM Sans" font-size="24" font-weight="bold" fill="#000248">
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
                    </div>
                    <div class="col-4">
                        <div id="my_switcher" class="my_switcher">
                            <ul>
                                <li>
                                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
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
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main-wrapper mt-5">
        <!-- Start Contact Area  -->
        <div class="axil-contact-area axil-shape-position ax-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-wrapper d-flex justify-content-center">
                            <!-- Start Contact Form -->
                            <div class="axil-contact-form contact-form-style-1">
                                <h3 class="title">Get a free Keystroke quote now</h3>
                                <form id="contact-form" method="POST" action="{{ route('update.password') }}">
                                    @csrf
                                    <div class="form-group bill">
                                        <input type="password" name="new_passwordInput">
                                        <label>Password<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="reset_password" />
                                        <input type="hidden" name="token" value="{{ $token }}">
                                    </div>
                                    <div class="form-group bill">
                                        <input type="submit" value="Send message">
                                        <p class="form-messege"></p>
                                        <span class="focus-border"></span>
                                    </div>
                                </form>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/js.cookie.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
