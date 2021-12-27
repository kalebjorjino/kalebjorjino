<?php
    class Registro extends Conectar{

        public function insert_registro($us_id,$reg_cod,$reg_fech,$estb_id,$reg_ape,$reg_nom,
                                        $reg_telefono,$reg_doc,$reg_edad,$reg_peso,$reg_talla,$gen,$depa_id,
                                        $provin_id,$dist_id,$nacion_id,$reg_direccion,$reg_descrip){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_registro (reg_id,us_id,reg_cod,reg_fech,estb_id,reg_ape,reg_nom,reg_telefono,reg_doc,
                              reg_edad,reg_peso,reg_talla,gen,depa_id,provin_id,dist_id,nacion_id,reg_direccion,reg_descrip,reg_estado,fech_crea,est) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,'Activo',now(),'1');"; 
            $sql=$conectar->prepare($sql);
            
            $sql->bindValue(1, $us_id);

            $sql->bindValue(2, $reg_cod);

            $sql->bindValue(3, $reg_fech);

            $sql->bindValue(4, $estb_id);

            $sql->bindValue(5, $reg_ape);

            $sql->bindValue(6, $reg_nom);

            $sql->bindValue(7, $reg_telefono);
           
            $sql->bindValue(8, $reg_doc);

            $sql->bindValue(9, $reg_edad);

            $sql->bindValue(10, $reg_peso);

            $sql->bindValue(11, $reg_talla);

            $sql->bindValue(12, $gen);

            $sql->bindValue(13, $depa_id);

            $sql->bindValue(14, $provin_id);

            $sql->bindValue(15, $dist_id);

            $sql->bindValue(16, $nacion_id);

            $sql->bindValue(17, $reg_direccion);

            $sql->bindValue(18, $reg_descrip);

            $sql->execute();

            return $resultado=$sql->fetchAll();
        }


    public function listar_registro_x_us($us_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT 
            tm_registro.reg_id,
            tm_registro.reg_cod,
            tm_registro.estb_id,
            tm_registro.reg_ape,
            tm_registro.reg_nom,
            tm_registro.reg_doc,
            tm_registro.reg_edad,
            tm_registro.reg_estado,
            tm_registro.fech_crea,
            tm_usuario.us_nom,
            tm_usuario.us_ap,
            tm_establecimiento.estb_nom
            FROM 
            tm_registro
            INNER join tm_establecimiento on tm_registro.depa_id = tm_establecimiento.estb_id
            INNER join tm_usuario on tm_registro.us_id = tm_usuario.us_id
            WHERE
            tm_registro.est = 1
            AND tm_usuario.us_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $us_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_registro(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT 
           tm_registro.reg_id,
            tm_registro.reg_cod,
            tm_registro.estb_id,
            tm_registro.reg_ape,
            tm_registro.reg_nom,
            tm_registro.reg_doc,
            tm_registro.reg_edad,
            tm_registro.reg_estado,
            tm_registro.fech_crea,
            tm_usuario.us_nom,
            tm_usuario.us_ap,
            tm_establecimiento.estb_nom
            FROM 
            tm_registro
            INNER join tm_establecimiento on tm_registro.depa_id = tm_establecimiento.estb_id
            INNER join tm_usuario on tm_registro.us_id = tm_usuario.us_id
        WHERE
            tm_registro.est = 1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    ///actualizar registro de listado y modal editar
    public function update_registro($reg_id,$reg_ape,$reg_nom,$reg_telefono,$reg_doc,$reg_edad,$reg_peso,$reg_talla,$depa_id,$provin_id,$dist_id,$nacion_id,$reg_direccion){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE tm_registro set 
        reg_ape = ?,
        reg_nom = ?,
        reg_telefono = ?,
        reg_doc = ?,
        reg_edad = ?,
        reg_peso = ?,
        reg_talla = ?,
        depa_id = ?,
        provin_id = ?,
        dist_id = ?,
        nacion_id = ?,
        reg_direccion = ?       
        where 
        reg_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $reg_ape);
        $sql->bindValue(2, $reg_nom);
        $sql->bindValue(3, $reg_telefono);
        $sql->bindValue(4, $reg_doc);
        $sql->bindValue(5, $reg_edad);
        $sql->bindValue(6, $reg_peso);
        $sql->bindValue(7, $reg_talla);
        $sql->bindValue(8, $depa_id);
        $sql->bindValue(9, $provin_id);
        $sql->bindValue(10, $dist_id);
        $sql->bindValue(11, $nacion_id);
        $sql->bindValue(12, $reg_direccion);
        $sql->bindValue(13, $reg_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    
    }

    public function delete_registro($reg_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE tm_registro SET est='0' where reg_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $reg_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    //seleciona los registro de la tabla mostrandolos en el controlador mostrar 
    public function get_registro_x_id($reg_id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM  tm_registro where reg_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $reg_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }



    public function get_registro(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM  tm_registro where est='1'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    // Obtener datos del registro segun reg_lab

    /*public function get_registro_reg_lab($reg_cod){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM  tm_registro
                LEFT JOIN tm_laboratorio ON tm_laboratorio.lab_id = tm_registro.lab_id
                LEFT JOIN tm_establecimiento ON tm_establecimiento.estb_id = tm_registro.estb_id
                WHERE reg_cod='$reg_cod'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetch(PDO::FETCH_ASSOC);
    }*/

}

?>