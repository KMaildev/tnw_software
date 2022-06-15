@extends('layouts.menu.hr')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Permission</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('permission.index') }}">Permission</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('permission.update', $permission->id) }}" method="POST" autocomplete="off"
                            id="edit-form" role="form">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                        value="{{ $permission->name }}" />
                                    @error('name')
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdatePermission', '#edit-form') !!}
@endsection
@endsection
