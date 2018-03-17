<?php
/**
 * Creado Por: Noeli Ovando
 * Date: 16/03/2018
 * Time: 11:19 AM
 */

class ClienteController extends ControladorBase{
    public $conectar;
    public $adapter;

    public function __construct(){
        parent::__construct();
        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }

    public function index(){
        $cliente = new Cliente($this->adapter);
        $allclientes = $cliente->getAll();
        $this->view("index",array(
            "allclientes"=>$allclientes,
            "Hola" => "CURSO PHP CRUD"
        ));
    }

    public function crear(){
        echo "entro en crear";
        if(isset($_POST["nombre"])){
            $cliente = new Cliente($this->adapter);

            $cedula = $_POST["cedula"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $email = $_POST["email"];


            $cliente->setCedula($cedula);
            $cliente->setNombre($nombre);
            $cliente->getApellido($apellido);
            $cliente->setDireccion($direccion);
            $cliente->setTelefono($telefono);
            $cliente->setEmail($email);

            $save = $cliente->save();
        }

        $this->redirect("Cliente","index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id = (int)$_GET["id"];
            $cliente = new Cliente($this->adapter);
            $cliente->deleteById($id);
            $this->redirect();
        }
    }
}