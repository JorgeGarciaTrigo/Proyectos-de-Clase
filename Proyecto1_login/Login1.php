<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>

<link rel="stylesheet" href="ContenidoL1.CSS">

</head>
<body>
    
    <div class="Titulo1">

        <h1>Login</h1>

    </div>

    <form action="Procesar_Login1.php" method="post">

        <div class="Usuario1">

            <label>Usuario:</label>
            <input type="text" name="usuario" required><br>

        </div>

        <div class="Contraseña1">

            <label>Contraseña:</label>
            <input type="password" name="password" required><br>

        </div>

        <div class="Botón1">
            <button style="background-color: chartreuse;" type="submit">Entrar</button>

        </div>

    </form>
    
    <div class="Cuenta1">

        <p>¿No tienes cuenta?<a href="Registro1.php">Registrate aquí</a></p>

    </div>

</body>
</html>