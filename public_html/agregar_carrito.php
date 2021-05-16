<?php
session_start();
$getId = $_GET['course_id'];
$arrayId = [];


if (!isset($_SESSION['idCursos']) && empty($_SESSION['idCursos'])) {
    array_push($arrayId, $getId);
    $_SESSION['idCursos'] = $arrayId;
} else {
    $arrayId = $_SESSION['idCursos'];

    if (!in_array($getId, $arrayId)) {
        array_push($arrayId, $getId);
        $_SESSION['idCursos'] = $arrayId;
    }
}

header('Location:carrito.php');



