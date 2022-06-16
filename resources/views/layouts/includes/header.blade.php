<!DOCTYPE html>
<html class="no-js css-menubar" ang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dashboard</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/site.minfd53.css?v4.0.1') }}">


    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animsition/animsition.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/switchery/switchery.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/intro-js/introjs.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/waves/waves.minfd53.css?v4.0.1') }}">

    <!-- Plugins For This Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/chartist.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.css?v4.0.1') }}">

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/dashboard/v1.minfd53.css?v4.0.1') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material-design/material-design.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1') }}}">

    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">
    <script src="{{ asset('assets/vendor/breakpoints/breakpoints.minfd53.js?v4.0.1') }}"></script>
    <script>
        Breakpoints();
    </script>

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-table/bootstrap-table.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .tbbg {
            background-color: #af742e;
        }
    </style>
</head>

<body class="animsition site-navbar-small dashboard">
