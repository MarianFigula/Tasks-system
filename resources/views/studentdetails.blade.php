@extends('layouts.app')


@section('content')

<div class=" table-responsive col-xl-6">
    <div class="text-center">
        <h3><b>Štatistiky študenta </b></h3>
    </div>

    <table id="detail" class="table table-striped table-bordered table-hover border-dark text-center">
        <thead class="bg-dark text-white">
        <tr class="text-center">
            <th>ID súboru</th>
            <th>Názov súboru</th>
            <th>Číslo úlohy</th>
            <th>Odpoveď</th>
            <th>Správnosť</th>
            <th>Body</th>
        </tr>
        </thead>
        <tbody>
        @foreach($query as $item)
            <tr>
                <td>{{$item->file_id}}</td>
                <td>{{$item->path}}</td>
                <td>{{$item->task_num}}</td>
                @if($item->student_answer)
                    <td>{{$item->student_answer}}</td>
                @else
                    <td>Neodovzdané</td>
                @endif
                @if($item->task_correct)
                    <td>Správne</td>
                @elseif($item->student_answer==null)
                    <td>Neodovzdané</td>
                @else
                    <td>Nesprávne</td>
                @endif
                @if($item->task_correct)
                    <td>{{$item->points}}/{{$item->points}}</td>
                @else
                    <td>0/{{$item->points}}</td>
                @endif

            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection


