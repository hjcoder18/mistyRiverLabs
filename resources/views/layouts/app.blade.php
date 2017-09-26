<!doctype html>
<html>
<head>
    @include('partials._head')
    @yield('stylesheets')
    @yield('scripts')

</head>
<body>
    @include('partials._header')
    <div id="main">
        @yield('content')
    </div>
    <footer class="row">
        @include('partials._footer')
    </footer>
</body>
</html>