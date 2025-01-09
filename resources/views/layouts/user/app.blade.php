<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="dark">
<head>
    
    <meta charset="utf-8" />
    <title>@yield('title_full', 'Crawde') | @yield('title', 'Development Mode')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Crawde Crypto Builders" name="description" />
    <meta content="Crawde Team" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="https://framerusercontent.com/images/P9hd3hjs5W20ps21ueeNpR2Xo.svg">

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

    <!-- App Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     @yield('styles')

     <style>
        .symbol:hover {
            color: green !important;
        }
        
        .truncate-2-lines {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden !important;
            text-overflow: ellipsis;
        }

        .truncate-3-lines {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }
     </style>

</head>

<body data-sidebar-size="default">

    <!-- Top Bar Start -->

        @include('components.user.topbar')

    <!-- Top Bar End -->

    <!-- leftbar-tab-menu -->

        @include('components.user.lefttab')

    <!-- end leftbar-tab-menu-->

    <div class="page-wrapper">
        @yield('content')
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    
    
    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/data/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world.js') }}"></script>

    <!-- Page Initialization Script -->
    <script src="{{ asset('assets/js/pages/index.init.js') }}"></script>

    <!-- Main App Script -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    
    @yield('script')
    
</body>
<!--end body-->
</html>