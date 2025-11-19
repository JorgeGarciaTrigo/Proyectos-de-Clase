<?php 
include "Conexion2.php";

$usuario = $_POST['Usuario'];
$password = $_POST['Password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (Usuario, Password) VALUES (?,?)");
$stmt->bind_param("ss", $usuario, $hash);

if ($stmt->execute()) {
    echo"<h1>Usuario registrado correctamente</h1>";
    echo"<p><a href='Registro2.php'>Volver al registro</a></p>";
}

$stmt->close();
$conn->close();

?>