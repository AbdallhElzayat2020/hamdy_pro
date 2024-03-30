<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        @include('layouts.main-header')
        @yield('content')
        @include('layouts.main-footer')
        @yield('js')
    </div>
</body>

</html>
