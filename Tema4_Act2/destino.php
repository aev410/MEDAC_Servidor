<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T4 Act1</title>
    <style>body{background-color: rgb(92, 119, 147);}</style>
</head>
<body>
    <?php    
        //Creo la función validacion
        function validacion($login, $contra){
            //Creo una variable para contar los errores
            $cont = 0;
            //Verifico que todas las condiciones se cumplen
            //Son if sueltos para poder mostrar todos los errores
            if (strlen($login) < 6 || strlen($login) > 15) {
                print("El login tiene que tener entre 6 y 15 caracteres <br>");
                $cont++;
            } 
            if (strlen($contra) != 7) {
                print("La contraseña tiene que ser de 8 caracteres <br>");
                $cont++;
            } 
            if (!ctype_alpha($contra)) {//ctype_alpha funcion que verifica si solo contiene letras
                print("La contraseña solo puede tener letras <br>");
                $cont++;
            }

            //Si el contador es distinto de 0 significa que hay un error por lo que muestra un 
            //boton para volver a introducir los datos
            if ($cont != 0) {
                print ("<a href='index.html'><button type='button'>Reintentar</button></a>");
            }else {
                print("<h1>Usuario y contraseña validos</h1>");
            }
        }

        //Llamo a la función validación e introduzco los metodos POST como parametros
        validacion($_POST["usuarioGet"], $_POST["contraseñaGet"]);
    ?>
</body>
</html>