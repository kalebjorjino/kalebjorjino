const getData = async() => {
    let inputValue = document.getElementById("reg_doc").value;

    if (inputValue.length === 0) {
        swal("Advertencia!", "Ingrese el numero de documento de identidad", "info");
    } else {
        const datos = await consultandoReferencia(inputValue);
        asignarDatosObtenidos(datos)
    }
}

async function consultandoReferencia(inputValue) {
    let result;

    try {
        result = await $.ajax({
            url: "../../controller/sintomas.php?op=obtener",
            type: "GET",
            data: {
                inputValue: inputValue
            }
        });

        return result;

    } catch (error) {
        console.log(error);
    }

}

function asignarDatosObtenidos(datos) {
    datos = JSON.parse(datos);
    $('#reg_ape').val(datos.reg_ape);
    $('#reg_nom').val(datos.reg_nom);
    $('#reg_edad').val(datos.reg_edad);
    $('#estb_id').val(datos.estb_nom);
}