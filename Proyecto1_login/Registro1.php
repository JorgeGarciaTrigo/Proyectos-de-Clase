<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registto de usuario</title>
</head>
<body>

    <h1>Registro</h1>

    <form action="Procesar_Registro1.php" method="post">

        <label>Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Registrarse</button>

    </form>

    <p>¿Ya tienes cuenta?<a href="Login1.php">Iniciar sesion aquí</a></p>
    
</body>
</html>