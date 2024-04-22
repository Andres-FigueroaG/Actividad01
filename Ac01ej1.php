<?php

// Obtenemos el nombre del navegador
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Definimos un array con los nombres de los navegadores comunes
$navegadores = [
    'Chrome' => 'Google Chrome',
    'Firefox' => 'Mozilla Firefox',
    'Safari' => 'Apple Safari',
    'Edge' => 'Microsoft Edge',
    'Opera' => 'Opera',
];

// Recorremos el array de navegadores
foreach ($navegadores as $nombre => $patron) {
    // Buscamos el patrón del navegador en el User Agent
    if (preg_match("/{$patron}/i", $userAgent)) {
        // Si se encuentra el patrón, guardamos el nombre del navegador
        $nombreNavegador = $nombre;
        break;
    }
}

// Si no se encuentra el navegador, se establece un valor por defecto
if (!isset($nombreNavegador)) {
    $nombreNavegador = 'Navegador desconocido';
}

// Generamos el mensaje de bienvenida
$mensaje = "**¡Bienvenido!** Estás navegando con {$nombreNavegador}.";

// Mostramos el mensaje de bienvenida
echo $mensaje;

?>
