@extends('layouts.app')


@section('content')

    <div class=" table-responsive col-xl-6">
        <div class="text-center">
            <h3><b>Pridarenie úlohy študentovi {{$studentquery[0]->name}}</b></h3>
        </div>

            <table id="stats" class="table table-striped table-bordered table-hover border-dark text-center">
                <thead class="bg-dark text-white">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Cesta</th>
                    <th>Body</th>
                    <th>Obmedzenie</th>
                    <th>Pridaj</th>
                    <th>Uprav</th>
                </tr>
                </thead>
                <tbody>
                @foreach($query as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->path}}</td>
                        <td>{{$item->points}}</td>
                        <td>{{$item->date}}</td>
                        <td> <form action="{{url('assigntasks')}}" method="post">
                                <input type="hidden" name="file_id" value="{{$item->id}}">
                                <input type="hidden" name="student_id" value="{{$id}}">
                                <button type="submit" class="btn btn-success">Pridaj</button></form></td>
                        <td><a href="{{ url('editfiles/' . $item->id . '/' . $id) }}" class="btn btn-xs btn-success pull-right">Uprav</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

    </div>

@endsection
