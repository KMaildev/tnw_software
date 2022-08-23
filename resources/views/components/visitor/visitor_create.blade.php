<div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScale" aria-hidden="true"
    aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">
                    Visitor User
                </h4>
            </div>
            <form action="{{ route('visitor.store') }}" method="POST" autocomplete="off" id="create-form"
                role="form">
                @csrf
                <input type="hidden" name="marketing_team_id" value="{{ $marketing_edit->id }}">
                <div class="modal-body">
                    <div class="row">

                        <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                name="name" value="{{ old('name') }}" placeholder="Name" />
                            @error('name')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Phone</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                name="phone" value="{{ old('phone') }}" placeholder="Phone" />
                            @error('phone')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                name="email" value="{{ old('email') }}" placeholder="Email" />
                            @error('email')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text"
                                name="address" value="{{ old('address') }}" placeholder="Address" />
                            @error('address')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Remark</label>
                            <input class="form-control @error('remark') is-invalid @enderror" type="text"
                                name="remark" value="{{ old('remark') }}" placeholder="Remark" />
                            @error('remark')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreVisitors', '#create-form') !!}
@endsection
