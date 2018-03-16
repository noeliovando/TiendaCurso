<?php
/**
 * Creado por: Noeli Ovando
 * Date: 16/03/2018
 * Time: 09:00 AM
 */

class AyudaVistas{
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&accion=".$accion;
        return $urlString;
    }
}