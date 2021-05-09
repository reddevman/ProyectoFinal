<?php
    require_once 'lib/seguridad.php';
    
    $seguridad = new Seguridad();
	$_SESSION=[];
	session_destroy();
	header("Location:index.php");
?>