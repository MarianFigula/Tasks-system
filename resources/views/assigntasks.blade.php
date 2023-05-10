@extends('layouts.app')


@section('content')
    {{var_dump($id)}}

    <div class=" table-responsive col-xl-6">
        <div class="text-center">
            <h3><b>Štatistiky študentov</b></h3>
        </div>

        <table id="stats" class="table table-striped table-bordered table-hover border-dark text-center">
            <thead class="bg-dark text-white">
            <tr class="text-center">
                <th>ID</th>
                <th>Cesta</th>
                <th>Body</th>
                <th>Obmedzenie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($query as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->path}}</td>
                    <td><input type="number" value="{{$item->points}}"></td>
                    <td><input type="date" value="{{$item->date}}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <button type="button">pridaj</button>

@endsection
