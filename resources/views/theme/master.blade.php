<!doctype html>
<html lang="en">
    @include('theme.partials.head')
    <body>
        @include('theme.partials.preloader')
        @include('theme.partials.nav')
        @yield('content')
        @include('theme.partials.footer')
        @include('theme.partials.scripts')
    </body>
</html>