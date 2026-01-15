<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Registro</h1>
        
        <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'existe') {
                echo '<div class="msg-error">El correo ya está registrado.</div>';
            }
            if ($_GET['error'] == 'email_invalido') {
                echo '<div class="msg-error">Error: correo inválido.</div>';
            }
        }
        ?>
        
        <form action="procesar_register.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre Completo" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="number" name="edad" placeholder="Edad" required min="1" max="120">
            <button class="btn" type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="login.php">Entra aquí</a></p>
    </div>
    <script src="js/validacion.js"></script>
</body>
</html>