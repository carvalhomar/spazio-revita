<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/revita.ico') }}">
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Bootstrap css-->
    <link href="{{ URL::asset('assets/css/dashboard/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Icons css-->
    <link href="{{ URL::asset('assets/plugins/web-fonts/icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet">

    <!-- Style css-->
    <link href="{{ URL::asset('assets/css/dashboard/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/dashboard/skins.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/dashboard/dark-style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/dashboard/default.css') }}" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('assets/css/color/color.css') }}">

    <!-- Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="{{ URL::asset('assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">
    @stack('style')

</head>
