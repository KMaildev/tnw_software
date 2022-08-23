@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-content-center" style="height:70vh;">
            <div class="col-md-6">
                <div class="card" style="height: 30vh;">
                    <div class="card-body">
                        <h5 class="text-center">Login</h5>
                        <p class="text-center text-muted">Please fill the login form</p>
                        <form method="GET" action="{{ route('login-option') }}" autocomplete="off">
                            <div class="md-form mb-5">
                                <input type="number" class="form-control text-center @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" autofocus placeholder="Enter Phone">

                                @error('phone')
                                    <p class="text-danger text-center">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
