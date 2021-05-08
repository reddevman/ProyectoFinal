<?php
$input = strtolower($_GET['search']);

switch ($input) {
    case 'javascript':
        header('Location: ../public_html/courses.html');
        break;
    case 'python':
        header('Location: ../public_html/courses.html');
        break;
    case 'java':
        header('Location: ../public_html/courses.html');
        break;
    case 'css':
        header('Location: ../public_html/courses.html');
        break;
    
    default:
        # code...
        break;
}

?>