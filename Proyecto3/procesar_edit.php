<?php
session_start();
include "db.php";

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION["rol"] !== "admin") {
    header("Location: dashboard.php");
    exit;
}

if (
    !isset($_POST["id"]) ||
    !isset($_POST["nombre"]) ||
    !isset($_POST["email"]) ||
    !isset($_POST["rol"])
) {
    header("Location: dashboard.php");
    exit;
}

$id = $_POST["id"];
$nombre = trim($_POST["nombre"]);
$email = trim($_POST["email"]);
$rol = $_POST["rol"];

if (strlen($nombre) < 3) {
    header("Location: user_edit.php?id=".$id);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: user_edit.php?id=".$id);
    exit;
}

if ($rol !== "admin" && $rol !== "user") {
    header("Location: user_edit.php?id=".$id);
    exit;
}

$stmt = $pdo->prepare(
    "UPDATE usuarios 
     SET nombre = ?, email = ?, rol = ?
     WHERE id = ?"
);

$stmt->execute([$nombre, $email, $rol, $id]);

header("Location: dashboard.php");
exit;