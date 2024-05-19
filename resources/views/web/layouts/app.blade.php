<!doctype html>
<html lang="en">

<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('web/assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('web/assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('web/assets/images/favicon/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{ asset('web/assets/images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('web/assets/css/libs.bundle.css')}}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('web/assets/css/theme.bundle.css')}}" />
    <link rel="stylesheet" href="{{ asset('web/assets/css/custom.css')}}" />
    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>OldSkool | Bootstrap 5 HTML Template</title>

</head>

<body class="">

    @include('web.layouts.header')

    <!-- Main Section-->
    @yield('content')

    <!-- / Main Section-->

    @include('web.layouts.footer')


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{ asset('web/assets/js/vendor.bundle.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('web/assets/js/theme.bundle.js')}}"></script>
</body>

</html>