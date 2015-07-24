<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div class="site-wrapper">
            <header class="u-full-width">
                <div class="container">
                    <div class="row">
                        <div class="u-pull-left four columns ">
                            <div class="logo"><a href="/">Innovator Club Thailand</a></div>
                        </div>
                        <div class="u-pull-right menu" style="overflow: hidden;">
                            <div class="u-pull-right header-menu-link "><a href="/contact">Contact Us</a></div>
                            <div class="u-pull-right header-menu-link header-menu-after"><a href="/about">About Us</a></div>
                            <div class="u-pull-right header-menu-link header-menu-after"><a href="/news">News & Activity</a></div>
                            <div class="u-pull-right header-menu-link header-menu-after">Project</div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="u-full-width wrapper">
                @yield('content')
            </div>

            <!-- Animation -->
            <script src="/js/anijs.js" type="text/javascript"></script>
            <script src="/js/helpers/scrollreveal/anijs-helper-scrollreveal.js" type="text/javascript"></script>
            <script src="/js/helpers/dom/anijs-helper-dom.js" type="text/javascript"></script>
        </div>
        <footer class="u-full-width">
            @include('layouts._footer')
        </footer>
    </body>
</html>
