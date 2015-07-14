<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
        <title>Innovator Club Thailand</title>
        <!-- Scripts -->
        <script src="/js/jquery.min.js" type="text/javascript"></script>
        <script src="/js/anijs.js" type="text/javascript"></script>
        <!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>
        <link href="/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/css/skeleton.css" rel="stylesheet" type="text/css"/>
        <!-- Fonts -->
    </head>
    <body class="u-full-width">
        <header class="u-full-width">
            <div class="pull-left column"> 
                <div class="inline"> </div>
            </div>
            <div class="pull-right column">
                <div class="inline"> </div>
            </div>
        </header>
        <div class="u-full-width wrapper">
            @yield('content')
        </div>
        <footer class="u-full-width"></footer>
    </body>
</html>
