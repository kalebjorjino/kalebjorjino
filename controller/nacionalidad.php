<?php
    require_once("../config/conexion.php");
    require_once("../models/Nacionalidad.php");
    $nacionalidad = new Nacionalidad();

    switch($_GET["op"]){
        case "combo":
            $datos = $nacionalidad->get_nacionalidad();
            if(is_array($datos)==true and count($datos)>0){
                $html= "<option></option>";
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['nacion_id']."'>".$row['nacion_nom']."</option>";
                }
                echo $html;
            }
        break;
    }
?>