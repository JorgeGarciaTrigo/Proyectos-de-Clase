<?php
include "../includes/db.php";
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') { header("Location: ../login.php"); exit; }

$stmt = $pdo->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestión Usuarios</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Gestión de Usuarios</h1>
        <div style="display:flex; justify-content:space-between; margin-bottom:10px;">
            <a class="btn" href="create.php" style="width:auto;">+ Nuevo Usuario</a>
            <a class="btn-delete" href="../logout.php" style="width:auto;">Cerrar Sesión</a>
        </div>
        <table>
            <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th><th>Rol</th><th>Acciones</th></tr>
            <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['nombre'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['edad'] ?></td>
                <td><?= $u['rol'] ?></td>
                <td>
                    <a class="btn-edit" href="edit.php?id=<?= $u['id'] ?>">Editar</a>
                    <a class="btn-delete" href="delete.php?id=<?= $u['id'] ?>" onclick="return confirm('¿Seguro?')">X</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>