@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Want To Buy</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Want To Buy</li>
            </ol>
            <div class="page-header-actions">

                <a href="{{ route('marketing_team_export') }}" class="btn btn-sm btn-success">
                    <i class="icon md-file" aria-hidden="true"></i>
                    <span class="hidden-sm-down">
                        Export to Excel
                    </span>
                </a>

                <a class="btn btn-sm btn-primary" href="{{ route('want_to_buy.create') }}">
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
                                            <th rowspan="2" style="width: 1%; color: white;">
                                                #
                                            </th>

                                            <th colspan="2" style="width: 20%; text-align: center; color: white;">
                                                Customer Information
                                            </th>

                                            <th colspan="6" style="width: 60%; text-align: center; color: white;">
                                                Wanted information
                                            </th>

                                            <th rowspan="2" style="width: 7%; text-align: center; color: white;">
                                                Viewed
                                            </th>

                                            <th rowspan="2" style="width: 2%; text-align: center; color: white;">
                                                Actions
                                            </th>
                                        </tr>
                                        <tr>
                                            <th
                                                style="color: white; background-color: green; text-align: center; widht: 10%">
                                                Name
                                            </th>
                                            <th
                                                style="color: white; background-color: green; text-align: center; widht: 10%">
                                                Phone
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Property Type
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Area
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Price Form
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Price To
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Township
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Remark
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <input type="text" data-colum="0" style="width: 100%;" hidden>
                                            </th>
                                            <th>
                                                <input type="text" data-colum="1" style="width: 100%;">
                                                {{-- marketing_name --}}
                                            </th>
                                            <th>
                                                <input type="text" data-colum="2" style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="3" style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="4" style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="5" style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="6" style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="7" style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="8" style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="9" style="width: 100%;" hidden>
                                            </th>
                                            <th>
                                                <input type="text" data-colum="10" style="width: 100%;" hidden>
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
                url: "{{ route('get_want_to_buy_ajax') }}",
            },

            lengthMenu: [70, 100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'customer_name',
                    name: 'customer_name'
                },
                {
                    data: 'phone_number',
                    name: 'phone_number'
                },
                {
                    data: 'property_type',
                    name: 'property_type',
                },
                {
                    data: 'sqft',
                    name: 'sqft',
                },
                {
                    data: 'price_from',
                    name: 'price_from',
                },
                {
                    data: 'price_to',
                    name: 'price_to',
                },
                {
                    data: 'township_name',
                    name: 'township_name',
                },
                {
                    data: 'remark',
                    name: 'remark',
                },

                {
                    data: 'viewed_status',
                    name: 'viewed_status',
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
