@extends('layouts.app')


@section('content')

    <div class=" table-responsive col-xl-6">
        <div class="text-center">
            <h3><b>Priradené úlohy</b></h3>
        </div>

        <table id="assigned" class="table table-striped table-bordered table-hover border-dark text-center">
            <thead class="bg-dark text-white">
            <tr class="text-center">
                <th>ID</th>
                <th>Názov</th>
                <th>Body</th>
                <th>Obmedzenie</th>
                <th>Generovať príklad</th>
            </tr>
            </thead>
            <tbody>
            @foreach($query as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->path}}</td>
                    <td>{{$item->points}}</td>
                    <td>{{$item->date}}</td>
                    <td> <form action="{{url('studentfiles')}}" method="post">
                            <input type="hidden" name="file_id" value="{{$item->id}}">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <button type="submit" class="btn btn-success">Generuj</button></form></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>





@endsection
