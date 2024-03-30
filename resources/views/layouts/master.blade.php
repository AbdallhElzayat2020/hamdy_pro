<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Ayman Fikry" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Multi-purpose Business html5 template" />
    <title>Home Main - Equita Logistics Cargo HTML5 Template</title>
    <link href="assets/images/favicon/favicon.png" rel="icon" />
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!--  Stylesheets==
    -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    {{-- <div class="preloader">
        <div class="loader-spinner">
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div> --}}
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">

        @include('layouts.nav')


        @yield("content")


        @include('layouts.footer')
        <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="{{ asset("assets/js/vendor/jquery-3.4.1.min.js") }}"></script>
    <script src="{{asset("assets/js/vendor.min.js")}}"></script>
    <script src="{{ asset("assets/js/functions.js") }}"></script>
</body>
</html>
