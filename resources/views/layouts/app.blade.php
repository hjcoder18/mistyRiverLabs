<!doctype html>
<html>
<head>
    @include('partials._head')
    @yield('stylesheets')
    @yield('scripts')

</head>
<body>
    @include('partials._header')
    <div id="main" class="container clear-top">
        @yield('content')
    </div>
    @include('partials._footer')
</body>
</html>