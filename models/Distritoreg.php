<?php
    class Distritoreg extends Conectar{

        public function insert_distrito($dist_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_distrito (dist_id,dist_nom,est) VALUES (NULL,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $dist_nom);        
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_distrito($dist_id,$dist_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_distrito set 
            dist_nom = ?
            where 
            dist_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $dist_nom);
            $sql->bindValue(2, $dist_id);
            $sql->execute();
        
        }


    public function delete_distrito($dist_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE tm_distrito SET est='0' where dist_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $dist_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_distrito_x_id($dist_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM  tm_distrito where dist_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $dist_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_distrito(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM  tm_distrito where est='1'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

}

?>