<?php
    require_once("../config/conexion.php");
    require_once("../models/Departamentoreg.php");
    $departamentoreg = new Departamentoreg();
  
    switch($_GET["op"]){
        case "guardaryeditar":
            if(empty($_POST["depa_id"])){       
                $departamentoreg->insert_departamento($_POST["depa_nom"]);     
            }
            else {
                $departamentoreg->update_departamento($_POST["depa_id"],$_POST["depa_nom"]);
            }
        break;

        
      //colocar los campos en el datatable que seran visibles
       
        case "listar":
            $datos=$departamentoreg->get_departamento();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["depa_id"];
                $sub_array[] = $row["depa_nom"];

                $sub_array[] = '<button type="button" onClick="editar('.$row["depa_id"].');"  id="'.$row["depa_id"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["depa_id"].');"  id="'.$row["depa_id"].'" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-trash"></i></button>';
    
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalReconds"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "eliminar":
            $departamentoreg->delete_departamento($_POST["depa_id"]);
        break;

        case "mostrar";
        $datos=$departamentoreg->get_departamento_x_id($_POST["depa_id"]);  
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $output["depa_id"] = $row["depa_id"];
                $output["depa_nom"] = $row["depa_nom"];
        
            }
            echo json_encode($output);
        }   
    break;
        
    
    }
?>
