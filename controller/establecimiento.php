<?php
    require_once("../config/conexion.php");
    require_once("../models/Establecimiento.php");
    $establecimiento = new Establecimiento();

    switch($_GET["op"]){
        case "combo":
            $datos = $establecimiento->get_establecimiento();
            if(is_array($datos)==true and count($datos)>0){
                $html= "<option></option>";
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['estb_id']."'>".$row['estb_nom']."</option>";
                }
                echo $html;
            }
        break;
    }
?>