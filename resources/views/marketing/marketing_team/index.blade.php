@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Marketing Team</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Marketing Team</li>
            </ol>
            <div class="page-header-actions">

                <a href="{{ route('marketing_team_export') }}" class="btn btn-sm btn-success">
                    <i class="icon md-file" aria-hidden="true"></i>
                    <span class="hidden-sm-down">
                        Export to Excel
                    </span>
                </a>

                <a class="btn btn-sm btn-primary" href="{{ route('marketing_team.create') }}">
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
                                <div class="col-lg-12 form-group">
                                    <div class="example">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-sm-4 col-md-2 col-lg-2 mb-4">
                                                    <input type="text" class="form-control" placeholder="Price From"
                                                        id="start">
                                                </div>
                                                <div class="col-sm-4 col-md-2 col-lg-2 mb-4">
                                                    <input type="text" class="form-control" placeholder="To"
                                                        id="to">
                                                </div>
                                                <div class="col-3">
                                                    <button id="dateSearch" type="button" class="btn btn-primary">
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
                                                <input type="text" data-colum="19" placeholder="Search" hidden>
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


    <!-- PhoneModelShow -->
    <div class="modal fade" id="PhoneModelShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #AF742E;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">
                        Call Now
                    </h5>
                </div>
                <div class="modal-body">
                    <div id="showPhoneNumbers"></div>
                    <hr>
                    <form class="save_follow_up_or_appointment" action="#" method="POST" id="create-form">
                        @csrf
                        <div class="form-group">
                            <div class="radio-custom radio-default radio-inline">
                                <input type="radio" id="FollowUp" name="follow_up_or_appointment" checked
                                    value="follow_up" />
                                <label for="FollowUp">
                                    Follow Up
                                </label>
                            </div>
                            <div class="radio-custom radio-default radio-inline">
                                <input type="radio" id="Appointment" name="follow_up_or_appointment"
                                    value="appointment" />
                                <label for="Appointment">
                                    Appointment
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input id="datetimepicker4" type="text" class="form-control" name="date_time"
                                    autocomplete="off" placeholder="Date" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="remark" autocomplete="off"
                                    placeholder="Remark" />
                            </div>

                            <div class="form-group col-md-6" id="AppointmentPerson">
                                <input type="text" class="form-control" name="appointment_person" autocomplete="off"
                                    placeholder="Appointment Person" />
                            </div>
                            <div class="form-group col-md-6" id="AppointmentLocation">
                                <input type="text" class="form-control" name="appointment_location"
                                    autocomplete="off" placeholder="Appointment Location" />
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
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
                url: "{{ route('marketing_team_ajax') }}",
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

        var id;
        $('body').on('click', '#showPhoneModel', function(e) {
            e.preventDefault();
            id = $(this).data('id');
            $('#PhoneModelShow').modal('show');
            $.ajax({
                url: "get_phone_number/" + id,
                method: 'GET',
                success: function(result) {
                    $('#showPhoneNumbers').html(result.html);
                }
            });
        });


        $('.save_follow_up_or_appointment').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            let data = form.serializeArray();

            let follow_up_or_appointment = document.querySelector('input[name="follow_up_or_appointment"]:checked')
                .value;
            let date_time = form.find("input[name=date_time]").val();
            let remark = form.find("input[name=remark]").val();
            let appointment_person = form.find("input[name=appointment_person]").val();
            let appointment_location = form.find("input[name=appointment_location]").val();
            let marketing_team_id = id;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = '{{ url('save_follow_up_appointment') }}';
            $.ajax({
                method: 'POST',
                url: url,
                data: {
                    follow_up_or_appointment: follow_up_or_appointment,
                    marketing_team_id: marketing_team_id,
                    date_time: date_time,
                    remark: remark,
                    appointment_person: appointment_person,
                    appointment_location: appointment_location,
                    follow_up_status: null,
                    follow_up_id: 0,
                },
                success: function(data) {
                    toastr.success("Your processing has been completed.");
                },
                error: function(data) {
                    console.log("Error");
                }
            });
        });

        $("#FollowUp").click(function() {
            $("#AppointmentPerson").hide();
            $("#AppointmentLocation").hide();
        });

        $("#Appointment").click(function() {
            $("#AppointmentPerson").show();
            $("#AppointmentLocation").show();
        });

        $("#AppointmentPerson").hide();
        $("#AppointmentLocation").hide();
    </script>
@endsection
