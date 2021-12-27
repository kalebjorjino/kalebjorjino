<?php
    class Establecimiento extends Conectar{

        public function get_establecimiento(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_establecimiento WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }


        public function get_id($estb_nom){
            echo $estb_nom;
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT estb_id FROM tm_establecimiento WHERE estb_nom= '$estb_nom';";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $sql->fetchColumn();
        }
    }
?>