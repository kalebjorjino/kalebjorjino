function init() {

    $("#registro_form").on("submit", function(e) {
        guardaryeditar(e);
    });



}

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#registro_form")[0]);
    $.ajax({
        url: "../../controller/registro.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            console.log(datos);
            $('#registro_form')[0].reset();
            $("#modalregistro").modal('hide');
            $('#registro_data').DataTable().ajax.reload();

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


    $.post("../../controller/departamento.php?op=combo", function(data, _status) {
        $('#depa_id').html(data);
    });

    $.post("../../controller/provincia.php?op=combo", function(data, _status) {
        $('#provin_id').html(data);
    });

    $.post("../../controller/distrito.php?op=combo", function(data, _status) {
        $('#dist_id').html(data);
    });

    $.post("../../controller/nacionalidad.php?op=combo", function(data, _status) {
        $('#nacion_id').html(data);
    });

    $.post("../../controller/establecimiento.php?op=combo", function(data, _status) {
        $('#estb_id').html(data);
    });

});

function editar(reg_id) {
    $('#mdlregistro').html('Editar Registros');

    $.post("../../controller/registro.php?op=mostrar", { reg_id: reg_id }, function(data) {
        data = JSON.parse(data);
        $('#reg_id').val(data.reg_id);
        $('#reg_ape').val(data.reg_ape);
        $('#reg_nom').val(data.reg_nom);
        $('#reg_telefono').val(data.reg_telefono);
        $('#reg_doc').val(data.reg_doc);
        $('#reg_edad').val(data.reg_edad);
        $('#reg_peso').val(data.reg_peso);
        $('#reg_talla').val(data.reg_talla);
        $('#depa_id').val(data.depa_id);
        $('#provin_id').val(data.provin_id);
        $('#dist_id').val(data.dist_id);
        $('#nacion_id').val(data.nacion_id);
        $('#reg_direccion').val(data.reg_direccion);


    });

    $('#modalregistro').modal('show');
}

function eliminar(reg_id) {
    swal({
            title: "Correcto",
            text: "Esta seguro de Eliminar el registro?",
            type: "error",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Si",
            cancelButtonText: "No",
            closeOnConfirm: false
        },
        function(isConfirm) {
            if (isConfirm) {
                $.post("../../controller/registro.php?op=eliminar", { reg_id: reg_id }, function(_data) {

                });

                $('#registro_data').DataTable().ajax.reload();

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
    $('#mdlregistro').html('Nuevo Registro');
    $('#registro_form')[0].reset();
    $('#modalregistro').modal('show');
});



init();