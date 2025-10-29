<!DOCTYPE html>
<html lang="en">


<head>

    <!-- begin::Meta Basic -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#b6554f">
    <meta name="robots" content="index, follow">
    <meta name="author" content="LayoutDrop">
    <meta name="format-detection" content="telephone=no">

    <!-- Basic Meta -->
    <meta name="keywords"
        content="natural skincare, organic beauty, holistic wellness, luxury skincare, herbal cosmetics, self-care, glowing skin, eco-friendly skincare, Edyn Essence">
    <meta name="description"
        content="Edyn Essence is a luxurious natural skincare brand rooted in authenticity, elegance, and holistic wellness. Handcrafted with pure, organic ingredients to nourish, heal, and enhance natural beauty.">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Edyn Essence | Luxury Natural Skincare">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Edyn Essence – Pure, Elegant & Holistic Skincare">
    <meta property="og:description"
        content="Experience confidence, radiance, and indulgent self-care with Edyn Essence’s handcrafted organic skincare essentials.">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:creator" content="@EdynEssence">
    <meta name="twitter:title" content="Edyn Essence – Luxury Natural Skincare">
    <meta name="twitter:description" content="Pure. Organic. Elegant. Skincare rooted in nature and timeless beauty.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">



    <!-- begin::Favicons Icons -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <!-- end::Favicons Icons -->

    <!-- begin::Page Title -->
    <title>{{ isset($meta_title) ? $meta_title . ' | Edyn Essence' : 'Edyn Essence | Luxury Natural Skincare' }}</title>

    <!-- end::Page Title -->

    <!-- begin::Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end::Mobile Specific -->

    <!-- begin::Plugins All CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/themify/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/line-awesome/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/scroll/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/jquery-nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper.min.css') }}">

    <!-- end::Plugins All CSS -->

    <!-- begin::Template Stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- end::Template Stylesheet -->

</head>

<body data-ld-theme="orangy-red">
    <div class="page-wraper">


        @include('layouts.incs.header')


      @yield('content')

        @include('layouts.incs.footer')

        <!-- begin::Back To Top -->
        <button class="back-to-top fa fa-chevron-up"></button>
        <!-- end::Back To Top -->

    </div>
    <!-- begin::Javascript Files -->
    <script src="{{ asset('assets/libs/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/libs/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/libs/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('assets/libs/counter/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/libs/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scroller.js') }}"></script>
    <script src="{{ asset('assets/libs/progress-bar/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/libs/scroll/scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/progress-bar/jquery.skillbar.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>

    <!-- end::Javascript Files -->
</body>

<!-- Mirrored from genda.layoutdrop.com/demo/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Oct 2025 16:54:34 GMT -->

</html>
