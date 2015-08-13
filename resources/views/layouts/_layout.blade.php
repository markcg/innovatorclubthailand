<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
        <title>Innovator Club Thailand</title>
        <!-- CSS -->
        @include('layouts._style')
        @yield('style')
        <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
        <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
        <!-- Scripts -->
        <!-- Fonts -->
    </head>
    <body class="u-full-width">
        <div class="menu-button corner-right" style="text-align: right;"><a>&#9776;</a></div>
        <div class="site-wrapper">
            <header class="u-full-width">
                @include('layouts._header')
            </header>
            <div class="u-full-width wrapper">
                @yield('content')
            </div>
        </div>
        <footer class="u-full-width">
            @include('layouts._footer')
        </footer>
        @include('layouts._script')
        @yield('script')
        <script>
            responsive_menu.innitialize();
        </script>
    </body>
</html>
