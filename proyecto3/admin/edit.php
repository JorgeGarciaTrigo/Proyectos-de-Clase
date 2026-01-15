<?php
include "../includes/db.php";
session_start();
if ($_SESSION['rol'] !== 'admin') { header("Location: ../login.php"); exit; }

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id=?");
$stmt->execute([$id]);
$u = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head><title>Editar</title><link rel="stylesheet" href="../css/styles.css"></head>
<body>
    <div class="form-container">
        <h1>Editar Usuario</h1>
        <form action="procesar_edit.php" method="POST">
            <input type="hidden" name="id" value="<?= $u['id'] ?>">
            <input type="text" name="nombre" value="<?= $u['nombre'] ?>" required>
            <input type="email" name="email" value="<?= $u['email'] ?>" required>
            <input type="number" name="edad" value="<?= $u['edad'] ?>" required>
            <select name="rol">
                <option value="user" <?= $u['rol']=='user'?'selected':'' ?>>Usuario</option>
                <option value="admin" <?= $u['rol']=='admin'?'selected':'' ?>>Administrador</option>
            </select>
            <button class="btn" type="submit">Actualizar</button>
        </form>
        <a href="list.php" style="display:block; text-align:center; margin-top:10px;">Volver</a>
    </div>
    <script src="../js/validacion.js"></script>
</body>
</html>