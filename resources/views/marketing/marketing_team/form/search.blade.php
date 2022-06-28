<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-3">
        <div class="row">
            <div class="col-lg-3 form-group">
                <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
                    <div class="form-group">
                        <label for="">Search</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Code"
                                value="{{ old('search') }}" oninput="getMarketingTeamSSD()">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-3" hidden>
                <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
                    <div class="form-group">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input id="datetimepicker4"
                                    class="form-control @error('from_date') is-invalid @enderror" type="text"
                                    name="from_date" value="{{ old('from_date') }}" />

                                <input id="datetimepicker5" class="form-control @error('to_date') is-invalid @enderror"
                                    type="text" name="to_date" value="{{ old('to_date') }}" />

                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icon md-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-sm-12 col-md-3">
        <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
            <div class="row">
                <div class="col-lg-3 form-group">
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

                <div class="col-lg-2 form-group">
                    <label for="">
                        Type
                    </label>
                    <select class="form-control" name="offer_status">
                        <option value="sale_offer">Sale Offer</option>
                        <option value="rent_offer">Rent Offer</option>
                    </select>
                </div>

                {{-- Property Type --}}
                <div class="col-lg-2 form-group">
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

                <div class="col-lg-2 form-group">
                    {{-- data-plugin="select2" --}}
                    <label for="">Township</label>
                    <select class="form-control" name="township_id">
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

                <div class="col-lg-1 form-group">
                    <label for="">Ward</label>
                    <input list="WardList" class="form-control @error('ward') is-invalid @enderror" type="text"
                        name="ward" value="{{ old('ward') }}" />
                    <datalist id="WardList"></datalist>
                    @error('ward')
                        <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-lg-2 py-1" style="margin-top: 2px;">
                    <br>
                    <button type="submit" class="btn btn-primary">
                        Search
                    </button>
                </div>

            </div>
        </form>
    </div>



    <div class="col-lg-2 col-sm-12 col-md-3" hidden>
        <form action="{{ route('marketing_team.index') }}" method="GET" autocomplete="off">
            <div class="form-group">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <select class="form-control form-control-lg" name="user_id" data-plugin="select2"
                            id="submit_form">
                            <option value="">All User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}"
                                    @if ($userid == $user->id) {{ 'selected' }} @endif>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMarketingTeam', '#create-form') !!}
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
