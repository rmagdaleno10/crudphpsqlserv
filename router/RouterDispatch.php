<?php

namespace Router;

use Exception;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Router\RouteCollectionBuilder;

class RouterDispatch
{
    public static function dispatch(): void
    {
        $routes = RouteCollectionBuilder::build();

        $context = new RequestContext('/');
        $matcher = new UrlMatcher($routes, $context);

        try {
            $parameters = $matcher->match($_SERVER['REQUEST_URI']);
            list($controller, $action) = explode('::', $parameters['_controller']);

            $controllerInstance = new $controller();
            $response = $controllerInstance->$action();

            echo $response;
        } catch (Exception $e) {
            echo 'Página no encontrada: '.$e->getMessage();
        }
    }
}