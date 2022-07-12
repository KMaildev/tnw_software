<!DOCTYPE html>
<html class="no-js css-menubar" ang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />


    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/gallery.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/magnific-popup/magnific-popup.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/gallery.minfd53.css?v4.0.1') }}">


    {{-- MyCss --}}
    <link rel="stylesheet" href="{{ asset('install/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('install/bootstrap_token/css/bootstrap-tokenfield.min.css') }}">
    <link rel="stylesheet" href="{{ asset('install/datetime/jquery.datetimepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('global/vendor/tablesaw/tablesaw.minfd53.css?v4.0.1') }}">

    <link rel="stylesheet" href="{{ asset('install/css/general.css') }}">

    <script src="{{ asset('install/range_slider/css/ion.rangeSlider.min.css') }}"></script>

    <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-select/bootstrap-select.minfd53.css?v4.0.1') }}">

    {{-- Datatable --}}
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.minfd53.css?v4.0.1') }}">

    {{-- <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.minfd53.css?v4.0.1') }}"> --}}

    <script>
        Breakpoints();
    </script>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        tfoot {
            display: table-header-group;
        }
    </style>

</head>

<body class="animsition site-navbar-small dashboard">
