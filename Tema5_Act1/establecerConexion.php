<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establecer Conexion</title>
</head>
<body>
    <?php
    $user = $_POST["usuarioGet"];
    $pwd = $_POST["contraseñaGet"];
    $usuario = "nombreApellido";
    $contra = 1234;

    if ($user == $usuario && $pwd == $contra) {
        session_start();
        $_SESSION["user"] = $user;
        $_SESSION["pwd"] = $pwd;
        header("Location: home.php");
    } else {
        echo "Usuario  incorrecto";
        echo "<a href= 'login.html'>Volver</a>";
    }
    ?>
</body>
</html>