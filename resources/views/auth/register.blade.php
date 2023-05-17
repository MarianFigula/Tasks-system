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
                            <h3 class="mt-1 mb-1 pb-1 font-weight-bold "><strong>Registrácia</strong></h3>
                        </div>
                        <div class="form-outline mb-1">
                            <label for="name" class="col-md-0 col-form-label text-md-end">{{ __('Meno') }}</label>

                            <div class="form-outline mb-1">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Zadajte svoje meno">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-1">
                            <label for="email" class="col-md-0 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="form-outline mb-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Vaša emailová adresa">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{--TODO: oznacenie role ucitela alebo studenta, spravit styly--}}
                        <div class="form-outline text-center mt-3">
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" value="teacher" class="gradient-custom-2" >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Učiteľ
                            </label>
                            </div>

                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role"  checked value="student" class="gradient-custom-2" >
                            <label class="form-check-label " for="flexRadioDefault2">
                                Študent
                            </label>

                            </div>
                        </div>

                        <div class="form-outline mb-1">
                            <label for="password" class="col-md-0 col-form-label text-md-end">{{ __('Heslo') }}</label>

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
                            <label for="password-confirm" class="col-md-0 col-form-label text-md-end">{{ __('Potvrdenie hesla') }}</label>

                            <div class="form-outline mb-1">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="********">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="text-center pt-1 mb-5 pb-1 mt-3">
                                <button type="submit" class="btn btn-block text-white fa-lg gradient-custom-2 mb-3 w-50">
                                    {{ __('Zaregistrovať sa') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-5 py-4 pb-2 p-md-5 mx-md-4">
                            <div class="text-center">
                                <h1 class="mb-4 font-weight-bold"><strong>Dobrý deň!</strong></h1>
                                <p class="small mb-0">Zadajte svoje osobné údaje a vydajte sa na cestu s nami.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
