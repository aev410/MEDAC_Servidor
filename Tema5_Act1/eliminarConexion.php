<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar conexion</title>
</head>
<body>
    <?php
        session_start();
        echo "Se ha cerrado la sesin de ". $_SESSION["user"];
        session_destroy();
        echo "<a href='login.html'><button type='button'>Login</button></a>";
    ?>
</body>
</html>