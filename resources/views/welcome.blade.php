@extends('layouts.app')


@section('content')
    <head>
        <link href="{{ asset('front.css') }}" rel="stylesheet">
    </head>
    <div class="page">
        <div class="container-welcome">
            <h1 class="name-welcome text-center "><strong>Webový portál</strong></h1>

            <div class="name-welcome-1 col d-flex justify-content-center">
                <h6>Vitajte na našom webovom portály, autori tohoto portálu sú:</h6>
            </div>
            <div class="col d-flex justify-content-center mt-4">
                <h4 class="d-inline content-welcome mx-4">Marián Figula</h4>
                <h4 class="d-inline content-welcome mx-4">Marián Kňazovický</h4>
                <h4 class="d-inline content-welcome mx-4">Andrej Belko</h4>
                <h4 class="d-inline content-welcome mx-4">Katarína Durčáková</h4>
            </div>
        </div>
    </div>






@endsection



{{--        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--        </div>--}}
