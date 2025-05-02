<?php
session_start();

require_once '../app/controllers/SexoController.php';

$requestUri = $_SERVER["REQUEST_URI"];
$basePath = '/apple6b/public/';

// Remover el prefijo basePath
$route = str_replace($basePath, '', $requestUri);
$route = strtok($route, '?'); // Quitar parámetros GET

$controller = new SexoController();

switch ($route) {
    case '':
    case 'sexo':
    case 'sexo/index':
        $controller->index();
        break;

    case 'sexo/edit':
        if (isset($_GET['idsexo'])) {
            $controller->edit($_GET['idsexo']);
        } else {
            echo "Error: Falta el ID para editar.";
        }
        break;
    case 'sexo/eliminar':
        if (isset($_GET['idsexo'])) {
            $controller->eliminar($_GET['idsexo']);
        } else {
            echo "Error: Falta el ID para editar.";
        }
        break;
	
case 'sexo/delete':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->delete();
    }
    break;




case 'sexo/update':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->update();
    }
    break;



    default:
        echo "Error 404: Página no encontrada.";
        break;
}
