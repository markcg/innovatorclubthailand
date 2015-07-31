<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=960">
        <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
        <title>Innovator Club Thailand</title>
        <!-- CSS -->
        <link href="/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/css/skeleton.css" rel="stylesheet" type="text/css"/>
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
        <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
        <!-- Scripts -->
        <script src="/js/jquery.min.js" type="text/javascript"></script>
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

            <!-- Animation -->
            <script src="/js/anijs.js" type="text/javascript"></script>
            <script src="/js/helpers/scrollreveal/anijs-helper-scrollreveal.js" type="text/javascript"></script>
            <script src="/js/helpers/dom/anijs-helper-dom.js" type="text/javascript"></script>
            <script src="/js/system.js" type="text/javascript"></script>
        </div>
        <footer class="u-full-width">
            @include('layouts._footer')
        </footer>
        <script>
            responsive_menu.innitialize();
        </script>
    </body>
</html>
