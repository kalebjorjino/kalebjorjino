<?php
    class Departamentoreg extends Conectar{

        public function insert_departamento($depa_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_departamento (depa_id,depa_nom,est) VALUES (NULL,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $depa_nom);
          
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_departamento($depa_id,$depa_nom){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_departamento set 
            depa_nom = ?
            where 
            depa_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $depa_nom);
            $sql->bindValue(2, $depa_id);
            $sql->execute();
        
        }


    public function delete_departamento($depa_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE tm_departamento SET est='0' where depa_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $depa_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_departamento_x_id($depa_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM  tm_departamento where depa_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $depa_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_departamento(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM  tm_departamento where est='1'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

}

?>