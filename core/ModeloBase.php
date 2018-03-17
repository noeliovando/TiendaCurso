<?php
/**
 * Creado por: Noeli Ovando
 * Date: 15/03/2018
 * Time: 10:16 PM
 */

class ModeloBase extends EntidadBase{
    private $table;

    public  function __construct ($table,$adapter){
        $this->table = (string) $table;
        parent::__construct ($table,$adapter);
    }

    public function ejecutarSql($query){
        $query=$this->db()->query($query);

        if($query){
            if($query->num_rows>1){
                while($row = $query->fetch_object()){
                    $resultSet[] = $row;
                }
            }elseif($query->num_rows == 1){
               if($row = $query->fetch_object()) {
                   $resultSet = $row;
               }
            }else{
                $resultSet=false;
            }
        }else{
            $resultSet=false;
        }
        return $resultSet;
    }
}
