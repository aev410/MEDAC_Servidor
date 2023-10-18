<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body{background-color: rgb(92, 119, 147);}</style>
</head>
<body>
    <?php
    $nombre = $_POST["nombreGet"];
    $apellido =$_POST["apellidoGet"];
    
    print("Hola ".$nombre . $apellido);

    ?>
</body>
</html>