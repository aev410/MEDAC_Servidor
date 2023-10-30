<?php
    require '../smarty-4.3.4/libs/Smarty.class.php';
    $newSmarty = new Smarty();

    $newSmarty->setTemplateDir('templates/');
    $newSmarty->setCompileDir('templates_c/');
    $newSmarty->setConfigDir('configs/');
    $newSmarty->setCacheDir('cache/');

    
    $nombre = "";
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
    }else {
        $nombre = "invitado";
    }
    
    $newSmarty-> assign('nombre', $nombre);
    
    $newSmarty -> display('templates/index.tpl');
    ?>