@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">
                Makerting Team
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('want_to_buy.index') }}">
                        Want to Buy
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    Add
                </li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12 col-lg-12">
                            <div class="example-wrap">
                                <div class="example">

                                    <h6 class="mb-b fw-normal" style="color: red; font-weight: bold; font-size: 19px;">
                                        Customer Information
                                    </h6>
                                    <hr><br>
                                    @include('marketing.viewed_property.customer_info')
                                </div>


                                <hr>
                                <div class="example">
                                    <h6 class="mb-b fw-normal" style="color: red; font-weight: bold; font-size: 19px;">
                                        Viewed Property
                                    </h6>
                                    <hr><br>
                                    @include('marketing.viewed_property.viewed_property')

                                    <div class="row">
                                        <div class="table-responsive text-nowrap" style="overflow-x:auto;">
                                            <br>
                                            <hr>
                                            <div class="col-lg-12 form-group">
                                                <div class="example">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="col-sm-4 col-md-2 col-lg-2 mb-4">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Price From" id="start">
                                                            </div>
                                                            <div class="col-sm-4 col-md-2 col-lg-2 mb-4">
                                                                <input type="text" class="form-control" placeholder="To"
                                                                    id="to">
                                                            </div>
                                                            <div class="col-3">
                                                                <button id="dateSearch" type="button"
                                                                    class="btn btn-primary">
                                                                    Search
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <table class="table dataTable" id="datatable">
                                                <thead class="tbbg">
                                                    <tr>
                                                        <th rowspan="2" style="width: 1%; color: white;">
                                                            #
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
                                                            Code
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 2%; text-align: center; color: white;">
                                                            No/အိမ်အမှတ်
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
                                                            Road/လမ်း
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
                                                            Ward/ရပ်ကွက်
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
                                                            Tsp/မြို့နယ်
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
                                                            Property Type
                                                        </th>

                                                        <th colspan="2"
                                                            style="color: white; background-color: #3f51b5; text-align: center; width: 10%">
                                                            Property Style
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
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

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
                                                            Photo
                                                        </th>

                                                        <th rowspan="2"
                                                            style="width: 10%; text-align: center; color: white;">
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
                                                            <input type="text" data-colum="0" placeholder="Search"
                                                                hidden>
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
                                                        <th></th>
                                                        <th></th>
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
                url: "{{ route('create_viewed_property_ajax') }}",
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

        var marketing_team_id;
        $('body').on('click', '#SaveViewedProperty', function(e) {
            e.preventDefault();
            marketing_team_id = $(this).data('id');
            var want_to_buy_id = {{ $want_to_buy->id }};

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = '{{ url('save_viewed_property') }}';
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    marketing_team_id: marketing_team_id,
                    want_to_buy_id: want_to_buy_id,
                },
                success: function(data) {
                    toastr.success("Your processing has been completed.");
                },
                error: function(data) {
                    console.log("Error");
                }
            });
        });
    </script>
@endsection
