<?php
session_start();
if ($_SESSION['rol'] !== 'admin') { header("Location: ../login.php"); exit; }
?>
<!DOCTYPE html>
<html>
<head><title>Crear</title><link rel="stylesheet" href="../css/styles.css"></head>
<body>
    <div class="form-container">
        <h1>Crear Usuario (Admin)</h1>
        <form action="procesar_create.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="number" name="edad" placeholder="Edad" required>
            <select name="rol">
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
            <button class="btn" type="submit">Guardar</button>
        </form>
        <a href="list.php" style="display:block; text-align:center; margin-top:10px;">Volver</a>
    </div>
    <script src="../js/validacion.js"></script>
</body>
</html>