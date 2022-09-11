@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">
                Makerting Team
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('want_to_buy.index') }}">
                        Want to Buy
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    Create
                </li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-md-12 col-lg-12">
                            <div class="example-wrap">
                                <div class="example">
                                    <form action="{{ route('want_to_buy.store') }}" method="POST" autocomplete="off"
                                        id="create-form">
                                        @csrf
                                        <h6 class="mb-b fw-normal" style="color: red; font-weight: bold; font-size: 19px;">
                                            1. Customer Information
                                        </h6>
                                        <hr><br>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Customer Name:
                                            </label>
                                            <div class="col-md-9">
                                                <input type="text"
                                                    class="form-control @error('customer_name') is-invalid @enderror"
                                                    name="customer_name" value="{{ old('customer_name') }}">
                                                @error('customer_name')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Phone Number:
                                            </label>
                                            <div class="col-md-9">
                                                <input type="text"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    name="phone_number" value="{{ old('phone_number') }}">
                                                @error('phone_number')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Email:
                                            </label>
                                            <div class="col-md-9">
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Address:
                                            </label>
                                            <div class="col-md-9">
                                                <input type="text"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    name="address" value="{{ old('address') }}">
                                                @error('address')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <h6 class="mb-b fw-normal" style="color: red; font-weight: bold; font-size: 19px;">
                                            2. Wanted information
                                        </h6>
                                        <hr><br>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Region / Township:
                                            </label>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-lg" data-plugin="select2"
                                                    name="township_id">
                                                    <option value="">--Select Region / Township --</option>
                                                    @foreach ($regions as $region)
                                                        <optgroup label="{{ $region->region ?? '' }}">
                                                            @foreach ($region->townships_table as $township)
                                                                <option value="{{ $township->id ?? '' }}">
                                                                    - {{ $township->township ?? '' }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>
                                                @error('township_id')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Region / Township:
                                            </label>
                                            <div class="col-md-9">
                                                <select class="form-control" data-plugin="select2" name="property_type_id">
                                                    <option value="">--Select Property Type--</option>
                                                    @foreach ($property_types as $property_type)
                                                        <option value="{{ $property_type->id }}">
                                                            {{ $property_type->property_type ?? '' }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('property_type_id')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Price
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-daterange">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Price(From)
                                                        </span>
                                                        <input type="text"
                                                            class="form-control  @error('price_from') is-invalid @enderror"
                                                            name="price_from" value="0" />
                                                        @error('price_from')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                        <span class="input-group-addon">
                                                            Price(To)
                                                        </span>
                                                        <input type="text"
                                                            class="form-control @error('price_to') is-invalid @enderror"
                                                            name="price_to" value="0" />
                                                        @error('price_to')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">
                                                Remark:
                                            </label>
                                            <div class="col-md-9">
                                                <input type="text"
                                                    class="form-control @error('remark') is-invalid @enderror"
                                                    name="remark" value="{{ old('remark') }}">
                                                @error('remark')
                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h6 class="mb-b fw-normal"
                                                    style="color: red; font-weight: bold; font-size: 19px;">
                                                    3. Area Specifications
                                                </h6>
                                                <hr>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="input-daterange" id="AreaWidthHeight">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">W</span>
                                                                <input type="text" class="form-control"
                                                                    name="area_width" id="AreaWidth"
                                                                    oninput="setAreaCalc()" value="0" />
                                                                @error('area_width')
                                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                                @enderror

                                                                <span class="input-group-addon">H</span>
                                                                <input type="text" class="form-control"
                                                                    name="area_height" id="AreaHeight"
                                                                    oninput="setAreaCalc()" value="0" />
                                                                @error('area_height')
                                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="input-daterange" id="Area">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="area"
                                                                    value="0" />
                                                                @error('area')
                                                                    <div class="invalid-feedback"> {{ $message }} </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2" id="AreaTypeStatus">
                                                        <div class="row">
                                                            <div class="input-group">
                                                                <div class="col-md-12">
                                                                    <select class="form-control" name="area_type"
                                                                        style="width: 100%">
                                                                        <option value="Sqft">
                                                                            Sqft
                                                                        </option>
                                                                        <option value="Acre">
                                                                            Acre
                                                                        </option>
                                                                    </select>
                                                                    @error('area_type')
                                                                        <div class="invalid-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4" id="AreaResult">
                                                        <div class="input-daterange">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    id="SqftResult" readonly value="0" />
                                                                <span class="input-group-addon">
                                                                    Sqft
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success float-right">
                                                    Save
                                                </button>
                                            </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreWantToBuy', '#create-form') !!}
    <script>
        $('select[name="area_type"]').on('change', function() {
            var areaType = $(this).val();
            if (areaType === 'Sqft') {
                $("#AreaWidthHeight").show();
                $("#AreaResult").show();
                $("#Area").hide();
            } else if (areaType === 'Acre') {
                $("#AreaWidthHeight").hide();
                $("#AreaResult").hide();
                $("#Area").show();
            }
        });
        $("#Area").hide();


        var SqftResult = document.getElementById("SqftResult");

        function setAreaCalc() {
            var AreaWidth = document.getElementById("AreaWidth").value;
            var AreaHeight = document.getElementById("AreaHeight").value;
            var SqftResultTotal = parseInt(AreaWidth) * parseInt(AreaHeight);
            SqftResult.value = SqftResultTotal;
        }
    </script>
@endsection
