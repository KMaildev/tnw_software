@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Property Type</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('property_type.index') }}">Property Type</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12">
                            <div class="example-wrap">
                                <div class="example">
                                    <form action="{{ route('property_type.update', $property_type->id) }}" method="POST"
                                        autocomplete="off" id="edit-form" role="form">
                                        @csrf
                                        @method('PUT')

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicFirstName">
                                                    Property Type English
                                                </label>
                                                <input class="form-control @error('property_type') is-invalid @enderror"
                                                    type="text" name="property_type"
                                                    value="{{ $property_type->property_type }}" />
                                                @error('property_type')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicFirstName">
                                                    Property Type Myanmar
                                                </label>
                                                <input class="form-control @error('property_type_mm') is-invalid @enderror"
                                                    type="text" name="property_type_mm"
                                                    value="{{ $property_type->property_type_mm }}" />
                                                @error('property_type_mm')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdatePropertyTypes', '#edit-form') !!}
@endsection
