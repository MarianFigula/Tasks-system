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



</body>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#detail').DataTable({
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
