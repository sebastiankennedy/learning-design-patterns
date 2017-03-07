<?php
// 注册自动加载
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use CreationalDesignPatterns\Singleton\PhpObjectsPatternsAndPractice\FirstExample\Preferences;

$preference = Preferences::getInstance();
$preference->setProperty('name', 'Luis Edward');

unset($preference);

$preference2 = Preferences::getInstance();
print $preference2->getProperty('name');
print $preference2->getProperty('someThing');