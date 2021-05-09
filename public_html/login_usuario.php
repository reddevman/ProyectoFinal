<?php

require_once 'lib/bbdd.php';
require_once 'lib/seguridad.php';

$bbdd = new BBDD();
$seguridad = new Seguridad();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login y Registro</title>
    <link rel="stylesheet" href="../static/css/mainStyles.css">
    <link rel="shortcut icon" href="#">
    <script src="../static/js/34ab2cdb42.js"></script>
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

    $pass = $_POST['pass'];

    if (isset($_POST['email']) && !is_null($_POST['email']) &&
        isset($_POST['pass']) && !is_null($_POST['pass'])) {

        $existUser = $bbdd->buscarUsuario(null, $_POST['email']);

        if ($existUser != null) {

            if (password_verify($pass, $existUser->getPass())) {
                $id = $existUser->getId();
                $seguridad->addId($id);
                $_SESSION['nombre'] = $existUser->getNombre();
                $_SESSION['apellidos'] = $existUser->getApellidos();
                $_SESSION['email'] = $existUser->getEmail();
                $_SESSION['pass'] = $existUser->getPass();
?>
            <div class="login-content">
                <h3 class="login-title">Sesión iniciada, Hola <span><?=$existUser->getNombre()?></span>.</h3>
                <p class="link_option">Pulsa en el enlace que prefieras:</p>
                <a class="link_home" href="index.php">Ir a Inicio</a></div>
<?php

        } else {
           
            echo "<h3 class='login-title'>Las contraseñas no coinciden</h3>";
            echo "<a class='link_home' href='login.php'>Pulsar para volver a la pantalla de login</a>";
        }

        } else {
        echo "<h3 class=\"login-title\">El usuario no existe en la base de datos</h3>";
        echo "<a class='link_home' href='login.php'>Pulsar para volver a la pantalla de login</a>";
        }
} else {
    header('Location:index.php');
}
?>
            <!-- </div> -->
    </div>

    <!-- Carga mediante ajax $().load -->
    <footer id="footer_container">
        <!-- Mensaje de error en caso de que no se cargue bien el componente -->
        <span id="error"></span>
    </footer>
    <script src="../static/js/jquery-3.6.0.min.js"></script>
    <script src="../static/js/mainScript.js"></script>

</body>

</html>