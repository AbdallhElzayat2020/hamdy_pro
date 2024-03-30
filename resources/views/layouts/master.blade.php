<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    @include('layouts.head')
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


        <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="{{ asset("assets/js/vendor/jquery-3.4.1.min.js") }}"></script>
    <script src="{{asset("assets/js/vendor.min.js")}}"></script>
    <script src="{{ asset("assets/js/functions.js") }}"></script>
    @include('layouts.footer')
</body>
</html>
