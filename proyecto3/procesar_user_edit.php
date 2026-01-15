<?php
include "includes/db.php";
session_start();

if (!isset($_SESSION['user_id'])) exit;

if ($_POST) {
    $id = $_SESSION['user_id']; 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    $stmt = $pdo->prepare("UPDATE usuarios SET nombre=?, email=?, edad=? WHERE id=?");
    $stmt->execute([$nombre, $email, $edad, $id]);

    $_SESSION['nombre'] = $nombre;

    header("Location: dashboard.php");
    exit;
}
?>