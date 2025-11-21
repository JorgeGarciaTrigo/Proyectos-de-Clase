<?php 
session_start();
include "Conexion2.php";

echo "<link rel='stylesheet' href='Contenido2.css'>";

echo "<div class='burbuja b1'></div>";
echo "<div class='burbuja b2'></div>";
echo "<div class='burbuja b3'></div>";
echo "<div class='burbuja b4'></div>";
echo "<div class='burbuja b5'></div>";

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
    echo"<h1>Uy, pescador o contraseña incorrectos</h1>";
    echo"<h1>En caso de no tener registro del pescador, </h1>";
    echo"<p><a href='Registro2.php'>crealo aquí</a></p>";
}

$stmt->close();
$conn->close();

?>