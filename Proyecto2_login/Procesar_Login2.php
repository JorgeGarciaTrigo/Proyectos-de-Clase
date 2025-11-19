<?php 
session_start();
include "Conexion2.php";

$usuario = $_POST['Usuario'];
$password = $_POST['Password'];

$stmt = $conn->prepare("SELECT id, Password FROM usuarios WHERE Usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $hash);
    $stmt->fetch();
}

if (password_verify($password, $hash)) {
    $_SESSION['Usuario'] = $usuario;
    header("Location: Bienvenida2.php");
    exit;
} else {
    echo"<h1>Contraseña incorrecta</h1>";
    echo"<p><a href='Registro2.php'>Registrarse</a></p>";
}

$stmt->close();
$conn->close();

?>