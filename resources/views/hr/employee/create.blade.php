@extends('layouts.menu.hr')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Employee</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('employee.index') }}">Employee</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-body container">
                    <div class="row row-lg justify-content-center">
                        <div class="col-md-12">
                            <div class="example-wrap">
                                <h4 class="example-title">Account Details</h4>
                                <div class="example">
                                    <form action="{{ route('employee.store') }}" method="POST" autocomplete="off"
                                        id="create-form" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row example-wrap">
                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">
                                                    Employee ID
                                                </label>
                                                <input class="form-control @error('employee_id') is-invalid @enderror"
                                                    type="text" name="employee_id" value="{{ old('employee_id') }}" />
                                                @error('employee_id')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                    name="name" value="{{ old('name') }}" />
                                                @error('name')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>


                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    type="email" name="email" value="{{ old('email') }}" />
                                                @error('email')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">Phone</label>
                                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                                    name="phone" value="{{ old('phone') }}" />
                                                @error('phone')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">NRC
                                                    Number</label>
                                                <input class="form-control @error('nrc_number') is-invalid @enderror"
                                                    type="text" name="nrc_number" value="{{ old('nrc_number') }}" />
                                                @error('nrc_number')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                                @error('gender')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">Address</label>
                                                <input class="form-control @error('address') is-invalid @enderror"
                                                    type="text" name="address" value="{{ old('address') }}" />
                                                @error('address')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    type="password" name="password" value="{{ old('password') }}" />
                                                @error('password')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">Employment
                                                    Type</label>
                                                <select name="employment_type" class="form-control">
                                                    <option value="Probation">Probation</option>
                                                    <option value="Contract">Contract</option>
                                                </select>
                                                @error('employment_type')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>


                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">
                                                    Join Date
                                                </label>
                                                <input
                                                    class="form-control date_picker @error('join_date') is-invalid @enderror"
                                                    type="text" name="join_date" value="{{ old('join_date') }}" />
                                                @error('join_date')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>


                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">
                                                    Contact Person
                                                </label>
                                                <input class="form-control @error('contact_person') is-invalid @enderror"
                                                    type="text" name="contact_person"
                                                    value="{{ old('contact_person') }}" />
                                                @error('contact_person')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 col-lg-6 col-sm-12 mb-4">
                                                <label for="html5-text-input" class="form-control-label">
                                                    Contact Number [Emergency]
                                                </label>
                                                <input class="form-control @error('emergency_contact') is-invalid @enderror"
                                                    type="text" name="emergency_contact"
                                                    value="{{ old('emergency_contact') }}" />
                                                @error('emergency_contact')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group py-5">
                                            <br>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                        </div>

                                        <input type="hidden" name="department_id" value="0">
                                    </form>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreUsers', '#create-form') !!}
@endsection
