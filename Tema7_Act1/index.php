<?php
    require('../libs/Smarty.cass.php');
    $newSmarty = new Smarty();

    $newSmarty->setTemplateDir('templates/');
    $newSmarty->setCompileDir('templates_c/');
    $newSmarty->setConfigDir('configs/');
    $newSmarty->setCacheDir('cache/');

    $newSmarty -> display('index.tpl');







?>