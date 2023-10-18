<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Creo las variables para operar
        $var1 = 2;
        $var2 = 3;

        //Creo las variables para los resultados
        $suma;
        $resta;
        $multiplicacion;
        $division;

        //hago las operaciones
        $suma = $var1 + $var2;
        $resta = $var1 - $var2;
        $multiplicacion = $var1 * $var2;
        $division = $var1/$var2;

        //Imprimo por pantalla los resultados
        print("El resultado de la suma: ". $var1 . "+". $var2 . "=" . $suma . "<br>");
        print("El resultado de la resta: ". $var1 . "-". $var2 . "=" . $resta . "<br>");
        print("El resultado de la multiplicacion: ". $var1 . "*". $var2 . "=" . $multiplicacion . "<br>");
        print("El resultado de la division: ". $var1 . "/". $var2 . "=" . $division . "<br>");
    
    ?>
</body>
</html>
