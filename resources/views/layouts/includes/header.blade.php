<!DOCTYPE html>
<html class="no-js css-menubar" ang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dashboard</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site.minfd53.css?v4.0.1') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/intro-js/introjs.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/waves/waves.minfd53.css?v4.0.1') }}">

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/examples/css/forms/advanced.minfd53.css?v4.0.1') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('global/fonts/material-design/material-design.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1') }}">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('global/vendor/breakpoints/breakpoints.minfd53.js?v4.0.1') }}"></script>

    {{-- MyCss --}}
    <link rel="stylesheet" href="{{ asset('install/select2/css/select2.min.css') }}">

    <script>
        Breakpoints();
    </script>

    <style>
        .tbbg {
            background-color: #af742e;
        }

        /* Noti Count  */
        .badge_noti_count {
            position: absolute;
            top: 1px;
            /* right: -7px; */
            padding: 5px 5px;
            border-radius: 30%;
            background-color: red;
            color: white;
        }

        /* Single Select 2 */
        .select2-selection__rendered {
            line-height: 32px !important;
        }

        .select2-selection {
            height: 32px !important;
        }
    </style>
</head>

<body class="animsition site-navbar-small dashboard">
