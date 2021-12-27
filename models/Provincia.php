<?php
    class Provincia extends Conectar{

        public function get_provincia(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_provincia WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>