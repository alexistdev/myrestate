<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AdminLTE 3 | Log in</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('porto/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('porto/img/apple-touch-icon.png') }}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/css/theme-shop.css') }}">
    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/navigation.css') }}">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/demos/demo-real-estate.css') }}">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/skins/skin-real-estate.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('porto/css/custom.css') }}">
    <!-- Head Libs -->
    <script src="{{ asset('porto/vendor/modernizr/modernizr.min.js') }}"></script>
</head>

<body>
    @include('layouts.navmenu')
    <div role="main" class="main">
        @yield('content')
        @include('frontend.footer')
    </div>
    <!-- Vendor -->
    <script src="{{ asset('porto/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/common/common.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/vide/jquery.vide.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/vivus/vivus.min.js') }}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('porto/js/theme.js') }}"></script>
    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('porto/js/views/view.contact.js') }}"></script>
    <!-- Demo -->
    <script src="{{ asset('porto/js/demos/demo-real-estate.js') }}"></script>
    <!-- Theme Custom -->
    <script src="{{ asset('porto/js/custom.js') }}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('porto/js/theme.init.js') }}"></script>
</body>

</html>