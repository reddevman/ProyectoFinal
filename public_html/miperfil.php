<?php
require_once 'lib/bbdd.php';
require_once 'lib/seguridad.php';

$bbdd = new BBDD();
$seguridad = new Seguridad();

$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$apellidos = $_SESSION['apellidos'];
$email = $_SESSION['email'];

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
        if (
            isset($nombre) && !is_null($nombre) &&
            isset($apellidos) && !is_null($apellidos) &&
            isset($email) && !is_null($email)
        ) {
        ?>

            <div class="login-content">
                <h3 class="profile-title">Mi perfil</h3>

                <?php
                if ($_SESSION["tipo_error"] != null) {
                    echo "<h4 class=\"error\">Error: " . $_SESSION["tipo_error"] . "</h4>";
                }
                ?>

                <form name="profileForm" class="login-form" action="actualizar_perfil.php" method="post">
                    <input type='hidden' name='id' value='<?= $id ?>'>
                    <label for='email'>E-mail</label>
                    <input type='text' name='email' value='<?= $email ?>'>
                    <label for='nombre'>Nombre</label>
                    <input type='text' name='nombre' value='<?= $nombre ?>'>
                    <label for='apellidos'>Apellidos</label>
                    <input type='text' name='apellidos' value='<?= $apellidos ?>'>
                    <label for='contraseña'>Contraseña</label>
                    <input type='password' name='pass1' value=''>
                    <label for='contraseña'>Repite la contraseña</label>
                    <input type='password' name='pass2' value=''>
                    <input type='submit' value='ACTUALIZAR'>
                </form>
            <?php
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