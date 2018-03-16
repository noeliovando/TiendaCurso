<?php
/**
 * Creado por: Noeli Ovando
 * Date: 16/03/2018
 * Time: 10:31 AM
 */

class Usuario extends EntidadBase{
    private $id,$cedula,$nombre,$apellido,$direccion,$telefono,$email;

    public function __construct($table){
        $table = 'cliente';
        parent::__construct($table);
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }


    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @param mixed $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function save(){
        $query = "INSERT INTO usuario(id,cedula,nombre,apellido,direccion,telefono,email) "
            ."VALUES (NULL,"
            ."'".$this->cedula."',"
            ."'".$this->nombre."',"
            ."'".$this->apellido."',"
            ."'".$this->direccion."',"
            ."'".$this->telefono."',"
            ."'".$this->email."',"
            .")";
        $save = $this->db()->query($query);
        return $save;
    }
}