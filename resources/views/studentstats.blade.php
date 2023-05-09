<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel='stylesheet' type='text/css'>

</head>
<body>

<div class=" table-responsive col-xl-6">
    <div class="text-center">
        <h3><b>Štatistiky študentov</b></h3>
    </div>

    <table id="times" class="table table-striped table-bordered table-hover border-dark text-center">
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
                <td><a href="{{ url('/studentdetail/' . $x[$i]->id) }}" class="btn btn-xs btn-info pull-right">Detail</a></td>
                <td>BUTTON</td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>



</body>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#logins').DataTable({
            rowReorder: true,
            responsive: true,
            columnDefs: [
                {orderable: true, className: 'reorder', targets: 1},
                {orderable: true, className: 'reorder', targets: 2},
            ]
        });
    });
</script>
</html>
