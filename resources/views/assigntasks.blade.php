@extends('layouts.app')


@section('content')

    <head>
        <link href="{{ asset('front.css') }}" rel="stylesheet">
    </head>

    <div class=" table-responsive col-xl-6 mx-auto">
        <div class="text-center">
            <h3><b>Pridarenie úlohy študentovi {{$studentquery[0]->name}}</b></h3>
        </div>

        <table id="table-assign" class="table table-striped table-bordered table-hover border-dark text-center">
            <thead class="bg-dark text-white">
            <tr class="text-center">
                <th>ID</th>
                <th>Cesta</th>
                <th>Body</th>
                <th>Obmedzenie</th>
                <th>Pridaj</th>

            </tr>
            </thead>
            <tbody>
            @foreach($filesquery as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->path}}</td>
                    <td>{{$item->points}}</td>
                    @if($item->date)
                        <td>{{$item->date}}</td>
                    @else
                        <td>Neobmedzené</td>
                    @endif

                    @if(in_array($item,$studentfilesquery))
                        <td>Už priradené</td>

                    @else
                        <td>
                            <form action="{{url('assigntasks')}}" method="post">
                                <input type="hidden" name="file_id" value="{{$item->id}}">
                                <input type="hidden" name="student_id" value="{{$id}}">
                                <button type="submit" class="btn btn-block text-white fa-lg gradient-custom-2">Pridaj</button>
                            </form>
                        </td>

                    @endif


                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
