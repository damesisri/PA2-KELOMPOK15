<head>
    <title>Welcome to Karunia Sipoholon</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="{{ $keyword ?? config('app.name') }}">
    <meta name="author" content="{{ config('app.name') }}" />
    <link rel="icon" href="{{ asset('assets-user/images/favicon-pearl.png') }}" type="image/x-icon" />
    <title>{{ config('app.name') . ': ' . $title ?? config('app.name') }}</title>

    <link rel="icon" type="image/png" href="images/favicon-pearl.png">

    <!--main file-->
    <link href="{{ asset('assets-user/css/pearl-restaurant.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets-user/css/pearl-hotel.css') }}" rel="stylesheet" type="text/css">

    <!--Medical Guide Icons-->
    <link href="{{ asset('assets-user/fonts/pearl-icons.css') }}" rel="stylesheet" type="text/css">

    <!-- Default Color-->
    <link href="{{ asset('assets-user/css/default-color.css') }}" rel="stylesheet" id="color" type="text/css">

    <!--bootstrap-->
    <link href="{{ asset('assets-user/css/bootstrap.css') }}" rel="stylesheet" type="text/css">

    <!--Dropmenu-->
    <link href="{{ asset('assets-user/css/dropmenu.css') }}" rel="stylesheet" type="text/css">

    <!--Sticky Header-->
    <link href="{{ asset('assets-user/css/sticky-header.css') }}" rel="stylesheet" type="text/css">

    <!--Sticky Countdown-->
    <link href="{{ asset('assets-user/css/countdown.css') }}" rel="stylesheet" type="text/css">

    <!--revolution-->
    <link href="{{ asset('assets-user/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets-user/css/extralayers.css') }}" rel="stylesheet" type="text/css">

    <!--Owl Carousel-->
    <link href="{{ asset('assets-user/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">

    <!--Date Picker-->
    <link href="{{ asset('assets-user/css/date-pick.css') }}" rel="stylesheet" type="text/css">

    <!--Form Dropdown-->
    <link href="{{ asset('assets-user/css/form-dropdown.css') }}" rel="stylesheet" type="text/css">

    <!-- Mobile Menu -->
    <link href="{{ asset('assets-user/css/jquery.mmenu.all.css') }}" rel="stylesheet" type="text/css" />

    <!--Shop Nimble-->
    <link href="{{ asset('assets-user/css/cubeportfolio.css') }}" rel="stylesheet" type="text/css">

    <!--Tabs-->
    <link href="{{ asset('assets-user/css/Tabs.css') }}" rel="stylesheet" type="text/css">

    <!--PreLoader-->
    <link href="{{ asset('assets-user/css/loader.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}" type="text/css" />

    @yield('css')


</head>
