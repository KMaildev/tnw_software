@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Oncall Report</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Oncall Report</li>
            </ol>
        </div>

        <div class="page-content container-fluid">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-lg-12">
                            <div class="example-wrap">
                                <h4 class="example-title">Oncall Report</h4>
                                <p style="color: red;">Filter Search Feature</p>
                                <div class="example table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                                <th style="color: white; text-align: center;">Name</th>
                                                <th style="color: white; text-align: center;">Join Date</th>
                                                <th style="color: white; text-align: center;">Oncall Rate</th>
                                                <th style="color: white; text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($employees as $key => $value)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->name ?? '' }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->created_at ?? '' }}
                                                    </td>
                                                    <td style="text-align: center" class="hidden-sm-down">
                                                        @if ($value->marketing_teams_table)
                                                            @php
                                                                $count = [];
                                                            @endphp
                                                            @foreach ($value->marketing_teams_table as $key => $marketing_team)
                                                                @php
                                                                    $count[] = 1;
                                                                @endphp
                                                            @endforeach
                                                            <span class="badge badge-warning">
                                                                @php
                                                                    $count = array_sum($count);
                                                                    echo $count;
                                                                @endphp
                                                            </span>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: center">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            onclick="alert('in progress')">
                                                            <i class="icon wb-check" aria-hidden="true"></i>
                                                            View
                                                        </button>
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
