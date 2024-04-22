<?php

// Función para contar la frecuencia de caracteres en una cadena
function contarFrecuenciaCaracteres($cadena, $caracter) {
    $contador = 0;
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($cadena[$i] === $caracter) {
            $contador++;
        }
    }
    return $contador;
}

// Función para obtener las vocales únicas de una cadena
function obtenerVocalesUnicas($cadena) {
    $vocalesUnicas = [];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = strtolower($cadena[$i]);
        if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) {
            if (!in_array($caracter, $vocalesUnicas)) {
                $vocalesUnicas[] = $caracter;
            }
        }
    }
    return $vocalesUnicas;
}

// Obtenemos la frase del usuario
$frase = trim(fgets(STDIN));

// Contamos la frecuencia de la letra "o"
$frecuenciaO = contarFrecuenciaCaracteres($frase, "o");

// Obtenemos las vocales únicas
$vocalesUnicas = obtenerVocalesUnicas($frase);

// Mostramos los resultados
echo "Cantidad de \"o\": $frecuenciaO\n";

echo "Vocales que aparecen: " . implode(", ", $vocalesUnicas) . "\n";

// Contamos la frecuencia de cada vocal
$frecuenciaVocales = [];
foreach ($vocalesUnicas as $vocal) {
    $frecuenciaVocales[$vocal] = contarFrecuenciaCaracteres($frase, $vocal);
}

echo "Frecuencia de cada vocal:\n";
foreach ($frecuenciaVocales as $vocal => $frecuencia) {
    echo "$vocal: $frecuencia\n";
}

?>
