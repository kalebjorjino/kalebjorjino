<?php
    class Cuantificacion extends Conectar{

        public function insert($reg_ape, $reg_nom, $reg_edad, $estb_id, $gen_1, $gen_2, $reg_fechSint,$reg_fechAisl,$depa_id,$provin_id,$dist_id,$reg_tos,$reg_nasal,$reg_difres,$reg_fiebre,$reg_escalofrios){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_sintomas (sint_id, reg_ape, reg_nom, reg_edad, estb_id , gen_1, gen_2, reg_fechSint, reg_fechAisl, depa_id, provin_id, dist_id, 
                  reg_tos, reg_nasal, reg_difres, reg_fiebre, reg_escalofrios) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);"; 
            $sql=$conectar->prepare($sql);
            
            $sql->bindValue(1, $reg_ape);

            $sql->bindValue(2, $reg_nom);
            
            $sql->bindValue(3, $reg_edad);

            $sql->bindValue(4, $estb_id);

            $sql->bindValue(5, $gen_1);

            $sql->bindValue(6, $gen_2);

            $sql->bindValue(7, $reg_fechSint);

            $sql->bindValue(8, $reg_fechAisl);

            $sql->bindValue(9, $depa_id);

            $sql->bindValue(10, $provin_id);

            $sql->bindValue(11, $dist_id);

            $sql->bindValue(12, $reg_tos);

            $sql->bindValue(13, $reg_nasal);

            $sql->bindValue(14, $reg_difres);

            $sql->bindValue(15, $reg_fiebre);

            $sql->bindValue(16, $reg_escalofrios);

            $sql->execute();

            return $resultado=$sql->fetchAll();
        }

    }
?>