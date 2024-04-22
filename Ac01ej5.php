<?php

// Definimos los arrays de nombres y apellidos
$nombres = ["Juan", "Pedro", "Maria", "Ana", "Carlos"];
$apellidos = ["Perez", "Lopez", "Garcia", "Martinez", "Gonzalez"];

// Creamos un array vacío para almacenar los nombres completos combinados
$nombresCompletos = [];

// Recorremos los arrays de nombres y apellidos de forma aleatoria
while (count($nombres) > 0 && count($apellidos) > 0) {
    // Generamos índices aleatorios para los arrays
    $indiceNombre = rand(0, count($nombres) - 1);
    $indiceApellido = rand(0, count($apellidos) - 1);

    // Extraemos los nombres y apellidos seleccionados
    $nombre = $nombres[$indiceNombre];
    $apellido = $apellidos[$indiceApellido];

    // Formateamos el nombre y apellido
    $nombreCompleto = ucfirst($nombre) . " " . ucfirst(strtolower($apellido));

    // Agregamos el nombre completo al array
    $nombresCompletos[] = $nombreCompleto;

    // Eliminamos los elementos utilizados de los arrays originales
    unset($nombres[$indiceNombre]);
    unset($apellidos[$indiceApellido]);
}

// Mostramos los nombres completos combinados
echo "Nombres completos combinados:\n";
echo implode("\n", $nombresCompletos);

?>
