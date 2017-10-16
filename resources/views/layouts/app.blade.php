<!doctype html>
<html>
<head>
    @include('partials._head')
    @yield('stylesheets')
    @yield('scripts')

</head>
<body>
    @include('partials._header')
    <div class="container">
        @yield('content')
    </div>
    @include('partials._footer')
</body>
</html>