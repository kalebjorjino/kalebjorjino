<?php
    require_once("../config/conexion.php");
    require_once("../models/Registro.php");
    $registro = new Registro();

    switch($_GET["op"]){
        case "guardaryeditar":
            $registro->update_registro($_POST["reg_id"],$_POST["reg_ape"],$_POST["reg_nom"],$_POST["reg_telefono"],$_POST["reg_doc"],$_POST["reg_edad"],$_POST["reg_peso"],
            $_POST["reg_talla"],$_POST["depa_id"],$_POST["provin_id"],$_POST["dist_id"],$_POST["nacion_id"],$_POST["reg_direccion"]);     
        break;

        case "insert":
                $registro->insert_registro($_POST["us_id"],$_POST["reg_cod"],$_POST["reg_fech"],$_POST["estb_id"],$_POST["reg_ape"],$_POST["reg_nom"],$_POST["reg_telefono"],
                $_POST["reg_doc"],$_POST["reg_edad"],$_POST["reg_peso"],$_POST["reg_talla"],$_POST["gen"],$_POST["depa_id"],$_POST["provin_id"],$_POST["dist_id"],$_POST["nacion_id"],$_POST["reg_direccion"],$_POST["reg_descrip"]);  
        break;

      //colocar los campos en el datatable que seran visibles
        case "listar_x_us":
            $datos=$registro->listar_registro_x_us($_POST["us_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["reg_id"];
                $sub_array[] = $row["reg_cod"];
                $sub_array[] = $row["estb_nom"];
                $sub_array[] = $row["reg_ape"];
                $sub_array[] = $row["reg_nom"];
                $sub_array[] = $row["reg_doc"];
                $sub_array[] = $row["reg_edad"];

                if ($row["reg_estado"]=="Activo"){
                    $sub_array[] = '<span class="label label-pill label-success">Activo</span>';
                }else{
                    $sub_array[] = '<span class="label label-pill label-danger">No Activo</span>';
                }

                $sub_array[] = date("d/m/Y H:i:s", strtotime($row["fech_crea"]));
                $sub_array[] = '<button type="button" onClick="editar('.$row["reg_id"].');"  id="'.$row["reg_id"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["reg_id"].');"  id="'.$row["reg_id"].'" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="ver('.$row["reg_id"].');"  id="'.$row["reg_id"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalReconds"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "listar":
            $datos=$registro->listar_registro();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["reg_id"];
                $sub_array[] = $row["reg_cod"];
                $sub_array[] = $row["estb_nom"];
                $sub_array[] = $row["reg_ape"];
                $sub_array[] = $row["reg_nom"];
                $sub_array[] = $row["reg_doc"];
                $sub_array[] = $row["reg_edad"];

                if ($row["reg_estado"]=="Activo"){
                    $sub_array[] = '<span class="label label-pill label-success">Activo</span>';
                }else{
                    $sub_array[] = '<span class="label label-pill label-danger">No Activo</span>';
                }

                $sub_array[] = date("d/m/Y H:i:s", strtotime($row["fech_crea"]));
                $sub_array[] = '<button type="button" onClick="editar('.$row["reg_id"].');"  id="'.$row["reg_id"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["reg_id"].');"  id="'.$row["reg_id"].'" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="ver('.$row["reg_id"].');"  id="'.$row["reg_id"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalReconds"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        //Elimina los datos
        case "eliminar":
            $registro->delete_registro($_POST["reg_id"]);
        break;
//Muestra los datos para editar
        case "mostrar";
        $datos=$registro->get_registro_x_id($_POST["reg_id"]);  
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $output["reg_id"] = $row["reg_id"];
                $output["reg_ape"] = $row["reg_ape"];
                $output["reg_nom"] = $row["reg_nom"];
                $output["reg_telefono"] = $row["reg_telefono"];
                $output["reg_doc"] = $row["reg_doc"];
                $output["reg_edad"] = $row["reg_edad"];
                $output["reg_peso"] = $row["reg_peso"];
                $output["reg_talla"] = $row["reg_talla"];
                $output["depa_id"] = $row["depa_id"];
                $output["provin_id"] = $row["provin_id"];
                $output["dist_id"] = $row["dist_id"];
                $output["nacion_id"] = $row["nacion_id"];
                $output["reg_direccion"] = $row["reg_direccion"];
        
            }
            echo json_encode($output);
        }   
    break;


    
    }
?>

        