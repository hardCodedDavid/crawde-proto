<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="dark">
<head>
    <meta charset="utf-8" />
    <title>@yield('title_full', 'Crawde') | @yield('title', 'Development Mode')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="Crawde Crypto Builders" name="description" />
    <meta content="Crawde Team" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <link rel="shortcut icon" href="https://framerusercontent.com/images/P9hd3hjs5W20ps21ueeNpR2Xo.svg">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
</head>

    
    <!-- Top Bar Start -->
    <body>
        @yield('content')
    </body>
</html>


