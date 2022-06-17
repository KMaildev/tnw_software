@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Reject</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Reject</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary" href="{{ route('marketing_team.create') }}">
                    <i class="icon md-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">
                        Create
                    </span>
                </a>
            </div>
        </div>

        <div class="page-content container-fluid">
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">
                        Reject
                    </h3>
                </header>
                <div class="panel-body">
                    {{-- table-striped w-full --}}
                    <table class="table table-hover dataTable" id="exampleTableSearch">
                        <thead class="tbbg">
                            <tr>
                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                <th style="color: white; text-align: center;">Reject By</th>
                                <th style="color: white; text-align: center;">Reject Date</th>
                                <th style="color: white; text-align: center;">Reject Reason</th>
                                <th style="color: white; text-align: center;">No</th>
                                <th style="color: white; text-align: center;">Ward No</th>
                                <th style="color: white; text-align: center;">Road</th>
                                <th style="color: white; text-align: center;">Name</th>
                                <th style="color: white; text-align: center;">Ph No.</th>
                                <th style="color: white; text-align: center;">O/A</th>
                                <th style="color: white; text-align: center;">Code</th>
                            </tr>
                        </thead>
                        <tfoot style="display:
                                    table-header-group;">
                            <th>#</th>
                            <th>Reject By</th>
                            <th>Reject Date</th>
                            <th>Reject Reason</th>
                            <th>No</th>
                            <th>Ward No</th>
                            <th>Road</th>
                            <th>Name</th>
                            <th>Ph No.</th>
                            <th>O/A</th>
                            <th>Code</th>
                        </tfoot>
                        <tbody>
                            @foreach ($rejects as $key => $reject)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        {{ $reject->users_table->name ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->reject_date ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->reject_reason ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->marketing_teams_table->no ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->marketing_teams_table->wide ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->marketing_teams_table->road ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->marketing_teams_table->name ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->marketing_teams_table->phone_no ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->marketing_teams_table->owner_or_agent_type ?? '' }}
                                    </td>
                                    <td>
                                        {{ $reject->marketing_teams_table->code ?? '' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
