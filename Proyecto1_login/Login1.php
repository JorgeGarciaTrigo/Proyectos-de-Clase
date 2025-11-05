<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
</head>
<body>

    <h1>Login</h1>

    <form action="Procesar_Login1.php" method="post">

        <label>Usuario:</label>
        <input type="text" name="Usuario" required><br>
        
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Entrar</button>

    </form>

    <p>¿No tienes cuenta?<a href="Registro1.php">Registrate aquí</a></p>

</body>
</html>