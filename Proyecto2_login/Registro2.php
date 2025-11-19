<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>



</head>
<body>

    <h1>Registro de usuairo</h1>

    <form action="Procesar_Registro2.php" method="post">

        <label>Usuario:</label>
        <input type="text" name="Usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="Password" required><br>
        
        <button type="submit">Registrarse</button>
    
    </form>

    <p>¿Ya tienes cuenta? <a href="Login2.php">Inicia sesión aquí</a></p>

</body>
</html>