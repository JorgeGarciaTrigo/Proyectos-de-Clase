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

if (!isset($_GET["id"])) {
    header("Location: dashboard.php");
    exit;
}

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT id, nombre, email, rol FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="form-container">

    <h1>Editar usuario</h1>

    <form action="procesar_edit.php" method="POST">

        <input type="hidden" name="id" value="<?= $usuario["id"] ?>">

        <input type="text" name="nombre" value="<?= $usuario["nombre"] ?>" required>

        <input type="email" name="email" value="<?= $usuario["email"] ?>" required>

        <select name="rol">
            <option value="user" <?= $usuario["rol"] == "user" ? "selected" : "" ?>>Usuario</option>
            <option value="admin" <?= $usuario["rol"] == "admin" ? "selected" : "" ?>>Administrador</option>
        </select>

        <button type="submit" class="btn">Guardar cambios</button>

    </form>

</div>

<script src="js/validacion.js"></script>
</body>
</html>