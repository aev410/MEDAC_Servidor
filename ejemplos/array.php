<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matriz = array(
            "array1" => array("1", "2", "3"),
            "array2" => array("4", "5", "6"),
            "array3" => array("7", "8", "9")
        );
        //print($matriz[1][1]);

        foreach($matriz as $array) {
            foreach($array as $numeroEntero){
                print($numeroEntero . " ");
            }
            print("<br>");
        }
        print("<br>");
        print("<br>");

        for ($i=0; $i <= 3 ; $i++) { 
            for ($j=0; $j <= 3 ; $j++) { 
                print($matriz["array".$i+1][$j] . " ");
            }
            print("<br>");
        }

    ?>
</body>
</html>