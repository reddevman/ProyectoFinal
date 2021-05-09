<?php
class Seguridad
{

    # CONSTRUCTOR BÁSICO QUE ES EL QUE CREARÁ Y MANTENDRÁ LA SESIÓN
    function __construct()
    {
        session_start();
        if (isset($_SESSION['id'])) {
            $this->id = $_SESSION['id'];
        } else {
            $_SESSION['id'] = null;
        }

        if (!isset($_SESSION["email"])) {
            $_SESSION["email"] = null;
        }

        if (!isset($_SESSION["nombre"])) {
            $_SESSION["nombre"] = null;
        }

        if (!isset($_SESSION["apellidos"])) {
            $_SESSION["apellidos"] = null;
        }

        if (!isset($_SESSION["tipo_error"])) {
            $_SESSION["tipo_error"] = null;
        }
    }


    # FUNCIÓN PARA AÑADIR EL USUARIO A LA SESIÓN
    public function addId($id)
    {
        $_SESSION["id"] = $id;
        $this->id = $id;
    }

    # FUNCIÓN QUE BORRA LOS DATOS DE LA SESIÓN CUANDO NO SON NECESARIOS
    public function borrarDatos()
    {
        $_SESSION["email"] = null;
        $_SESSION["nombre"] = null;
        $_SESSION["apellidos"] = null;
        $_SESSION["tipo_error"] = null;
        session_destroy();
    }

    # FUNCIÓN DE SEGURIDAD PARA SANEAR STRING DEL FORMULARIO
    function sanearString($string)
    {
        $string = stripslashes($string);
        $string = strip_tags($string);
        $string = htmlentities($string);
        return $string;
    }

    # FUNCIÓN DE SEGURIDAD PARA SANEAR SENTENCIA SQL
    // function sanearMySQL($connection, $string)
    // {
    //     $string = $this->getConexion()->real_escape_string($string);
    //     $string = $this->sanearString($string);
    //     return $string;
    // }

    # FUNCIÓN PARA ESTABLECER UN MENSAJE DE ERROR
    public function setError($tipo_error)
    {
        $_SESSION["tipo_error"] = $tipo_error;
    }
}
