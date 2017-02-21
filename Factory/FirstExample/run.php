<?php

// 注册自加载
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use Factory\FirstExample\MegaCommsManager;

$mega = new MegaCommsManager();
$encoder = $mega->getApptEncoder();
echo $encoder->encode();
