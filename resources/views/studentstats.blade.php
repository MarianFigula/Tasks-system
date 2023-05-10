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
            <th>Počet generovaných úloh</th>
            <th>Počet odovzdaných úloh</th>
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
                <td>{{$x[$i]->GEN}}</td>
                <td>{{$x[$i]->SUB}}</td>
                <td>{{$y[$i]->POINTS}}</td>
                <td><a href="{{ url('/studentdetails/' . $x[$i]->id) }}" class="btn btn-xs btn-info pull-right">Detail</a></td>
                <td>BUTTON</td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
@endsection


<!--
    $(document).ready(function () {
        $('#stats').DataTable({
            rowReorder: true,
            responsive: true,
            columnDefs: [
                {orderable: true, className: 'reorder', targets: 1},
                {orderable: true, className: 'reorder', targets: 2},
            ]
        });
    });-->
