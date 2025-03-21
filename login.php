<?php session_start(); ?>
<?php ob_start(); ?>
<?php include('funciones.php'); ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Entrevista Salida</title>

</head>
<body>
    <div class="login-container">
        <h2>Entrevista de salida</h2>
        <form action="index.php" method="POST">

        <label for="rfc">Ingresa tu RFC</label>
        <input type="text" id="rfc" name="rfc" required><br><br>

            <input type="submit" value="Ingresar">
        </form>
        <div class="message">
            <!-- Aquí se mostrarían los mensajes de error o éxito -->
            <!-- Ejemplo: "Credenciales incorrectas." -->
        </div>
    </div>
</body>
</html>