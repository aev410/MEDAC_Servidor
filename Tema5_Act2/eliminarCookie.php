<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar cookie</title>
</head>
<body>
    <?php
        //reinicio la cookie cambiando su valor a 0
        setcookie('contador', 0);
        //Redirijo a contadorCookie
        header("Location: contadorCookie.php");
    ?>
</body>
</html>