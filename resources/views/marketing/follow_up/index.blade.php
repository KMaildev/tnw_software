@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Follow Up</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_dahsboard.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Follow Up</li>
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

                                            <th colspan="7" style="width: 2%; text-align: center; color: white;">
                                                Property Information
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Call User <br>
                                                (ဖုန်းခေါ်ဆိုသူ)
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Call Date <br> (ခေါ်ဆိုသည့်ရက်)
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Next Time <br> (နောက်တစ်ကြိမ် ခေါ်ရမည့်ရက်)
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Remark
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Phone
                                            </th>

                                            <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                                                Action
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
                                            <th>
                                                <input type="text" data-colum="10" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="11" placeholder="Search"
                                                    style="width: 100%;">
                                            </th>
                                            <th>
                                                <input type="text" data-colum="12" hidden>
                                            </th>
                                            <th>
                                                <input type="text" data-colum="13" hidden>
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
                url: "{{ route('follow_up_ajax') }}",
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
                {
                    data: 'follow_up_user',
                    name: 'follow_up_user'
                },
                {
                    data: 'date_time',
                    name: 'date_time'
                },
                {
                    data: 'follow_up_date',
                    name: 'follow_up_date'
                },
                {
                    data: 'follow_up_remark',
                    name: 'follow_up_remark'
                },
                {
                    data: 'phone',
                    name: 'phone'
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
        var follow_up_id;
        $('body').on('click', '#showPhoneModel', function(e) {
            e.preventDefault();
            id = $(this).data('id');
            follow_up_id = $(this).data('prod-id');
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
            let followup_id = follow_up_id;

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
                    follow_up_status: 'done',
                    follow_up_id: followup_id,
                },
                success: function(data) {
                    toastr.success("Your processing has been completed.");
                    table.ajax.reload();
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
