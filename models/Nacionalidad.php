<?php
    class Nacionalidad extends Conectar{

        public function get_nacionalidad(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_nacionalidad WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>

