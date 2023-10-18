<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador cookie</title>
</head>
<body>
    <?php
        //Creo la cookie
        setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
        //La muestro por pantalla
        echo $_COOKIE['contador'];
        //Creo dos botones para aumentar el contador y otro para resetear
        echo "<a href='contadorCookie.php'><button type='button'>Aumentar contador</button></a>"; 
        echo "<a href='eliminarCookie.php'><button type='button'>Reiniciar contador</button></a>";
    ?>
</body>
</html>