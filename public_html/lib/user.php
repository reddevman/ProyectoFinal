<?php
class User
{

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $pass;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of apellido
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellido
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
