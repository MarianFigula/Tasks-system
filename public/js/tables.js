$(document).ready(function () {
    $('#detail').DataTable({
        rowReorder: true,
        responsive: true,
        paging: true,
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"] ],
        columnDefs: [
            {orderable: false, targets: [1,2,3,4] },
            {orderable: true, className: 'reorder', targets: [0]}
        ]
    });
});


$(document).ready(function () {
    $('#stats').DataTable({
        rowReorder: true,
        responsive: true,
        paging: true,
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"] ],
        columnDefs: [
            {orderable: false, targets: [3,4,5,6,7] },
            {orderable: true, className: 'reorder', targets: [0,1,2]}
        ],
        dom: 'Bfrtip',
        buttons: [
            'csv','excel'
        ],
    });
});


$(document).ready(function () {
    $('#table-assign').DataTable({
        rowReorder: true,
        responsive: true,
        paging: true,
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"] ],
        columnDefs: [

        {orderable: false, targets: [4] },
        {orderable: true, className: 'reorder', targets: [0,1,2,3]}
        ]
    });
});


$(document).ready(function () {
    $('#assigned').DataTable({
        rowReorder: true,
        responsive: true,
        paging: true,
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"] ],
        columnDefs: [
            {orderable: false, targets: [1] },
            {orderable: true, className: 'reorder', targets: [0,2]}
        ],
    });
});
