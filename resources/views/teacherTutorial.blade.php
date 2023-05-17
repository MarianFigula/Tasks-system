@extends('layouts.app')

@section('content')

    <head>
        <link href="{{ asset('front.css') }}" rel="stylesheet">
    </head>
        <div class="d-flex justify-content-center align-items-center">
            <div class="text-center">


{{--        <h1 style="font-family: DejaVu Sans;">My Site Content</h1>--}}
{{--        <p style="font-family: DejaVu Sans;">Here's some regular content...--}}
{{--        tu moze byt hocico, aj pod show co bude na stranke ale nie v pdf</p>--}}
                <div class="content-teacherT">
                    <p style="font-family: DejaVu Sans;">V prípade nejasností, prosím postupujte podľa nasledujúcich pokynov.</p>
                    @section('pdf')

                        <div class="name-teacherT">
                            <h1 style="font-family: DejaVu Sans;"><strong>Návod pre učiteľa</strong></h1>
                        </div>

                    <div class="description-teacherT mt-4">
                        <p class="description " style="font-family: DejaVu Sans;"><strong class="number mx-1">1.</strong>Po prihlásení sa učiteľovi zobrazí prehľadná tabuľka študentov,
                            v ktorej si môže prezerať koľko úloh študent riešil a koľko za ne dostal bodov.</p>
                        <p class="description" style="font-family: DejaVu Sans;"><strong class="number mx-2">2.</strong>Po kliknutí na tlačidlo detail sa zobrazia podrobné výsledky daného študenta.</p>

                        <p class="description" style="font-family: DejaVu Sans;"><strong class="number mx-2">3.</strong>Po kliknutí na tlačidlo priradiť sa zobrazí prehľad na priradenie ďalších úloh študentovi.</p>

                        <p class="description" style="font-family: DejaVu Sans;"><strong class="number mx-2">4.</strong>V navigačnej lište sa nachádzajú odkazy na Návod na použitie, Domovskú stránku a Súbory s úlohami.</p>
                        <p class="description" style="font-family: DejaVu Sans;"><strong class="number mx-2">5.</strong>Domovská stránka nás vráti na štatistiky študentov.</p>
                        <p class="description" style="font-family: DejaVu Sans;"><strong class="number mx-2">6.</strong>V podstránke súbory sa nachádza prehľad všetkých súborov, ktoré je možné upravovať.</p>
                        @show
                    </div>

                        <p style="font-family: DejaVu Sans;">Chcete mat náš návod po ruke ?</p>
                    <a class="download text-white fa-lg gradient-custom-2 mt-3  rounded mt-4" style="font-family: DejaVu Sans;" href="{{ route('teacher-pdf') }}" target="_blank">Stiahnúť PDF</a>

                </div>

            </div>
        </div>
@endsection



