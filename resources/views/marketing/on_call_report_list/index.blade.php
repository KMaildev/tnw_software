@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Oncall Report List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Oncall Report List</li>
            </ol>
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

                                            <th rowspan="2" style="width: 5%; text-align: center; color: white;">
                                                Call User <br>
                                                (ဖုန်းခေါ်ဆိုသူ)
                                            </th>

                                            <th rowspan="2" style="width: 5%; text-align: center; color: white;">
                                                Call Date <br> (ခေါ်ဆိုသည့်ရက်)
                                            </th>

                                            <th colspan="7" style="width: 80%; text-align: center; color: white;">
                                                Property Information
                                            </th>
                                            
                                        </tr>
                                        <tr>
                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Code
                                            </th>
                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Type
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                No/အိမ်အမှတ်
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Road/လမ်း
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Ward/ရပ်ကွက်
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Tsp/မြို့နယ်
                                            </th>

                                            <th
                                                style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                                                Property Type
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
                                                <input type="text" data-colum="7" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="8" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="9" placeholder="Search"
                                                    style="width: 100%;">
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
                url: "{{ route('on_call_report_list_ajax') }}",
                data: function(d) {
                    d.from = $('#start').val();
                    d.to = $('#to').val();
                }
            },
            lengthMenu: [70, 100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'follow_up_user',
                    name: 'follow_up_user'
                },
                {
                    data: 'date_time',
                    name: 'date_time'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'offer_status',
                    data: 'offer_status'
                },
                {
                    data: 'house_no',
                    data: 'house_no'
                },
                {
                    data: 'road',
                    data: 'road'
                },
                {
                    data: 'ward',
                    data: 'ward'
                },
                {
                    data: 'township_name',
                    data: 'township_name'
                },
                {
                    data: 'property_type',
                    data: 'property_type'
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
