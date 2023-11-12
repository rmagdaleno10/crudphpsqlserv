<?php 

namespace App\Controllers;

use App\Models\Task;
use Config\TwigConfig;

class DefaultController {

    public function index()
    {
        $twig = TwigConfig::getTwig();
        
        $tasks = Task::all();

        return $twig->render('home.twig', [
            'title' => 'Mi Sitio - Página de Inicio',
            'pagina_titulo' => '¡Bienvenido a mi sitio!',
            'contenido' => 'Este es el contenido de la página de inicio.',
            'year' => date('Y'),
            'tasks' => $tasks
        ]);
    }
}