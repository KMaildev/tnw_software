@extends('layouts.menu.sale')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Sale Team</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('sale_dashboard.index') }}">
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    Rent Appointment
                </li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary" href="{{ route('rent_appointment.create') }}">
                    <i class="icon md-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">
                        Create
                    </span>
                </a>
            </div>
        </div>

        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="panel">
                        <div class="row">
                            <div class="panel-body table-responsive text-nowrap" style="overflow-x:auto;">
                                <table class="table dataTable" id="datatable">
                                    <thead class="tbbg">
                                        <tr>
                                            <th style="width: 1%; color: white;">
                                                #
                                            </th>

                                            <th style="width: 10%; text-align: center; color: white;">
                                                Appointment Title
                                            </th>

                                            <th style="width: 10%; text-align: center; color: white;">
                                                Buy Offer Name
                                            </th>

                                            <th style="width: 10%; text-align: center; color: white;">
                                                Appointment Date & Time
                                            </th>

                                            <th style="width: 10%; text-align: center; color: white;">
                                                Appointment Location
                                            </th>

                                            <th style="width: 10%; text-align: center; color: white;">
                                                Phone
                                            </th>

                                            <th style="width: 10%; text-align: center; color: white;">
                                                Remark
                                            </th>

                                            <th style="width: 1%; text-align: center; color: white;">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <input type="text" data-colum="0" placeholder="Search" hidden>
                                            </th>
                                            <th>
                                                <input type="text" data-colum="1" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="2" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="3" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="4" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="5" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="6" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="6" hidden>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ordering: false,
            ajax: {
                url: "{{ route('rent_appointment_ajax') }}",
            },

            lengthMenu: [70, 100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'appointment_title',
                    name: 'appointment_title'
                },
                {
                    data: 'offer_name',
                    name: 'offer_name'
                },
                {
                    data: 'appointment_date',
                    name: 'appointment_date'
                },
                {
                    data: 'appointment_location',
                    name: 'appointment_location'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'remark',
                    name: 'remark'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ],
        });

        $('#dateSearch').on('click', function() {
            table.draw();
        });

        $(document).ready(function() {
            $('#datatable tfoot th').each(function() {
                var title = $('#datatable thead th').eq($(this).index()).text();
            });
            var table = $('#datatable').DataTable();
            table.columns().eq(0).each(function(colIdx) {
                $('input', table.column(colIdx).footer()).on('keyup change', function() {
                    table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });
            });
        });
    </script>
@endsection
