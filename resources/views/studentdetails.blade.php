@extends('layouts.app')


@section('content')
<div class=" table-responsive col-xl-6">
    <div class="text-center">
        <h3><b>Štatistiky študenta</b></h3>
    </div>

    <table id="detail" class="table table-striped table-bordered table-hover border-dark text-center">
        <thead class="bg-dark text-white">
        <tr class="text-center">
            <th>ID súboru</th>
            <th>Číslo úlohy</th>
            <th>Odovzdaná</th>
            <th>Odpoveď</th>
            <th>Správna</th>
            <th>Body</th>
        </tr>
        </thead>
        <tbody>
        @foreach($query as $item)
            <tr>
                <td>{{$item->file_id}}</td>
                <td>{{$item->task_num}}</td>
                <td>{{$item->task_sub}}</td>
                <td>ODPOVEĎ</td>
                <td>{{$item->task_correct}}</td>
                <td>{{$item->points}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection


