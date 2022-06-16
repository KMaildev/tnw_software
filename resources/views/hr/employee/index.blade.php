@extends('layouts.menu.hr')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Employees</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('hr_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Employees</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="{{ route('employee.create') }}">
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
                                <h4 class="example-title">Employees</h4>
                                <div class="example table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                                <th style="color: white; text-align: center;">Employee ID</th>
                                                <th style="color: white; text-align: center;">Name</th>
                                                <th style="color: white; text-align: center;">Email</th>
                                                <th style="color: white; text-align: center;">Phone</th>
                                                <th style="color: white; text-align: center;">NRC Number</th>
                                                <th style="color: white; text-align: center;">Join Date</th>
                                                <th style="color: white; text-align: center;">Emergency</th>
                                                <th style="color: white; text-align: center;">Department</th>
                                                <th style="color: white; text-align: center;">Role (or) Designation</th>
                                                <th style="color: white; text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $key => $value)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->employee_id }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->name }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->email }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->phone }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->nrc_number }}
                                                    </td>

                                                    <td style="text-align: center;">
                                                        {{ $value->join_date }}
                                                    </td>

                                                    <td style="text-align: center;">
                                                        {{ $value->contact_person }}
                                                        @
                                                        {{ $value->emergency_contact }}
                                                    </td>

                                                    <td style="text-align: center;">
                                                        {{ $value->department->title ?? '' }}
                                                    </td>

                                                    <td style="text-align: center;">
                                                        @foreach ($value->roles as $role)
                                                            <span class="badge bg-primary">{{ $role->name }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-info dropdown-toggle btn-xs"
                                                                id="exampleSizingDropdown3" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="exampleSizingDropdown3" role="menu">

                                                                <a class="dropdown-item"
                                                                    href="{{ route('employee.edit', $value->id) }}"
                                                                    role="menuitem">
                                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                                    Edit
                                                                </a>

                                                                <a class="dropdown-item" href="javascript:void(0)"
                                                                    role="menuitem">
                                                                    <i class="icon md-eye" aria-hidden="true"></i>
                                                                    View Profile
                                                                </a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
