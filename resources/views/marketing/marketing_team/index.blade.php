@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Makerting Team</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Makerting Team</li>
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
                        Makerting Team
                    </h3>
                </header>
                <div class="panel-body">
                    {{-- table-striped w-full --}}
                    <table class="table table-hover dataTable" id="exampleTableSearch">
                        <thead class="tbbg">
                            <tr>
                                <th style="color: white; text-align: center; width: 1%;">No</th>
                                <th style="color: white; text-align: center;">Marketing</th>
                                <th style="color: white; text-align: center;">Date</th>
                                <th style="color: white; text-align: center;">Ward No</th>
                                <th style="color: white; text-align: center;">Road</th>
                                <th style="color: white; text-align: center;">Wide</th>
                                <th style="color: white; text-align: center;">Type</th>
                                <th style="color: white; text-align: center;">Price</th>
                                <th style="color: white; text-align: center;">Name</th>
                                <th style="color: white; text-align: center;">Ph No.</th>
                                <th style="color: white; text-align: center;">O/A</th>
                                <th style="color: white; text-align: center;">Code</th>
                                <th style="color: white; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tfoot style="display:
                                    table-header-group;">
                            <tr>
                                <th>No</th>
                                <th>Marketing</th>
                                <th>Date</th>
                                <th>Ward No.</th>
                                <th>Road</th>
                                <th>Wide</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Name</th>
                                <th>Ph No.</th>
                                <th>O/A</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($marketing_teams as $key => $marketing_team)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->users_table->name ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->marketing_date ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->ward_no ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->road ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->wide ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->type ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->price ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->name ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->phone_no ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->owner_or_agent_type ?? '' }}
                                    </td>
                                    <td>
                                        {{ $marketing_team->code ?? '' }}
                                    </td>
                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle btn-xs"
                                                id="exampleSizingDropdown3" data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="exampleSizingDropdown3"
                                                role="menu">

                                                <a class="dropdown-item" href="#" role="menuitem">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                    Edit
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('reject.edit', $marketing_team->id) }}"
                                                    role="menuitem">
                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                    Reject
                                                </a>

                                                <form action="{{ route('property_type.destroy', $marketing_team->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">
                                                        <i class="icon md-delete" aria-hidden="true"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
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
