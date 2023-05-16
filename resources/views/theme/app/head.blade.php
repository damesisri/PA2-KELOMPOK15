<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Rica admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rica admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets-admin/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/favicon.png') }}" type="image/x-icon">
    <title>{{ config('app.name') . ': ' . $title ?? config('app.name') }}</title>
    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- FontAsowme css start  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/font-awesome.css') }}">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vendors/themify.css') }}">
    <!-- ratio start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/ratio.css') }}">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vendors/animate.css') }}">
    <!-- Plugins css Ends-->
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vendors/date-picker.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vendors/bootstrap.css') }}">
    {{-- <!-- vector map css start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vector-map.css') }}">
    <!-- vector map css start --> --}}

    <!--Drop zon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/vendors/dropzone.css') }}">
    <!-- slick slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/slick-theme.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/style.css') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}" type="text/css" />

</head>
