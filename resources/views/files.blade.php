@extends('layouts.app')


@section('content')

    <head>
        <link href="{{ asset('front.css') }}" rel="stylesheet">
    </head>
    <div class=" table-responsive col-xl-6 mx-auto">
        <div class="text-center">
            <h3><b>Prehľad súborov s úlohami</b></h3>
        </div>

        <table id="stats" class="table table-striped table-bordered table-hover border-dark text-center">
            <thead class="bg-dark text-white">
            <tr class="text-center">
                <th>ID</th>
                <th>Cesta</th>
                <th>Body</th>
                <th>Obmedzenie</th>
                <th>Uprav</th>
            </tr>
            </thead>
            <tbody>
            @foreach($query as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->path}}</td>
                    <td>{{$item->points}}</td>
                    @if($item->date)
                        <td>{{$item->date}}</td>
                    @else
                        <td>Neobmedzené</td>
                    @endif


                    <td><a href="{{ url('editfiles/' . $item->id . '/' . $item->id/*totoiune*/) }}"
                           class="btn btn-block text-white fa-lg gradient-custom-2 pull-right">Uprav</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
