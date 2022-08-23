@extends('layouts.menu.sale')
@section('content')
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Edit Appointment
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('sale_appointment.update', $sale_rent_appointment->id) }}" method="POST"
                                autocomplete="off" id="create-form" role="form" enctype="multipart/form-data">
                                <h6 class="mb-b fw-normal">
                                    1. Appointment Information
                                </h6>
                                <hr>
                                @csrf
                                @method('PUT')

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Appointment Title
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('appointment_title') is-invalid @enderror"
                                            type="text" name="appointment_title"
                                            value="{{ $sale_rent_appointment->appointment_title ?? '' }}" />
                                        @error('appointment_title')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Buy Offer Name
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('offer_name') is-invalid @enderror" type="text"
                                            name="offer_name" value="{{ $sale_rent_appointment->offer_name ?? '' }}" />
                                        @error('offer_name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Appointment Date & Time
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('appointment_date') is-invalid @enderror"
                                            type="email" name="appointment_date"
                                            value="{{ $sale_rent_appointment->appointment_date ?? '' }}"
                                            id="datetimepicker4" />
                                        @error('appointment_date')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Appointment Location
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('appointment_location') is-invalid @enderror"
                                            type="text" name="appointment_location"
                                            value="{{ $sale_rent_appointment->appointment_location ?? '' }}" />
                                        @error('appointment_location')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Phone
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" value="{{ $sale_rent_appointment->phone ?? '' }}" />
                                        @error('phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Remark
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('remark') is-invalid @enderror" type="text"
                                            name="remark" value="{{ $sale_rent_appointment->remark ?? '' }}" />
                                        @error('remark')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-secondary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateSaleRentAppointment', '#create-form') !!}
@endsection
