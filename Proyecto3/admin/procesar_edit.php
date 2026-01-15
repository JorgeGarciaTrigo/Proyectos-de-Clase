<?php
include "../includes/db.php";
session_start();
if ($_SESSION['rol'] !== 'admin') exit;

if ($_POST) {
    $stmt = $pdo->prepare("UPDATE usuarios SET nombre=?, email=?, edad=?, rol=? WHERE id=?");
    $stmt->execute([$_POST['nombre'], $_POST['email'], $_POST['edad'], $_POST['rol'], $_POST['id']]);
    header("Location: list.php");
}
?>