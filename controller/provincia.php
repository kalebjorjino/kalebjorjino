<?php
    require_once("../config/conexion.php");
    require_once("../models/Provincia.php");
    $provincia = new Provincia();

    switch($_GET["op"]){
        case "combo":
            $datos = $provincia->get_provincia();
            if(is_array($datos)==true and count($datos)>0){
                $html= "<option></option>";
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['provin_id']."'>".$row['provin_nom']."</option>";
                }
                echo $html;
            }
        break;
    }
?>