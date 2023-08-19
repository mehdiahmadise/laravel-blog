<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.includes.head')
    </head>
    <body class="sb-nav-fixed">
        @include('backend.includes.nav')
        <div id="layoutSidenav">
            @include('backend.includes.sidebar')

            @yield('content')
        </div>
        @include('backend.includes.scripts')
    </body>
</html>
