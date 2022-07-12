@extends('layouts.menu.marketing')
@section('content')
    <link rel="stylesheet" href="{{ asset('global/vendor/chartist/chartist.minfd53.css?v4.0.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/widgets/chart.minfd53.css?v4.0.1') }}">

    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Statistics</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Statistics</li>
            </ol>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="card card-block p-30" style="background-color:#d2ef67;">
                                <div class="counter counter-md text-left">
                                    <div class="counter-label text-uppercase mb-3">
                                        <h4
                                            style="color: #2e3192;
    text-shadow: 5px 5px 5px grey;
    font-weight: bold;
    font-size: 25px;">
                                            Sale Offer</h4>
                                    </div>
                                    <div class="counter-number-group mb-10">
                                        <span class="counter-number">
                                            {{ $sale_offer_total ?? 0 }}
                                        </span>
                                    </div>
                                    <div class="counter-label">
                                        <div class="progress progress-xs mb-10">
                                            <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="100"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 100%"
                                                role="progressbar">
                                            </div>
                                        </div>
                                        <div class="counter counter-sm text-left">
                                            <div class="counter-number-group">
                                                <span class="counter-icon blue-600 mr-5">
                                                    <i class="md-trending-up"></i>
                                                </span>
                                                <span class="counter-number-related">
                                                    Total Sale Offer in 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card card-block p-30" style="background-color:#4bc6aa;">
                                <div class="counter counter-md text-left">
                                    <div class="counter-label text-uppercase mb-5">
                                        <h4
                                            style="color: #2e3192;
    text-shadow: 5px 5px 5px grey;
    font-weight: bold;
    font-size: 25px;">
                                            Rent Offer</h4>
                                    </div>
                                    <div class="counter-number-group mb-10">
                                        <span class="counter-number">
                                            {{ $rent_offer_total ?? 0 }}
                                        </span>
                                    </div>
                                    <div class="counter-label">
                                        <div class="progress progress-xs mb-5">
                                            <div class="progress-bar progress-bar-info bg-red-600" aria-valuenow="20.3"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 100%"
                                                role="progressbar">
                                            </div>
                                        </div>
                                        <div class="counter counter-sm text-left">
                                            <div class="counter-number-group">
                                                <span class="counter-icon red-600 mr-5">
                                                    <i class="md-trending-up"></i>
                                                </span>
                                                <span class="counter-number-related">
                                                    Total Rent Offer in 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>

                        <div class="col-lg-3">
                            <div class="card card-block p-30" style="background-color:#d3508f;">
                                <div class="counter counter-md text-left">
                                    <div class="counter-label text-uppercase mb-5">
                                        <h4
                                            style="color: #2e3192;
    text-shadow: 5px 5px 5px grey;
    font-weight: bold;
    font-size: 25px;">
                                            Sale Visitor</h4>
                                    </div>
                                    <div class="counter-number-group mb-10">
                                        <span class="counter-number">
                                            0
                                        </span>
                                    </div>
                                    <div class="counter-label">
                                        <div class="progress progress-xs mb-5">
                                            <div class="progress-bar progress-bar-info bg-green-600" aria-valuenow="20.3"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 100%"
                                                role="progressbar">
                                            </div>
                                        </div>
                                        <div class="counter counter-sm text-left">
                                            <div class="counter-number-group">
                                                <span class="counter-icon green-600 mr-5">
                                                    <i class="md-trending-up"></i>
                                                </span>
                                                <span class="counter-number-related">
                                                    Total Sale Visitor in 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card card-block p-30" style="background-color:orange;">
                                <div class="counter counter-md text-left">
                                    <div class="counter-label text-uppercase mb-5">
                                        <h4
                                            style="color: #2e3192;
    text-shadow: 5px 5px 5px grey;
    font-weight: bold;
    font-size: 25px;">
                                            Rent Visitor</h4>
                                    </div>
                                    <div class="counter-number-group mb-10">
                                        <span class="counter-number">0</span>
                                    </div>
                                    <div class="counter-label">
                                        <div class="progress progress-xs mb-5">
                                            <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="20.3"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 100%"
                                                role="progressbar">
                                            </div>
                                        </div>
                                        <div class="counter counter-sm text-left">
                                            <div class="counter-number-group">
                                                <span class="counter-icon blue-600 mr-5">
                                                    <i class="md-trending-up"></i>
                                                </span>
                                                <span class="counter-number-related">
                                                    Total Rent Visitor in 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>

                    </div>
                </div>

                <div class="col-xxl-6 col-md-12">
                    <div class="card card-shadow" id="charLineareaTwo">
                        <div class="card-block p-0 p-30 h-full">
                            <div class="row" style="height:calc(100% - 300px);">
                                <div class="col-6 col-md-8">
                                    <div class="blue-grey-700">
                                        Visitor in this week
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="counter counter-md">
                                                <div class="counter-number-group">
                                                    <span class="counter-number">76</span>
                                                    <span class="counter-number-related">%</span>
                                                </div>
                                                <div class="counter-label grey-600">
                                                    Sale Visitor
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="counter counter-md">
                                                <div class="counter-number-group">
                                                    <span class="counter-number">24</span>
                                                    <span class="counter-number-related">%</span>
                                                </div>
                                                <div class="counter-label grey-600">
                                                    Rent Visitor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-chart h-250"></div>
                            <ul class="list-inline text-center pt-25 h-50">
                                <li class="list-inline-item  mx-15">
                                    <i class="icon md-dot-circle blue-200 mr-10" aria-hidden="true"></i>
                                    Sale Visitor
                                </li>
                                <li class="list-inline-item mx-15">
                                    <i class="icon md-dot-circle teal-200 mr-10" aria-hidden="true"></i>
                                    Rent Visitor
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('global/vendor/sparkline/jquery.sparkline.minfd53.js?v4.0.1') }}"></script>
    <script src="{{ asset('global/vendor/chartist/chartist.minfd53.js?v4.0.1') }}"></script>
    <script src="{{ asset('global/vendor/matchheight/jquery.matchHeight-minfd53.js?v4.0.1') }}"></script>
    <script src="{{ asset('assets/examples/js/widgets/chart.minfd53.js?v4.0.1') }}"></script>
@endsection
