<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>body{background-color: rgb(92, 119, 147);}</style>
</head>
<body>
    <?php
    //Creo la matriz
    $array = array(
        array(1, 2, 3, 4, 5, 6),
        array(7, 8, 9, 10, 11, 12),
        array(12, 14, 15, 16, 17, 18),
        array(19, 20, 21, 22, 23, 24),
        array(25, 26, 27, 28, 29, 30),
        array(31, 32, 33, 34, 35, 36)
    );

    //El primer for para recorrer cada uno de los arrays de la matriz
    foreach ($array as $numero) {

        foreach ($numero as $n) {
            print($n . " ");
        }
        print("<br>");
    }
    
    
    
    ?>
</body>
</html>