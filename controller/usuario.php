<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuario = new Usuario();

    switch($_GET["op"]){
        case "guardaryeditar":
            if(empty($_POST["us_id"])){       
                $usuario->insert_usuario($_POST["us_nom"],$_POST["us_ap"],$_POST["us_correo"],$_POST["us_pass"],$_POST["rol_id"]);     
            }
            else {
                $usuario->update_usuario($_POST["us_id"],$_POST["us_nom"],$_POST["us_ap"],$_POST["us_correo"],$_POST["us_pass"],$_POST["rol_id"]);
            }
        break;

        case "listar":
            $datos=$usuario->get_usuario();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["us_nom"];
                $sub_array[] = $row["us_ap"];
                $sub_array[] = $row["us_correo"];
                $sub_array[] = $row["us_pass"];

                if ($row["rol_id"]=="1"){
                    $sub_array[] = '<span class="label label-pill label-success">Usuario</span>';
                }else{
                    $sub_array[] = '<span class="label label-pill label-info">Soporte</span>';
                }

                $sub_array[] = '<button type="button" onClick="editar('.$row["us_id"].');"  id="'.$row["us_id"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["us_id"].');"  id="'.$row["us_id"].'" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-trash"></i></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "eliminar":
            $usuario->delete_usuario($_POST["us_id"]);
        break;

        case "mostrar";
            $datos=$usuario->get_usuario_x_id($_POST["us_id"]);  
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["us_id"] = $row["us_id"];
                    $output["us_nom"] = $row["us_nom"];
                    $output["us_ap"] = $row["us_ap"];
                    $output["us_correo"] = $row["us_correo"];
                    $output["us_pass"] = $row["us_pass"];
                    $output["rol_id"] = $row["rol_id"];
                }
                echo json_encode($output);
            }   
        break;

        case "total";
            $datos=$usuario->get_usuario_total_x_id($_POST["us_id"]);  
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["TOTAL"] = $row["TOTAL"];
                }
                echo json_encode($output);
            }
        break;


        case "grafico";
            $datos=$usuario->get_usuario_grafico($_POST["us_id"]);  
            echo json_encode($datos);
        break;

        case "combo";
            $datos = $usuario->get_usuario_x_rol();
            if(is_array($datos)==true and count($datos)>0){
                $html.= "<option label='Seleccionar'></option>";
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['usu_id']."'>".$row['usu_nom']."</option>";
                }
                echo $html;
            }
        break;

 
    }
?>