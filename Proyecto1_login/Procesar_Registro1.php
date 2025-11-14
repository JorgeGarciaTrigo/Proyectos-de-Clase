<?php

echo "<link rel='stylesheet' href='ContenidoPR1.CSS'>";
echo "<body>";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$archivo = "Usuarios1.txt";

// Si no existe, crearlo vacío
if (!file_exists($archivo)) {
    file_put_contents($archivo, "");
}

// Leer archivo completo
$lineas = file($archivo, FILE_IGNORE_NEW_LINES);

$existe = false;

// Comprobar si el usuario ya está registrado
foreach ($lineas as $linea) {

    // Evita líneas vacías o mal formadas
    if (trim($linea) === "") continue;

    list($user, $hash) = explode(":", $linea);

    if ($user === $usuario) {
        $existe = true;
        break;
    }
}

if ($existe) {

    echo "<div class='Titulo1'>";
    echo "<h1>El usuario ya existe</h1>";
    echo "</div>";

    echo "<div class='Cuenta1'>";
    echo "<p><a href='Registro1.php'>Volver al registro</a></p>";
    echo "</div>";

    echo "</body>";
    exit;
}

// Registrar usuario nuevo
$file = fopen($archivo, "a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
fclose($file);

echo "<div class='Titulo1'>";
echo "<h1>Usuario registrado correctamente</h1>";
echo "</div>";

echo "<div class='Cuenta1'>";
echo "<p><a href='Login1.php'>Iniciar Sesion</a></p>";
echo "</div>";

echo "</body>";

?>
