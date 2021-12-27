<?php
    require_once("../config/conexion.php");
    require_once("../models/Departamento.php");
    $departamento = new Departamento();

    switch($_GET["op"]){
        case "combo":
            $datos = $departamento->get_departamento();
            if(is_array($datos)==true and count($datos)>0){
                $html= "<option></option>";
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['depa_id']."'>".$row['depa_nom']."</option>";
                }
                echo $html;
            }
        break;
    }
?>