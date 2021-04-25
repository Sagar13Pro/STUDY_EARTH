<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body @yield('class') @yield('data-spy') @yield('data-target') @yield('data-offset')>
    @section('content')
    @show
    @
    <!-- JS ============================================ -->
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
    <script src="{{ asset('assets/js/stickysidebar.js') }}"></script>
    <script src="{{ asset('assets/js/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/contactform.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        //Show More And Less Content
        $(document).ready(function() {
            $('.showBtn').click(function() {
                let id = $(this).data('id');
                console.log(id);
                if (id != " " || id == 0) {
                    if ($('#' + id).hasClass('show-less')) {
                        $('#' + id).removeClass('show-less');
                        $('#showBtn-' + id).html('Show Less');
                    } else {
                        $('#' + id).addClass('show-less');
                        $('#showBtn-' + id).html('Show More');
                    }
                }
            });
        });

    </script>


</body>
</html>
