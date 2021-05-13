<?php
$input = strtolower($_GET['search']);

switch ($input) {
    case 'javascript':
        header('Location: ../public_html/courses.php');
        break;
    case 'python':
        header('Location: ../public_html/courses.php');
        break;
    case 'java':
        header('Location: ../public_html/courses.php');
        break;
    case 'css':
        header('Location: ../public_html/courses.php');
        break;
    
    default:
        # code...
        break;
}

?>