<?php

require_once 'lib/bbdd.php';

$bbdd = new BBDD();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrito</title>
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
    <section class="main-cart-wrapper container12">
        <div class="cart-content">
            <h3>CARRITO<i class="far fa-shopping-cart"></i></h3>

            <?php

            session_start();
            if (!isset($_SESSION['idCursos']) || empty($_SESSION['idCursos'])) {

                echo "<div class='empty-cart-text'><span>LO SIENTO, EL CARRITO ESTÁ VACÍO...</span>
                <i class='far fa-sad-cry'></i>
                </div>
                <div class='link_wrapper'>
                <a class='link_courses' href='cursos.php'>Pulsa para ver los CURSOS</a>
                </div>";
            } else {


                $id = $_SESSION['idCursos'];
                $cursos = $bbdd->buscarCurso();
                $suma = 0;

                foreach ($id as $curso) {
                    foreach ($cursos as $valor) {
                        if ($curso == $valor['id']) {
                            echo "
                            <div class='course-content'>
                                <img src='" . $valor['img'] . "' alt=''>
                                <h2 class='title-course'>" . $valor['nombre'] . "</h2>
                                <span class='price-course'>" . $valor['precio'] . "€</span>
                                <a class='btn_delete' href='borrar_producto.php?item_id=" . $valor['id'] . "'>x</a>
                            </div>
                            <hr>
                            ";
                            $suma += $valor['precio'];
                        }
                    }
                }
                echo "<div class='sum-container'>TOTAL: $suma €</div>
                <div class='delete_cart'>
                <a class='link_courses' href='borrar_carrito.php'>Pulsa para BORRAR el carrito</a>
                </div>
                ";
            }
            ?>


        </div>
    </section>
    <!-- Carga mediante ajax $().load -->
    <footer id="footer_container">
        <!-- Mensaje de error en caso de que no se cargue bien el componente -->
        <span id="error"></span>
    </footer>
    <script src="/ProyectoFinal/static/js/jquery-3.6.0.min.js"></script>
    <script src="/ProyectoFinal/static/js/mainScript.js"></script>

</body>

</html>