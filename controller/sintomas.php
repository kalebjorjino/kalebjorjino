<?php
    require_once("../config/conexion.php");
    require_once("../models/Registro.php");
    require_once("../models/Sintomas.php");
    require_once("../models/Establecimiento.php");
    
    $sintomas = new Sintomas();
    $registro = new Registro();
    $establecimiento = new Establecimiento();
    
    switch($_GET["op"]){
        case "obtener":
            $reg_doc = $_GET['inputValue'];
            $datos = $registro->get_registro_reg_doc($reg_doc);
            echo json_encode($datos);
        break;

        case "insert":
            try {
                $estb_id = $establecimiento->get_id($_POST["estb_id"]);
                $resultado = $sintomas->insert($_POST["reg_ape"],$_POST["reg_nom"],,$_POST["reg_edad"],$estb_id,$_POST["gen_1"],
                $_POST["gen_2"],$_POST["reg_fechSint"],$_POST["reg_fechAisl"],$_POST["depa_id"],$_POST["provin_id"],$_POST["dist_id"],
                $_POST["reg_tos"],$_POST["reg_nasal"],$_POST["reg_difres"],$_POST["reg_fiebre"],$_POST["reg_escalofrios"]);
                return $resultado;
            } catch (Exception $e) {
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
        break;
    }

?>