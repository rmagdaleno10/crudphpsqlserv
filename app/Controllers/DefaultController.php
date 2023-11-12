<?php 

namespace App\Controllers;

use Config\TwigConfig;

class DefaultController {

    public function index()
    {
        $twig = TwigConfig::getTwig();
        
        return $twig->render('home.twig', [
            'title' => 'Mi Sitio - Página de Inicio',
            'pagina_titulo' => '¡Bienvenido a mi sitio!',
            'contenido' => 'Este es el contenido de la página de inicio.',
            'year' => date('Y'),
        ]);
    }
}