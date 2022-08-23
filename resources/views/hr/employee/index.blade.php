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
                <a class="btn btn-sm btn-primary" href="{{ route('employee.create') }}">
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
                                <div class="example table-responsive rowheaders" aria-labelledby="HeadersCol"
                                    tabindex="0">
                                    <table class="table table-bordered table-hover dataTable table-striped w-full"
                                        id="table" data-plugin="dataTable">
                                        <thead class="tbbg">
                                            <tr>
                                                <td style="color: white; text-align: center; width: 1%;">#</td>
                                                <td style="color: white; text-align: center;">Photo</td>
                                                <td style="color: white; text-align: center;">ID</td>
                                                <td style="color: white; text-align: center;">Name</td>
                                                <td style="color: white; text-align: center;">Email</td>
                                                <td style="color: white; text-align: center;">Phone</td>
                                                <td style="color: white; text-align: center;">NRC Number</td>
                                                <td style="color: white; text-align: center;">Join Date</td>
                                                <td style="color: white; text-align: center;">Department</td>
                                                <td style="color: white; text-align: center;">Role</td>
                                                <td style="color: white; text-align: center;">Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody class="row_position" id="tablecontents">
                                            @foreach ($employees as $key => $value)
                                                <tr class="row1" data-id="{{ $value->id }}">

                                                    <td style="text-align: center;">
                                                        <i class="fa fa-sort"></i>
                                                    </td>

                                                    <td style="text-align: justify">
                                                        @if ($value->employee_photo)
                                                            <img src="{{ Storage::url($value->employee_photo) }}"
                                                                alt=""
                                                                style="width: 50px; height: 50px; background-position: center; background-size: contain; object-fit: cover;">
                                                        @endif
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

@section('script')
    <script type="text/javascript">
        $(function() {
            $("#tablecontents").sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function() {
                    sendOrderToServer();
                }
            });

            function sendOrderToServer() {
                var order = [];
                var token = $('meta[name="csrf-token"]').attr('content');
                $('tr.row1').each(function(index, element) {
                    order.push({
                        id: $(this).attr('data-id'),
                        position: index + 1,
                    });
                });

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    // url: "{{ url('employeesortable') }}",
                    url: "/employeesortable",
                    data: {
                        order: order,
                        _token: token
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            console.log(response);
                            alert(response);
                        } else {
                            console.log(response);
                            alert(response);
                        }
                    }
                });
            }
        });
    </script>
@endsection
