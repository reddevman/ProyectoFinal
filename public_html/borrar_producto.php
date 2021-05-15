<?php

$item_id = $_GET["item_id"];
session_start();
if (!empty($_SESSION["idCursos"])) {
    foreach ($_SESSION["idCursos"] as $select => $val) {
        if($val == $item_id)
        {
            unset($_SESSION["idCursos"][$select]);
        }
    }
}

header('Location:carrito.php');
