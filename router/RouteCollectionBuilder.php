<?php 

namespace Router;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class RouteCollectionBuilder
{
    public static function build(): RouteCollection
    {
        $routes = new RouteCollection();

        $routes->add('home', new Route('/', ['_controller' => 'App\\Controllers\\DefaultController::index']));

        // Agrega más rutas según sea necesario

        return $routes;
    }
}