<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        //Creacion de variables
        $entero = 1;
        $decimal = 2.6;
        $boolean = true;
        $cadena = "hola";

        //imprimo la variable entera
        print("Variable entera ->" . $entero . " ");
        //Compruebo si la variable es entera
        if (is_int($entero)) {
            print("Es entero");
        }else{
            print("No es entero");
        }

        //salto de linea para que no se vea todo demasiado junto
        print("<br>");
        
        //imprimo la variable decimal
        print("Variable decimal ->" . $decimal . " ");
        //Compruebo de que la variable es decimal
        if (is_double($decimal)) {
            print("Es decimal");
        }else{
            print("No es decimal");
        }
        
        print("<br>");

        //Imprimo la variable booleana
        print("Variable booleana ->" . $boolean . " ");
        //Compruebo que la variable es booleana
        if (is_bool($boolean)) {
            print("Es booleano");
        }else{
            print("No es booleano");
        }

        print("<br>");

        //Imprimo la variable cadena de caracteres
        print("Variable cadena de texto ->" . $cadena . " ");
        //Compruebo que la variable es una cadena de caracteres
        if (is_string($cadena)) {
            print("Es cadena de texto");
        }else{
            print("No es cadena de texto");
        }
    ?>
</body>
</html>