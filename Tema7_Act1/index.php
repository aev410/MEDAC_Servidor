<?php
    require_once('/opt/lammp/htdocs/smarty/libs/Smarty.class.php');
    $newSmarty = new Smarty();

    $newSmarty->setTemplateDir('templates/');
    $newSmarty->setCompileDir('templates_c/');
    $newSmarty->setConfigDir('configs/');
    $newSmarty->setCacheDir('cache/');
    
    $newSmarty -> display('./templates/formulario.tpl');
    ?>