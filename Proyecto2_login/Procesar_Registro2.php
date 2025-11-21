<?php 
include "Conexion2.php";

$usuario = $_POST['Usuario'];
$password = $_POST['Password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$check = $conn->prepare("SELECT Usuario FROM usuarios WHERE Usuario = ?");
$check->bind_param("s", $usuario);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {

    echo "<h1>Error: El usuario ya existe</h1>";
    echo "<p><a href='Registro2.php'>Volver al registro</a></p>";

} else {

    $stmt = $conn->prepare("INSERT INTO usuarios (Usuario, Password) VALUES (?,?)");
    $stmt->bind_param("ss", $usuario, $hash);

    if ($stmt->execute()) {

        echo "<h1>Usuario registrado correctamente</h1>";
        echo "<p><a href='Registro2.php'>Volver al registro</a></p>";

    }

    $stmt->close();
}

$check->close();
$conn->close();
?>
