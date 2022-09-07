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
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="input--style-1  input-group input-contact @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Enter Your Email Address"
                                        required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Enter Your Password"
                                        class="input--style-1  input-group input-contact @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Password') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success w-100">
                                        {{ __('Login Here') }}
                                    </button>
                                </div>
                            </div>
                            <div class=" form-group m-2">
                                <span class="reg_para"> Don' t have GRM account ?</span> <a href="" type="button"
                                    data-toggle="modal" data-target="#register" class="text-success">Sign-up</a>
                                {{-- <p><a href="" class="text-success">Forget password ?</a></p> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
