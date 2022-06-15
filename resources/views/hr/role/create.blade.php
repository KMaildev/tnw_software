@extends('layouts.menu.hr')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Role</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('role.index') }}">Role</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12">
                            <div class="example-wrap">
                                <div class="example">
                                    <form action="{{ route('role.store') }}" method="POST" autocomplete="off"
                                        id="create-form" role="form">
                                        @csrf

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicFirstName">
                                                    Role Name
                                                </label>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                    name="name" value="{{ old('name') }}" />
                                                @error('name')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-control-label">Permissions</label>
                                            </div>
                                            @foreach ($permissions as $permission)
                                                <div class="col-md-2 col-3">
                                                    <div class="form-group">
                                                        <div class="checkbox-custom checkbox-default">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="{{ $permission->name }}"
                                                                id="checkbox_{{ $permission->id }}"
                                                                name="permissions[]" />
                                                            <label class="form-check-label"
                                                                for="checkbox_{{ $permission->id }}">{{ $permission->name }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreRole', '#create-form') !!}
@endsection
