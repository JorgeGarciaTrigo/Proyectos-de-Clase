<?php
include "../includes/db.php";
session_start();
if ($_SESSION['rol'] !== 'admin') exit;

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $rol = $_POST['rol'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password, edad, rol) VALUES (?,?,?,?,?)");
    $stmt->execute([$nombre, $email, $password, $edad, $rol]);
    header("Location: list.php");
}
?>