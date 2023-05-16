@extends('layouts.app')

@section('content')


<div class=" table-responsive col-xl-6">
    <div class="text-center">
        <h3><b>Štatistiky študentov</b></h3>
    </div>

    <table id="stats" class="table table-striped table-bordered table-hover border-dark text-center">
        <thead class="bg-dark text-white">
        <tr class="text-center">
            <th>ID</th>
            <th>Meno</th>
            <th>Email</th>
            <th>Počet riešených úloh</th>
            <th>Počet získaných bodov</th>
            <th>Detail</th>
            <th>Priradiť úlohy</th>
        </tr>
        </thead>
        <tbody>
        @for($i = 0; $i < count($x); $i++)
            <tr>
                <td>{{$x[$i]->id}}</td>
                <td>{{$x[$i]->name}}</td>
                <td>{{$x[$i]->email}}</td>
                @if($x[$i]->GEN != null)
                    <td>{{$x[$i]->GEN}}</td>
                    @if(count($y) == 0)
                        <td>0</td>
                    @endif
                    @for($j = 0; $j < count($y); $j++)
                        @if($x[$i]->id == $y[$j]->student_id)
                            @if($y[$j]->POINTS != null)
                                <td>{{$y[$j]->POINTS}}</td>
                            @else
                                <td>0</td>
                            @endif
                        @else
                            <td>0</td>
                        @endif
                    @endfor
                @else
                    <td>0</td>
                    <td>0</td>
                @endif
                <td><a href="{{ url('/studentdetails/' . $x[$i]->id) }}" class="btn btn-xs btn-info pull-right">Detail</a></td>
                <td><a href="{{ url('/assigntasks/' . $x[$i]->id) }}" class="btn btn-xs btn-success pull-right">Priraď</a></td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
@endsection

