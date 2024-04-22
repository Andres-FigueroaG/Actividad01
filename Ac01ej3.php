<?php

// Definimos el límite superior
$limite = 110;

// Creamos un array vacío para almacenar los números primos
$numerosPrimos = [];

// Generamos números aleatorios hasta obtener N números primos
$contador = 0;
while ($contador < $limite) {
    // Generamos un número aleatorio entre 2 y el límite superior
    $numero = rand(2, $limite);

    // Verificamos si el número es primo
    if (esPrimo($numero)) {
        // Agregamos el número primo al array
        $numerosPrimos[] = $numero;

        // Incrementamos el contador
        $contador++;
    }
}

// Mostramos los números primos
echo "Números primos generados: ";
echo implode(", ", $numerosPrimos);

// Función para verificar si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}

?>
