@extends('layouts.menu.hr')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Department</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('hr_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Department</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="{{ route('department.create') }}">
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
                                <h4 class="example-title">Department</h4>
                                <div class="example table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                                <th style="color: white; text-align: center;">Title</th>
                                                <th style="color: white; text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($departments as $key => $value)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->title }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a class="btn btn-success btn-sm"
                                                            href="{{ route('department.edit', $value->id) }}">
                                                            Edit
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
