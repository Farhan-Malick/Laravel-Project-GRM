@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class=" col-md-12">
                <div class="card">
                    <div class="modal-header">
                        <div class="col-1"></div>
                        <div class="col-10 text-center">
                            <img src="public/assets/images/register.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-1">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <input id="fname" type="text"
                                        class="input--style-1  input-group input-contact @error('fname') is-invalid @enderror"
                                        name="fname" value="{{ old('fname') }}" placeholder="Enter Your First Name"
                                        required autocomplete="fname" autofocus>

                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="lname" type="text"
                                        class="input--style-1  input-group input-contact @error('lname') is-invalid @enderror"
                                        name="lname" value="{{ old('lname') }}" placeholder="Enter Your Last Name"
                                        required autocomplete="lname" autofocus>

                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="cname" type="text"
                                        class="input--style-1  input-group input-contact @error('cname') is-invalid @enderror"
                                        name="cname" value="{{ old('cname') }}" placeholder="Enter Your Company Name"
                                        required autocomplete="cname" autofocus>

                                    @error('cname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="input--style-1  input-group input-contact @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="input--style-1  input-group input-contact @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" placeholder="Enter Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password"
                                        class="input--style-1  input-group input-contact" placeholder="Re-Enter Password"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success w-100">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <div class="form-row col-12 mt-3 ml-4 text-center">
                                <p class="reg-modal">By joining GRM you agree to GRM <u>Terms and Conditions of
                                        Use.</u><br>
                                    Already have Scrapo account? <a href="" type="button" data-toggle="modal"
                                        data-target="#Login" class="text-success"> Log-in </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
