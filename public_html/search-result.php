<?php

if (isset($_GET['search']) && !empty($_GET['search'])) {

    $input = strtolower($_GET['search']);

    switch ($input) {
        case 'javascript':
            header('Location: ../public_html/cursos.php');
            break;
        case 'python':
            header('Location: ../public_html/cursos.php');
            break;
        case 'java':
            header('Location: ../public_html/cursos.php');
            break;
        case 'css':
            header('Location: ../public_html/cursos.php');
            break;
        
        default:
            # code...
            break;
    }
} else {
    header('Location:index.php');
}
