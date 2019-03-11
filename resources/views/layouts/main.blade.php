<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>MotoTours Asia | @yield('title')</title>
    <meta name="description" content="MotoTours Asia" />
    <meta name="keywords" content="MotoTours Asia" />
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/nanoscroller.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jqeasytooltip.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    @yield('custom_css')

    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/fileinput.js') }}"></script>
    <script src="{{ asset('js/smartmenus.js') }}"></script>
    <script src="{{ asset('js/nanoscroller.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jqeasytooltip.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/scrollTo.js') }}"></script>
    <script src="{{ asset('js/letabs.min.js') }}"></script>
</head>

<body>
<div id="page-container">
    <div id="main-area">
        @include('partials.header')
        <div id="main-content">
            @include('partials.main_slider')
            <div id="content">
                <!-- // Start Content -->
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                        @include('partials.sidebar')
                    </div>
                </div>
                <!-- // End Content -->
            </div>
        </div>
        @include('partials.footer')
    </div>
</div>
<script src="{{ asset('js/jscustom.js') }}"></script>
@yield('custom_javascript')
</body>
</html>