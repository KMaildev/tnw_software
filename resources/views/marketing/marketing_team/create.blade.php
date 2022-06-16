@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Makerting Team</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_team.index') }}">Makerting Team</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Makerting Team
                    </h3>
                </div>
                <div class="panel-body container-fluid">
                    <form action="{{ route('marketing_team.store') }}" method="POST" autocomplete="off" id="create-form">
                        @csrf
                        <div class="row row-lg">

                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Date
                                </label>
                                <input class="form-control date_picker @error('marketing_date') is-invalid @enderror"
                                    type="text" name="marketing_date" value="{{ old('marketing_date') }}" />
                                @error('marketing_date')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Code
                                </label>
                                <input class="form-control @error('code') is-invalid @enderror" type="text"
                                    name="code" value="{{ old('code') }}" />
                                @error('code')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Ward No
                                </label>
                                <input class="form-control @error('ward_no') is-invalid @enderror" type="text"
                                    name="ward_no" value="{{ old('ward_no') }}" />
                                @error('ward_no')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Road
                                </label>
                                <input class="form-control @error('road') is-invalid @enderror" type="text"
                                    name="road" value="{{ old('road') }}" />
                                @error('road')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Wide
                                </label>
                                <input class="form-control @error('wide') is-invalid @enderror" type="text"
                                    name="wide" value="{{ old('wide') }}" />
                                @error('wide')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Permission
                                </label>
                                <input class="form-control @error('permission') is-invalid @enderror" type="text"
                                    name="permission" value="{{ old('permission') }}" />
                                @error('permission')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Type
                                </label>
                                <select name="type" class="form-control @error('type') is-invalid @enderror">
                                    <option value="SaleOwner">
                                        Sale Owner
                                    </option>
                                    <option value="RentOwner">
                                        Rent Owner
                                    </option>
                                    <option value="BuyOffer">
                                        Buy Offer
                                    </option>
                                    <option value="RentOffer">
                                        Rent Offer
                                    </option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Price
                                </label>
                                <input class="form-control @error('price') is-invalid @enderror" type="text"
                                    name="price" value="{{ old('price') }}" />
                                @error('price')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    O/A
                                </label>
                                <select name="owner_or_agent_type"
                                    class="form-control @error('owner_or_agent_type') is-invalid @enderror">
                                    <option value="Owner">
                                        Owner
                                    </option>
                                    <option value="Agent">
                                        Agent
                                    </option>
                                </select>
                                @error('owner_or_agent_type')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Name
                                </label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name') }}" />
                                @error('name')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Phone No
                                </label>
                                <input class="form-control @error('phone_no') is-invalid @enderror" type="text"
                                    name="phone_no" value="{{ old('phone_no') }}" data-plugin="tokenfield" />
                                @error('phone_no')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Email
                                </label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    name="email" value="{{ old('email') }}" />
                                @error('email')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Interest Rate
                                </label>
                                <select name="interest_rate"
                                    class="form-control @error('interest_rate') is-invalid @enderror">
                                    <option value="">--Please Select Interest Rate-- </option>
                                    @foreach ($interest_rates as $interest_rate)
                                        <option value="{{ $interest_rate->title }}">
                                            {{ $interest_rate->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('interest_rate')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-control-label">
                                    Remark
                                </label>
                                <input class="form-control @error('remark') is-invalid @enderror" type="text"
                                    name="remark" value="{{ old('remark') }}" />
                                @error('remark')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-md-6 py-5">
                                <h6>
                                    Follow-Up Status
                                </h6>
                                <input type="checkbox" id="FollowUpStatus" name="follow_up_status"
                                    data-plugin="switchery" value="follow_up" />
                                <label class="pt-3" for="FollowUpStatus">On</label>


                                <div class="row" id="FollowShowHide">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">
                                            Date Time
                                        </label>
                                        <input class="form-control date_time @error('date_time') is-invalid @enderror"
                                            type="text" name="date_time" value="{{ old('date_time') }}" />
                                        @error('date_time')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">
                                            Follow-up Type
                                        </label>
                                        <input class="form-control @error('follow_up_type') is-invalid @enderror"
                                            type="text" name="follow_up_type" value="Call,Email"
                                            data-plugin="tokenfield" />
                                        @error('follow_up_type')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-control-label">
                                            Follow-up Remark
                                        </label>
                                        <input class="form-control @error('follow_up_remark') is-invalid @enderror"
                                            type="text" name="follow_up_remark"
                                            value="{{ old('follow_up_remark') }}" />
                                        @error('follow_up_remark')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-control-label">
                                            Additional Note
                                        </label>
                                        <input class="form-control @error('additional_note') is-invalid @enderror"
                                            type="text" name="additional_note"
                                            value="{{ old('additional_note') }}" />
                                        @error('additional_note')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 py-5">
                                <h6>
                                    Appointment Status
                                </h6>
                                <input type="checkbox" id="AppointmentStatus" name="appointment_status"
                                    data-plugin="switchery" value="appointment" />
                                <label class="pt-3" for="AppointmentStatus">On</label>


                                <div class="row" id="AppointmentShowHide">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">
                                            Appointment Date Time
                                        </label>
                                        <input
                                            class="form-control date_time @error('appointment_date_time') is-invalid @enderror"
                                            type="text" name="appointment_date_time"
                                            value="{{ old('appointment_date_time') }}" />
                                        @error('appointment_date_time')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-control-label">
                                            Appointment Person
                                        </label>
                                        <input class="form-control @error('appointment_person') is-invalid @enderror"
                                            type="text" name="appointment_person"
                                            value="{{ old('appointment_person') }}" />
                                        @error('appointment_person')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-control-label">
                                            Appointment Location
                                        </label>
                                        <input class="form-control @error('appointment_location') is-invalid @enderror"
                                            type="text" name="appointment_location"
                                            value="{{ old('appointment_location') }}" />
                                        @error('appointment_location')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-control-label">
                                            Appointment Remark
                                        </label>
                                        <input class="form-control @error('appointment_remark') is-invalid @enderror"
                                            type="text" name="appointment_remark"
                                            value="{{ old('appointment_remark') }}" />
                                        @error('appointment_remark')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 py-5" style="color: red;">
                                Photo Upload Feature
                            </div>
                            <div class="col-md-12 py-5">
                                <button type="reset" class="mr-2 btn btn-danger float-right">Reset</button>
                                <button type="submit" class="mr-2 btn btn-secondary float-right">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMarketingTeam', '#create-form') !!}
    <script>
        const FollowUpStatus = document.getElementById('FollowUpStatus')
        FollowUpStatus.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                $("#FollowShowHide").show();
            } else {
                $("#FollowShowHide").hide();
            }
        })
        $("#FollowShowHide").hide();


        const AppointmentStatus = document.getElementById('AppointmentStatus')
        AppointmentStatus.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                $("#AppointmentShowHide").show();
            } else {
                $("#AppointmentShowHide").hide();
            }
        })
        $("#AppointmentShowHide").hide();
    </script>
@endsection
