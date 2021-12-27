function init() {
    $("#sintomas_form").on("submit", function(e) {
        guardaryeditar(e);
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




});

function obtenerInputs() {
    const reg_ape = document.getElementById("reg_ape").value;
    const reg_nom = document.getElementById("reg_nom").value;
    const reg_edad = document.getElementById("reg_edad").value;
    const estb_id = document.getElementById("estb_id").value;
    const gen_1 = document.getElementById("gen_1").value;
    const gen_2 = document.getElementById("gen_2").value;
    const reg_fechSint = document.getElementById("reg_fechSint").value;
    const reg_fechAisl = document.getElementById("reg_fechAisl").value;
    const depa_id = document.getElementById("depa_id").value;
    const provin_id = document.getElementById("provin_id").value;
    const dist_id = document.getElementById("dist_id").value;
    const reg_tos = document.getElementById("reg_tos").value;
    const reg_nasal = document.getElementById("reg_nasal").value;
    const reg_difres = document.getElementById("reg_difres").value;
    const reg_fiebre = document.getElementById("reg_fiebre").value;
    const reg_escalofrios = document.getElementById("reg_escalofrios").value;
    const resultado = validarCampos(reg_ape, reg_nom, reg_edad, estb_id, gen_1, gen_2, reg_fechSint, reg_fechAisl, depa_id, provin_id, dist_id, reg_tos, reg_nasal, reg_difres, reg_fiebre, reg_escalofrios);
    if (resultado) return resultado;
}

function validarCampos(reg_ape, reg_nom, reg_edad, estb_id, gen_1, gen_2, reg_fechSint, reg_fechAisl, depa_id, provin_id, dist_id, reg_tos, reg_nasal, reg_difres, reg_fiebre, reg_escalofrios) {
    if (reg_ape.length === 0 || reg_nom.length === 0 || estb_id.length === 0 || gen_1.length === 0 || gen_2.length === 0 || reg_fechSint.length === 0 || reg_fechAisl.length === 0 ||
        reg_tos.length === 0 || reg_nasal.length === 0 || reg_difres.length === 0 || reg_fiebre.length === 0 || reg_escalofrios.length === 0 || depa_id.includes("--SELECCIONE--") ||
        provin_id.includes("--SELECCIONE--") || dist_id.includes("--SELECCIONE--")

    ) {
        swal("Advertencia!", "Completar campos vacios", "warning");
    } else {
        let data = {
            reg_ape: reg_ape,
            reg_nom: reg_nom,
            reg_edad: reg_edad,
            estb_id: estb_id,
            gen_1: gen_1,
            gen_2: gen_2,
            reg_fechSint: reg_fechSint,
            reg_fechAisl: reg_fechAisl,
            depa_id: depa_id,
            provin_id: provin_id,
            dist_id: dist_id,
            reg_tos: reg_tos,
            reg_nasal: reg_nasal,
            reg_difres: reg_difres,
            reg_fiebre: reg_fiebre,
            reg_escalofrios: reg_escalofrios

        }
        return data;
    }
}

function guardaryeditar(e) {
    e.preventDefault();
    const datos = obtenerInputs();
    if (datos) registrar(datos);
}

async function registrar(datos) {

    try {
        await $.ajax({
            url: "../../controller/sintomas.php?op=insert",
            type: "post",
            data: datos
        });

        limpiarCampos();
        swal("Correcto!", "Registrado Correctamente", "success");

    } catch (error) {
        console.log(error);
        swal("Error!", "Ha ocurrido un problema", "warning");
    }


}

function limpiarCampos() {
    $('#reg_ape').val('');
    $('#reg_nom').val('');
    $('#reg_edad').val('');
    $('#estb_id').val('');
    $('#gen_1').val('');
    $('#gen_2').val('');
    $('#reg_fechSint').val('');
    $('#reg_fechAisl').val('');
    $('#depa_id').val('');
    $('#provin_id').val('');
    $('#dist_id').val('');
    $('#reg_tos').val('');
    $('#reg_nasal').val('');
    $('#reg_difres').val('');
    $('#reg_fiebre').val('');
    $('#reg_escalofrios').val('');

}

init();