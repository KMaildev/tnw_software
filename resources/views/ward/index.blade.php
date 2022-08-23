@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Ward</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Ward</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary" href="{{ route('ward.create') }}">
                    <i class="icon md-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">
                        Create
                    </span>
                </a>
            </div>
        </div>

        <div class="page-content container-fluid">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="example-wrap">
                                <h4 class="example-title">Ward</h4>
                                <div class="example table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                                <th style="color: white; text-align: center;">Township</th>
                                                <th style="color: white; text-align: center;">Ward</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($wards as $key => $ward)
                                                <tr>
                                                    <td>
                                                        {{ $key + 1 }}
                                                    </td>

                                                    <td>
                                                        {{ $ward->township_table->township ?? '' }}
                                                    </td>

                                                    <td>
                                                        {{ $ward->ward_no }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
