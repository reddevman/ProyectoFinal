<?php
require_once 'lib/seguridad.php';

$seguridad = new Seguridad();

if ($_SESSION['id'] != null) :
    header('Location:index.php');
else :
?>

    <!DOCTYPE html>
    <html lang='es'>


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
                <div class="offer-content-wrapper">
                    <p>
                        Obtén un <span>10% de descuento</span> en nuevos registros :)
                    </p>
                </div>
                <h3 class="login-title">INICIA SESIÓN...</h3>
                <form class="login-form" action="login_usuario.php" method="post">
                    <label for="email">E-mail</label>
                    <input type="text" autocomplete="off" name="email">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="pass">
                    <input type="submit" value="ENTRAR">
                </form>
                <div class="register-link">
                    <a href="registro.php">¡O REGÍSTRATE YA!</a>
                </div>
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
<?php
    endif;
?>