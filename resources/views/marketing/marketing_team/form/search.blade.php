<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-3">

        {{-- Search --}}
        <button class="btn btn-info" data-target="#exampleNiftyFadeScale" data-toggle="modal" type="button">
            <i class="fa fa-search"></i>
            General Search
        </button>

        <div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScale" aria-hidden="true"
            aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">
                            General Search
                        </h4>
                    </div>
                    <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" style="font-size: 12px; font-style: italic;">
                                    Enter Code, House Style, Price, Road, No, O/A Name, Phone, Remark
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search"
                                        placeholder="Enter Here..." value="{{ old('search') }}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- Search by Marketing Name --}}
        <button class="btn btn-primary" data-target="#SearchByMarketing" data-toggle="modal" type="button">
            <i class="fa fa-search"></i>
            Search by Marketing Name
        </button>

        <div class="modal fade modal-fade-in-scale-up" id="SearchByMarketing" aria-hidden="true"
            aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">
                            Search by Marketing Name
                        </h4>
                    </div>
                    <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
                        <div class="modal-body">
                            <div class="form-group">
                                <select class="form-control selectpicker" name="user_id" id="submit_form"
                                    data-live-search="true">
                                    <option value="">--Select Marketing--</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            @if ($userid == $user->id) {{ 'selected' }} @endif>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- Search by Region and township Name --}}
        <button class="btn btn-danger" data-target="#SearchByTownship" data-toggle="modal" type="button">
            <i class="fa fa-search"></i>
            Search by Township Name
        </button>

        <div class="modal fade modal-fade-in-scale-up" id="SearchByTownship" aria-hidden="true"
            aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">
                            Search by Township Name
                        </h4>
                    </div>
                    <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
                        <div class="modal-body">
                            <div class="form-group">
                                <select class="form-control selectpicker" name="search_township_id"
                                    data-live-search="true" id="submit_form">
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
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-pure"
                                data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- Advanced Search --}}
        <button class="btn btn-success" data-target="#AdvancedSearch" data-toggle="modal" type="button">
            <i class="fa fa-search"></i>
            Advanced Search
        </button>

        <div class="modal fade modal-fade-in-scale-up" id="AdvancedSearch" aria-hidden="true"
            aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">
                            Advanced Search
                        </h4>
                    </div>
                    <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" name="search_type" value="advanced_search">

                                <div class="col-lg-12 form-group">
                                    <div class="input-daterange">
                                        <label for="">Price(Lakhs)</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">From</span>
                                            <input type="text" class="form-control" name="price_form" />
                                            @error('price_form')
                                                <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror

                                            <span class="input-group-addon">To</span>
                                            <input type="text" class="form-control" name="price_to" />
                                            @error('price_to')
                                                <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Offer Status --}}
                                <div class="col-lg-6 form-group">
                                    <label for="">
                                        Type
                                    </label>
                                    <select class="form-control" name="offer_status">
                                        <option value="sale_offer">Sale Offer</option>
                                        <option value="rent_offer">Rent Offer</option>
                                    </select>
                                </div>

                                {{-- Property Type --}}
                                <div class="col-lg-6 form-group">
                                    <label for="">Property Type</label>
                                    <select class="form-control" name="property_type_id">
                                        <option value="">All</option>
                                        @foreach ($property_types as $property_type)
                                            <option value="{{ $property_type->id }}">
                                                {{ $property_type->property_type ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-lg-6 form-group">
                                    <p for="">Township</p>
                                    <select class="form-control selectpicker" name="township_id"
                                        data-live-search="true">
                                        <option value="">
                                            All
                                        </option>
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
                                </div>

                                <div class="col-lg-6 form-group">
                                    <p for="">Ward</p>
                                    <input list="WardList" class="form-control @error('ward') is-invalid @enderror"
                                        type="text" name="ward" value="{{ old('ward') }}" />
                                    <datalist id="WardList"></datalist>
                                    @error('ward')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>


                                {{-- Room --}}
                                <div class="col-lg-4 form-group">
                                    <label for="">No of Bedrooms</label>
                                    <input class="form-control @error('bedrooms') is-invalid @enderror" type="text"
                                        name="bedrooms" value="{{ old('bedrooms') }}" />
                                    @error('bedrooms')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-lg-4 form-group">
                                    <label for="">No of Bathrooms</label>
                                    <input class="form-control @error('bathrooms') is-invalid @enderror"
                                        type="text" name="bathrooms" value="{{ old('bathrooms') }}" />
                                    @error('bathrooms')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="col-lg-4 form-group">
                                    <label for="">No of Living</label>
                                    <input class="form-control @error('living') is-invalid @enderror" type="text"
                                        name="living" value="{{ old('living') }}" />
                                    @error('living')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-pure"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>




@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            // Twonship Selected
            $('select[name="township_id"]').on('change', function() {
                var townshipId = $(this).val();
                var url = '{{ url('ward_list_ajax') }}';
                $.ajax({
                    method: 'GET',
                    url: url,
                    data: {
                        townshipId: townshipId,
                    },
                    success: function(data) {
                        let wardList = '';
                        $.each(JSON.parse(data), function(key, value) {
                            console.log(value.ward_no);
                            wardList += '<option value="' + value.ward_no + '">'
                        });
                        $('#WardList').html(wardList);
                    },
                    error: function(data) {
                        // location.reload();
                    }
                });
            });
        });
    </script>
@endsection
