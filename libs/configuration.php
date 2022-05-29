<?php

    require 'libs/Config.php';
    $config= Config::getInstance();
    
    $config->set('controllerFolder', 'controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    $config->set('dbhost', 'DESKTOP-0K7L751');// si la base de datos no esta en local host se pone el ip del servidor
    $config->set('dbname','TRANSACTION_PROCESSING');
    //$config->set('dbuser','default');
    //$config->set('dbpass','123');
    $config->set('puerto',1433);
?>

