<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <style>body{background-color: rgb(51, 65, 80);}</style>
</head>
<body>
    <?php
        $usuario = $_POST["user"];
        $password = $_POST["password"];

        if ($usuario == "user123") {
            session_start();
            $_SESSION["user"] = $usuario;
            header("Location: home.php");
        } else {
            echo "Usuario incorrecto";
            echo "<a href= 'index.html'>Volver</a>";
        }
    
    ?>
</body>
</html>