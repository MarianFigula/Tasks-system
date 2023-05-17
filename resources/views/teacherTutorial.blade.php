@extends('layouts.app')

@section('content')

        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="text-center">
        <head>
            <link href="{{ asset('front.css') }}" rel="stylesheet">
        </head>

{{--        <h1 style="font-family: DejaVu Sans;">My Site Content</h1>--}}
{{--        <p style="font-family: DejaVu Sans;">Here's some regular content...--}}
{{--        tu moze byt hocico, aj pod show co bude na stranke ale nie v pdf</p>--}}
                <div class="content-teacherT">
                    @section('pdf')

                        <div class="name-teacherT">
                            <h1 style="font-family: DejaVu Sans;"><strong>Návod pre učiteľa</strong></h1>
                        </div>

                        <p style="font-family: DejaVu Sans;">Po prihlásení sa učiteľovi zobrazí prehľadná tabuľka študentov,
                            v ktorej si môže prezerať koľko úloh študent riešil a koľko za ne dostal bodov.</p>
                        <p style="font-family: DejaVu Sans;">Po kliknutí na tlačidlo detail sa zobrazia podrobné výsledky daného študenta.</p>

                        <p style="font-family: DejaVu Sans;">Po kliknutí na tlačidlo priradiť sa zobrazí prehľad na priradenie ďalších úloh študentovi.</p>

                        <p style="font-family: DejaVu Sans;">V navigačnej lište sa nachádzajú odkazy na Návod na použitie, Domovskú stránku a Súbory s úlohami.</p>
                    @show

                    <p style="font-family: DejaVu Sans;">dlasi odstavec kludne, musi tu byt takyto font kvoli pdf utf-8</p>

                    <a style="font-family: DejaVu Sans;" href="{{ route('teacher-pdf') }}" target="_blank">Stiahnúť PDF</a>
                </div>

            </div>
        </div>
@endsection



