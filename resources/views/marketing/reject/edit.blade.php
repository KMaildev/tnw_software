@extends('layouts.menu.marketing')
@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Reject</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('marketing_team.index') }}">Reject</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Reject
                            </h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <form action="{{ route('reject.update', $marketing_team->id) }}" method="POST"
                                autocomplete="off" id="create-form">
                                @csrf
                                @method('PUT')

                                <div class="row row-lg">

                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Date
                                        </label>
                                        <input class="form-control" type="text"
                                            value="{{ $marketing_team->marketing_date }}" readonly />
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Code
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->code }}"
                                            readonly />
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            No.
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->no }}"
                                            readonly />
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Ward No
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->ward_no }}"
                                            readonly />
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Road
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->road }}"
                                            readonly />
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Property Type
                                        </label>
                                        <select class="form-control" data-plugin="select2" disabled>
                                            @foreach ($property_types as $property_type)
                                                <option value="{{ $property_type->id }}"
                                                    @if ($property_type->id == $marketing_team->property_type_id) selected @endif>
                                                    {{ $property_type->property_type ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Wide
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->wide }}"
                                            readonly />
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Type
                                        </label>
                                        <select name="type" class="form-control @error('type') is-invalid @enderror"
                                            disabled>
                                            <option value="SaleOwner" @if ('SaleOwner' == $marketing_team->type) selected @endif>
                                                Sale Owner
                                            </option>
                                            <option value="RentOwner" @if ('RentOwner' == $marketing_team->type) selected @endif>
                                                Rent Owner
                                            </option>
                                            <option value="BuyOffer" @if ('BuyOffer' == $marketing_team->type) selected @endif>
                                                Buy Offer
                                            </option>
                                            <option value="RentOffer" @if ('RentOffer' == $marketing_team->type) selected @endif>
                                                Rent Offer
                                            </option>
                                        </select>
                                        @error('type')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Price
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->price }}"
                                            readonly />
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            O/A
                                        </label>
                                        <select name="owner_or_agent_type" class="form-control" disabled>
                                            <option value="Owner" @if ('Owner' == $marketing_team->owner_or_agent_type) selected @endif>
                                                Owner
                                            </option>
                                            <option value="Agent" @if ('Agent' == $marketing_team->owner_or_agent_type) selected @endif>
                                                Agent
                                            </option>
                                        </select>
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Name
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->name }}"
                                            readonly />
                                    </div>


                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Phone No
                                        </label>
                                        <input class="form-control" type="text" name="phone_no"
                                            value="{{ $marketing_team->phone_no }}" data-plugin="tokenfield" readonly />
                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <label class="form-control-label">
                                            Remark
                                        </label>
                                        <input class="form-control" type="text" value="{{ $marketing_team->remark }}"
                                            readonly />
                                    </div>
                                </div>

                                <div class="row row-lg py-5">
                                    <div class="col-md-12">
                                        <br>
                                        <h3 class="example-title">Reject</h3>
                                        <p style="color: red;">Are you sure you want to reject this record?</p>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Reject Date
                                        </label>
                                        <input class="form-control date_picker @error('reject_date') is-invalid @enderror"
                                            type="text" name="reject_date" value="{{ old('reject_date') }}" />
                                        @error('reject_date')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-control-label">
                                            Reject Reason
                                        </label>
                                        <input class="form-control @error('reject_reason') is-invalid @enderror"
                                            type="text" name="reject_reason" value="{{ old('reject_reason') }}" />
                                        @error('reject_reason')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>


                                    <div class="col-md-12 py-5">
                                        <button type="submit" class="mr-2 btn btn-secondary float-right">Save</button>
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
        {!! JsValidator::formRequest('App\Http\Requests\StoreMarketingTeam', '#create-form') !!}
        <script>
            const FollowUpStatus = document.getElementById('FollowUpStatus')
            FollowUpStatus.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    $("#FollowShowHide").show();
                } else {
                    $("#FollowShowHide").hide();
                }
            })
            $("#FollowShowHide").hide();


            const AppointmentStatus = document.getElementById('AppointmentStatus')
            AppointmentStatus.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    $("#AppointmentShowHide").show();
                } else {
                    $("#AppointmentShowHide").hide();
                }
            })
            $("#AppointmentShowHide").hide();



            function getAlertyMarketingTeam() {
                var WardNo = document.getElementById("WardNo").value;
                var Road = document.getElementById("Road").value;
                var No = document.getElementById("No").value;
                var url = '{{ url('already_live_filter_search') }}';
                $.ajax({
                    method: 'GET',
                    url: url,
                    data: {
                        WardNo: WardNo,
                        Road: Road,
                        No: No,
                    },
                    success: function(data) {
                        let marketing = '';
                        $.each(JSON.parse(data), function(key, value) {
                            marketing += '<div class="card-block mb-4" style="background-color: #dce1e2">';

                            marketing += '<p class="mb-2"> Date: ';
                            marketing += '<span class="float-right pl-10">' + value.marketing_date +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> No: ';
                            marketing += '<span class="float-right pl-10">' + value.no +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> Ward No: ';
                            marketing += '<span class="float-right pl-10">' + value.ward_no +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> Road: ';
                            marketing += '<span class="float-right pl-10">' + value.road +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> Wide: ';
                            marketing += '<span class="float-right pl-10">' + value.wide +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> Type: ';
                            marketing += '<span class="float-right pl-10">' + value.type +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> Price: ';
                            marketing += '<span class="float-right pl-10">' + value.price +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> O/A: ';
                            marketing += '<span class="float-right pl-10">' + value.owner_or_agent_type +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> Name: ';
                            marketing += '<span class="float-right pl-10">' + value.name +
                                '</span>';
                            marketing += '</p>';

                            marketing += '<p class="mb-2"> Phone No: ';
                            marketing += '<span class="float-right pl-10">' + value.phone_no +
                                '</span>';
                            marketing += '</p>';

                            marketing +=
                                '<a href="" class="btn btn-success btn-sm float-right">View</a><br><br>';



                            marketing += '</div>';
                        });
                        $('#MarketingDataList').html(marketing);
                    },
                    error: function(data) {
                        // location.reload();
                    }
                });
            }
        </script>
    @endsection
