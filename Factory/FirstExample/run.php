<?php

// 注册自加载
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use Factory\FirstExample\MegaCommsManager;

$mage = new MegaCommsManager();
$encoder = $mage->getApptEncoder();
echo $encoder->encode();
