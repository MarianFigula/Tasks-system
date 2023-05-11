@extends('layouts.app')

@section('content')
    <h1 style="font-family: DejaVu Sans;">My Site Content</h1>
    <p style="font-family: DejaVu Sans;">Here's some regular content...
        tu moze byt hocico, aj pod show co bude na stranke ale nie v pdf</p>

    @section('pdf')
        <h1 style="font-family: DejaVu Sans;">Návod pre študenta</h1>
        <p style="font-family: DejaVu Sans;">V tomto bude celý návopd pre študenta</p>

        <div style="font-family: DejaVu Sans;"> ďalší tag kludne</div>
    @show

    <p style="font-family: DejaVu Sans;">dlasi odstave, musi tu byt takyto font kvoli pdf utf-8</p>

    <a style="font-family: DejaVu Sans;" href="{{ route('student-pdf') }}" target="_blank">Download as PDF</a>
@endsection
