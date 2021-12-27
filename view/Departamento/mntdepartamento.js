var tabla;


function init() {
    $("#departamento_form").on("submit", function(e) {
        guardaryeditar(e);
    });
}

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#departamento_form")[0]);
    $.ajax({
        url: "../../controller/departamentoreg.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            console.log(datos);
            $('#departamento_form')[0].reset();
            $("#modaldepartamento").modal('hide');
            $('#departamento_data').DataTable().ajax.reload();

            swal({
                title: "Correcto!",
                text: "Completado.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
}

$(document).ready(function() {
    tabla = $('#departamento_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: false,
        colReorder: true,
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: '../../controller/departamentoreg.php?op=listar',
            type: "post",
            dataType: "json",
            error: function(e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
        "autoWidth": false,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    }).DataTable();

    $(document).ready(function() {


    });
});

function editar(depa_id) {
    $('#mdldepartamento').html('Editar Registros');

    $.post("../../controller/departamentoreg.php?op=mostrar", { depa_id: depa_id }, function(data) {
        data = JSON.parse(data);
        $('#depa_id').val(data.depa_id);
        $('#depa_nom').val(data.depa_nom);

    });

    $('#modaldepartamento').modal('show');
}

function eliminar(depa_id) {
    swal({
            title: "Correcto",
            text: "Esta seguro de Eliminar el Departamento?",
            type: "error",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Si",
            cancelButtonText: "No",
            closeOnConfirm: false
        },
        function(isConfirm) {
            if (isConfirm) {
                $.post("../../controller/departamentoreg.php?op=eliminar", { depa_id: depa_id }, function(_data) {

                });

                $('#departamento_data').DataTable().ajax.reload();

                swal({
                    title: "Correcto!",
                    text: "Registro Eliminado.",
                    type: "success",
                    confirmButtonClass: "btn-success"
                });
            }
        });
}

$(document).on("click", "#btnnuevo", function() {
    $('#mdldepartamento').html('Nuevo Registro');
    $('#departamento_form')[0].reset();
    $('#modaldepartamento').modal('show');
});



init();