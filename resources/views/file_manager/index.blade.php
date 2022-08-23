@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <div class="page">
        <div class="page-content container-fluid">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="example-wrap">
                                <div style="height: 600px;">
                                    <div id="fm"></div>
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
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
