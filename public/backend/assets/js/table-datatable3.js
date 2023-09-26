$(function () {
    "use strict";

    $(document).ready(function () {
        $('#example').DataTable();
    });


    $(document).ready(function () {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });
        var table2 = $('#example3').DataTable({
            lengthChange: false,
            language: {
                info: 'Mostrando pagina _PAGE_ de _PAGES_',
                infoEmpty: 'Sin información',
                infoFiltered: '(Filtrado de _MAX_ datos totales)',
                lengthMenu: 'Mostrar _MENU_ datos por pagina',
                zeroRecords: 'Nada encontrado - lo sentimos'
            }

        });

        $("#searchbox").on("keyup search input paste cut", function () {
            table2.search(this.value).draw();
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });


});
