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
                            <form action="{{ route('lawyer.update', $lawyer->id) }}" method="POST" autocomplete="off"
                                id="create-form" role="form" enctype="multipart/form-data">
                                <h6 class="mb-b fw-normal">
                                    1. Personal Information
                                </h6>
                                <hr>
                                @csrf
                                @method('PUT')
                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ $lawyer->name ?? '' }}" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">NRC</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('nrc') is-invalid @enderror" type="text"
                                            name="nrc" value="{{ $lawyer->nrc ?? '' }}" />
                                        @error('nrc')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            name="email" value="{{ $lawyer->email ?? '' }}" />
                                        @error('email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Phone</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" value="{{ $lawyer->phone ?? '' }}" />
                                        @error('phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Degree</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('degree') is-invalid @enderror" type="text"
                                            name="degree" value="{{ $lawyer->degree ?? '' }}" />
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
                                            name="license_no" value="{{ $lawyer->license_no ?? '' }}" />
                                        @error('license_no')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Address</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                            name="address" value="{{ $lawyer->address ?? '' }}" />
                                        @error('address')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Gender</label>
                                    <div class="col-md-9">
                                        <select name="gender" class="form-control">
                                            <option value="male" @if ($lawyer->gender == 'male') selected @endif>
                                                Male
                                            </option>
                                            <option value="female" @if ($lawyer->gender == 'female') selected @endif>
                                                Female
                                            </option>
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
                                            name="remark" value="{{ $lawyer->remark ?? '' }}" />
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
                                        <input class="@error('lawyer_photo') is-invalid @enderror" type="file"
                                            name="lawyer_photo" id="files" accept="image/.png,.jpg,.jpeg,.png" />
                                        @error('lawyer_photo')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                        <div class="preview_img my-2"></div>
                                        <div class="my-2">
                                            @if ($lawyer->photo)
                                                <img src="{{ Storage::url($lawyer->photo) }}" alt=""
                                                    style="width: 70px; height: 70px; background-position: top; background-size: contain; object-fit: cover;">
                                            @endif
                                        </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateLawyers', '#create-form') !!}
@endsection
