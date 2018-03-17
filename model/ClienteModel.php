<?php
/**
 * Creado Por: Noeli Ovando
 * Date: 16/03/2018
 * Time: 11:05 AM
 */

class ClienteModel extends ModeloBase{
    private $table;

    public function __construct($adapter){
        $this->$table = 'cliente';
        parent::__construct($this->$table,$adapter);
    }

    public function getCliente(){
        $query = "SELECT * FROM cliente WHERE email='noeliovando@gmail.com'";
        $cliente = $this->ejecutarSql($query);
        return $cliente;
    }
}
?>