<?php

namespace Config;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigConfig
{
    private static $twig;

    private function __construct()
    {
        //var_dump(BASE_DIR.'/resources/views'); return;
        // Configurar Twig una vez (singleton)
        $loader = new FilesystemLoader([
            BASE_DIR . '/resources/views',
            BASE_DIR . '/resources/layouts',
            BASE_DIR . '/resources/templates'
        ]);

        //$loader->addPath(__DIR__.'/../resources/templates', 'templates'); // Namespace 'templates'
        self::$twig = new Environment($loader, [
            'cache' => $_ENV['APP_ENV'] === 'development' ? false : BASE_DIR.'/cache/twig'
        ]);
    }

    public static function getTwig(): Environment
    {
        // Devolver la instancia de Twig
        if (self::$twig === null) {
            new self(); // Inicializar solo si no se ha hecho antes
        }

        return self::$twig;
    }
}