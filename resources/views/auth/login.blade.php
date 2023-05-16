@extends('layouts.app')

@section('content')
    <head><link href="{{ asset('front.css') }}" rel="stylesheet">
    </head>

<div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-8">
            <div class="card rounded-3 text-black shadow">
{{--                <div class="card-header">{{ __('Login') }}</div>--}}
                  <div class="row g-0">
                    <div class="col-lg-6">
                         <div class="card-body p-md-5 mx-md-4 ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="text-center">
                            <h3 class="mt-1 mb-5 pb-1 font-weight-bold "><strong>Login</strong></h3>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="form-outline mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    {{--
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>


                                    <label class="form-check-label" for="remember">
                                         __('Remember Me')
                                    </label>
                                </div>
                            </div>
                        </div>
                        --}}

                        <div class="row mb-0">
                            <div class="text-center pt-1 mb-5 pb-1">
                                <button type="submit" class="btn btn-block text-white fa-lg gradient-custom-2 mb-3 w-50">
                                    {{ __('Login') }}
                                </button>

                                 {{--@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}

                            </div>
                        </div>
                    </form>
                </div>
                </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-5 py-4 pb-2 p-md-5 mx-md-4">
                            <div class="text-center">
                            <h1 class="mb-4 font-weight-bold"><strong>Welcome Back!</strong></h1>
                            <p class="small mb-0">To keep connected with us please login with your personal info.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
