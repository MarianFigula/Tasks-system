@extends('layouts.app')

@section('content')
    <h1 style="font-family: DejaVu Sans;">My Site Content</h1>
    <p style="font-family: DejaVu Sans;">Here's some regular content...
        tu moze byt hocico, aj pod show co bude na stranke ale nie v pdf</p>

    @section('pdf')
        <h1 style="font-family: DejaVu Sans;">Návod pre študenta</h1>

        <p style="font-family: DejaVu Sans;">Po prihlásení sa študentovi zobrazí prehľadná tabuľka priradených úloh.</p>

        <p style="font-family: DejaVu Sans;">Po kliknutí na tlačidlo detail sa zobrazia podrobné výsledky daného študenta.</p>

        <p style="font-family: DejaVu Sans;">Po kliknutí na tlačidlo priradiť sa zobrazí prehľad na priradenie ďalších úloh študentovi.</p>

        <p style="font-family: DejaVu Sans;">V navigačnej lište sa nachádzajú odkazy na Návod na použitie, Domovskú stránku a Súbory s úlohami.</p>
    @show

    <p style="font-family: DejaVu Sans;">dlasi odstave, musi tu byt takyto font kvoli pdf utf-8</p>

    <a style="font-family: DejaVu Sans;" href="{{ route('student-pdf') }}" target="_blank">Download as PDF</a>
@endsection
