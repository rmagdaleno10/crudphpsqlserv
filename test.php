<?php

// Curso Udemy - render2web
// Debug con la extensión de VSC - PHP Debug (XDebug3)
// 1. Se copia el todo la PHPInfo del servidor instalado e se ingresa en 'https://xdebug.org/wizard'
// 2. Nos devuelve la info interpreta y la opción de descargar un archivo .dll el cual le cambiamos
//    el nombre a php_xdebug.dll y lo copiamos a la carpeta de XAMPP 'C:\xampp\php\ext' y al final
//    le agregamos las lineas (puede cambiar la configuración según la versión, ver info de la ext.):
//    xdebug.mode = debug
//    xdebug.start_with_request = yes
//    zend_extension = C:\xampp\php\ext\php_xdebug
// 3. Nos vamos en VSC en las opciones a File\Preferences\Settings
// 4. Buscamos en la sección extensions\PHP y en PHP › Validate: Executable Path nos da la opción para
//    editar un archivo .json el cual abrimos y nos aseguramos tener la linea: "php.validate.executablePath": "C:\\xampp\\php\\php.exe"
// 5. Reiniciamos el servidor APACHE desde XAMPP
// 6. Listo para empezar a hacer debug.

$num1 = 55;
$num2 = 10;
$sum = $num1 + $num2;
$msg = "La suma es: ".$sum;
echo $msg;
