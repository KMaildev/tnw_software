@extends('layouts.menu.hr')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Department</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('department.index') }}">Department</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-body">

                        <form action="{{ route('department.update', $department->id) }}" method="POST" autocomplete="off"
                            id="edit-form" role="form">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">Title</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('title') is-invalid @enderror" type="text"
                                        name="title" value="{{ $department->title }}" />
                                    @error('title')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <br>
                                    <button type="submit" class="btn btn-secondary">Save</button>
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
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateDepartment', '#create-form') !!}
@endsection
@endsection
