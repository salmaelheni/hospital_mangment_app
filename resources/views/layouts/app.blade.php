<!doctype html>
<html>

<head>
    @include('layouts.partials.head')
    @yield('css')
</head>

<body id="body" class="front-page">
    <!-- header -->
    @include('layouts.partials.header')
    <!-- header -->

    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')
    <!-- footer -->
    @include('layouts.partials.js')
    @yield('js')
</body>
</html>
