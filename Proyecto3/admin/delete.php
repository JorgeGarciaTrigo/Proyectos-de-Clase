<?php
include "../includes/db.php";
session_start();
if ($_SESSION['rol'] !== 'admin') exit;

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
    $stmt->execute([$_GET['id']]);
}
header("Location: list.php");
?>