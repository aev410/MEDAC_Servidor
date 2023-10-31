<?php
    require_once('/opt/lammp/htdocs/smarty/libs/Smarty.class.php');
    $newSmarty = new Smarty();

    $nombre = "";
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
    }else {
        $nombre = "invitado";
    }

    $newSmarty-> assign('nombre', $nombre);

    $newSmarty -> display('./templates/index.tpl');

?>