@extends('layouts.app')

@section('content')
    <head><link href="{{ asset('front.css') }}" rel="stylesheet">
    </head>
<div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <div class="card rounded-3 text-black shadow">
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

                <div class="row g-0">
                    <div class="col-lg-6">
                <div class="card-body-register p-md-5 mx-md-4" >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-center">
                            <h3 class="mt-1 mb-1 pb-1 font-weight-bold "><strong>Register</strong></h3>
                        </div>
                        <div class="form-outline mb-1">
                            <label for="name" class="col-md-0 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="form-outline mb-1">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-1">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="form-outline mb-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{--TODO: oznacenie role ucitela alebo studenta, spravit styly--}}
                        <div class="form-outline mb-1 text-center">
                            <div class="form-check-inline">
                            <input type="radio" name="role" value="teacher" class="gradient-custom-2" >
                            <label class="form-check-label mt-2" for="flexRadioDefault1">
                                Teacher
                            </label>
                            </div>

                            <div class="form-check-inline">
                            <input type="radio" name="role"  checked value="student" class="gradient-custom-2" >
                            <label class="form-check-label mt-2" for="flexRadioDefault2">
                                Student
                            </label>

                            </div>
                        </div>

                        <div class="form-outline mb-1">
                            <label for="password" class="col-md-0 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="form-outline mb-1">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="********">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-1">
                            <label for="password-confirm" class="col-md-0 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="form-outline mb-1">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="********">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="text-center pt-1 mb-5 pb-1 mt-3">
                                <button type="submit" class="btn btn-block text-white fa-lg gradient-custom-2 mb-3 w-50">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-5 py-4 pb-2 p-md-5 mx-md-4">
                            <div class="text-center">
                                <h1 class="mb-4 font-weight-bold"><strong>Hello, Friend!</strong></h1>
                                <p class="small mb-0">Enter your personal details
                                    and start journey with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
