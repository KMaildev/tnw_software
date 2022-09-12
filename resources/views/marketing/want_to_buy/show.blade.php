@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">
                Makerting Team
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('want_to_buy.index') }}">
                        Want to Buy
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    Detail
                </li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12 col-lg-12">
                            <div class="example-wrap">
                                <div class="example">

                                    <h6 class="mb-b fw-normal" style="color: red; font-weight: bold; font-size: 19px;">
                                        Customer Information
                                    </h6>
                                    <hr><br>
                                    @include('marketing.viewed_property.customer_info')
                                </div>


                                <hr>
                                <div class="example">
                                    <h6 class="mb-b fw-normal" style="color: red; font-weight: bold; font-size: 19px;">
                                        Viewed Property
                                    </h6>
                                    <hr><br>
                                    @include('marketing.viewed_property.viewed_property')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
