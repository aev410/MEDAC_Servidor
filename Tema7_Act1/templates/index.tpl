<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        introduce tu nombre: <input type="text" name="nombre">
        <button type="submit">enviar</button>
    </form>
    {if $nombre}
        <h2>Hola {$nombre} </h2>
    {/if}
</body>
</html>