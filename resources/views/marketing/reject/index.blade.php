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
                <a href="{{ route('marketing_team_export') }}" class="btn btn-sm btn-success">
                    <i class="icon md-file" aria-hidden="true"></i>
                    <span class="hidden-sm-down">
                        Export to Excel
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

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Marketing Name
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Type
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Date & Time
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Code
                                            </th>

                                            <th rowspan="2" style="width: 2%; text-align: center; color: white;">
                                                No/အိမ်အမှတ်
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Road/လမ်း
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Ward/ရပ်ကွက်
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Tsp/မြို့နယ်
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Property Type
                                            </th>

                                            <th colspan="2"
                                                style="color: white; background-color: #3f51b5; text-align: center; width: 10%">
                                                Property Style
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Price (Lakhs)
                                            </th>

                                            <th colspan="2"
                                                style="width: 10% text-align: center; background-color: green; color: white;">
                                                Wide
                                            </th>

                                            <th colspan="2"
                                                style="width: 10%; text-align: center; background-color: #c01faa; color: white;">
                                                Permission
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Owner/Agent
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Name
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Phone
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Photo
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Actions
                                            </th>
                                        </tr>

                                        <tr>
                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Floor
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                House Style
                                            </th>

                                            <th
                                                style="color: white; background-color: green; text-align: center; widht: 100px">
                                                Sqft
                                            </th>

                                            <th
                                                style="color: white; background-color: green; text-align: center; widht: 10%">
                                                Acre
                                            </th>

                                            <th
                                                style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                                Premission
                                            </th>

                                            <th
                                                style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                                မူရင်း/မိတ္တူ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <input type="text" data-colum="0" placeholder="Search" hidden>
                                            </th>
                                            <th>
                                                <input type="text" data-colum="1" placeholder="Search">
                                                {{-- marketing_name --}}
                                            </th>
                                            <th>
                                                <input type="text" data-colum="2" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="3" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="4" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="5" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="6" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="7" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="8" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="9" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="10" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="11" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="12" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="13" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="14" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="15" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="16" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="17" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="18" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="19" placeholder="Search">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="20" placeholder="Search" hidden>
                                            </th>
                                            <th>
                                                <input type="text" data-colum="21" placeholder="Search" hidden>
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
    </div>
@endsection
@section('script')
    <script>
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ordering: false,
            ajax: {
                url: "{{ route('reject_ajax') }}",
                data: function(d) {
                    d.from = $('#start').val();
                    d.to = $('#to').val();
                }
            },

            lengthMenu: [100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'marketing_name',
                    name: 'marketing_name'
                },
                {
                    data: 'offer_status',
                    name: 'offer_status'
                },
                {
                    data: 'marketing_date',
                    name: 'marketing_date'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'no',
                    name: 'no'
                },
                {
                    data: 'road',
                    name: 'road'
                },
                {
                    data: 'ward',
                    name: 'ward'
                },
                {
                    data: 'township_name',
                    name: 'township_name'
                },
                {
                    data: 'property_type',
                    name: 'property_type'
                },
                {
                    data: 'floor',
                    name: 'floor'
                },
                {
                    data: 'house_style',
                    name: 'house_style'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'sqft',
                    name: 'sqft'
                },
                {
                    data: 'area',
                    name: 'area'
                },
                {
                    data: 'permission_type',
                    name: 'permission_type'
                },
                {
                    data: 'orginal_or_copy',
                    name: 'orginal_or_copy'
                },
                {
                    data: 'owner_agent',
                    name: 'owner_agent'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'photo_status',
                    name: 'photo_status',
                    orderable: true,
                    searchable: true
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
