<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// Variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(BASE_DIR);
$dotenv->load();

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => $_ENV['DB_DRIVER'],
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_DATABASE'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASSWORD'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Hacer que Eloquent use el Capsule Manager
$capsule->setAsGlobal();

// Inicializar Eloquent (opcional)
$capsule->bootEloquent();
