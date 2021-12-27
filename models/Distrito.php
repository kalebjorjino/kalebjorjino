<?php
    class Distrito extends Conectar{

        public function get_distrito(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_distrito WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>