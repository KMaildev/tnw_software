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
                                <div class="example table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                                <th style="color: white; text-align: center;">Name</th>
                                                <th style="color: white; text-align: center;">
                                                    Follow-up Rate
                                                </th>
                                                <th style="color: white; text-align: center;">
                                                    Appointment Rate
                                                </th>
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

                                                    <td style="text-align: center" class="hidden-sm-down">
                                                        @if ($value->follow_up_table)
                                                            @php
                                                                $count = [];
                                                            @endphp
                                                            @foreach ($value->follow_up_table as $key => $follow_up_tabl)
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

                                                    <td style="text-align: center" class="hidden-sm-down">
                                                        @if ($value->appointments_table)
                                                            @php
                                                                $count = [];
                                                            @endphp
                                                            @foreach ($value->appointments_table as $key => $appointment)
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
                                                        <a href="{{ route('oncall_report.show', $value->id) }}"
                                                            class="btn btn-success btn-xs">
                                                            <i class="fa fa-circle-info"></i>
                                                            View
                                                        </a>
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
