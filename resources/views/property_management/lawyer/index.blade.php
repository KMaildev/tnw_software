@extends('layouts.menu.property_management')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Lawyers</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('lawyer.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Lawyers</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="{{ route('lawyer.create') }}">
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
                                <h4 class="example-title">Lawyer</h4>
                                <div class="example table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                                <th style="color: white; text-align: center;">Name</th>
                                                <th style="color: white; text-align: center;">Email</th>
                                                <th style="color: white; text-align: center;">Phone</th>
                                                <th style="color: white; text-align: center;">Degree</th>
                                                <th style="color: white; text-align: center;">License No</th>
                                                <th style="color: white; text-align: center;">Address</th>
                                                <th style="color: white; text-align: center;">Remark</th>
                                                <th style="color: white; text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($lawyers as $key => $value)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        {{ $key + 1 }}
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
                                                        {{ $value->degree }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->license_no }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->address }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->remark }}
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
                                                                    href="{{ route('role.edit', $value->id) }}"
                                                                    role="menuitem">
                                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                                    Edit
                                                                </a>

                                                                <form action="{{ route('role.destroy', $value->id) }}"
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
                </div>
            </div>
        </div>
    </div>
@endsection
