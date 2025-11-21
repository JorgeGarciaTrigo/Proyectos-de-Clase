<?php 
include "Conexion2.php";

echo "<link rel='stylesheet' href='Contenido2.css'>";

echo "<div class='burbuja b1'></div>";
echo "<div class='burbuja b2'></div>";
echo "<div class='burbuja b3'></div>";
echo "<div class='burbuja b4'></div>";
echo "<div class='burbuja b5'></div>";

$usuario = $_POST['Usuario'];
$password = $_POST['Password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$check = $conn->prepare("SELECT Usuario FROM usuarios WHERE Usuario = ?");
$check->bind_param("s", $usuario);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {

    echo "<h1>Vaya, hay un problema,</h1>";
    echo "<h1>El dueño de esa embarcación ya está registrado</h1><br>";
    echo "<p><a href='Registro2.php'>Volver al registro del pescador</a></p>";

} else {

    $stmt = $conn->prepare("INSERT INTO usuarios (Usuario, Password) VALUES (?,?)");
    $stmt->bind_param("ss", $usuario, $hash);

    if ($stmt->execute()) {

        echo "<h1>Bienvenido, pescador novato</h1>";
        echo "<p><a href='Registro2.php'>Volver al registro</a></p>";

    }

    $stmt->close();
}

$check->close();
$conn->close();
?>
