<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>body{background-color: rgb(51, 65, 80);}</style>
</head>
<body>
    <?php
        session_start();
        $user = $_SESSION["user"];
        echo "Bienvenido " . $user;
    ?>
</body>
</html>