<?php
/**
 * Creado por: Noeli Ovando
 * Date: 16/03/2018
 * Time: 09:19 AM
 */

function cargarControlador($controller){
    $controlador = ucwords($controller).'Controller';
    $strFileController = 'controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';

    if(!is_file($strFileController)){
        $strFileController = 'controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
    }
    require_once $strFileController;
    $controllerObj = new $controlador();
    return $controllerObj;
}

function cargarAccion($controllerObj,$action){
    $accion = $action;
    $controllerObj->accion();
}

function lanzarAccion($controllerObj){
    if(isset($_GET["action"])&&method_exists($controllerObj,$_GET["action"])){
        cargarAccion($controllerObj,$_GET["action"]);
    }else{
        cargarAccion($controllerObj,ACCION_DEFECTO);
    }
}