<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use AbstractFactory\FirstExample\BloggsCommsManager;

$manager = new BloggsCommsManager();
$ttdEncoder = $manager->getTtdEncoder();
$apptEncoder = $manager->getApptEncoder();
$contactEncoder = $manager->getContactEncoder();

echo $ttdEncoder->encode();
echo $apptEncoder->encode();
echo $contactEncoder->encode();