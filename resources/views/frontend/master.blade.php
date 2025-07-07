<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Invena – A modern and responsive HTML template for consulting businesses. Perfect for finance, corporate, and agency websites. SEO-friendly, fast-loading, and easy to customize. Create a professional online presence today!">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo2.png') }}">
    <title>Imperial Wisdom Graduate Campus</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnifying-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body class="index-one">

    
  
    

    @include('frontend.header')
    
    @yield('content')

    @include('frontend.footer')


    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <div id="anywhere-home" class="">
    </div>



    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

<script src="{{ asset('frontend/assets/js/plugins/jquery.js') }}"></script>

<script src="{{ asset('frontend/assets/js/plugins/odometer.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery-appear.js') }}"></script>

<script src="{{ asset('frontend/assets/js/plugins/gsap.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/split-text.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/scroll-trigger.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/smooth-scroll.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/metismenu.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/popup.js') }}"></script>

<script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/swiper.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/contact.form.js') }}"></script>

<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>