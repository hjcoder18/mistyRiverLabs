<!doctype html>
<html>
<head>
    @include('partials._head')
    @yield('stylesheets')
    @yield('scripts')

</head>
<body>
    @include('partials._header')
    @yield('content')

</body>
</html>