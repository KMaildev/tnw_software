@extends('layouts.menu.hr')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Department</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('department.index') }}">Department</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('department.store') }}" method="POST" autocomplete="off" id="create-form"
                            role="form">
                            @csrf
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">Title</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('title') is-invalid @enderror" type="text"
                                        name="title" value="{{ old('title') }}" />
                                    @error('title')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreDepartment', '#create-form') !!}
@endsection
