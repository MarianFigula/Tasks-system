@extends('layouts.app')

@section('content')
    <head>
        <link href="{{ asset('front.css') }}" rel="stylesheet">
    </head>
    <div class="d-flex justify-content-center align-items-center">
        <div class="text-center">
    <p style="font-family: DejaVu Sans;">V prípade nejasností, prosím postupujte podľa nasledujúcich pokynov.</p>

    @section('pdf')
                <h1 style="font-family: DejaVu Sans;"><strong>Návod pre študenta</strong></h1>

                <div class="description-studentT mt-4">
        <p class="description " style="font-family: DejaVu Sans;"><strong class="number mx-2">1.</strong>Po prihlásení sa študentovi zobrazí prehľadná tabuľka priradených úloh.</p>

        <p class="description " style="font-family: DejaVu Sans;"><strong class="number mx-2">2.</strong>Po kliknutí na tlačidlo Riešiť sa študentovi vygeneruje príklad na riešenie.</p>

        <p class="description " style="font-family: DejaVu Sans;"><strong class="number mx-3">3.</strong>V navigačnej lište sa nachádzajú odkazy na Návod na použitie a Domovskú stránku.</p>
    @show
                </div>
    <p style="font-family: DejaVu Sans;">Chcete mat náš návod po ruke ?</p>

    <a class="download text-white fa-lg gradient-custom-2 mt-3  rounded mt-2" style="font-family: DejaVu Sans;" href="{{ route('student-pdf') }}" target="_blank">Stiahnúť PDF</a>
        </div>
    </div>
@endsection
