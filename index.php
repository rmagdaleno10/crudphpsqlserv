<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use CrudPhpSqlServ\App\Models\Task;

$obj = new Task();
$obj->title = "Tarea 1";
$obj->description = "Descripción 1";
$obj->status = "Pendiente";

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
//var_dump($_SERVER);


