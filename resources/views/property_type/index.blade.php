@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Property Type</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Property Type</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary" href="{{ route('property_type.create') }}">
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
                                <h4 class="example-title">Property Type</h4>
                                <div class="example table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">#</th>
                                                <th style="color: white; text-align: center;">Name English</th>
                                                <th style="color: white; text-align: center;">Name Myanmar</th>
                                                <th style="color: white; text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($property_types as $key => $value)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->property_type }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $value->property_type_mm }}
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
                                                                    href="{{ route('property_type.edit', $value->id) }}"
                                                                    role="menuitem">
                                                                    <i class="icon md-edit" aria-hidden="true"></i>
                                                                    Edit
                                                                </a>

                                                                <form
                                                                    action="{{ route('property_type.destroy', $value->id) }}"
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
