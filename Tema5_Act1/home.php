<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        session_start();
        $user = $_SESSION["user"];
        echo "Bienvenido " . $user;
        echo "<a href='index.html'><button type='button'>index</button></a>";
        echo "<a href='eliminarConexion.php'><button type='button'>eliminar conexion</button></a>";
    ?>
</body>
</html>