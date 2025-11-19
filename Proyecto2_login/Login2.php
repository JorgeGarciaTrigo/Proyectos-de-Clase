<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>



</head>
<body>
    
    <h1>Iniciar sesión</h1>
    <form action="Procesar_Login2.php" method="post">
        
        <label>Usuario:</label>
        <input type="text" name="Usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="Password" required><br>

        <button type="submit">Entrar</button>

    </form>

    <p>¿No tienes cuenta?<a href="Registro2.php">Regístrate aquí</a></p>

</body>
</html>