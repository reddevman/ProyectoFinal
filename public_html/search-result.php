<?php
$input = strtolower($_GET['search']);

switch ($input) {
    case 'javascript':
        header('Location: https://developer.mozilla.org/es/docs/Web/JavaScript');
        break;
    case 'python':
        header('Location: https://www.google.es');
        break;
    case 'java':
        header('Location: https://developer.mozilla.org/es/docs/Web/JavaScript');
        break;
    case 'css':
        header('Location: https://developer.mozilla.org/es/docs/Web/JavaScript');
        break;
    
    default:
        # code...
        break;
}

?>