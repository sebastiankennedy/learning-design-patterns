<?php
// 注册自动加载
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use AbstractFactory\FirstExample\BloggsCommsManager;

$manager = new BloggsCommsManager();
$apptEncoder = $manager->getApptEncoder();
$ttdEncoder = $manager->getTtdEncoder();
$contactEncoder = $manager->getContactEncoder();

echo $apptEncoder->encode();
echo $ttdEncoder->encode();
echo $contactEncoder->encode();