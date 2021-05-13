<?php
	session_start();
	$_SESSION['carrito']['curso'] = array('nombre' => 'Java', 'precio' => 15.99);
    var_dump($_SESSION['carrito']);
    echo "<br>";
    // foreach ($_SESSION['carrito']['curso'] as $curso) {
    //     echo $curso;
    //     echo "<br>";
    // }
    $_SESSION['cursos'] = array('Java' => array('precio' => 10.99, 'categoria' => 'web'));
    foreach ($_SESSION['cursos']['Java'] as $curso=>$descripcion) {
        echo $curso ."\n". $descripcion;
        echo "<br>"; 
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
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


    <!-- Carga mediante ajax $().load -->
    <footer id="footer_container">
        <!-- Mensaje de error en caso de que no se cargue bien el componente -->
        <span id="error"></span>
    </footer>
    <script src="/ProyectoFinal/static/js/jquery-3.6.0.min.js"></script>
    <script src="/ProyectoFinal/static/js/mainScript.js"></script>
    
</body>

</html>