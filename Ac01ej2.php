<?php

// Definimos los usuarios válidos
$usuariosValidos = ["Juan", "Pedro", "Maria", "Raul"];

// Definimos la contraseña válida
$contrasenaValida = "D153n0W3b2";

// Obtenemos los datos del usuario
$usuario = $_POST["usuario"] ?? "";
$contrasena = $_POST["contrasena"] ?? "";

// Validamos el usuario y la contraseña
$esValido = false;

foreach ($usuariosValidos as $usuarioValido) {
    if ($usuario === $usuarioValido && $contrasena === $contrasenaValida) {
        $esValido = true;
        break;
    }
}

// Generamos el mensaje de respuesta
if ($esValido) {
    echo "**¡Bienvenido {$usuario}!** Has iniciado sesión correctamente.";
} else {
    echo "**Usuario o contraseña incorrectos.**";
}

?>
