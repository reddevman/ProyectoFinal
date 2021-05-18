<?php
require_once 'lib/seguridad.php';
$seguridad = new Seguridad();
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
        <div class="login-content">
            <h3 class="login-title">REGISTRO DE USUARIO</h3>
            <?php
            if ($_SESSION["tipo_error"] != null) {
                echo "<h4 class=\"error\">Error: " . $_SESSION["tipo_error"] . "</h4>";
            }
            ?>
            <form action="registro_usuario.php" method="post" class="login-form">
                <label for="email">E-mail</label>

                <?php
                // Comprobación en caso de que ya haya una información de sesión previa en el navegador
                if ($_SESSION['id'] != null) {
                    echo "<input type='text' id='email' name='email' value='" . $_SESSION['email'] . "' required></br>";
                } else {
                    echo "<input autocomplete=\"off\" type=\"text\" id=\"email\" name=\"email\" required></br>";
                }
                ?>

                <label for="pass1">Contraseña</label>
                <input type="password" name="pass1" required>
                <label for="pass2">Repetir contraseña</label>
                <input type="password" name="pass2" required>

                <label for="nombre">Nombre</label>
                <?php
                if ($_SESSION['nombre'] != null) {
                    echo "<input type='text' id='nombre' name='nommbre' value='" . $_SESSION['nombre'] . "' required></br>";
                } else {
                    echo "<input autocomplete=\"off\" type=\"text\" id=\"nombre\" name=\"nombre\" required></br>";
                }
                ?>

                <label for="apellidos">Apellidos</label>
                <?php
                if ($_SESSION['apellidos'] != null) {
                    echo "<input type='text' id='apellidos' name='apellidos' value='" . $_SESSION['apellidos'] . "' required></br>";
                } else {
                    echo "<input autocomplete=\"off\" type=\"text\" id=\"apellidos\" name=\"apellidos\" required></br>";
                }
                ?>

                <input type="hidden" name="accion" value="registro">
                <input type="submit" value="REGISTRARSE">
            </form>
        </div>
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