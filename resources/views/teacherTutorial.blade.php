@extends('layouts.app')

@section('content')
    <h1 style="font-family: DejaVu Sans;">My Site Content</h1>
    <p style="font-family: DejaVu Sans;">Here's some regular content...
    tu moze byt hocico, aj pod show co bude na stranke ale nie v pdf</p>

    @section('pdf')
        <h1 style="font-family: DejaVu Sans;">Návod pre učiteľa</h1>
        <p style="font-family: DejaVu Sans;">V tomto bude celý návopd pre učiteľa čo am akde všetko ako robiť a tak.ddddddddddddddddddddddddddddd ddddddddddddddddddddddddddddddd ddddddddddddddddddddddddddddddd ddddddddddddd.</p>

        <div style="font-family: DejaVu Sans;"> ďalší tag kludne</div>
    @show

    <p style="font-family: DejaVu Sans;">dlasi odstavec kludne, musi tu byt takyto font kvoli pdf utf-8</p>

    <a style="font-family: DejaVu Sans;" href="{{ route('teacher-pdf') }}" target="_blank">Download as PDF</a>
@endsection



