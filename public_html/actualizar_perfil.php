<?php
require_once 'lib/bbdd.php';
require_once 'lib/seguridad.php';

$bbdd = new BBDD();
$seguridad = new Seguridad();

$id = $_SESSION['id'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$pass = $_POST['pass1'];

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

            <?php
            if (
                isset($email) && !is_null($email) &&
                isset($nombre) && !is_null($nombre) &&
                isset($apellidos) && !is_null($apellidos) &&
                isset($pass) && !is_null($pass)
            ) {

                if ($_POST['pass1'] == $_POST['pass2']) {
                    // Nuevo objeto que devuelve la función de actualizar
                    $updatedUser = $bbdd->actualizarUsuario($id, $email, $nombre, $apellidos, $pass);

                    if ($updatedUser != null) {
                        echo "<div class='update-wrapper'>";
                        echo "<h3 class='update-title'>Se han actualizado los datos del usuario correctamente.</h3><br>";
                        echo "<h4 class='update-subtitle'>Pulsa en <a class='update_link_home' href='index.php'>INICIO</a> para volver a la página principal.</h4>";
                        $seguridad->actualizarDatos($email, $nombre, $apellidos);
                    } else {
                        echo "Ha habido un error en la actualización " . $bbdd->getError();
                        echo "Pulsar en el <a href='miperfil.php'>ENLACE</a> para volver a la página de Mi Perfil";
                        echo "</div>";
                    }
                } else {
                    echo $seguridad->setError('La contraseña no coincide');
                    header('Location:miperfil.php');
                }
            } else {
                header('Location: index.php');
            }
            ?>

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