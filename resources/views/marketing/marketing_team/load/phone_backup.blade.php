<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#phoneCall_{{ $id }}">
    <i class="fa fa-phone"></i>
    Call
</button>

<a href="" class="btn btn-primary btn-xs">
    Call History
</a>

<!-- Modal -->

<div class="modal fade" id="phoneCall_{{ $id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @php
                    $propertyPhoneNumber = explode(',', $phone);
                    $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                @endphp
                @for ($i = 0; $i < $propertyPhoneNumberTotal; $i++)
                    @php
                        $ph = $propertyPhoneNumber[$i];
                    @endphp
                    <a href="tel:{{ $ph }}">
                        {{ $ph }}
                    </a>
                    <br>
                @endfor
                <hr>
                <form class="" action="#" method="POST" id="create-form">
                    @csrf
                    <input type="hidden" value="{{ $id }}" name="marketing_team_id" required>

                    <div class="form-group">
                        <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="FollowUp" name="follow_up_or_appointment" checked />
                            <label for="inpuFollowUptLabelMale">
                                Follow Up
                            </label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="Appointment" name="follow_up_or_appointment" />
                            <label for="Appointment">
                                Appointment
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="date_time" autocomplete="off"
                                placeholder="Date" />
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
                            <input type="text" class="form-control" name="appointment_location" autocomplete="off"
                                placeholder="Appointment Location" />
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-primary saveAppointmentAndFollowForm">
                            Save
                        </button>
                    </div>
                </form>

                <button id="BTN" type="button">Delete</button>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>


{!! JsValidator::formRequest('App\Http\Requests\StoreFollowUp', '#create-form') !!}
<script>
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


    $('#BTN').click(function(event) {
    });
</script>
