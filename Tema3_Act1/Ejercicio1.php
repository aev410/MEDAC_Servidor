<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <style>body{background-color: rgb(92, 119, 147);}</style>
</head>
<body>
    <?php
        //Creo las variables usuario y contraseña
        $user = "User 5";
        $pwd = 1234;
        //Las muestro por pantalla
        print("Usuario: ". $user . "<br>Contraseña: ". $pwd. "<br>");
        //Verifico si el usuario y la contraseña son correctos
        if ($user == "User 1" && $pwd != 1234) {
            print("Lo siento, el usuario es correcto, pero la contraseña no");
        }elseif ($user != "User 1" && $pwd == 1234) {
            print("Lo siento, este usuario no es válido");
        }elseif ($user != "User 1" && $pwd != 1234) {
            print("No has acertado ninguna");
        }else {
            print("Genial, puedes pasar!!");
        }
    ?>
</body>
</html>