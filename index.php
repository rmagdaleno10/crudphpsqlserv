<?php

require_once 'vendor/autoload.php';

use Router\RouterDispatch;

// Variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//var_dump($_ENV);
//die();



RouterDispatch::dispatch();



