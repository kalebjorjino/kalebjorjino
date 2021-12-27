<?php
    require_once("../config/conexion.php");
    require_once("../models/Distritoreg.php");
    $distritoreg = new Distritoreg();
  
    switch($_GET["op"]){
        case "guardaryeditar":
            if(empty($_POST["dist_id"])){       
                $distritoreg->insert_distrito($_POST["dist_nom"]);     
            }
            else {
                $distritoreg->update_distrito($_POST["dist_id"],$_POST["dist_nom"]);
            }
        break;

        
      //colocar los campos en el datatable que seran visibles
       
        case "listar":
            $datos=$distritoreg->get_distrito();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["dist_id"];
                $sub_array[] = $row["dist_nom"];

                $sub_array[] = '<button type="button" onClick="editar('.$row["dist_id"].');"  id="'.$row["dist_id"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["dist_id"].');"  id="'.$row["dist_id"].'" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-trash"></i></button>';
    
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
            $distritoreg->delete_distrito($_POST["dist_id"]);
        break;

        case "mostrar";
        $datos=$distritoreg->get_distrito_x_id($_POST["dist_id"]);  
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $output["dist_id"] = $row["dist_id"];
                $output["dist_nom"] = $row["dist_nom"];
        
            }
            echo json_encode($output);
        }   
    break;
        
    
    }
?>
