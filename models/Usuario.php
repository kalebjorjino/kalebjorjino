<?php
    class Usuario extends Conectar{

        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["us_correo"];
                $pass = $_POST["us_pass"];
                $rol = $_POST["rol_id"];
                if(empty($correo) and empty($pass)){
                    header("Location:".conectar::ruta()."index.php?m=2");
					exit();
                }else{
                    $sql = "SELECT * FROM tm_usuario WHERE us_correo=? and us_pass=? and rol_id=? and est=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->bindValue(3, $rol);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["us_id"]=$resultado["us_id"];
                        $_SESSION["us_nom"]=$resultado["us_nom"];
                        $_SESSION["us_ap"]=$resultado["us_ap"];
                        $_SESSION["rol_id"]=$resultado["rol_id"];
                        header("Location:".Conectar::ruta()."view/Home/");
                        exit(); 
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }

        public function insert_usuario($us_nom,$us_ap,$us_correo,$us_pass,$rol_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_usuario (us_id, us_nom, us_ap, us_correo, us_pass, rol_id, fech_crea, fech_mod, fech_elim, est) VALUES (NULL,?,?,?,?,?,now(), NULL, NULL, '1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $us_nom);
            $sql->bindValue(2, $us_ap);
            $sql->bindValue(3, $us_correo);
            $sql->bindValue(4, $us_pass);
            $sql->bindValue(5, $rol_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_usuario($us_id,$us_nom,$us_ap,$us_correo,$us_pass,$rol_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_usuario set 
                us_nom = ?,
                us_ap = ?,
                us_correo = ?,
                us_pass = ?,
                rol_id = ?
                WHERE
                us_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $us_nom);
            $sql->bindValue(2, $us_ap);
            $sql->bindValue(3, $us_correo);
            $sql->bindValue(4, $us_pass);
            $sql->bindValue(5, $rol_id);
            $sql->bindValue(6, $us_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_usuario($us_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_usuario SET est='0' where us_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $us_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_usuario(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM  tm_usuario where est='1'";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_usuario_x_id($us_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM  tm_usuario where us_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $us_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_usuario_total_x_id($us_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT COUNT(*) as TOTAL FROM tm_registro where est = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $us_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }


        public function get_usuario_grafico($us_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT tm_establecimiento.estb_nom as nom,COUNT(*) AS total
                FROM   tm_registro  JOIN  
                    tm_establecimiento ON tm_registro.estb_id = tm_establecimiento.estb_id  
                WHERE    
                tm_registro.est = 1
                and tm_registro.us_id = ?
                GROUP BY 
                tm_establecimiento.estb_nom 
                ORDER BY total DESC";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $us_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        } 

    }
?>