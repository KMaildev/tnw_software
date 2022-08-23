@extends('layouts.menu.property_management')
@section('content')
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Lawyer
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('lawyer.store') }}" method="POST" autocomplete="off" id="create-form"
                                role="form" enctype="multipart/form-data">
                                <h6 class="mb-b fw-normal">
                                    1. Personal Information
                                </h6>
                                <hr>
                                @csrf
                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ old('name') }}" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">NRC</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('nrc') is-invalid @enderror" type="text"
                                            name="nrc" value="{{ old('nrc') }}" />
                                        @error('nrc')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            name="email" value="{{ old('email') }}" />
                                        @error('email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Phone</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" value="{{ old('phone') }}" />
                                        @error('phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Degree</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('degree') is-invalid @enderror" type="text"
                                            name="degree" value="{{ old('degree') }}" />
                                        @error('degree')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        License No
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('license_no') is-invalid @enderror" type="text"
                                            name="license_no" value="{{ old('license_no') }}" />
                                        @error('license_no')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Address</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                            name="address" value="{{ old('address') }}" />
                                        @error('address')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Gender</label>
                                    <div class="col-md-9">
                                        <select name="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        @error('gender')
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
                                            name="remark" value="{{ old('remark') }}" />
                                        @error('remark')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Lawyer Photo
                                    </label>
                                    <div class="col-md-9">
                                        <input class="@error('lawyer_photo') is-invalid @enderror" type="file" name="lawyer_photo"
                                            id="files" accept="image/.png,.jpg,.jpeg,.png"/>
                                        @error('lawyer_photo')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                        <div class="preview_img my-2"></div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreLawyers', '#create-form') !!}
@endsection
