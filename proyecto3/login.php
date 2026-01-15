<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Iniciar Sesión</h1>
        <?php 
        if (isset($_GET['error']) && $_GET['error'] == 'credenciales') echo '<div class="msg-error">Email o contraseña incorrectos.</div>';
        if (isset($_GET['registrado'])) echo '<div class="msg-success">¡Registro exitoso!</div>';
        ?>
        <form action="procesar_login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button class="btn" type="submit">Entrar</button>
        </form>
        <p>¿No tienes cuenta? <a href="register.php">Regístrate</a> | <a href="index.php">Inicio</a></p>
    </div>
</body>
</html>