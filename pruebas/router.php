<?php

/*
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;

// Crea una colección de rutas
$routes = new RouteCollection();
$routes->add('home', new Route('/', ['_controller' => 'App\\Controllers\\DefaultController::index']));

// Configura el contexto de la solicitud
$context = new RequestContext('/');

// Crea un matcher de URL
$matcher = new UrlMatcher($routes, $context);

// Intenta hacer coincidir la URL actual con una ruta
try {
    $parameters = $matcher->match($_SERVER['REQUEST_URI']);

    // Extrae el controlador y la acción de la ruta
    list($controller, $action) = explode('::', $parameters['_controller']);

    // Instancia el controlador y llama a la acción
    $controllerInstance = new $controller();
    $response = $controllerInstance->$action();

    // Imprime la respuesta
    echo $response;
} catch (Exception $e) {
    // Manejo de errores 404 o cualquier otro error
    echo 'Página no encontrada: '.$e->getMessage();
}
*/

/*
use App\Models\Task;

$obj = new Task();
$obj->title = "Tarea 1";
$obj->description = "Descripción 1";
$obj->status = "Pendiente";

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
*/
//var_dump($_SERVER);
