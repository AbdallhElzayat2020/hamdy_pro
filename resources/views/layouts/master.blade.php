<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title>@yield('title')</title>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
    @include('layouts.main-head')

</head>

<body>
    @include('layouts.main-header')
    @yield('content')
    @include('layouts.main-footer')
    @yield('js')
</body>

</html>
