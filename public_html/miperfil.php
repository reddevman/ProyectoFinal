<?php
require_once 'lib/bbdd.php';
require_once 'lib/seguridad.php';

$bbdd = new BBDD();
$seguridad = new Seguridad();

$nombre = $_SESSION['nombre'];
$apellidos = $_SESSION['apellidos'];
$email = $_SESSION['email'];
$pass = $_SESSION['pass'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login y Registro</title>
    <link rel="stylesheet" href="/ProyectoFinal/static/css/mainStyles.css">
    <link rel="shortcut icon" href="#">
    <script src="/ProyectoFinal/static/js/34ab2cdb42.js"></script>
</head>

<body>
    <!-- Carga mediante ajax $().load -->
    <header id="header_container">
        <!-- Mensaje de error en caso de que no se cargue bien el componente -->
        <span id="error"></span>
    </header>

    <div class="main-login-wrapper">
        <div class="bg-image">
            <img src="../static/images/sky-person.jpg" alt="">
        </div>

        <?php

        $id = $_SESSION['id'];

        if (
            isset($nombre) && !is_null($nombre) &&
            isset($apellidos) && !is_null($apellidos) &&
            isset($email) && !is_null($email)) {

            $existUser = $bbdd->buscarUsuario($id, $email);

            if ($existUser != null) {

                if (password_verify($pass, $existUser->getPass())) {
        ?>
                    <div class="login-content">
                        <form class="login-form" action="actualizar_perfil.php" method="post">
                            <input type='hidden' name='id' value='<?= $id ?>'>
                            <label for='email'>e-mail</label>
                            <input type='text' name='email' value='<?= $existUser->getEmail() ?>'>
                            <label for='nombre'>Nombre</label>
                            <input type='text' name='nombre' value='<?= $existUser->getNombre() ?>'>
                            <label for='apellidos'>Apellidos</label>
                            <input type='text' name='apellidos' value='<?= $existUser->getApellidos() ?>'>
                            <label for='contraseña'>Contraseña</label>
                            <input type='password' name='pass' value=''>
                            <input type='submit' value='ACTUALIZAR'>
                        </form>
            <?php
                } else {

                    echo "Las contraseñas no coinciden";
                    echo "<a href='login.php'>Pulsar para volver a la pantalla de login</a>";
                }
            } else {
                echo "El usuario no existe en la base de datos";
                echo "<a href='login.php'>Pulsar para volver a la pantalla de login</a>";
            }
        } else {
            header('Location:index.php');
        }
        echo "</div>";
            ?>
                    </div>

                    <!-- Carga mediante ajax $().load -->
                    <footer id="footer_container">
                        <!-- Mensaje de error en caso de que no se cargue bien el componente -->
                        <span id="error"></span>
                    </footer>
                    <script src="/ProyectoFinal/static/js/jquery-3.6.0.min.js"></script>
                    <script src="/ProyectoFinal/static/js/mainScript.js"></script>

</body>

</html>