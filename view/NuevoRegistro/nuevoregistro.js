function init() {

    $("#registro_form").on("submit", function(e) {
        guardaryeditar(e);
    });



}

$(document).ready(function() {
    $('#reg_descrip').summernote({
        height: 150,
        lang: "es-ES",
        callbacks: {
            onImageUpload: function(image) {
                console.log("Image detect...");
                myimagetreat(image[0]);
            },
            onPaste: function(e) {
                console.log("Text detect...");
            }
        }
    });



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

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#registro_form")[0]);
    if ($('#reg_descrip').summernote('isEmpty') || $('#reg_nom').val() == '') {
        swal("Advertencia!", "Completar campos vacios", "warning");
    } else {
        $.ajax({
            url: "../../controller/registro.php?op=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos) {

                $('#reg_cod').val('');
                $('#reg_fech').val('');
                $('#estb_id').val('');
                $('#reg_ape').val('');
                $('#reg_nom').val('');
                $('#reg_telefono').val('');
                $('#reg_doc').val('');
                $('#reg_edad').val('');
                $('#reg_peso').val('');
                $('#reg_talla').val('');
                $('#gen').val('');
                $('#depa_id').val('');
                $('#provin_id').val('');
                $('#dist_id').val('');
                $('#nacion_id').val('');
                $('#reg_direccion').val('');
                $('#reg_descrip').summernote('reset');
                swal("Correcto!", "Registrado Correctamente", "success");


            }
        });
    }
}

init();