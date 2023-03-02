<?php

include './App/Controller/EstagioController.php';
include './App/Controller/PontoController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo"a";
        break;

    case '/estagiarios':
        EstagioController::index();
        break;

    case '/estagio/form':
        EstagioController::form();
        break;
        
    case '/estagio/form/save':
        EstagioController::save();
        break;
    
    case '/estagio/ponto':
        PontoController::form();
        break;
    
    case '/estagio/ponto/save':
            PontoController::save();
            break;

    default:
        echo "Error 404";
        break;
}
?>